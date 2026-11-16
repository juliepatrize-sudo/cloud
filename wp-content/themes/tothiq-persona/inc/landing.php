<?php
/**
 * Landing pages: course, webinar, book, perfume and lipstick.
 *
 * Each is a page template (Course page, Webinar page, Book page) built from
 * its own sections, with its own colours, so one personal site can promote a
 * course, a live session and a book next to the home page. Words and lists
 * pass through the same tothiq_persona_text / tothiq_persona_items filters as
 * the home page, so Tothiq Pro can edit them.
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

/**
 * The landing templates: slug => label.
 *
 * @return array
 */
function tothiq_persona_landings() {
	return array(
		'page-course'   => __( 'Course page', 'tothiq-persona' ),
		'page-webinar'  => __( 'Webinar page', 'tothiq-persona' ),
		'page-book'     => __( 'Book page', 'tothiq-persona' ),
		'page-perfume'  => __( 'Perfume page', 'tothiq-persona' ),
		'page-lipstick' => __( 'Lipstick page', 'tothiq-persona' ),
	);
}

/**
 * Print a button that links to a plain URL (a store, a calendar), with the
 * same classes as every other button in the theme.
 *
 * @param string $label Button text.
 * @param string $url   Link.
 * @param string $style Style suffix.
 */
function tothiq_persona_link_button( $label, $url, $style ) {
	$class = 'tothiq-btn tothiq-btn--' . $style;
	?>
<!-- wp:button {"className":"<?php echo esc_attr( $class ); ?>"} -->
<div class="wp-block-button <?php echo esc_attr( $class ); ?>"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></div>
<!-- /wp:button -->
	<?php
}

/**
 * A URL the owner typed as text (a store link), or WhatsApp with a message
 * when it is empty.
 *
 * @param string $key     Text key.
 * @param string $message WhatsApp message.
 * @param string $lang    'en' or 'ar'.
 * @return string
 */
function tothiq_persona_text_url( $key, $message, $lang ) {
	$url = trim( tothiq_persona_text( $key, '', $lang ) );

	if ( '' !== $url && wp_http_validate_url( $url ) ) {
		return $url;
	}

	return tothiq_persona_whatsapp_href( tothiq_persona_whatsapp(), $message );
}

/**
 * The webinar's start as a DateTimeImmutable in the site's timezone, from
 * the "webinar_start" text ("2026-10-14 19:00"). Null when not set or not valid.
 *
 * @param string $lang 'en' or 'ar'.
 * @return DateTimeImmutable|null
 */
function tothiq_persona_webinar_start( $lang ) {
	$value = tothiq_persona_latin_digits( trim( tothiq_persona_text( 'webinar_start', tothiq_persona_webinar_default_start(), $lang ) ) );
	$date  = DateTimeImmutable::createFromFormat( 'Y-m-d H:i', $value, wp_timezone() );

	return $date ? $date : null;
}

/**
 * Demo start: three weeks from today at 19:00, so the demo countdown never
 * runs out.
 *
 * @return string
 */
function tothiq_persona_webinar_default_start() {
	$date = new DateTimeImmutable( 'now', wp_timezone() );

	return $date->modify( '+20 days' )->format( 'Y-m-d' ) . ' 19:00';
}

/**
 * "Add to calendar" link (Google Calendar) for the webinar.
 *
 * @param string $title Webinar title.
 * @param string $lang  'en' or 'ar'.
 * @return string
 */
function tothiq_persona_calendar_url( $title, $lang ) {
	$start = tothiq_persona_webinar_start( $lang );
	if ( ! $start ) {
		return '';
	}

	$minutes = max( 15, (int) tothiq_persona_text( 'webinar_minutes', '60', $lang ) );
	$utc     = new DateTimeZone( 'UTC' );
	$from    = $start->setTimezone( $utc );
	$to      = $from->modify( '+' . $minutes . ' minutes' );

	return add_query_arg(
		array(
			'action' => 'TEMPLATE',
			'text'   => rawurlencode( $title ),
			'dates'  => $from->format( 'Ymd\THis\Z' ) . '/' . $to->format( 'Ymd\THis\Z' ),
		),
		'https://calendar.google.com/calendar/render'
	);
}

/**
 * The countdown's four boxes, with the target time for the browser.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string HTML.
 */
