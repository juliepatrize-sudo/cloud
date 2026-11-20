<?php
/**
 * Template helpers for the club sections.
 *
 * @package Seos_Football_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ordered list of front page sections. Slug => template part.
 *
 * @return array
 */
function seos_football_club_sections() {
	return apply_filters(
		'seos_football_club_sections',
		array(
			'ticker'   => 'ticker',
			'stats'    => 'stats',
			'table'    => 'table',
			'news'     => 'news',
			'cta'      => 'cta',
			'sponsors' => 'sponsors',
		)
	);
}

/**
 * Render one section.
 *
 * @param string $section Section slug.
 */
function seos_football_club_render_section( $section ) {
	$sections = seos_football_club_sections();
	if ( isset( $sections[ $section ] ) ) {
		seos_football_club_load_part( 'section-' . $sections[ $section ] );
	}
}

/**
 * Load a template part from the module. A theme can override any part by
 * placing a file with the same name in "<theme>/seos-club/".
 *
 * @param string $name Part name without .php.
 */
function seos_football_club_load_part( $name ) {
	$name     = sanitize_file_name( $name );
	$override = locate_template( 'seos-club/' . $name . '.php' );
	$file     = $override ? $override : SEOS_FOOTBALL_CLUB_DIR . '/template-parts/' . $name . '.php';
	if ( file_exists( $file ) ) {
		load_template( $file, false );
	}
}

/**
 * Club front page content including the page/blog loop.
 * Use in front-page.php between get_header() and get_footer().
 */
function seos_football_club_front_page() {
	if ( ! is_front_page() ) {
		return;
	}
	seos_football_club_load_part( 'front-page' );
}

/**
 * Club sections only, without any loop – for themes that call it from header.php.
 * Prints the top sections on the front page and adds the call to action and the
 * sponsors automatically just before the footer. Does nothing on other pages.
 */
function seos_football_club_header_sections() {
	if ( ! is_front_page() || did_action( 'seos_football_club_header_sections' ) ) {
		return;
	}
	do_action( 'seos_football_club_header_sections' );

	foreach ( array( 'ticker', 'stats', 'table', 'news' ) as $section ) {
		seos_football_club_render_section( $section );
	}

	add_action(
		'get_footer',
		function () {
			seos_football_club_render_section( 'cta' );
			seos_football_club_render_section( 'sponsors' );
		},
		5
	);
}

/**
 * Render all front page sections.
 *
 * @param array $exclude Sections to skip.
 */
function seos_football_club_render_sections( $exclude = array() ) {
	foreach ( array_keys( seos_football_club_sections() ) as $section ) {
		if ( in_array( $section, $exclude, true ) ) {
			continue;
		}
		seos_football_club_render_section( $section );
	}
}

/**
 * Club display name.
 *
 * @return string
 */
function seos_football_club_name() {
	$name = seos_football_club_get( 'club_name' );
	return $name ? $name : get_bloginfo( 'name' );
}

/**
 * Inline SVG club crest. Uses CSS variables so it follows the club colours.
 *
 * @param string $class Extra CSS class.
 * @return string
 */
function seos_football_club_crest_svg( $class = '' ) {
	$name    = seos_football_club_name();
	$initial = function_exists( 'mb_substr' ) ? mb_strtoupper( mb_substr( $name, 0, 1 ) ) : strtoupper( substr( $name, 0, 1 ) );
	$founded = seos_football_club_get( 'club_founded' );

	ob_start();
	?>
	<svg class="sfc-crest <?php echo esc_attr( $class ); ?>" viewBox="0 0 120 140" role="img" aria-label="<?php echo esc_attr( $name ); ?>">
		<path class="sfc-crest__shield" d="M60 4 112 18v44c0 34-22 60-52 74C30 122 8 96 8 62V18Z"/>
		<path class="sfc-crest__inner" d="M60 14 102 25v37c0 28-18 50-42 62-24-12-42-34-42-62V25Z"/>
		<path class="sfc-crest__band" d="M18 52h84v22H18z"/>
		<g class="sfc-crest__stars">
			<path d="m42 30 2.4 5 5.4.6-4 3.7 1.1 5.3-4.9-2.7-4.8 2.7 1-5.3-4-3.7 5.4-.6Z"/>
			<path d="m60 26 2.4 5 5.4.6-4 3.7 1.1 5.3-4.9-2.7-4.8 2.7 1-5.3-4-3.7 5.4-.6Z"/>
			<path d="m78 30 2.4 5 5.4.6-4 3.7 1.1 5.3-4.9-2.7-4.8 2.7 1-5.3-4-3.7 5.4-.6Z"/>
		</g>
		<text class="sfc-crest__initial" x="60" y="70" text-anchor="middle"><?php echo esc_html( $initial ); ?></text>
		<g transform="translate(60 96)">
			<g class="sfc-crest__ball">
				<circle r="13"/>
				<path d="M0-6 5.7-1.9 3.5 4.9h-7L-5.7-1.9Z"/>
			</g>
		</g>
		<?php if ( $founded ) : ?>
			<text class="sfc-crest__year" x="60" y="124" text-anchor="middle"><?php echo esc_html( $founded ); ?></text>
		<?php endif; ?>
	</svg>
	<?php
	return ob_get_clean();
}

