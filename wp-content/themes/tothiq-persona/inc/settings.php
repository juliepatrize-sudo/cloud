<?php
/**
 * Personal details — the single source of truth for the facts a personal
 * site repeats everywhere: name, role, short bio, city, phone, WhatsApp,
 * booking link and social profiles.
 *
 * Stored in the same option every Tothiq theme uses, `tothiq_site`, so the
 * details survive a switch between Tothiq themes and Tothiq Pro's setup
 * wizard writes the same record. The name is the WordPress site title and the
 * role is the tagline, so neither has a second copy that could drift.
 *
 * Patterns never print these values. They bind to them through the Block
 * Bindings API (inc/bindings.php), so a change here updates the header, hero,
 * buttons and footer on the next page load.
 *
 * @package TothiqPersona
 */

defined( 'ABSPATH' ) || exit;

/**
 * Name of the option that holds the details. Shared by every Tothiq theme.
 */
const TOTHIQ_PERSONA_OPTION = 'tothiq_site';

/**
 * Stored keys and how each is sanitised.
 *
 * `company_name_ar` and `about_ar` keep the names Tothiq Service uses for the
 * Arabic site title and Arabic tagline, so both themes read one record.
 *
 * @return array<string, callable>
 */
function tothiq_persona_setting_fields() {
	return array(
		'language'        => 'tothiq_persona_sanitize_language',
		'company_name_ar' => 'sanitize_text_field',
		'about_ar'        => 'sanitize_text_field',
		'bio'             => 'sanitize_textarea_field',
		'bio_ar'          => 'sanitize_textarea_field',
		'location'        => 'sanitize_text_field',
		'location_ar'     => 'sanitize_text_field',
		'phone'           => 'tothiq_persona_sanitize_phone',
		'whatsapp'        => 'tothiq_persona_sanitize_phone',
		'booking_url'     => 'esc_url_raw',
		'linkedin'        => 'esc_url_raw',
		'x'               => 'esc_url_raw',
		'instagram'       => 'esc_url_raw',
		'youtube'         => 'esc_url_raw',
	);
}

/**
 * Demo values shown until the owner fills in their own.
 *
 * @return array<string, string>
 */
function tothiq_persona_setting_defaults() {
	return array(
		'phone'       => '+965 0000 0000',
		'location'    => 'Kuwait City',
		'location_ar' => 'مدينة الكويت',
	);
}

/**
 * Social profiles the footer can list, in order: key => label.
 *
 * @return array<string, string>
 */
function tothiq_persona_social_networks() {
	return array(
		'linkedin'  => 'LinkedIn',
		'x'         => 'X',
		'instagram' => 'Instagram',
		'youtube'   => 'YouTube',
	);
}

/**
 * Raw stored value for one key, or '' when unset.
 *
 * @param string $key Setting key.
 * @return string
 */
function tothiq_persona_raw( $key ) {
	$stored = get_option( TOTHIQ_PERSONA_OPTION, array() );

	return is_array( $stored ) && isset( $stored[ $key ] ) ? trim( (string) $stored[ $key ] ) : '';
}

/**
 * Site language: 'en', 'ar' or 'both'. Follows the WordPress locale until set.
 *
 * @return string
 */
function tothiq_persona_site_language() {
	$language = tothiq_persona_raw( 'language' );

	if ( in_array( $language, array( 'en', 'ar', 'both' ), true ) ) {
		return $language;
	}

	return 0 === strpos( get_locale(), 'ar' ) ? 'ar' : 'en';
}

/**
 * Language a section renders in when it does not ask for one: the language
 * of the page being read, then the site language.
 *
 * @param string|null $lang Explicit language, or null for the default.
 * @return string 'en' or 'ar'.
 */
function tothiq_persona_lang( $lang = null ) {
	if ( 'ar' === $lang || 'en' === $lang ) {
		return $lang;
	}

	$request = tothiq_persona_request_lang();
	if ( null !== $request ) {
		return $request;
	}

	return 'ar' === tothiq_persona_site_language() ? 'ar' : 'en';
}

/* --------------------------------------------------------------------------
 * Two languages on one site
 *
 * WordPress itself runs one language per site. With Polylang (free) or WPML
 * each page gets an Arabic twin; the theme then follows the language of the
 * page being read, so header, sections, menu and footer switch together.
 * ----------------------------------------------------------------------- */

