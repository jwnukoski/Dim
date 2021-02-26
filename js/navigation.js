
/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function( ) {
	let visible = false;

	function toggleVisibility() {
		visible = ! visible;
		if ( visible ) {
			mobileMenu.style.display = 'block';
		} else {
			mobileMenu.style.display = 'none';
		}
	}

	const mobileMenu = document.getElementById( 'mobile-site-navigation' );

	const mobileOpenBtn = document.getElementById( 'menu-open' );
	mobileOpenBtn.addEventListener( 'click', toggleVisibility );

	const mobileCloseBtn = document.getElementById( 'menu-close' );
	mobileCloseBtn.addEventListener( 'click', toggleVisibility );
}() );