/**
 * Parse comma separated table rows.
 *
 * @return array
 */
function seos_football_club_table_rows() {
	$rows = array();
	$raw  = preg_split( '/\r\n|\r|\n/', (string) seos_football_club_get( 'table_rows' ) );
	foreach ( $raw as $line ) {
		$cols = array_map( 'trim', explode( ',', $line ) );
		if ( '' === $cols[0] ) {
			continue;
		}
		$rows[] = array_pad( array_slice( $cols, 0, 6 ), 6, '' );
	}
	return $rows;
}

/**
 * Parse pipe separated fixtures.
 *
 * @return array
 */
function seos_football_club_fixture_rows() {
	$rows = array();
	$raw  = preg_split( '/\r\n|\r|\n/', (string) seos_football_club_get( 'fixtures_rows' ) );
	foreach ( $raw as $line ) {
		$cols = array_map( 'trim', explode( '|', $line ) );
		if ( '' === $cols[0] ) {
			continue;
		}
		$rows[] = array_pad( array_slice( $cols, 0, 4 ), 4, '' );
	}
	return $rows;
}

/**
 * Sponsor names, one per line.
 *
 * @return array
 */
function seos_football_club_sponsors() {
	$raw = preg_split( '/\r\n|\r|\n/', (string) seos_football_club_get( 'sponsors_list' ) );
	return array_values( array_filter( array_map( 'trim', $raw ) ) );
}

/**
 * Section heading markup.
 *
 * @param string $title    Title.
 * @param string $subtitle Optional subtitle.
 * @param string $kicker   Optional small label above the title.
 */
function seos_football_club_heading( $title, $subtitle = '', $kicker = '' ) {
	if ( ! $title ) {
		return;
	}
	?>
	<header class="sfc-heading" data-sfc-reveal>
		<?php if ( $kicker ) : ?>
			<span class="sfc-heading__kicker"><?php echo esc_html( $kicker ); ?></span>
		<?php endif; ?>
		<h2 class="sfc-heading__title"><?php echo esc_html( $title ); ?></h2>
		<?php if ( $subtitle ) : ?>
			<p class="sfc-heading__subtitle"><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>
	</header>
	<?php
}

/**
 * Footer widget areas that receive demo content while they are empty.
 *
 * @return array Sidebar ID => demo column number.
 */
function seos_football_club_footer_demo_areas() {
	return apply_filters(
		'seos_football_club_footer_demo_areas',
		array(
			'footer-1' => 1,
			'footer-2' => 2,
			'footer-3' => 3,
			'footer-4' => 4,
		)
	);
}

/**
 * Whether a footer area should show demo content (all footer areas are empty).
 *
 * @param string $index Sidebar ID.
 * @return bool
 */
function seos_football_club_footer_demo_needed( $index ) {
	if ( is_admin() || ! seos_football_club_get( 'footer_demo' ) ) {
		return false;
	}
	$areas = seos_football_club_footer_demo_areas();
	if ( ! isset( $areas[ $index ] ) ) {
		return false;
	}
	// As soon as any footer area has a widget, the demo content is no longer shown.
	$widgets = wp_get_sidebars_widgets();
	foreach ( array_keys( $areas ) as $area ) {
		if ( ! empty( $widgets[ $area ] ) ) {
			return false;
		}
	}
	return true;
}

/**
 * The theme's own footer.php only prints a widget area when it is active.
 * Report empty footer areas as active so the original footer markup is used
 * unchanged and the demo content is added inside it.
 *
 * @param bool       $is_active Whether the sidebar is active.
 * @param int|string $index     Sidebar ID.
 * @return bool
 */
