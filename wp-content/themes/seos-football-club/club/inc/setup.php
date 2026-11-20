<?php
/**
 * Club module setup: image sizes, assets, body classes.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports and image sizes used by the club sections.
 */
function seos_football_club_setup() {
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );

	add_image_size( 'seos-football-club-card', 640, 420, true );
}
add_action( 'after_setup_theme', 'seos_football_club_setup', 20 );

/**
 * Enqueue club styles and scripts.
 */
function seos_football_club_scripts() {
	wp_enqueue_style( 'seos-football-club', SEOS_FOOTBALL_CLUB_URI . '/assets/css/club.css', array(), SEOS_FOOTBALL_CLUB_VERSION );
	wp_add_inline_style( 'seos-football-club', seos_football_club_inline_css() );

	// Flags that JavaScript is available so scroll reveals never hide content without JS.
	wp_register_script( 'seos-football-club-detect', false, array(), SEOS_FOOTBALL_CLUB_VERSION, false );
	wp_enqueue_script( 'seos-football-club-detect' );
	wp_add_inline_script( 'seos-football-club-detect', 'document.documentElement.classList.add("sfc-js");' );

	wp_enqueue_script( 'seos-football-club', SEOS_FOOTBALL_CLUB_URI . '/assets/js/club.js', array(), SEOS_FOOTBALL_CLUB_VERSION, true );
	wp_localize_script(
		'seos-football-club',
		'seosFootballClub',
		array(
			'animations' => (bool) seos_football_club_get( 'animations' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'seos_football_club_scripts', 20 );

/**
 * Colour variables from the Customizer.
 *
 * @return string
 */
function seos_football_club_inline_css() {
	$vars = array(
		'color_primary' => '--sfc-primary',
		'color_accent'  => '--sfc-accent',
		'color_dark'    => '--sfc-dark',
		'color_pitch'   => '--sfc-pitch',
	);

	$css = '';
	foreach ( $vars as $key => $var ) {
		$color = sanitize_hex_color( seos_football_club_get( $key ) );
		if ( $color ) {
			$css .= $var . ':' . $color . ';';
		}
	}

	return $css ? ':root{' . $css . '}' : '';
}

/**
 * Whether a theme enhancement is switched on (master switch + its own switch).
 *
 * @param string $key Option key, e.g. enh_menu_underline.
 * @return bool
 */
function seos_football_club_enhancement( $key ) {
	return (bool) seos_football_club_get( 'enhancements' ) && (bool) seos_football_club_get( $key );
}

/**
 * Body classes.
 *
 * @param array $classes Body classes.
 * @return array
 */
function seos_football_club_body_classes( $classes ) {
	$classes[] = 'sfc';
	if ( ! seos_football_club_get( 'animations' ) ) {
		$classes[] = 'sfc-no-anim';
	}

	$enhancements = array(
		'enh_sticky_menu'    => 'sfc-enh-sticky',
		'enh_menu_underline' => 'sfc-enh-underline',
		'enh_accent_colors'  => 'sfc-enh-colors',
		'enh_mobile_text'    => 'sfc-enh-mobile-text',
	);
	foreach ( $enhancements as $key => $class ) {
		if ( seos_football_club_enhancement( $key ) ) {
			$classes[] = $class;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'seos_football_club_body_classes' );
