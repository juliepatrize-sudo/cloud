<?php
/**
 * Seos Football Club module – single entry point.
 *
 * Copy the whole "club" folder into any theme and load it with ONE line
 * in functions.php:
 *
 *     require get_template_directory() . '/club/club.php';
 *
 * (use get_stylesheet_directory() when the folder lives in a child theme).
 * Paths and URLs are detected automatically, so the folder can be placed anywhere
 * inside a theme.
 *
 * Front page: call seos_football_club_front_page() between get_header() and get_footer().
 * Footer:     nothing to change – demo content is added to the empty footer widget areas.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load once, even if both a parent and a child theme include the module.
if ( defined( 'SEOS_FOOTBALL_CLUB_VERSION' ) ) {
	return;
}

define( 'SEOS_FOOTBALL_CLUB_VERSION', '1.1.1' );
define( 'SEOS_FOOTBALL_CLUB_DIR', __DIR__ );

/**
 * URL of the module folder, worked out from where the folder sits in the theme.
 *
 * @return string
 */
function seos_football_club_module_uri() {
	$dir = wp_normalize_path( realpath( __DIR__ ) );

	$roots = array(
		get_stylesheet_directory() => get_stylesheet_directory_uri(),
		get_template_directory()   => get_template_directory_uri(),
	);

	foreach ( $roots as $path => $url ) {
		$real = wp_normalize_path( realpath( $path ) );
		if ( $real && 0 === strpos( $dir, trailingslashit( $real ) ) ) {
			return $url . substr( $dir, strlen( $real ) );
		}
	}

	// Fallback, e.g. when the module is bundled inside a plugin.
	return plugins_url( '', __FILE__ );
}
define( 'SEOS_FOOTBALL_CLUB_URI', seos_football_club_module_uri() );

require SEOS_FOOTBALL_CLUB_DIR . '/inc/defaults.php';
require SEOS_FOOTBALL_CLUB_DIR . '/inc/template-functions.php';
require SEOS_FOOTBALL_CLUB_DIR . '/inc/setup.php';
require SEOS_FOOTBALL_CLUB_DIR . '/inc/customizer.php';
require SEOS_FOOTBALL_CLUB_DIR . '/inc/starter-content.php';
require SEOS_FOOTBALL_CLUB_DIR . '/inc/blocks.php';
