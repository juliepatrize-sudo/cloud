/**
 * Tothiq Persona — landing pages.
 *
 * Webinar: ticks the countdown. Perfume and lipstick: picking a size or a
 * shade updates the name, the price, the colour and the WhatsApp message.
 * Without JavaScript every page still works: the first choice is shown and
 * the order button sends it.
 */
( function () {
	/* ---------- Countdown ---------- */

	var boxes = document.querySelectorAll( '[data-countdown]' );

	function pad( n ) {
		return ( n < 10 ? '0' : '' ) + n;
	}

	function tick() {
		boxes.forEach( function ( box ) {
			var left = Math.max( 0, Math.floor( ( parseInt( box.getAttribute( 'data-countdown' ), 10 ) - Date.now() ) / 1000 ) );
			var values = {
				d: Math.floor( left / 86400 ),
				h: Math.floor( ( left % 86400 ) / 3600 ),
				m: Math.floor( ( left % 3600 ) / 60 ),
				s: left % 60,
			};
			Object.keys( values ).forEach( function ( unit ) {
				var el = box.querySelector( '[data-unit="' + unit + '"]' );
				if ( el ) {
					el.textContent = pad( values[ unit ] );
				}
			} );
		} );
	}

	if ( boxes.length ) {
		tick();
		window.setInterval( tick, 1000 );
	}

	/* ---------- Choices (size, shade) ---------- */

	var current = {};

	// Swap the old choice for the new one in every WhatsApp order message.
	function updateLinks( oldValue, newValue ) {
		if ( ! oldValue || oldValue === newValue ) {
			return;
		}
		document.querySelectorAll( '.tothiq-choice-order a[href*="wa.me"]' ).forEach( function ( link ) {
			try {
				var url  = new URL( link.href );
				var text = url.searchParams.get( 'text' );
				if ( text && text.indexOf( oldValue ) !== -1 ) {
					// Encoded the way PHP's rawurlencode() does, so spaces stay %20.
					link.href = url.origin + url.pathname + '?text=' + encodeURIComponent( text.split( oldValue ).join( newValue ) );
				}
			} catch ( e ) {}
		} );
	}

	function choose( option ) {
		var group = option.closest( '[data-choice]' );
		if ( ! group ) {
			return;
		}
		var name  = group.getAttribute( 'data-choice' );
		var value = option.getAttribute( 'data-value' );
		var price = option.getAttribute( 'data-price' );
		var color = option.getAttribute( 'data-color' );

		group.querySelectorAll( '[data-value]' ).forEach( function ( other ) {
			var on = other === option;
			other.classList.toggle( 'is-on', on );
			other.setAttribute( 'aria-pressed', on ? 'true' : 'false' );
		} );

		document.querySelectorAll( '[data-choice-label="' + name + '"]' ).forEach( function ( el ) {
			el.textContent = value;
		} );

		if ( price ) {
			document.querySelectorAll( '[data-choice-price="' + name + '"]' ).forEach( function ( el ) {
				el.textContent = price;
			} );
		}

		if ( color ) {
			document.documentElement.style.setProperty( '--tothiq-shade', color );
			document.querySelectorAll( '[data-shade-host]' ).forEach( function ( el ) {
				el.style.setProperty( '--tothiq-shade', color );
			} );
		}

		updateLinks( current[ name ], value );
		current[ name ] = value;
	}

	document.querySelectorAll( '[data-choice]' ).forEach( function ( group ) {
		var on = group.querySelector( '.is-on' ) || group.querySelector( '[data-value]' );
		if ( on ) {
			current[ group.getAttribute( 'data-choice' ) ] = on.getAttribute( 'data-value' );
		}
		group.addEventListener( 'click', function ( event ) {
			var option = event.target.closest( '[data-value]' );
			if ( option ) {
				choose( option );
			}
		} );
	} );

	// A shade card lower on the page picks the same shade at the top.
	document.querySelectorAll( '[data-choice-pick]' ).forEach( function ( card ) {
		card.addEventListener( 'click', function () {
			var name   = card.getAttribute( 'data-choice-pick' );
			var value  = card.getAttribute( 'data-value' );
			var group  = document.querySelector( '[data-choice="' + name + '"]' );
			var option = null;
			if ( ! group ) {
				return;
			}
			group.querySelectorAll( '[data-value]' ).forEach( function ( el ) {
				if ( el.getAttribute( 'data-value' ) === value ) {
					option = el;
				}
			} );
			if ( option ) {
				choose( option );
				group.scrollIntoView( { behavior: 'smooth', block: 'center' } );
			}
		} );
	} );

	/* ---------- Review filter ---------- */

	document.querySelectorAll( '[data-filter]' ).forEach( function ( bar ) {
		var list = document.querySelector( bar.getAttribute( 'data-filter' ) );
		if ( ! list ) {
			return;
		}
		bar.addEventListener( 'click', function ( event ) {
			var chip = event.target.closest( '[data-tone]' );
			if ( ! chip ) {
				return;
			}
			var tone = chip.getAttribute( 'data-tone' );
			bar.querySelectorAll( '[data-tone]' ).forEach( function ( el ) {
				var on = el === chip;
				el.classList.toggle( 'is-on', on );
				el.setAttribute( 'aria-pressed', on ? 'true' : 'false' );
			} );
			list.querySelectorAll( '[data-review-tone]' ).forEach( function ( item ) {
				item.hidden = '' !== tone && item.getAttribute( 'data-review-tone' ) !== tone;
			} );
		} );
	} );
}() );
