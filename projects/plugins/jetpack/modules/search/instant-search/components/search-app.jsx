/**
 * External dependencies
 */
import React, { Component, createPortal, Fragment } from 'react';
// NOTE: We only import the debounce package here for to reduced bundle size.
//       Do not import the entire lodash library!
// eslint-disable-next-line lodash/import-scope
import debounce from 'lodash/debounce';
import { connect } from 'react-redux';
import stringify from 'fast-json-stable-stringify';

/**
 * Internal dependencies
 */
import CustomizerEventHandler from './customizer-event-handler';
import DomEventHandler from './dom-event-handler';
import Overlay from './overlay';
import SearchResults from './search-results';
import { getResultFormatQuery, restorePreviousHref } from '../lib/query-string';
import {
	clearQueryValues,
	initializeQueryValues,
	makeSearchRequest,
	setFilter,
	setSearchQuery,
	setSort,
} from '../store/actions';
import {
	getFilters,
	getResponse,
	getSearchQuery,
	getSort,
	getWidgetOutsideOverlay,
	hasActiveQuery,
	hasError,
	hasNextPage,
	isHistoryNavigation,
	isLoading,
} from '../store/selectors';
import './search-app.scss';

class SearchApp extends Component {
	static defaultProps = {
		widgets: [],
	};

	constructor() {
		super( ...arguments );
		this.state = {
			overlayOptions: { ...this.props.initialOverlayOptions },
			showResults: !! this.props.initialShowResults, // initialShowResults can be undefined
		};
		this.getResults = debounce( this.getResults, 200 );
		this.props.initializeQueryValues();
	}

	componentDidMount() {
		// By debouncing this upon mounting, we avoid making unnecessary requests.
		//
		// E.g. Given `/?s=apple`, the search app will mount with search query "" and invoke getResults.
		//      Once our Redux effects have executed, the search query will be updated to "apple" and
		//      getResults will be invoked once more.
		this.getResults();

		if ( this.props.hasActiveQuery ) {
			this.showResults();
		}
	}

	componentDidUpdate( prevProps ) {
		if (
			prevProps.searchQuery !== this.props.searchQuery ||
			prevProps.sort !== this.props.sort ||
			// Note the special handling for filters prop, which use object values.
			stringify( prevProps.filters ) !== stringify( this.props.filters )
		) {
			this.onChangeQueryString( this.props.isHistoryNavigation );
		}
	}

	componentWillUnmount() {
		this.restoreBodyScroll();
	}

	preventBodyScroll() {
		document.body.style.overflowY = 'hidden';
	}

	restoreBodyScroll() {
		document.body.style.overflowY = null;
	}

	getResultFormat = () => {
		// Override the result format from the query string if result_format= is specified
		const resultFormatQuery = getResultFormatQuery();
		return resultFormatQuery || this.state.overlayOptions.resultFormat;
	};

	hideResults = isHistoryNav => {
		this.restoreBodyScroll();
		restorePreviousHref(
			this.props.initialHref,
			() => {
				this.setState( { showResults: false } );
				this.props.clearQueryValues();
			},
			isHistoryNav
		);
	};

	// Used for showResults and Customizer integration.
	toggleResults = showResults => {
		// Necessary when reacting to onMessage transport Customizer controls.
		// Both bindCustomizerChanges and bindCustomizerMessages are bound to such controls.
		if ( this.state.showResults === showResults ) {
			return;
		}

		this.setState( { showResults }, () => {
			if ( showResults ) {
				this.preventBodyScroll();
			} else {
				// This codepath will only be executed in the Customizer.
				this.restoreBodyScroll();
			}
		} );
	};

	showResults = this.toggleResults.bind( this, true );

	onChangeQueryString = isHistoryNav => {
		this.getResults();

		if ( this.props.hasActiveQuery && ! this.state.showResults ) {
			this.showResults();
		}

		if ( ! this.props.hasActiveQuery && isHistoryNav ) {
			this.hideResults( isHistoryNav );
		}

		this.props.searchQuery !== null &&
			document.querySelectorAll( this.props.themeOptions.searchInputSelector ).forEach( input => {
				input.value = this.props.searchQuery;
			} );
	};

