<?php
/**
 * Tothiq Persona — theme bootstrap.
 *
 * Block themes need very little PHP. Everything visual lives in theme.json,
 * templates/ and parts/; this file only registers what the Site Editor cannot.
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

define( 'TOTHIQ_PERSONA_VERSION', '1.2.5' );

/**
 * Theme supports and translations.
 */
function tothiq_persona_setup() {
	load_theme_textdomain( 'tothiq-persona', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'assets/theme.css', 'assets/landing.css' ) );
	add_theme_support( 'wp-block-styles' );

	register_block_pattern_category(
		'tothiq-persona',
		array( 'label' => __( 'Tothiq Persona', 'tothiq-persona' ) )
	);
	register_block_pattern_category(
		'tothiq-persona-arabic',
		array( 'label' => __( 'Tothiq Persona — Arabic', 'tothiq-persona' ) )
	);
}
add_action( 'after_setup_theme', 'tothiq_persona_setup' );

/**
 * Front-end styles. theme.json carries the design tokens; this file carries
 * what tokens cannot express (the hero light, direction-aware details, motion).
 */
function tothiq_persona_styles() {
	wp_enqueue_style(
		'tothiq-persona',
		get_template_directory_uri() . '/assets/theme.css',
		array(),
		TOTHIQ_PERSONA_VERSION
	);

	if ( is_page() && array_key_exists( get_page_template_slug(), tothiq_persona_landings() ) ) {
		wp_enqueue_style(
			'tothiq-persona-landing',
			get_template_directory_uri() . '/assets/landing.css',
			array( 'tothiq-persona' ),
			TOTHIQ_PERSONA_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tothiq_persona_styles' );

/**
 * Phone bar script: hides the bar while the hero's own buttons are visible.
 */
function tothiq_persona_actions_script() {
	wp_enqueue_script(
		'tothiq-persona-actions',
		get_template_directory_uri() . '/assets/js/actions.js',
		array(),
		TOTHIQ_PERSONA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'tothiq_persona_actions_script' );

/**
 * The home page layout (templates/front-page.html) is only used when the
 * Reading setting shows a static page. With "Your latest posts" the front page
 * falls through to home.html, so the posts index shows as expected.
 *
 * @param string[] $templates Template candidates for the front page.
 * @return string[]
 */
function tothiq_persona_front_page_templates( $templates ) {
	return 'page' === get_option( 'show_on_front' ) ? $templates : array();
}
add_filter( 'frontpage_template_hierarchy', 'tothiq_persona_front_page_templates' );

require_once get_template_directory() . '/inc/language.php';
require_once get_template_directory() . '/inc/settings.php';
require_once get_template_directory() . '/inc/bindings.php';
require_once get_template_directory() . '/inc/content.php';
require_once get_template_directory() . '/inc/landing.php';

/**
 * Default link-preview picture, offered to PinMeOut (or any plugin that reads
 * the same filter) for pages without a featured image. The theme prints no
 * meta or Open Graph tags itself: on WordPress.org that is plugin territory.
 *
 * @param string $image Image URL chosen so far, or ''.
 * @return string
 */
function tothiq_persona_share_image( $image ) {
	if ( '' !== (string) $image ) {
		return $image;
	}

	return get_theme_file_uri( 'assets/images/share.jpg' );
}
add_filter( 'pinmeout_social_image', 'tothiq_persona_share_image' );
