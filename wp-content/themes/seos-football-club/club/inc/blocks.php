<?php
/**
 * Block styles and block patterns for club content.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block styles.
 */
function seos_football_club_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	register_block_style(
		'core/group',
		array(
			'name'  => 'sfc-club-card',
			'label' => esc_html__( 'Club card', 'seos-football-club' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'sfc-club-button',
			'label' => esc_html__( 'Club button', 'seos-football-club' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'sfc-club-heading',
			'label' => esc_html__( 'Club heading', 'seos-football-club' ),
		)
	);

	register_block_style(
		'core/table',
		array(
			'name'  => 'sfc-club-table',
			'label' => esc_html__( 'Club table', 'seos-football-club' ),
		)
	);
}
add_action( 'init', 'seos_football_club_block_styles' );

/**
 * Register block patterns.
 */
function seos_football_club_block_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'seos-football-club',
			array( 'label' => esc_html__( 'Football Club', 'seos-football-club' ) )
		);
	}

	register_block_pattern(
		'seos-football-club/match-report',
		array(
			'title'       => esc_html__( 'Match report', 'seos-football-club' ),
			'description' => esc_html__( 'Score line, short summary and goal scorers.', 'seos-football-club' ),
			'categories'  => array( 'seos-football-club' ),
			'content'     => '<!-- wp:group {"className":"is-style-sfc-club-card"} --><div class="wp-block-group is-style-sfc-club-card">'
				. '<!-- wp:heading {"textAlign":"center","className":"is-style-sfc-club-heading"} --><h2 class="wp-block-heading has-text-align-center is-style-sfc-club-heading">' . esc_html__( 'Seos United 3 – 1 Riverside FC', 'seos-football-club' ) . '</h2><!-- /wp:heading -->'
				. '<!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( 'Premier League · Matchday 13 · Riverside Arena', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->'
				. '<!-- wp:paragraph --><p>' . esc_html__( 'Write a short summary of the match here: the key moments, the atmosphere and what the result means for the season.', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->'
				. '<!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . esc_html__( '12\' Adrian Costa', 'seos-football-club' ) . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . esc_html__( '54\' Luka Petrov', 'seos-football-club' ) . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . esc_html__( '81\' Adrian Costa', 'seos-football-club' ) . '</li><!-- /wp:list-item --></ul><!-- /wp:list -->'
				. '</div><!-- /wp:group -->',
		)
	);

	register_block_pattern(
		'seos-football-club/membership',
		array(
			'title'       => esc_html__( 'Membership call to action', 'seos-football-club' ),
			'description' => esc_html__( 'Heading, text and a join button.', 'seos-football-club' ),
			'categories'  => array( 'seos-football-club' ),
			'content'     => '<!-- wp:group {"className":"is-style-sfc-club-card"} --><div class="wp-block-group is-style-sfc-club-card">'
				. '<!-- wp:heading {"className":"is-style-sfc-club-heading"} --><h2 class="wp-block-heading is-style-sfc-club-heading">' . esc_html__( 'Become a Club Member', 'seos-football-club' ) . '</h2><!-- /wp:heading -->'
				. '<!-- wp:paragraph --><p>' . esc_html__( 'Priority tickets, exclusive behind-the-scenes content and a vote at the annual fan assembly.', 'seos-football-club' ) . '</p><!-- /wp:paragraph -->'
				. '<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-sfc-club-button"} --><div class="wp-block-button is-style-sfc-club-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Join the Club', 'seos-football-club' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons -->'
				. '</div><!-- /wp:group -->',
		)
	);

	register_block_pattern(
		'seos-football-club/fixtures-table',
		array(
			'title'       => esc_html__( 'Fixtures table', 'seos-football-club' ),
			'description' => esc_html__( 'A table of upcoming matches.', 'seos-football-club' ),
			'categories'  => array( 'seos-football-club' ),
			'content'     => '<!-- wp:heading {"className":"is-style-sfc-club-heading"} --><h2 class="wp-block-heading is-style-sfc-club-heading">' . esc_html__( 'Upcoming Fixtures', 'seos-football-club' ) . '</h2><!-- /wp:heading -->'
				. '<!-- wp:table {"className":"is-style-sfc-club-table"} --><figure class="wp-block-table is-style-sfc-club-table"><table><thead><tr><th>' . esc_html__( 'Date', 'seos-football-club' ) . '</th><th>' . esc_html__( 'Opponent', 'seos-football-club' ) . '</th><th>' . esc_html__( 'Venue', 'seos-football-club' ) . '</th><th>' . esc_html__( 'Kick-off', 'seos-football-club' ) . '</th></tr></thead><tbody>'
				. '<tr><td>' . esc_html__( 'Sat 21 Nov', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Northbridge City', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Home', 'seos-football-club' ) . '</td><td>18:00</td></tr>'
				. '<tr><td>' . esc_html__( 'Sat 28 Nov', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Harbor Town', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Away', 'seos-football-club' ) . '</td><td>16:30</td></tr>'
				. '<tr><td>' . esc_html__( 'Wed 2 Dec', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Oakvale Rovers', 'seos-football-club' ) . '</td><td>' . esc_html__( 'Home', 'seos-football-club' ) . '</td><td>20:45</td></tr>'
				. '</tbody></table></figure><!-- /wp:table -->',
		)
	);
}
add_action( 'init', 'seos_football_club_block_patterns' );