/**
 * Whether a multilingual plugin is running.
 *
 * @return bool
 */
function tothiq_persona_multilingual() {
	return function_exists( 'pll_current_language' ) || has_filter( 'wpml_current_language' );
}

/**
 * Language of the page being read, from Polylang or WPML; null without one.
 *
 * @return string|null 'en', 'ar' or null.
 */
function tothiq_persona_request_lang() {
	$code = '';

	if ( function_exists( 'pll_current_language' ) ) {
		$code = (string) pll_current_language( 'slug' );
	} elseif ( has_filter( 'wpml_current_language' ) ) {
		$code = (string) apply_filters( 'wpml_current_language', null );
	}

	if ( '' === $code ) {
		return null;
	}

	return 0 === strpos( $code, 'ar' ) ? 'ar' : 'en';
}

/**
 * The multilingual plugin's code for 'en' or 'ar' (e.g. "ar", "en", "en-gb").
 *
 * @param string $lang 'en' or 'ar'.
 * @return string Code, or '' when there is no plugin or no such language.
 */
function tothiq_persona_plugin_lang_code( $lang ) {
	$codes = array();

	if ( function_exists( 'pll_languages_list' ) ) {
		$codes = (array) pll_languages_list( array( 'fields' => 'slug' ) );
	} elseif ( has_filter( 'wpml_active_languages' ) ) {
		$codes = array_keys( (array) apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) ) );
	}

	foreach ( $codes as $code ) {
		$is_ar = 0 === strpos( (string) $code, 'ar' );
		if ( ( 'ar' === $lang ) === $is_ar ) {
			return (string) $code;
		}
	}

	return '';
}

/**
 * Home page address in a language.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_home_url( $lang ) {
	$code = tothiq_persona_plugin_lang_code( $lang );

	if ( '' !== $code && function_exists( 'pll_home_url' ) ) {
		return (string) pll_home_url( $code );
	}
	if ( '' !== $code && has_filter( 'wpml_home_url' ) ) {
		return (string) apply_filters( 'wpml_permalink', home_url( '/' ), $code );
	}

	return home_url( '/' );
}

/**
 * A language-dependent detail, falling back to the other language's value
 * before the demo default — the owner's real data beats sample data.
 *
 * @param string $key  Base key, e.g. 'location' or 'bio'.
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_localized( $key, $lang ) {
	$defaults = tothiq_persona_setting_defaults();
	$primary  = 'ar' === $lang ? $key . '_ar' : $key;
	$other    = 'ar' === $lang ? $key : $key . '_ar';

	$value = tothiq_persona_raw( $primary );
	if ( '' === $value ) {
		$value = tothiq_persona_raw( $other );
	}
	if ( '' === $value && isset( $defaults[ $primary ] ) ) {
		$value = $defaults[ $primary ];
	}

	return $value;
}

/**
 * Person's name in the given language. English is the site title.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_name( $lang ) {
	$name = get_bloginfo( 'name' );

	if ( 'ar' === $lang && '' !== tothiq_persona_raw( 'company_name_ar' ) ) {
		$name = tothiq_persona_raw( 'company_name_ar' );
	}

	return $name;
}

/**
 * Role or title, e.g. "Strategy and growth consultant". English is the
 * WordPress tagline; each language falls back to the demo role.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_role( $lang ) {
	$role = 'ar' === $lang ? tothiq_persona_raw( 'about_ar' ) : trim( (string) get_bloginfo( 'description' ) );

	if ( '' === $role ) {
		$role = tothiq_persona_t(
			__( 'Strategy and growth consultant', 'tothiq-persona' ),
			_x( 'مستشارة استراتيجية ونمو', 'Arabic version of: Strategy and growth consultant', 'tothiq-persona' ),
			$lang
		);
	}

	return $role;
}

/**
 * One or two sentences about the person, for the footer.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_bio( $lang ) {
	$bio = tothiq_persona_localized( 'bio', $lang );

	if ( '' === $bio ) {
		$bio = tothiq_persona_t(
			__( 'I work with founders and leadership teams on growth, operations and digital transformation, in English and Arabic.', 'tothiq-persona' ),
			_x( 'أعمل مع المؤسسين وفرق القيادة على النمو والتشغيل والتحول الرقمي، بالعربية والإنجليزية.', 'Arabic version of: I work with founders and leadership teams on growth, operat', 'tothiq-persona' ),
			$lang
		);
	}

	return $bio;
}

/**
 * Phone number as displayed.
 *
 * @return string
 */
