/**
 * External dependencies
 */
import { View } from 'react-native';
import Wrapper from './wrapper';

export default function Column( { children, width, isSave } ) {
	const style = width ? { flexBasis: `${ width }%` } : undefined;
	return (
		<Wrapper className="tiled-gallery__col" style={ style } isSave={ isSave }>
			{ children }
		</Wrapper>
	);
}
