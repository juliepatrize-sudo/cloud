<?php
/**
 * Block Bindings source `tothiq/site` — connects blocks to your details.
 *
 * A pattern binds an attribute instead of printing a value:
 *
 *     <!-- wp:button {"metadata":{"bindings":{"url":{"source":"tothiq/site","args":{"key":"booking_url"}}}}} -->
 *
 * The value is resolved on every render, so the owner changes a detail once
 * (Appearance → Customize → Your details) and every bound block follows.
 * Add `"lang":"ar"` to the args to force Arabic in an Arabic section; without
 * it the page language decides.
 *
 * Keys:
 *   lang_switch   Link to the page in the other language (needs Polylang or WPML).
 *   name          Your name.
 *   role          Your role.
 *   eyebrow       "Role · City" (hero).
 *   bio           One or two sentences about you (footer).
 *   location      City.
 *   phone         Phone number, kept left-to-right in Arabic text.
 *   phone_link    Phone number linked to tel:.
 *   phone_url     tel: link.
 *   whatsapp_url  wa.me link; takes an optional "msg" arg, the message WhatsApp opens with.
 *   booking_url   Your booking page, or WhatsApp asking for a call when there is none.
 *   socials       Your social profiles as links, separated by dots.
 *   contact       Linked phone and city on two lines (footer).
 *   copyright     "© <year> <name>".
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

/**
 * Wrap digits-heavy text so it stays LTR and in Latin digits inside Arabic.
 *
 * @param string $text Plain text.
 * @return string HTML.
 */
function tothiq_persona_ltr( $text ) {
	return '<span class="tothiq-ltr-number">' . esc_html( tothiq_persona_latin_digits( $text ) ) . '</span>';
}

/**
 * Links to the current page in the other languages, from Polylang or WPML.
 * Empty on a single-language site, so the switcher simply is not there.
 *
 * @return string HTML.
 */
function tothiq_persona_language_links() {
	$links = array();

	if ( function_exists( 'pll_the_languages' ) ) {
		$languages = (array) pll_the_languages( array( 'raw' => 1, 'hide_if_empty' => 0, 'hide_if_no_translation' => 0 ) );
		foreach ( $languages as $language ) {
			if ( ! empty( $language['current_lang'] ) ) {
				continue;
			}
			$links[] = array( $language['url'], $language['name'], $language['slug'] );
		}
	} elseif ( has_filter( 'wpml_active_languages' ) ) {
		$languages = (array) apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) );
		foreach ( $languages as $language ) {
			if ( ! empty( $language['active'] ) ) {
				continue;
			}
			$links[] = array( $language['url'], $language['native_name'], $language['code'] );
		}
	}

	$html = array();
	foreach ( $links as $link ) {
		$html[] = sprintf( '<a href="%1$s" hreflang="%3$s" lang="%3$s">%2$s</a>', esc_url( $link[0] ), esc_html( $link[1] ), esc_attr( $link[2] ) );
	}

	return implode( ' ', $html );
}

/**
 * Every bound value for one language, keyed as documented above.
 *
 * Values are HTML-safe: plain text is escaped, markup is theme-generated.
 *
 * @param string $lang 'en' or 'ar'.
 * @return array<string, string>
 */
function tothiq_persona_binding_values( $lang ) {
	$location   = tothiq_persona_localized( 'location', $lang );
	$phone_link = '<a href="' . esc_url( tothiq_persona_tel_href( tothiq_persona_phone() ), array( 'tel' ) ) . '">' . tothiq_persona_ltr( tothiq_persona_phone() ) . '</a>';

	$socials = array();
	foreach ( tothiq_persona_socials() as $social ) {
		$socials[] = '<a href="' . esc_url( $social[0] ) . '" rel="me">' . esc_html( $social[1] ) . '</a>';
	}

	$eyebrow = tothiq_persona_role( $lang );
	if ( '' !== $location ) {
		$eyebrow .= ' · ' . $location;
	}

	return array(
		'lang_switch'  => tothiq_persona_language_links(),
		'name'         => esc_html( tothiq_persona_name( $lang ) ),
		'role'         => esc_html( tothiq_persona_role( $lang ) ),
		'eyebrow'      => esc_html( $eyebrow ),
		'bio'          => esc_html( tothiq_persona_bio( $lang ) ),
		'location'     => esc_html( $location ),
		'phone'        => tothiq_persona_ltr( tothiq_persona_phone() ),
		'phone_link'   => $phone_link,
		'phone_url'    => esc_url( tothiq_persona_tel_href( tothiq_persona_phone() ), array( 'tel' ) ),
		'whatsapp_url' => esc_url( tothiq_persona_whatsapp_href( tothiq_persona_whatsapp() ) ),
		'booking_url'  => esc_url( tothiq_persona_booking_url( $lang ) ),
		'socials'      => implode( '<span class="tothiq-sep" aria-hidden="true"> · </span>', $socials ),
		'contact'      => $phone_link . ( '' !== $location ? '<br>' . esc_html( $location ) : '' ),
		'copyright'    => '© ' . tothiq_persona_ltr( wp_date( 'Y' ) ) . ' ' . esc_html( tothiq_persona_name( $lang ) ),
	);
}