function tothiq_persona_phone() {
	$phone = tothiq_persona_raw( 'phone' );

	return '' !== $phone ? $phone : tothiq_persona_setting_defaults()['phone'];
}

/**
 * WhatsApp number; the phone number when no separate one is set.
 *
 * @return string
 */
function tothiq_persona_whatsapp() {
	$whatsapp = tothiq_persona_raw( 'whatsapp' );

	return '' !== $whatsapp ? $whatsapp : tothiq_persona_phone();
}

/**
 * Where "Book a call" goes: the owner's booking page (Calendly, Cal.com, a
 * Google appointment page…), or WhatsApp with a request when there is none.
 *
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_booking_url( $lang ) {
	$url = tothiq_persona_raw( 'booking_url' );

	if ( '' !== $url ) {
		return $url;
	}

	return tothiq_persona_whatsapp_href(
		tothiq_persona_whatsapp(),
		tothiq_persona_t( __( 'Hello, I would like to book a call.', 'tothiq-persona' ), _x( 'مرحبا، أود حجز مكالمة.', 'Arabic version of: Hello, I would like to book a call.', 'tothiq-persona' ), $lang )
	);
}

/**
 * Social profile links the owner has filled in: array of [url, label].
 *
 * @return array<int, array{0:string,1:string}>
 */
function tothiq_persona_socials() {
	$links = array();

	foreach ( tothiq_persona_social_networks() as $key => $label ) {
		$url = tothiq_persona_raw( $key );
		if ( '' !== $url ) {
			$links[] = array( $url, $label );
		}
	}

	return $links;
}

/**
 * Section anchor, for menus that jump down the page. Arabic sections get an
 * -ar suffix only when an English and an Arabic copy share one page.
 *
 * @param string $base Anchor name.
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_anchor( $base, $lang ) {
	return 'ar' === $lang && 'both' === tothiq_persona_site_language() && ! tothiq_persona_multilingual() ? $base . '-ar' : $base;
}

/**
 * Copy for the chosen language. English goes through the translation system
 * at the call site; Arabic is written, not machine-mirrored.
 *
 * @param string $en   English text (already passed through __()).
 * @param string $ar   Arabic text.
 * @param string $lang 'en' or 'ar'.
 * @return string
 */
function tothiq_persona_t( $en, $ar, $lang ) {
	return 'ar' === $lang ? $ar : $en;
}

/* --------------------------------------------------------------------------
 * Sanitisers
 * ----------------------------------------------------------------------- */

/**
 * Language: one of en, ar, both.
 *
 * @param string $value Submitted value.
 * @return string
 */
function tothiq_persona_sanitize_language( $value ) {
	return in_array( $value, array( 'en', 'ar', 'both' ), true ) ? $value : 'en';
}

/**
 * Phone: Latin digits, a leading +, spaces, dashes and brackets only.
 *
 * @param string $value Submitted value.
 * @return string
 */
function tothiq_persona_sanitize_phone( $value ) {
	$value = tothiq_persona_latin_digits( sanitize_text_field( (string) $value ) );

	return trim( preg_replace( '/[^0-9+\-\s()]/', '', $value ) );
}

/* --------------------------------------------------------------------------
 * Settings panel — Appearance → Customize → Your details.
 * ----------------------------------------------------------------------- */

/**
 * Register the Your details panel.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */
