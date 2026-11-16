/**
 * Editor side of the `tothiq/site` binding source: shows the owner's real
 * business details inside bound blocks while editing. Values are computed in
 * PHP (inc/bindings.php) and passed in as window.tothiqSite.
 */
( function ( blocks, data ) {
	if ( ! blocks || ! blocks.registerBlockBindingsSource || ! data ) {
		return;
	}

	blocks.registerBlockBindingsSource( {
		name: 'tothiq/site',
		label: data.label,
		getValues: function ( context ) {
			var result = {};
			Object.keys( context.bindings ).forEach( function ( attribute ) {
				var args = context.bindings[ attribute ].args || {};
				var lang = args.lang === 'ar' || args.lang === 'en' ? args.lang : data.lang;
				var value = ( data.values[ lang ] || {} )[ args.key ];
				result[ attribute ] = value === undefined ? '' : value;
			} );
			return result;
		},
		canUserEditValue: function () {
			return false;
		},
	} );
} )( window.wp && window.wp.blocks, window.tothiqSite );
