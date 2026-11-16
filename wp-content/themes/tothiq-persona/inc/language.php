<?php
/**
 * Bilingual support.
 *
 * Arabic is treated as a first-class language here rather than a mirrored
 * copy of the English layout. This file carries the small amount of logic
 * that theme.json and templates cannot express on their own.
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

/**
 * Whether the current request is being rendered right-to-left.
 *
 * @return bool
 */
function tothiq_persona_is_rtl() {
	return function_exists( 'is_rtl' ) && is_rtl();
}

/**
 * Body classes that let CSS and patterns adapt per direction and script.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function tothiq_persona_body_class( $classes ) {
	$classes[] = tothiq_persona_is_rtl() ? 'is-rtl' : 'is-ltr';

	$locale = get_locale();
	if ( 0 === strpos( $locale, 'ar' ) ) {
		$classes[] = 'is-arabic';
	}

	return $classes;
}
add_filter( 'body_class', 'tothiq_persona_body_class' );

/**
 * Convert Arabic-Indic digits to Latin digits.
 *
 * Latin digits read better in Arabic UI for phone numbers, prices and
 * opening hours, and they stay selectable and dialable on mobile.
 *
 * @param string $text Text possibly containing Arabic-Indic digits.
 * @return string
 */
function tothiq_persona_latin_digits( $text ) {
	$arabic = array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩' );
	$latin  = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );

	return str_replace( $arabic, $latin, (string) $text );
}

/**
 * Build a tel: href from a human-readable phone number.
 *
 * @param string $number Phone number as displayed.
 * @return string
 */
function tothiq_persona_tel_href( $number ) {
	$number = tothiq_persona_latin_digits( $number );
	$number = preg_replace( '/[^0-9+]/', '', $number );

	return 'tel:' . $number;
}

/**
 * Build a WhatsApp link from a phone number and an optional prefilled message.
 *
 * @param string $number  Phone number in international form.
 * @param string $message Optional prefilled message.
 * @return string
 */
function tothiq_persona_whatsapp_href( $number, $message = '' ) {
	$number = tothiq_persona_latin_digits( $number );
	$number = preg_replace( '/[^0-9]/', '', $number );

	$url = 'https://wa.me/' . $number;

	if ( '' !== $message ) {
		$url = add_query_arg( 'text', rawurlencode( $message ), $url );
	}

	return $url;
}

/**
 * 24-hour times as the reader expects them: "8:00–18:00" becomes
 * "8 am to 6 pm" in English and "8 صباحا إلى 6 مساء" in Arabic, so the
 * morning time sits on the right in Arabic. Text without clock times is
 * returned unchanged, so an owner's own wording is kept.
 *
 * @param string $text Text that may hold times written 9:00 or 13:30.
 * @param string $lang 'en' or 'ar'.
 * @return string Plain text.
 */
function tothiq_persona_clock( $text, $lang ) {
	$text = tothiq_persona_latin_digits( (string) $text );
	$one  = static function ( $hour, $minute ) use ( $lang ) {
		$hour  = (int) $hour % 24;
		$shown = ( 0 === $hour % 12 ? 12 : $hour % 12 ) . ( '00' === $minute ? '' : ':' . $minute );
		if ( 'ar' === $lang ) {
			return $shown . ' ' . ( $hour < 12 ? 'صباحا' : ( $hour < 15 ? 'ظهرا' : 'مساء' ) );
		}
		return $shown . ' ' . ( $hour < 12 ? 'am' : 'pm' );
	};
	$text = (string) preg_replace_callback(
		'/(?<![\d:])(\d{1,2}):(\d{2})\s*(?:[\x{2013}\x{2014}-]|to|إلى)\s*(\d{1,2}):(\d{2})(?![\d:])/u',
		static function ( $m ) use ( $one, $lang ) {
			return $one( $m[1], $m[2] ) . ( 'ar' === $lang ? ' إلى ' : ' to ' ) . $one( $m[3], $m[4] );
		},
		$text
	);
	return (string) preg_replace_callback(
		'/(?<![\d:])(\d{1,2}):(\d{2})(?![\d:])(?!\s*(?:am|pm|صباحا|ظهرا|مساء))/u',
		static function ( $m ) use ( $one ) {
			return $one( $m[1], $m[2] );
		},
		$text
	);
}
