/**
 * External dependencies
 */
import Wrapper from './wrapper';

export default function Gallery( { children, galleryRef } ) {
	return (
		<Wrapper className="tiled-gallery__gallery" ref={ galleryRef }>
			{ children }
		</Wrapper>
	);
}