/**
 * Resolve one binding.
 *
 * @param array $args Binding args: key, optional lang and msg.
 * @return string|null
 */
function tothiq_persona_binding_value( array $args ) {
	if ( empty( $args['key'] ) ) {
		return null;
	}

	$lang = tothiq_persona_lang( isset( $args['lang'] ) ? $args['lang'] : null );
	$msg  = isset( $args['msg'] ) ? trim( (string) $args['msg'] ) : '';

	if ( '' !== $msg && 'whatsapp_url' === $args['key'] ) {
		return esc_url( tothiq_persona_whatsapp_href( tothiq_persona_whatsapp(), $msg ) );
	}

	$values = tothiq_persona_binding_values( $lang );

	return isset( $values[ $args['key'] ] ) ? $values[ $args['key'] ] : null;
}

/**
 * Register the source.
 */
function tothiq_persona_register_bindings() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'tothiq/site',
		array(
			'label'              => __( 'Your details', 'tothiq-persona' ),
			'get_value_callback' => 'tothiq_persona_binding_value',
		)
	);
}
add_action( 'init', 'tothiq_persona_register_bindings' );

/**
 * Give the editor the same values, so bound blocks show the owner's real
 * details while they edit instead of a placeholder. Computed in PHP once,
 * so the editor and the front end can never disagree.
 */
function tothiq_persona_editor_bindings() {
	wp_enqueue_script(
		'tothiq-persona-bindings',
		get_template_directory_uri() . '/assets/js/bindings.js',
		array( 'wp-blocks', 'wp-i18n' ),
		TOTHIQ_PERSONA_VERSION,
		true
	);

	wp_add_inline_script(
		'tothiq-persona-bindings',
		'window.tothiqSite = ' . wp_json_encode(
			array(
				'lang'   => tothiq_persona_lang(),
				'label'  => __( 'Your details', 'tothiq-persona' ),
				'values' => array(
					'en' => tothiq_persona_binding_values( 'en' ),
					'ar' => tothiq_persona_binding_values( 'ar' ),
				),
			)
		) . ';',
		'before'
	);
}
add_action( 'enqueue_block_editor_assets', 'tothiq_persona_editor_bindings' );

/**
 * Arabic sections carry the class `tothiq-lang-ar` (a class keeps the block
 * valid in the editor, a raw dir attribute does not). Add the real dir and
 * lang attributes on render so browsers, screen readers and search engines
 * see Arabic even on an English site.
 *
 * @param string $content Rendered block.
 * @return string
 */