function seos_football_club_footer_demo_active( $is_active, $index ) {
	if ( ! $is_active && seos_football_club_footer_demo_needed( $index ) ) {
		return true;
	}
	return $is_active;
}
add_filter( 'is_active_sidebar', 'seos_football_club_footer_demo_active', 10, 2 );

/**
 * Print the demo column inside an empty footer widget area.
 *
 * @param int|string $index       Sidebar ID.
 * @param bool       $has_widgets Whether the sidebar has widgets.
 */
function seos_football_club_footer_demo_output( $index, $has_widgets ) {
	if ( $has_widgets || ! seos_football_club_footer_demo_needed( $index ) ) {
		return;
	}
	$areas = seos_football_club_footer_demo_areas();
	seos_football_club_footer_demo_column( $areas[ $index ] );
}
add_action( 'dynamic_sidebar_before', 'seos_football_club_footer_demo_output', 10, 2 );

/**
 * One demo footer column. Can be switched off in
 * Customizer > Football Club Options > Club Footer.
 *
 * @param int $column Column number 1-4.
 */
function seos_football_club_footer_demo_column( $column ) {
	$name = seos_football_club_name();

	echo '<div class="widget sfc-demo-widget sfc-demo-widget--' . absint( $column ) . '">';

	switch ( absint( $column ) ) {
		case 1:
			?>
			<h2 class="widget-title"><?php echo esc_html( seos_football_club_get( 'footer_about_title' ) ? seos_football_club_get( 'footer_about_title' ) : $name ); ?></h2>
			<div class="sfc-demo-widget__brand">
				<?php echo seos_football_club_crest_svg( 'sfc-crest--footer' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped inside the function. ?>
				<p><?php echo esc_html( seos_football_club_get( 'footer_about_text' ) ); ?></p>
			</div>
			<?php
			break;

		case 2:
			?>
			<h2 class="widget-title"><?php echo esc_html( seos_football_club_get( 'footer_fixtures_title' ) ); ?></h2>
			<ul class="sfc-demo-widget__fixtures">
				<?php foreach ( array_slice( seos_football_club_fixture_rows(), 0, 3 ) as $fixture ) : ?>
					<li>
						<span class="sfc-demo-widget__date"><?php echo esc_html( $fixture[0] ); ?></span>
						<strong><?php echo esc_html( $fixture[1] ); ?></strong>
						<span class="sfc-badge sfc-badge--<?php echo 'A' === strtoupper( $fixture[2] ) ? 'away' : 'home'; ?>"><?php echo 'A' === strtoupper( $fixture[2] ) ? esc_html( seos_football_club_get( 'label_away' ) ) : esc_html( seos_football_club_get( 'label_home' ) ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php
			break;

		case 3:
			?>
			<h2 class="widget-title"><?php echo esc_html( seos_football_club_get( 'footer_table_title' ) ); ?></h2>
			<ol class="sfc-demo-widget__table">
				<?php foreach ( array_slice( seos_football_club_table_rows(), 0, 4 ) as $row ) : ?>
					<li<?php echo ( strtolower( $row[0] ) === strtolower( seos_football_club_get( 'table_highlight' ) ) ) ? ' class="is-club"' : ''; ?>>
						<span><?php echo esc_html( $row[0] ); ?></span>
						<strong><?php echo esc_html( $row[5] ); ?></strong>
					</li>
				<?php endforeach; ?>
			</ol>
			<?php
			break;

		default:
			?>
			<h2 class="widget-title"><?php echo esc_html( seos_football_club_get( 'footer_contact_title' ) ); ?></h2>
			<ul class="sfc-demo-widget__contact">
				<li><span class="fa fa-map-marker" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'footer_contact_address' ) ? seos_football_club_get( 'footer_contact_address' ) : seos_football_club_get( 'club_stadium' ) ); ?></li>
				<li><span class="fa fa-ticket" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'footer_contact_hours' ) ); ?></li>
				<li><span class="fa fa-envelope" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'footer_contact_email' ) ); ?></li>
			</ul>
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
				<p class="sfc-demo-widget__hint">
					<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Replace this demo content with your own widgets', 'seos-football-club' ); ?></a>
				</p>
			<?php endif; ?>
			<?php
			break;
	}

	echo '</div>';
}