function tothiq_persona_countdown_html( $lang ) {
	$start = tothiq_persona_webinar_start( $lang );
	if ( ! $start ) {
		return '';
	}

	$left  = max( 0, $start->getTimestamp() - time() );
	$parts = array(
		array( intdiv( $left, 86400 ), tothiq_persona_t( __( 'days', 'tothiq-persona' ), _x( 'يوم', 'Arabic version of: days', 'tothiq-persona' ), $lang ), 'd' ),
		array( intdiv( $left % 86400, 3600 ), tothiq_persona_t( __( 'hours', 'tothiq-persona' ), _x( 'ساعة', 'Arabic version of: hours', 'tothiq-persona' ), $lang ), 'h' ),
		array( intdiv( $left % 3600, 60 ), tothiq_persona_t( __( 'min', 'tothiq-persona' ), _x( 'دقيقة', 'Arabic version of: min', 'tothiq-persona' ), $lang ), 'm' ),
		array( $left % 60, tothiq_persona_t( __( 'sec', 'tothiq-persona' ), _x( 'ثانية', 'Arabic version of: sec', 'tothiq-persona' ), $lang ), 's' ),
	);

	$html = '';
	foreach ( $parts as $part ) {
		$html .= sprintf( '<span class="tothiq-countdown__part"><b data-unit="%1$s">%2$02d</b><small>%3$s</small></span>', esc_attr( $part[2] ), (int) $part[0], esc_html( $part[1] ) );
	}

	return '<span class="tothiq-countdown" data-countdown="' . esc_attr( (string) ( $start->getTimestamp() * 1000 ) ) . '">' . $html . '</span>';
}

/**
 * Landing pages swap one placeholder paragraph for the live countdown.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tothiq_persona_render_countdown( $content, $block ) {
	$classes = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';

	if ( ! in_array( 'tothiq-countdown-slot', preg_split( '/\s+/', trim( $classes ) ), true ) ) {
		return $content;
	}

	$lang = false !== strpos( $classes, 'tothiq-lang-ar' ) ? 'ar' : tothiq_persona_lang();

	return '<div class="' . esc_attr( 'wp-block-group ' . $classes ) . '">' . tothiq_persona_countdown_html( $lang ) . '</div>';
}
add_filter( 'render_block_core/group', 'tothiq_persona_render_countdown', 5, 2 );

/**
 * The small script for the countdown (webinar) and the size and shade
 * pickers (perfume, lipstick). Only on those pages.
 */