	loadNextPage = () => {
		this.props.hasNextPage && this.getResults( { pageHandle: this.props.response.page_handle } );
	};

	getResults = ( { pageHandle } = {} ) => {
		this.props.makeSearchRequest( {
			// Skip aggregations when requesting for paged results
			aggregations: pageHandle ? {} : this.props.aggregations,
			excludedPostTypes: this.props.options.excludedPostTypes,
			filter: this.props.filters,
			pageHandle,
			query: this.props.searchQuery,
			resultFormat: this.getResultFormat(),
			siteId: this.props.options.siteId,
			sort: this.props.sort,
			postsPerPage: this.props.options.postsPerPage,
			adminQueryFilter: this.props.options.adminQueryFilter,
			isInCustomizer: this.props.isInCustomizer,
		} );
	};

	updateOverlayOptions( newOverlayOptions, callback ) {
		this.setState(
			state => ( { overlayOptions: { ...state.overlayOptions, ...newOverlayOptions } } ),
			callback
		);
	}

	render() {
		const noop = input => input;
		const resultFormat = this.getResultFormat();

		const portalFn = this.props.shouldCreatePortal ? createPortal : noop;

		return (
			<Fragment>
				{ this.props.isInCustomizer && (
					<CustomizerEventHandler
						updateOverlayOptions={ this.updateOverlayOptions }
						toggleResults={ this.toggleResults }
						showResults={ this.showResults }
					/>
				) }
				{ this.props.shouldIntegrateWithDom && (
					<DomEventHandler
						initializeQueryValues={ this.props.initializeQueryValues }
						themeOptions={ this.props.themeOptions }
						setFilter={ this.props.setFilter }
						setSearchQuery={ this.props.setSearchQuery }
					/>
				) }
				{ portalFn(
					<Overlay
						closeColor={ this.state.overlayOptions.closeColor }
						closeOverlay={ this.hideResults }
						colorTheme={ this.state.overlayOptions.colorTheme }
						hasOverlayWidgets={ this.props.hasOverlayWidgets }
						isVisible={ this.state.showResults }
					>
						<SearchResults
							closeOverlay={ this.hideResults }
							enableLoadOnScroll={ this.state.overlayOptions.enableInfScroll }
							enableSort={ this.state.overlayOptions.enableSort }
							filters={ this.props.filters }
							hasError={ this.props.hasError }
							hasNextPage={ this.props.hasNextPage }
							highlightColor={ this.state.overlayOptions.highlightColor }
							isLoading={ this.props.isLoading }
							isPhotonEnabled={ this.props.options.isPhotonEnabled }
							isPrivateSite={ this.props.options.isPrivateSite }
							isVisible={ this.state.showResults }
							locale={ this.props.options.locale }
							onChangeSearch={ this.props.setSearchQuery }
							onChangeSort={ this.props.setSort }
							onLoadNextPage={ this.loadNextPage }
							overlayTrigger={ this.state.overlayOptions.overlayTrigger }
							postTypes={ this.props.options.postTypes }
							response={ this.props.response }
							resultFormat={ resultFormat }
							searchQuery={ this.props.searchQuery }
							showPoweredBy={ this.state.overlayOptions.showPoweredBy }
							sort={ this.props.sort }
							widgets={ this.props.options.widgets }
							widgetOutsideOverlay={ this.props.widgetOutsideOverlay }
							hasNonSearchWidgets={ this.props.options.hasNonSearchWidgets }
						/>
					</Overlay>,
					document.body
				) }
			</Fragment>
		);
	}
}

export default connect(
	( state, props ) => ( {
		filters: getFilters( state ),
		hasActiveQuery: hasActiveQuery( state ),
		hasError: hasError( state ),
		isHistoryNavigation: isHistoryNavigation( state ),
		hasNextPage: hasNextPage( state ),
		isLoading: isLoading( state ),
		response: getResponse( state ),
		searchQuery: getSearchQuery( state ),
		sort: getSort( state, props.defaultSort ),
		widgetOutsideOverlay: getWidgetOutsideOverlay( state ),
	} ),
	{
		clearQueryValues,
		initializeQueryValues,
		makeSearchRequest,
		setFilter,
		setSearchQuery,
		setSort,
	}
)( SearchApp );
