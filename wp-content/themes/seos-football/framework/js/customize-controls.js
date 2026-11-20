/* Keeps the link-only Pro section visible in the Customizer. */
( function( api ) {
	api.sectionConstructor['seos-football-pro'] = api.Section.extend( {
		attachEvents: function() {},
		isContextuallyActive: function() {
			return true;
		}
	} );
} )( wp.customize );
