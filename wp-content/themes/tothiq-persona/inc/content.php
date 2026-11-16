<?php
/**
 * Content hooks.
 *
 * The home page sections ship with consultant demo copy in both languages.
 * Every list (facts, clients, services, steps, stats, quotes, questions) and
 * the main headings pass through a filter first, so a plugin — Tothiq Pro's
 * content editor and goal packs (course, webinar, book) — can supply the owner's own
 * words without editing templates. With nothing hooked in, the theme shows
 * its defaults.
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

/**
 * A section's list of items, after plugins have had their say.
 *
 * @param string $section Section key: facts, clients, services, steps, stats, quotes, faq.
 * @param array  $items   The theme's default items, in the pattern's own shape.
 * @param string $lang    'en' or 'ar'.
 * @return array
 */
function tothiq_persona_items( $section, array $items, $lang ) {
	/**
	 * Filters the items a home page section shows.
	 *
	 * Return the same shape as the defaults; an empty or non-array value
	 * keeps the defaults, so a section is never left blank by mistake.
	 *
	 * @param array  $items   Default items.
	 * @param string $section Section key.
	 * @param string $lang    'en' or 'ar'.
	 */
	$filtered = apply_filters( 'tothiq_persona_items', $items, $section, $lang );

	return is_array( $filtered ) && $filtered ? array_values( $filtered ) : $items;
}

/**
 * A section heading or line of copy, after plugins have had their say.
 *
 * @param string $key     Text key, e.g. services_heading.
 * @param string $default The theme's default text in that language.
 * @param string $lang    'en' or 'ar'.
 * @return string
 */
function tothiq_persona_text( $key, $default, $lang ) {
	/**
	 * Filters a line of home page copy.
	 *
	 * @param string $default Default text.
	 * @param string $key     Text key.
	 * @param string $lang    'en' or 'ar'.
	 */
	$text = apply_filters( 'tothiq_persona_text', $default, $key, $lang );

	return is_string( $text ) && '' !== trim( $text ) ? $text : $default;
}

/**
 * A home page photo: the owner's own when a plugin supplies one, otherwise
 * the bundled demo photo.
 *
 * @param string $slot    Photo slot: hero.
 * @param string $default Path under assets/, e.g. images/portrait.webp.
 * @param string $alt     Default alternative text.
 * @return array{url:string,alt:string}
 */
function tothiq_persona_photo( $slot, $default, $alt ) {
	/**
	 * Filters a home page photo.
	 *
	 * @param array  $photo array( 'url' => ..., 'alt' => ... ).
	 * @param string $slot  Photo slot.
	 */
	$photo = apply_filters(
		'tothiq_persona_photo',
		array(
			'url' => get_theme_file_uri( 'assets/' . $default ),
			'alt' => $alt,
		),
		$slot
	);

	if ( ! is_array( $photo ) || empty( $photo['url'] ) ) {
		$photo = array( 'url' => get_theme_file_uri( 'assets/' . $default ), 'alt' => $alt );
	}

	return array(
		'url' => (string) $photo['url'],
		'alt' => isset( $photo['alt'] ) ? (string) $photo['alt'] : $alt,
	);
}

/**
 * Headline markup: *word* marks the words shown in the accent colour, so
 * the owner's own headline can highlight words the same way the demo does.
 *
 * @param string $text Plain text with optional *highlight* markers.
 * @return string HTML.
 */
function tothiq_persona_highlight( $text ) {
	$mark = '<mark class="has-inline-color has-accent-color" style="background-color:rgba(0, 0, 0, 0)">';

	return preg_replace( '/\*([^*]+)\*/u', $mark . '$1</mark>', esc_html( $text ) );
}

/**
 * A list stored either as an array or as text with one item per line.
 *
 * @param string|array $value Lines.
 * @return string[]
 */
function tothiq_persona_lines( $value ) {
	$lines = is_array( $value ) ? $value : preg_split( '/\r\n|\r|\n/', (string) $value );

	return array_values( array_filter( array_map( 'trim', array_map( 'strval', $lines ) ), 'strlen' ) );
}
