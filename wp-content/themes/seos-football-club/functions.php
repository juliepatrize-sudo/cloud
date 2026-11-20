<?php
/**
 * Seos Football Club functions and definitions.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * All football club options, sections and assets – one include.
 */
require get_stylesheet_directory() . '/club/club.php';

/**
 * Load translations.
 */
function seos_football_club_textdomain() {
	load_child_theme_textdomain( 'seos-football-club', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'seos_football_club_textdomain' );

/**
 * The parent registers its default header images with get_stylesheet_directory_uri(),
 * which points to the child theme. Re-register them from the parent folder.
 */
function seos_football_club_fix_default_headers() {
	unregister_default_headers( array( 'img1', 'img2' ) );
	register_default_headers(
		array(
			'img1' => array(
				'url'           => get_template_directory_uri() . '/framework/images/athletes.jpg',
				'thumbnail_url' => get_template_directory_uri() . '/framework/images/athletes.jpg',
				'description'   => esc_html__( 'Default Image 1', 'seos-football-club' ),
			),
			'img2' => array(
				'url'           => get_template_directory_uri() . '/framework/images/header.gif',
				'thumbnail_url' => get_template_directory_uri() . '/framework/images/header.gif',
				'description'   => esc_html__( 'Default Image 2', 'seos-football-club' ),
			),
		)
	);
}
add_action( 'after_setup_theme', 'seos_football_club_fix_default_headers', 20 );

/**
 * Enqueue the parent stylesheet before the parent theme enqueues the child style.css.
 */
function seos_football_club_parent_style() {
	$parent = wp_get_theme( get_template() );
	wp_enqueue_style( 'seos-football-parent-style', get_template_directory_uri() . '/style.css', array(), $parent->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'seos_football_club_parent_style', 5 );
