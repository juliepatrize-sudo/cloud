<?php
/**
 * Default option values. These are what a fresh installation shows.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * All default theme mod values.
 *
 * @return array
 */
function seos_football_club_defaults() {
	$defaults = array(
		// General.
		'color_primary'       => '#c8102e',
		'color_accent'        => '#f2c230',
		'color_dark'          => '#0b0e13',
		'color_pitch'         => '#0e6b3a',
		'animations'          => true,

		// Theme enhancements (outside the club sections).
		'enhancements'        => true,
		'enh_sticky_menu'     => true,
		'enh_menu_underline'  => true,
		'enh_accent_colors'   => true,
		'enh_mobile_text'     => true,

		// Club details.
		'club_name'           => __( 'Seos United FC', 'seos-football-club' ),
		'club_founded'        => '1923',
		'club_stadium'        => __( 'Riverside Arena', 'seos-football-club' ),

		// Ticker.
		'ticker_show'         => true,
		'ticker_label'        => __( 'Latest Results', 'seos-football-club' ),

		// Stats.
		'stats_show'          => true,
		'stats_title'         => __( 'The Club in Numbers', 'seos-football-club' ),

		// Table and fixtures.
		'table_show'          => true,
		'table_title'         => __( 'League Table', 'seos-football-club' ),
		'table_rows'          => "Seos United, 13, 10, 2, 1, 32\nNorthbridge City, 13, 9, 3, 1, 30\nHarbor Town, 13, 8, 2, 3, 26\nRiverside FC, 13, 7, 3, 3, 24\nOakvale Rovers, 13, 6, 3, 4, 21\nEastport Athletic, 13, 5, 4, 4, 19",
		'table_highlight'     => __( 'Seos United', 'seos-football-club' ),
		'fixtures_title'      => __( 'Upcoming Fixtures', 'seos-football-club' ),
		'fixtures_rows'       => "Sat 21 Nov | Northbridge City | H | 18:00\nSat 28 Nov | Harbor Town | A | 16:30\nWed 2 Dec | Oakvale Rovers | H | 20:45\nSun 6 Dec | Eastport Athletic | A | 15:00",

		// News.
		'news_show'           => true,
		'news_title'          => __( 'Club News', 'seos-football-club' ),
		'news_count'          => 3,

		// CTA.
		'cta_show'            => true,
		'cta_title'           => __( 'Become a Club Member', 'seos-football-club' ),
		'cta_text'            => __( 'Priority tickets, exclusive behind-the-scenes content and a vote at the annual fan assembly. Join thousands of supporters today.', 'seos-football-club' ),
		'cta_btn_text'        => __( 'Join the Club', 'seos-football-club' ),
		'cta_btn_url'         => '#',

		// Sponsors.
		'sponsors_show'       => true,
		'sponsors_title'      => __( 'Official Partners', 'seos-football-club' ),
		'sponsors_list'       => "Apex Sport\nNorthwind Bank\nVelo Motors\nBlue Harbor Air\nGreenfield Energy\nNova Telecom",

		// Footer.
		'footer_demo'            => true,
		'footer_about_title'     => '',
		'footer_about_text'      => __( 'Seos United FC has been the pride of the city since 1923. Join us on match day and be part of the story.', 'seos-football-club' ),
		'footer_fixtures_title'  => __( 'Next Fixtures', 'seos-football-club' ),
		'footer_table_title'     => __( 'Standings', 'seos-football-club' ),
		'footer_contact_title'   => __( 'Stadium & Contact', 'seos-football-club' ),
		'footer_contact_address' => '',
		'footer_contact_hours'   => __( 'Ticket office: Mon–Sat, 10:00–18:00', 'seos-football-club' ),
		'footer_contact_email'   => 'info@example.com',

		// Labels.
		'label_team'             => __( 'Team', 'seos-football-club' ),
		'label_played'           => __( 'P', 'seos-football-club' ),
		'label_won'              => __( 'W', 'seos-football-club' ),
		'label_drawn'            => __( 'D', 'seos-football-club' ),
		'label_lost'             => __( 'L', 'seos-football-club' ),
		'label_points'           => __( 'Pts', 'seos-football-club' ),
		'label_vs_fixture'       => __( 'vs', 'seos-football-club' ),
		'label_home'             => __( 'Home', 'seos-football-club' ),
		'label_away'             => __( 'Away', 'seos-football-club' ),
		'news_kicker'            => __( 'From the dressing room', 'seos-football-club' ),
		'news_read_more'         => __( 'Read story', 'seos-football-club' ),
		'news_all'               => __( 'All news', 'seos-football-club' ),
	);

	// Results ticker.
	$results = array(
		__( 'Seos United 3 – 1 Riverside FC', 'seos-football-club' ),
		__( 'Harbor Town 0 – 2 Seos United', 'seos-football-club' ),
		__( 'Seos United 1 – 1 Oakvale Rovers', 'seos-football-club' ),
		__( 'Eastport Athletic 1 – 4 Seos United', 'seos-football-club' ),
		__( 'Seos United 2 – 0 Kingsford', 'seos-football-club' ),
	);
	foreach ( $results as $i => $result ) {
		$defaults[ 'ticker_item_' . ( $i + 1 ) ] = $result;
	}

	// Stats counters.
	$stats = array(
		array( '27', __( 'Trophies Won', 'seos-football-club' ) ),
		array( '103', __( 'Years of History', 'seos-football-club' ) ),
		array( '32000', __( 'Stadium Seats', 'seos-football-club' ) ),
		array( '85000', __( 'Club Members', 'seos-football-club' ) ),
	);
	foreach ( $stats as $i => $stat ) {
		$defaults[ 'stat_number_' . ( $i + 1 ) ] = $stat[0];
		$defaults[ 'stat_label_' . ( $i + 1 ) ]  = $stat[1];
	}

	return apply_filters( 'seos_football_club_defaults', $defaults );
}

/**
 * Get a theme mod with the child theme default.
 *
 * @param string $key Option key without prefix.
 * @return mixed
 */
function seos_football_club_get( $key ) {
	$defaults = seos_football_club_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( 'seos_football_club_' . $key, $default );
}

/**
 * Number of repeatable items.
 */
function seos_football_club_counts() {
	return array(
		'ticker'  => 5,
		'stats'   => 4,
	);
}
