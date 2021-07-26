/**
 * External dependencies
 */
import { View } from 'react-native';
import { Platform } from '@wordpress/element';

export default function Wrapper( { isSave, children } ) {
	if ( isSave ) {
		<div>{ children }</div>;
	} else {
		return Platform.select( {
			web: <div>{ children }</div>,
			native: <View>{ children }</View>,
		} );
	}
}