function tothiq_persona_customize_register( $wp_customize ) {
	$defaults = tothiq_persona_setting_defaults();

	$wp_customize->add_section(
		'tothiq_site',
		array(
			'title'       => __( 'Your details', 'tothiq-persona' ),
			'description' => __( 'Enter these once. The header, hero, buttons and footer all update from here.', 'tothiq-persona' ),
			'priority'    => 20,
		)
	);

	foreach ( tothiq_persona_setting_fields() as $key => $sanitizer ) {
		$wp_customize->add_setting(
			TOTHIQ_PERSONA_OPTION . '[' . $key . ']',
			array(
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'default'           => 'language' === $key ? tothiq_persona_site_language() : '',
				'sanitize_callback' => $sanitizer,
				'transport'         => 'refresh',
			)
		);
	}

	$show_en = static function () {
		return 'ar' !== tothiq_persona_site_language();
	};
	$show_ar = static function () {
		return 'en' !== tothiq_persona_site_language();
	};

	// Name is the site title and role the tagline — shown here so every detail sits in one place.
	$wp_customize->add_control(
		'tothiq_site_blogname',
		array(
			'label'    => __( 'Your name', 'tothiq-persona' ),
			'section'  => 'tothiq_site',
			'settings' => 'blogname',
			'priority' => 15,
		)
	);
	$wp_customize->add_control(
		'tothiq_site_blogdescription',
		array(
			'label'       => __( 'Your role', 'tothiq-persona' ),
			'description' => __( 'A few words under your name, e.g. Strategy and growth consultant.', 'tothiq-persona' ),
			'section'     => 'tothiq_site',
			'settings'    => 'blogdescription',
			'priority'    => 25,
		)
	);

	$controls = array(
		'language'        => array(
			'label'       => __( 'Site language', 'tothiq-persona' ),
			'description' => __( 'For English and Arabic on one site, install the free Polylang plugin and add Arabic as a second language: every page gets an Arabic twin and the theme adds a language switcher.', 'tothiq-persona' ),
			'type'        => 'select',
			'choices'     => array(
				'en'   => __( 'English', 'tothiq-persona' ),
				'ar'   => __( 'Arabic', 'tothiq-persona' ),
				'both' => __( 'English and Arabic', 'tothiq-persona' ),
			),
			'priority'    => 10,
		),
		'company_name_ar' => array(
			'label'           => __( 'Your name in Arabic', 'tothiq-persona' ),
			'active_callback' => $show_ar,
			'priority'        => 20,
		),
		'about_ar'        => array(
			'label'           => __( 'Your role in Arabic', 'tothiq-persona' ),
			'active_callback' => $show_ar,
			'priority'        => 30,
		),
		'bio'             => array(
			'label'           => __( 'Short bio', 'tothiq-persona' ),
			'description'     => __( 'One or two sentences for the footer.', 'tothiq-persona' ),
			'type'            => 'textarea',
			'active_callback' => $show_en,
			'priority'        => 40,
		),
		'bio_ar'          => array(
			'label'           => __( 'Short bio in Arabic', 'tothiq-persona' ),
			'type'            => 'textarea',
			'active_callback' => $show_ar,
			'priority'        => 50,
		),
		'location'        => array(
			'label'           => __( 'City', 'tothiq-persona' ),
			'input_attrs'     => array( 'placeholder' => $defaults['location'] ),
			'active_callback' => $show_en,
			'priority'        => 60,
		),
		'location_ar'     => array(
			'label'           => __( 'City in Arabic', 'tothiq-persona' ),
			'input_attrs'     => array( 'placeholder' => $defaults['location_ar'] ),
			'active_callback' => $show_ar,
			'priority'        => 70,
		),
		'phone'           => array(
			'label'       => __( 'Phone number', 'tothiq-persona' ),
			'type'        => 'tel',
			'description' => __( 'In international form, e.g. +965 2222 3333.', 'tothiq-persona' ),
			'input_attrs' => array( 'placeholder' => $defaults['phone'] ),
			'priority'    => 80,
		),
		'whatsapp'        => array(
			'label'       => __( 'WhatsApp number', 'tothiq-persona' ),
			'type'        => 'tel',
			'description' => __( 'Leave empty if it is the same as the phone number.', 'tothiq-persona' ),
			'priority'    => 90,
		),
		'booking_url'     => array(
			'label'       => __( 'Booking page', 'tothiq-persona' ),
			'type'        => 'url',
			'description' => __( 'Your Calendly, Cal.com or other booking link. Without one, "Book a call" opens WhatsApp.', 'tothiq-persona' ),
			'priority'    => 100,
		),
	);

	$priority = 110;
	foreach ( tothiq_persona_social_networks() as $key => $label ) {
		$controls[ $key ] = array(
			'label'    => $label,
			'type'     => 'url',
			'priority' => $priority,
		);
		$priority += 10;
	}

	foreach ( $controls as $key => $args ) {
		$wp_customize->add_control(
			'tothiq_site_' . $key,
			array_merge(
				array(
					'section'  => 'tothiq_site',
					'settings' => TOTHIQ_PERSONA_OPTION . '[' . $key . ']',
					'type'     => 'text',
				),
				$args
			)
		);
	}
}
add_action( 'customize_register', 'tothiq_persona_customize_register' );
