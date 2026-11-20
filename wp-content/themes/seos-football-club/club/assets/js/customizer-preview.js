/**
 * Customizer live preview for Seos Football Club.
 */
( function ( api ) {
	'use strict';

	var colors = {
		seos_football_club_color_primary: '--sfc-primary',
		seos_football_club_color_accent: '--sfc-accent',
		seos_football_club_color_dark: '--sfc-dark',
		seos_football_club_color_pitch: '--sfc-pitch'
	};

	Object.keys( colors ).forEach( function ( id ) {
		api( id, function ( value ) {
			value.bind( function ( to ) {
				if ( to ) {
					document.documentElement.style.setProperty( colors[ id ], to );
				} else {
					document.documentElement.style.removeProperty( colors[ id ] );
				}
			} );
		} );
	} );

	api.bind( 'preview-ready', function () {
		if ( ! api.selectiveRefresh ) {
			return;
		}
		api.selectiveRefresh.bind( 'partial-content-rendered', function ( placement ) {
			if ( placement && placement.container && placement.container[ 0 ] && window.seosFootballClubInit ) {
				window.seosFootballClubInit( placement.container[ 0 ] );
			}
		} );
	} );
}( wp.customize ) );
