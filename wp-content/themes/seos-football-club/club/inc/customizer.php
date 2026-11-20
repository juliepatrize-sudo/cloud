<?php
/**
 * Customizer: Football Club Options.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sanitize a checkbox.
 *
 * @param mixed $value Value.
 * @return bool
 */
function seos_football_club_sanitize_checkbox( $value ) {
	return ( isset( $value ) && true === (bool) $value );
}

/**
 * Sanitize a datetime-local value (Y-m-d H:i or Y-m-dTH:i).
 *
 * @param string $value Value.
 * @return string
 */
function seos_football_club_sanitize_datetime( $value ) {
	$value = trim( (string) $value );
	return preg_match( '/^\d{4}-\d{2}-\d{2}[ T]\d{2}:\d{2}$/', $value ) ? $value : '';
}

/**
 * Sanitize a number between 1 and 9.
 *
 * @param mixed $value Value.
 * @return int
 */
function seos_football_club_sanitize_news_count( $value ) {
	return max( 1, min( 9, absint( $value ) ) );
}

/**
 * Register Customizer options.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function seos_football_club_customize_register( $wp_customize ) {
	$defaults = seos_football_club_defaults();
	$counts   = seos_football_club_counts();
	$p        = 'seos_football_club_';

	$wp_customize->add_panel(
		$p . 'panel',
		array(
			'title'       => esc_html__( 'Football Club Options', 'seos-football-club' ),
			'description' => esc_html__( 'Everything on the club front page. All sections are visible with demo values until you change them.', 'seos-football-club' ),
			'priority'    => 2,
		)
	);

	/**
	 * Helper to add a setting and control in one go.
	 */
	$add = function ( $key, $section, $label, $type = 'text', $args = array() ) use ( $wp_customize, $defaults, $p ) {
		$sanitize = array(
			'text'           => 'sanitize_text_field',
			'url'            => 'esc_url_raw',
			'textarea'       => 'sanitize_textarea_field',
			'checkbox'       => 'seos_football_club_sanitize_checkbox',
			'number'         => 'absint',
			'datetime-local' => 'seos_football_club_sanitize_datetime',
			'media'          => 'absint',
			'color'          => 'sanitize_hex_color',
			'html'           => 'wp_kses_post',
		);

		$wp_customize->add_setting(
			$p . $key,
			array(
				'default'           => isset( $defaults[ $key ] ) ? $defaults[ $key ] : '',
				'sanitize_callback' => isset( $args['sanitize'] ) ? $args['sanitize'] : $sanitize[ $type ],
				'transport'         => isset( $args['transport'] ) ? $args['transport'] : 'postMessage',
			)
		);

		$control = array(
			'label'       => $label,
			'section'     => $p . $section,
			'description' => isset( $args['description'] ) ? $args['description'] : '',
		);
		if ( isset( $args['active_callback'] ) ) {
			$control['active_callback'] = $args['active_callback'];
		}

		if ( 'color' === $type ) {
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $p . $key, $control ) );
		} elseif ( 'media' === $type ) {
			$control['mime_type'] = 'image';
			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $p . $key, $control ) );
		} else {
			$control['type'] = ( 'html' === $type ) ? 'textarea' : $type;
			if ( isset( $args['input_attrs'] ) ) {
				$control['input_attrs'] = $args['input_attrs'];
			}
			$wp_customize->add_control( $p . $key, $control );
		}
	};

	/* ---------- General ---------- */
	$wp_customize->add_section(
		$p . 'general',
		array(
			'title'    => esc_html__( 'Club Details, Colours & Animations', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 1,
		)
	);
	$add( 'club_name', 'general', esc_html__( 'Club name', 'seos-football-club' ), 'text', array( 'transport' => 'refresh', 'description' => esc_html__( 'Used in the fixtures, the footer and the news placeholder. Leave empty to use the Site Title.', 'seos-football-club' ) ) );
	$add( 'club_founded', 'general', esc_html__( 'Year founded', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'club_stadium', 'general', esc_html__( 'Stadium', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'color_primary', 'general', esc_html__( 'Primary club colour', 'seos-football-club' ), 'color' );
	$add( 'color_accent', 'general', esc_html__( 'Accent colour', 'seos-football-club' ), 'color' );
	$add( 'color_dark', 'general', esc_html__( 'Dark background', 'seos-football-club' ), 'color' );
	$add( 'color_pitch', 'general', esc_html__( 'Pitch green', 'seos-football-club' ), 'color' );
	$add(
		'animations',
		'general',
		esc_html__( 'Enable animations', 'seos-football-club' ),
		'checkbox',
		array(
			'transport'   => 'refresh',
			'description' => esc_html__( 'Visitors who prefer reduced motion never see animations.', 'seos-football-club' ),
		)
	);

	/* ---------- Theme enhancements ---------- */
	$wp_customize->add_section(
		$p . 'enhancements',
		array(
			'title'       => esc_html__( 'Theme Enhancements', 'seos-football-club' ),
			'panel'       => $p . 'panel',
			'priority'    => 1,
			'description' => esc_html__( 'Improvements to the theme menu, sidebar and text outside the club sections. Switch any of them off to keep the original look.', 'seos-football-club' ),
		)
	);
	$refresh = array( 'transport' => 'refresh' );
	$add( 'enhancements', 'enhancements', esc_html__( 'Enable theme enhancements (switch off to disable all below)', 'seos-football-club' ), 'checkbox', $refresh );
	$add( 'enh_sticky_menu', 'enhancements', esc_html__( 'Sticky, semi-transparent menu', 'seos-football-club' ), 'checkbox', $refresh );
	$add( 'enh_menu_underline', 'enhancements', esc_html__( 'Underline under menu items on hover', 'seos-football-club' ), 'checkbox', $refresh );
	$add( 'enh_accent_colors', 'enhancements', esc_html__( 'Club colour on sidebar widget titles and pagination', 'seos-football-club' ), 'checkbox', $refresh );
	$add( 'enh_mobile_text', 'enhancements', esc_html__( 'Readable text size on phones (all pages)', 'seos-football-club' ), 'checkbox', $refresh );

	/* ---------- Ticker ---------- */
	$wp_customize->add_section(
		$p . 'ticker',
		array(
			'title'    => esc_html__( 'Results Ticker', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 4,
		)
	);
	$add( 'ticker_show', 'ticker', esc_html__( 'Show results ticker', 'seos-football-club' ), 'checkbox' );
	$add( 'ticker_label', 'ticker', esc_html__( 'Label', 'seos-football-club' ) );
	for ( $i = 1; $i <= $counts['ticker']; $i++ ) {
		/* translators: %d: result number. */
		$add( 'ticker_item_' . $i, 'ticker', sprintf( esc_html__( 'Result %d', 'seos-football-club' ), $i ) );
	}

	/* ---------- Stats ---------- */
	$wp_customize->add_section(
		$p . 'stats',
		array(
			'title'    => esc_html__( 'Club in Numbers', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 5,
		)
	);
	$add( 'stats_show', 'stats', esc_html__( 'Show statistics', 'seos-football-club' ), 'checkbox' );
	$add( 'stats_title', 'stats', esc_html__( 'Title', 'seos-football-club' ) );
	for ( $i = 1; $i <= $counts['stats']; $i++ ) {
		/* translators: %d: counter number. */
		$add( 'stat_number_' . $i, 'stats', sprintf( esc_html__( 'Counter %d – number', 'seos-football-club' ), $i ), 'number', array( 'input_attrs' => array( 'min' => 0 ) ) );
		/* translators: %d: counter number. */
		$add( 'stat_label_' . $i, 'stats', sprintf( esc_html__( 'Counter %d – label', 'seos-football-club' ), $i ) );
	}

	/* ---------- Table & fixtures ---------- */
	$wp_customize->add_section(
		$p . 'table',
		array(
			'title'    => esc_html__( 'League Table & Fixtures', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 7,
		)
	);
	$add( 'table_show', 'table', esc_html__( 'Show table and fixtures', 'seos-football-club' ), 'checkbox' );
	$add( 'table_title', 'table', esc_html__( 'Table title', 'seos-football-club' ) );
	$add( 'table_rows', 'table', esc_html__( 'Table rows', 'seos-football-club' ), 'textarea', array( 'description' => esc_html__( 'One team per line: Team, Played, Won, Drawn, Lost, Points', 'seos-football-club' ) ) );
	$add( 'table_highlight', 'table', esc_html__( 'Highlight team', 'seos-football-club' ), 'text', array( 'description' => esc_html__( 'Exact team name to highlight in the table.', 'seos-football-club' ) ) );
	$add( 'fixtures_title', 'table', esc_html__( 'Fixtures title', 'seos-football-club' ) );
	$add( 'fixtures_rows', 'table', esc_html__( 'Fixtures', 'seos-football-club' ), 'textarea', array( 'description' => esc_html__( 'One per line: Date | Opponent | H or A | Time', 'seos-football-club' ) ) );
	$add( 'label_team', 'table', esc_html__( 'Table heading: Team', 'seos-football-club' ) );
	$add( 'label_played', 'table', esc_html__( 'Table heading: Played', 'seos-football-club' ) );
	$add( 'label_won', 'table', esc_html__( 'Table heading: Won', 'seos-football-club' ) );
	$add( 'label_drawn', 'table', esc_html__( 'Table heading: Drawn', 'seos-football-club' ) );
	$add( 'label_lost', 'table', esc_html__( 'Table heading: Lost', 'seos-football-club' ) );
	$add( 'label_points', 'table', esc_html__( 'Table heading: Points', 'seos-football-club' ) );
	$add( 'label_vs_fixture', 'table', esc_html__( 'Fixtures: vs', 'seos-football-club' ) );
	$add( 'label_home', 'table', esc_html__( 'Label: Home', 'seos-football-club' ) );
	$add( 'label_away', 'table', esc_html__( 'Label: Away', 'seos-football-club' ) );

	/* ---------- News ---------- */
	$wp_customize->add_section(
		$p . 'news',
		array(
			'title'       => esc_html__( 'Club News', 'seos-football-club' ),
			'panel'       => $p . 'panel',
			'priority'    => 8,
			'description' => esc_html__( 'Shown when the homepage is set to a static page. With "Your latest posts" the blog is displayed instead.', 'seos-football-club' ),
		)
	);
	$add( 'news_show', 'news', esc_html__( 'Show latest news', 'seos-football-club' ), 'checkbox' );
	$add( 'news_title', 'news', esc_html__( 'Title', 'seos-football-club' ) );
	$add(
		'news_count',
		'news',
		esc_html__( 'Number of posts', 'seos-football-club' ),
		'number',
		array(
			'sanitize'    => 'seos_football_club_sanitize_news_count',
			'input_attrs' => array(
				'min' => 1,
				'max' => 9,
			),
		)
	);
	$add( 'news_kicker', 'news', esc_html__( 'Small label above the title', 'seos-football-club' ) );
	$add( 'news_read_more', 'news', esc_html__( 'Read more text', 'seos-football-club' ) );
	$add( 'news_all', 'news', esc_html__( '"All news" button text', 'seos-football-club' ) );

	/* ---------- CTA ---------- */
	$wp_customize->add_section(
		$p . 'cta',
		array(
			'title'    => esc_html__( 'Membership Call to Action', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 9,
		)
	);
	$add( 'cta_show', 'cta', esc_html__( 'Show call to action', 'seos-football-club' ), 'checkbox' );
	$add( 'cta_title', 'cta', esc_html__( 'Title', 'seos-football-club' ) );
	$add( 'cta_text', 'cta', esc_html__( 'Text', 'seos-football-club' ), 'textarea' );
	$add( 'cta_btn_text', 'cta', esc_html__( 'Button text', 'seos-football-club' ) );
	$add( 'cta_btn_url', 'cta', esc_html__( 'Button link', 'seos-football-club' ), 'url' );

	/* ---------- Sponsors ---------- */
	$wp_customize->add_section(
		$p . 'sponsors',
		array(
			'title'    => esc_html__( 'Sponsors', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 10,
		)
	);
	$add( 'sponsors_show', 'sponsors', esc_html__( 'Show sponsors', 'seos-football-club' ), 'checkbox' );
	$add( 'sponsors_title', 'sponsors', esc_html__( 'Title', 'seos-football-club' ) );
	$add( 'sponsors_list', 'sponsors', esc_html__( 'Sponsors', 'seos-football-club' ), 'textarea', array( 'description' => esc_html__( 'One sponsor per line.', 'seos-football-club' ) ) );

	/* ---------- Footer ---------- */
	$wp_customize->add_section(
		$p . 'footer',
		array(
			'title'    => esc_html__( 'Club Footer', 'seos-football-club' ),
			'panel'    => $p . 'panel',
			'priority' => 11,
		)
	);
	$add(
		'footer_demo',
		'footer',
		esc_html__( 'Show demo club content while the footer widget areas are empty', 'seos-football-club' ),
		'checkbox',
		array(
			'transport'   => 'refresh',
			'description' => esc_html__( 'As soon as you add a widget to Footer 1–4, your widgets are shown instead.', 'seos-football-club' ),
		)
	);
	$add( 'footer_about_title', 'footer', esc_html__( 'Column 1: title (empty = club name)', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_about_text', 'footer', esc_html__( 'Column 1: text', 'seos-football-club' ), 'textarea', array( 'transport' => 'refresh' ) );
	$add( 'footer_fixtures_title', 'footer', esc_html__( 'Column 2: title', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_table_title', 'footer', esc_html__( 'Column 3: title', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_contact_title', 'footer', esc_html__( 'Column 4: title', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_contact_address', 'footer', esc_html__( 'Column 4: address (empty = stadium)', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_contact_hours', 'footer', esc_html__( 'Column 4: opening hours', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );
	$add( 'footer_contact_email', 'footer', esc_html__( 'Column 4: email', 'seos-football-club' ), 'text', array( 'transport' => 'refresh' ) );

	/* ---------- Selective refresh ---------- */
	if ( isset( $wp_customize->selective_refresh ) ) {
		$partials = array(
			'ticker'   => array( '#sfc-section-ticker', array( 'ticker_show', 'ticker_label' ) ),
			'stats'    => array( '#sfc-section-stats', array( 'stats_show', 'stats_title' ) ),
			'table'    => array( '#sfc-section-table', array( 'table_show', 'table_title', 'table_rows', 'table_highlight', 'fixtures_title', 'fixtures_rows', 'label_team', 'label_played', 'label_won', 'label_drawn', 'label_lost', 'label_points', 'label_vs_fixture', 'label_home', 'label_away' ) ),
			'news'     => array( '#sfc-section-news', array( 'news_show', 'news_title', 'news_count', 'news_kicker', 'news_read_more', 'news_all' ) ),
			'cta'      => array( '#sfc-section-cta', array( 'cta_show', 'cta_title', 'cta_text', 'cta_btn_text', 'cta_btn_url' ) ),
			'sponsors' => array( '#sfc-section-sponsors', array( 'sponsors_show', 'sponsors_title', 'sponsors_list' ) ),
		);

		for ( $i = 1; $i <= $counts['ticker']; $i++ ) {
			$partials['ticker'][1][] = 'ticker_item_' . $i;
		}
		for ( $i = 1; $i <= $counts['stats']; $i++ ) {
			$partials['stats'][1][] = 'stat_number_' . $i;
			$partials['stats'][1][] = 'stat_label_' . $i;
		}
		foreach ( $partials as $section => $partial ) {
			$wp_customize->selective_refresh->add_partial(
				$p . 'partial_' . $section,
				array(
					'selector'            => $partial[0],
					'settings'            => array_map(
						function ( $key ) use ( $p ) {
							return $p . $key;
						},
						$partial[1]
					),
					'container_inclusive' => true,
					'fallback_refresh'    => true,
					'render_callback'     => function () use ( $section ) {
						seos_football_club_render_section( $section );
					},
				)
			);
		}
	}
}
add_action( 'customize_register', 'seos_football_club_customize_register', 20 );

/**
 * Live preview script for colours and section re-initialisation.
 */
function seos_football_club_customize_preview_js() {
	wp_enqueue_script( 'seos-football-club-customizer', SEOS_FOOTBALL_CLUB_URI . '/assets/js/customizer-preview.js', array( 'customize-preview', 'customize-selective-refresh' ), SEOS_FOOTBALL_CLUB_VERSION, true );
}
add_action( 'customize_preview_init', 'seos_football_club_customize_preview_js' );

/**
 * Open the club panel link from the theme's admin notice / Customizer.
 */
function seos_football_club_customize_controls_css() {
	wp_add_inline_style( 'customize-controls', '#accordion-panel-seos_football_club_panel > h3{border-left:4px solid #c8102e !important}' );
}
add_action( 'customize_controls_enqueue_scripts', 'seos_football_club_customize_controls_css' );
