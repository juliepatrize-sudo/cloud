/**
 * Seos Football Club – front-end interactions.
 * Vanilla JS, no dependencies.
 */
( function () {
	'use strict';

	var settings = window.seosFootballClub || { animations: true, labels: {} };
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var animate = settings.animations && ! reduce;

	function each( scope, selector, fn ) {
		Array.prototype.forEach.call( ( scope || document ).querySelectorAll( selector ), fn );
	}

	/* Animated counters. */
	function runCounter( el ) {
		var target = parseInt( el.getAttribute( 'data-sfc-count' ), 10 ) || 0;
		var formatter = window.Intl ? new Intl.NumberFormat( document.documentElement.lang || undefined ) : null;
		var format = function ( n ) {
			return formatter ? formatter.format( n ) : String( n );
		};
		if ( ! animate ) {
			el.textContent = format( target );
			return;
		}
		var duration = 1800;
		var start = null;
		function step( ts ) {
			if ( ! start ) {
				start = ts;
			}
			var p = Math.min( ( ts - start ) / duration, 1 );
			var eased = 1 - Math.pow( 1 - p, 4 );
			el.textContent = format( Math.round( target * eased ) );
			if ( p < 1 ) {
				window.requestAnimationFrame( step );
			}
		}
		el.textContent = format( 0 );
		window.requestAnimationFrame( step );
	}

	/* Reveal on scroll. */
	function reveal( scope ) {
		var items = ( scope || document ).querySelectorAll( '[data-sfc-reveal]' );
		var counters = ( scope || document ).querySelectorAll( '[data-sfc-count]' );

		if ( ! ( 'IntersectionObserver' in window ) || ! animate ) {
			Array.prototype.forEach.call( items, function ( el ) {
				el.classList.add( 'is-visible' );
			} );
			Array.prototype.forEach.call( counters, runCounter );
			return;
		}

		var io = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( ! entry.isIntersecting ) {
					return;
				}
				var el = entry.target;
				el.classList.add( 'is-visible' );
				each( el, '[data-sfc-count]', function ( c ) {
					if ( ! c.getAttribute( 'data-done' ) ) {
						c.setAttribute( 'data-done', '1' );
						runCounter( c );
					}
				} );
				io.unobserve( el );
			} );
		}, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' } );

		Array.prototype.forEach.call( items, function ( el ) {
			io.observe( el );
		} );
	}

	function init( scope ) {
		reveal( scope );
	}

	function ready( fn ) {
		if ( document.readyState !== 'loading' ) {
			fn();
		} else {
			document.addEventListener( 'DOMContentLoaded', fn );
		}
	}

	ready( function () {
		init( document );
	} );

	// Re-initialise sections after a Customizer selective refresh.
	window.seosFootballClubInit = function ( scope ) {
		init( scope || document );
	};
}() );
