/**
 * Internal dependencies
 */
import Wrapper from './wrapper';

export default function Gallery( { children, galleryRef, isSave } ) {
	return (
		<Wrapper className="tiled-gallery__gallery" ref={ galleryRef } isSave={ isSave }>
			{ children }
		</Wrapper>
	);
}
