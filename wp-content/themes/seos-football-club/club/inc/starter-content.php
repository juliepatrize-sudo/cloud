<?php
/**
 * Starter content: shown in the Customizer on a fresh site, nothing is
 * written to the database until the user clicks Publish.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register starter content.
 */
function seos_football_club_starter_content() {
	$club = __( 'Seos United FC', 'seos-football-club' );

	$starter = array(
		'widgets'     => array(
			'sidebar-1' => array(
				'search',
				'recent-posts',
				'categories',
			),
			'footer-1'  => array(
				'sfc_about' => array(
					'text',
					array(
						'title' => $club,
						'text'  => '<p>' . __( 'The pride of the city since 1923. Twenty-seven trophies, one badge and the loudest fans in the league.', 'seos-football-club' ) . '</p>',
					),
				),
			),
			'footer-2'  => array(
				'sfc_fixtures' => array(
					'text',
					array(
						'title' => __( 'Next Fixtures', 'seos-football-club' ),
						'text'  => '<ul><li>' . __( 'Sat 21 Nov – Northbridge City (H)', 'seos-football-club' ) . '</li><li>' . __( 'Sat 28 Nov – Harbor Town (A)', 'seos-football-club' ) . '</li><li>' . __( 'Wed 2 Dec – Oakvale Rovers (H)', 'seos-football-club' ) . '</li></ul>',
					),
				),
			),
			'footer-3'  => array(
				'recent-posts',
			),
			'footer-4'  => array(
				'sfc_contact' => array(
					'text',
					array(
						'title' => __( 'Stadium & Contact', 'seos-football-club' ),
						'text'  => '<p>' . __( 'Riverside Arena', 'seos-football-club' ) . '<br>' . __( 'Ticket office: Mon–Sat, 10:00–18:00', 'seos-football-club' ) . '<br>info@example.com</p>',
					),
				),
			),
		),

		'attachments' => array(
			'image-match'    => array(
				'post_title' => _x( 'Match night', 'Theme starter content', 'seos-football-club' ),
				'file'       => SEOS_FOOTBALL_CLUB_DIR . '/assets/images/news-match.jpg',
			),
			'image-training' => array(
				'post_title' => _x( 'Training', 'Theme starter content', 'seos-football-club' ),
				'file'       => SEOS_FOOTBALL_CLUB_DIR . '/assets/images/news-training.jpg',
			),
			'image-academy'  => array(
				'post_title' => _x( 'Academy', 'Theme starter content', 'seos-football-club' ),
				'file'       => SEOS_FOOTBALL_CLUB_DIR . '/assets/images/news-academy.jpg',
			),
		),

		'posts'       => array(
			'home'    => array(
				'post_type'    => 'page',
				'post_title'   => _x( 'Home', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '',
			),
			'about'   => array(
				'post_type'    => 'page',
				'post_title'   => _x( 'The Club', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '<!-- wp:paragraph --><p>' . _x( 'Founded in 1923 by a group of dock workers, the club has grown into the beating heart of the city. Tell your own story here.', 'Theme starter content', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->',
			),
			'news'    => array(
				'post_type'  => 'page',
				'post_title' => _x( 'News', 'Theme starter content', 'seos-football-club' ),
			),
			'contact' => array(
				'post_type'    => 'page',
				'post_title'   => _x( 'Tickets & Contact', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '<!-- wp:paragraph --><p>' . _x( 'Ticket office opening hours, stadium directions and contact details go here.', 'Theme starter content', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->',
			),
			'post-1'  => array(
				'post_type'    => 'post',
				'post_title'   => _x( 'Late winner seals derby victory under the lights', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '<!-- wp:paragraph --><p>' . _x( 'A packed Riverside Arena roared as the captain struck in the 89th minute to keep the club top of the table.', 'Theme starter content', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->',
				'thumbnail'    => '{{image-match}}',
			),
			'post-2'  => array(
				'post_type'    => 'post',
				'post_title'   => _x( 'Inside training: preparing for Northbridge', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '<!-- wp:paragraph --><p>' . _x( 'The coaching staff opened the training ground doors ahead of the top-of-the-table clash.', 'Theme starter content', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->',
				'thumbnail'    => '{{image-training}}',
			),
			'post-3'  => array(
				'post_type'    => 'post',
				'post_title'   => _x( 'Academy trials open for the new season', 'Theme starter content', 'seos-football-club' ),
				'post_content' => '<!-- wp:paragraph --><p>' . _x( 'Young players aged 8 to 16 can register for open trials at the club academy.', 'Theme starter content', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->',
				'thumbnail'    => '{{image-academy}}',
			),
		),

		'options'     => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{news}}',
		),

		'nav_menus'   => array(
			'primary' => array(
				'name'  => __( 'Primary', 'seos-football-club' ),
				'items' => array(
					'link_home',
					'page_about',
					'page_news',
					'page_contact',
				),
			),
		),
	);

	add_theme_support( 'starter-content', apply_filters( 'seos_football_club_starter_content', $starter ) );
}
add_action( 'after_setup_theme', 'seos_football_club_starter_content', 20 );
