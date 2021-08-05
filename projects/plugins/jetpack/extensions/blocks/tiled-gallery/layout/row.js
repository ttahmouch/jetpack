/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * Internal dependencies
 */
import Wrapper from './wrapper';

export default function Row( { children, className, isSave } ) {
	return (
		<Wrapper className={ classnames( 'tiled-gallery__row', className ) } isSave={ isSave }>
			{ children }
		</Wrapper>
	);
}
