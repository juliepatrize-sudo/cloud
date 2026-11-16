/**
 * Phone bar: stays hidden while the hero's own buttons are on screen,
 * so the two pairs never show at the same time.
 */
( function () {
	var hero = document.querySelector( '.tothiq-hero .tothiq-actions-row' );
	if ( ! hero || ! ( 'IntersectionObserver' in window ) ) {
		return;
	}
	var root = document.documentElement;
	new IntersectionObserver( function ( entries ) {
		root.classList.toggle( 'tothiq-hero-cta-visible', entries[ 0 ].isIntersecting );
	} ).observe( hero );
} )();