function tothiq_persona_lang_attributes( $content ) {
	if ( false === strpos( $content, 'tothiq-lang-ar' ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $content;
	}

	$tags = new WP_HTML_Tag_Processor( $content );
	while ( $tags->next_tag() ) {
		if ( $tags->has_class( 'tothiq-lang-ar' ) ) {
			$tags->set_attribute( 'dir', 'rtl' );
			$tags->set_attribute( 'lang', 'ar' );
		}
	}

	return $tags->get_updated_html();
}
add_filter( 'render_block_core/group', 'tothiq_persona_lang_attributes' );

/**
 * A paragraph bound to the social profiles prints nothing at all when the
 * owner has not added any, rather than an empty line under its heading.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tothiq_persona_hide_empty_socials( $content, $block ) {
	if ( empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'tothiq-socials' ) ) {
		return $content;
	}

	return '' === trim( wp_strip_all_tags( $content ) ) ? '' : $content;
}
add_filter( 'render_block_core/paragraph', 'tothiq_persona_hide_empty_socials', 10, 2 );

/* --------------------------------------------------------------------------
 * Pattern helpers
 * ----------------------------------------------------------------------- */

/**
 * Print a block's binding metadata, for use inside a block comment:
 *
 *     <!-- wp:button {<?php tothiq_persona_bind( 'url', 'booking_url', $tothiq_lang ); ?>} -->
 *
 * @param string $attribute Block attribute: content, url or text.
 * @param string $key       Binding key.
 * @param string $lang      'en' or 'ar'.
 * @param array  $extra     Extra binding args, e.g. array( 'msg' => '...' ).
 */
function tothiq_persona_bind( $attribute, $key, $lang, array $extra = array() ) {
	$json = wp_json_encode(
		array(
			'bindings' => array(
				$attribute => array(
					'source' => 'tothiq/site',
					'args'   => array_merge(
						array(
							'key'  => $key,
							'lang' => $lang,
						),
						$extra
					),
				),
			),
		),
		JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
	);

	// JSON from wp_json_encode() of theme-controlled keys; it sits in a block comment.
	echo '"metadata":' . $json; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Print the current value of a binding as the block's saved content, so the
 * block still reads correctly if the theme is ever switched off.
 *
 * @param string $key   Binding key.
 * @param string $lang  'en' or 'ar'.
 * @param array  $extra Extra binding args.
 */
function tothiq_persona_value( $key, $lang, array $extra = array() ) {
	echo wp_kses_post( (string) tothiq_persona_binding_value( array_merge( array( 'key' => $key, 'lang' => $lang ), $extra ) ) );
}

/**
 * Classes for a section wrapper: the section class plus the Arabic marker.
 *
 * @param string $classes Section classes.
 * @param string $lang    'en' or 'ar'.
 * @return string
 */
function tothiq_persona_cls( $classes, $lang ) {
	return trim( $classes . ( 'ar' === $lang ? ' tothiq-lang-ar' : '' ) );
}

/**
 * Print navigation-link blocks for the home page sections, labelled in the
 * section's language and pointing at that language's home page, so the menu
 * switches language with everything else. The owner can still edit or
 * replace the menu in the Site Editor.
 *
 * @param string $lang 'en' or 'ar'.
 */
function tothiq_persona_section_links( $lang ) {
	$home  = tothiq_persona_home_url( $lang );
	$items = array(
		'about'    => tothiq_persona_t( __( 'About', 'tothiq-persona' ), _x( 'نبذة', 'Arabic version of: About', 'tothiq-persona' ), $lang ),
		'services' => tothiq_persona_t( __( 'Services', 'tothiq-persona' ), _x( 'الخدمات', 'Arabic version of: Services', 'tothiq-persona' ), $lang ),
		'results'  => tothiq_persona_t( __( 'Results', 'tothiq-persona' ), _x( 'النتائج', 'Arabic version of: Results', 'tothiq-persona' ), $lang ),
		'faq'      => tothiq_persona_t( __( 'FAQ', 'tothiq-persona' ), _x( 'الأسئلة الشائعة', 'Arabic version of: FAQ', 'tothiq-persona' ), $lang ),
	);

	foreach ( $items as $anchor => $label ) {
		$attrs = array(
			'label'          => $label,
			'url'            => untrailingslashit( $home ) . '/#' . tothiq_persona_anchor( $anchor, $lang ),
			'kind'           => 'custom',
			'isTopLevelLink' => true,
		);
		// JSON from wp_json_encode() of theme-controlled values; it sits in a block comment.
		echo '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . " /-->\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

/**
 * Print a button block. Every call to action in the theme is one of these,
 * so the markup stays identical to what the editor saves.
 *
 * @param string $label  Button text.
 * @param string $key    Binding key for the URL.
 * @param string $lang   'en' or 'ar'.
 * @param string $style  primary, ghost, light or outline-light.
 * @param array  $extra  Extra binding args, e.g. array( 'msg' => '...' ).
 */
function tothiq_persona_button( $label, $key, $lang, $style = 'primary', array $extra = array() ) {
	$class = 'tothiq-btn tothiq-btn--' . $style;
	?>
<!-- wp:button {<?php tothiq_persona_bind( 'url', $key, $lang, $extra ); ?>,"className":"<?php echo esc_attr( $class ); ?>"} -->
<div class="wp-block-button <?php echo esc_attr( $class ); ?>"><a class="wp-block-button__link wp-element-button" href="<?php tothiq_persona_value( $key, $lang, $extra ); ?>"><?php echo esc_html( $label ); ?></a></div>
<!-- /wp:button -->
	<?php
}
