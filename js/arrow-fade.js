/* Fade for the arrow on the main banner page */
( function( ) {
	const arrow = document.getElementById( 'header-arrow-down' );
	if ( arrow ) {
		window.addEventListener( 'scroll', () => {
			const y = window.scrollY;
			const height = window.innerHeight;
			const opacity = 1 - ( y / height );
			arrow.style.opacity = opacity;
		} );
	}
}() );