function tothiq_persona_landing_script() {
	if ( ! is_page() || ! in_array( get_page_template_slug(), array( 'page-webinar', 'page-perfume', 'page-lipstick' ), true ) ) {
		return;
	}

	wp_enqueue_script(
		'tothiq-persona-landing',
		get_template_directory_uri() . '/assets/js/landing.js',
		array(),
		TOTHIQ_PERSONA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'tothiq_persona_landing_script' );

/* ------------------------------------------------------------------ *
 * Perfume and lipstick: the pickers
 * ------------------------------------------------------------------ */

/**
 * A colour from the owner's list, or a fallback.
 *
 * @param string $value    Colour as typed.
 * @param string $fallback Fallback colour.
 * @return string
 */
function tothiq_persona_hex( $value, $fallback = '#b8436a' ) {
	$hex = sanitize_hex_color( trim( (string) $value ) );

	return $hex ? $hex : $fallback;
}

/**
 * Size buttons for the perfume page. Rows: array( size, price ).
 *
 * @param array $sizes Rows.
 * @return string HTML.
 */
function tothiq_persona_size_picker( array $sizes ) {
	$html = '';
	foreach ( array_values( $sizes ) as $i => $row ) {
		$size  = tothiq_persona_latin_digits( isset( $row[0] ) ? (string) $row[0] : '' );
		$price = tothiq_persona_latin_digits( isset( $row[1] ) ? (string) $row[1] : '' );
		$html .= sprintf(
			'<button type="button" class="tothiq-size%1$s" data-value="%2$s" data-price="%3$s" aria-pressed="%4$s"><strong>%5$s</strong><span>%6$s</span></button>',
			0 === $i ? ' is-on' : '',
			esc_attr( $size ),
			esc_attr( $price ),
			0 === $i ? 'true' : 'false',
			esc_html( $price ),
			esc_html( $size )
		);
	}

	return '<div class="tothiq-sizes" data-choice="size">' . $html . '</div>';
}

/**
 * Shade swatches grouped by family. Rows: array( family, name, colour ).
 *
 * @param array $shades Rows.
 * @return string HTML.
 */
function tothiq_persona_shade_picker( array $shades ) {
	$families = array();
	foreach ( array_values( $shades ) as $i => $row ) {
		$family                = isset( $row[0] ) ? (string) $row[0] : '';
		$families[ $family ][] = array( $i, isset( $row[1] ) ? (string) $row[1] : '', tothiq_persona_hex( isset( $row[2] ) ? $row[2] : '' ) );
	}

	$html = '';
	foreach ( $families as $family => $items ) {
		$buttons = '';
		foreach ( $items as $item ) {
			$buttons .= sprintf(
				'<button type="button" class="tothiq-swatch%1$s" style="--tothiq-swatch:%2$s" data-value="%3$s" data-color="%2$s" aria-pressed="%4$s" aria-label="%3$s" title="%3$s"></button>',
				0 === $item[0] ? ' is-on' : '',
				esc_attr( $item[2] ),
				esc_attr( $item[1] ),
				0 === $item[0] ? 'true' : 'false'
			);
		}
		$html .= '<div class="tothiq-shade-family"><span>' . esc_html( $family ) . '</span><div>' . $buttons . '</div></div>';
	}

	return '<div class="tothiq-shades" data-choice="shade">' . $html . '</div>';
}

/**
 * A lipstick stroke, as on a swatch card.
 *
 * @param string $color Colour, or '' to follow the chosen shade.
 * @return string SVG.
 */
function tothiq_persona_stroke_svg( $color = '' ) {
	$fill = '' !== $color ? ' style="fill:' . esc_attr( $color ) . '"' : '';

	return '<svg class="tothiq-stroke" viewBox="0 0 120 40" aria-hidden="true" focusable="false"><path' . $fill . ' d="M8 26C30 8 70 8 112 16 90 30 40 34 8 26Z"/></svg>';
}

/**
 * The chosen shade on each skin tone. Rows: array( label, colour ).
 *
 * @param array $tones Rows.
 * @return string HTML.
 */
function tothiq_persona_skin_tones( array $tones ) {
	$html = '';
	foreach ( array_values( $tones ) as $i => $row ) {
		$color = tothiq_persona_hex( isset( $row[1] ) ? $row[1] : '', '#d9a582' );
		$html .= sprintf(
			'<div class="tothiq-tone%1$s" style="background:%2$s">%3$s<span>%4$s</span></div>',
			$i >= 2 ? ' is-deep' : '',
			esc_attr( $color ),
			tothiq_persona_stroke_svg(),
			esc_html( isset( $row[0] ) ? (string) $row[0] : '' )
		);
	}

	return '<div class="tothiq-tones">' . $html . '</div>';
}

/**
 * Every shade on the lightest and the deepest skin tone.
 *
 * @param array $shades Shade rows.
 * @param array $tones  Skin tone rows.
 * @return string HTML.
 */
function tothiq_persona_shade_grid( array $shades, array $tones ) {
	$tones = array_values( $tones );
	$light = tothiq_persona_hex( isset( $tones[0][1] ) ? $tones[0][1] : '', '#f1d3c0' );
	$deep  = tothiq_persona_hex( isset( $tones[ count( $tones ) - 1 ][1] ) ? $tones[ count( $tones ) - 1 ][1] : '', '#6e4330' );

	$html = '';
	foreach ( $shades as $row ) {
		$name  = isset( $row[1] ) ? (string) $row[1] : '';
		$color = tothiq_persona_hex( isset( $row[2] ) ? $row[2] : '' );
		$html .= sprintf(
			'<button type="button" class="tothiq-shade-card" data-choice-pick="shade" data-value="%1$s"><span class="tothiq-shade-card__skin" style="background:%3$s">%5$s</span><span class="tothiq-shade-card__skin" style="background:%4$s">%5$s</span><strong>%2$s</strong><small>%6$s</small></button>',
			esc_attr( $name ),
			esc_html( $name ),
			esc_attr( $light ),
			esc_attr( $deep ),
			tothiq_persona_stroke_svg( $color ),
			esc_html( isset( $row[0] ) ? (string) $row[0] : '' )
		);
	}

	return '<div class="tothiq-shade-grid">' . $html . '</div>';
}

/**
 * The lipstick drawing; its bullet takes the chosen shade. An uploaded
 * product photo (Tothiq Pro) replaces it.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string HTML.
 */
function tothiq_persona_lipstick_image( $lang ) {
	$default = get_theme_file_uri( 'assets/images/lipstick.svg' );
	$photo   = tothiq_persona_photo( 'lipstick', 'images/lipstick.svg', tothiq_persona_text( 'lipstick_name', '', $lang ) );

	if ( $photo['url'] !== $default ) {
		return '<img class="tothiq-product__photo" src="' . esc_url( $photo['url'] ) . '" alt="' . esc_attr( $photo['alt'] ) . '">';
	}

	return '<svg class="tothiq-lipstick" viewBox="0 0 200 420" role="img" aria-label="' . esc_attr( $photo['alt'] ) . '"><defs><linearGradient id="tothiq-lip-shade" x1="0" x2="1"><stop offset="0" stop-color="#000" stop-opacity=".28"/><stop offset=".4" stop-color="#fff" stop-opacity=".22"/><stop offset="1" stop-color="#000" stop-opacity=".22"/></linearGradient><linearGradient id="tothiq-lip-gold" x1="0" x2="1"><stop offset="0" stop-color="#a88a64"/><stop offset=".45" stop-color="#eadbc2"/><stop offset="1" stop-color="#96774f"/></linearGradient></defs><path class="tothiq-lipstick__bullet" d="M64 150V72q0-28 36-52l36 24v106z"/><path d="M64 150V72q0-28 36-52l36 24v106z" fill="url(#tothiq-lip-shade)"/><rect x="54" y="146" width="92" height="64" rx="3" fill="url(#tothiq-lip-gold)"/><rect x="48" y="206" width="104" height="196" rx="4" fill="#161113"/><rect x="48" y="206" width="104" height="196" rx="4" fill="url(#tothiq-lip-shade)" opacity=".5"/></svg>';
}
