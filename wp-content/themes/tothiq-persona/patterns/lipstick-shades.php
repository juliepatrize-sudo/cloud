<?php
/**
 * Title: Lipstick — every shade
 * Slug: tothiq-persona/lipstick-shades
 * Categories: tothiq-persona
 * Description: Every shade on the lightest and the deepest skin tone; tapping one picks it at the top of the page.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_lipstick_shades = tothiq_persona_items(
	'lipstick_shades',
	array(
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Rose Taif', 'tothiq-persona' ), _x( 'ورد طائفي', 'Arabic version of: Rose Taif', 'tothiq-persona' ), $tothiq_lang ),
			'#b8436a',
		),
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Pink Pearl', 'tothiq-persona' ), _x( 'وردي لؤلؤي', 'Arabic version of: Pink Pearl', 'tothiq-persona' ), $tothiq_lang ),
			'#d77d93',
		),
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Mauve', 'tothiq-persona' ), _x( 'موف', 'Arabic version of: Mauve', 'tothiq-persona' ), $tothiq_lang ),
			'#9c5a6e',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Sand', 'tothiq-persona' ), _x( 'رملي', 'Arabic version of: Sand', 'tothiq-persona' ), $tothiq_lang ),
			'#b9826b',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Mocha', 'tothiq-persona' ), _x( 'موكا', 'Arabic version of: Mocha', 'tothiq-persona' ), $tothiq_lang ),
			'#7a4a3a',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Peach', 'tothiq-persona' ), _x( 'خوخي', 'Arabic version of: Peach', 'tothiq-persona' ), $tothiq_lang ),
			'#d98c75',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Dates', 'tothiq-persona' ), _x( 'تمر', 'Arabic version of: Dates', 'tothiq-persona' ), $tothiq_lang ),
			'#8e4a3a',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Classic Red', 'tothiq-persona' ), _x( 'أحمر كلاسيكي', 'Arabic version of: Classic Red', 'tothiq-persona' ), $tothiq_lang ),
			'#b3172f',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Brick', 'tothiq-persona' ), _x( 'طوبي', 'Arabic version of: Brick', 'tothiq-persona' ), $tothiq_lang ),
			'#a0412e',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Cherry', 'tothiq-persona' ), _x( 'كرزي', 'Arabic version of: Cherry', 'tothiq-persona' ), $tothiq_lang ),
			'#8e1428',
		),
		array(
			tothiq_persona_t( __( 'Berries', 'tothiq-persona' ), _x( 'التوتي', 'Arabic version of: Berries', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Berry', 'tothiq-persona' ), _x( 'توتي', 'Arabic version of: Berry', 'tothiq-persona' ), $tothiq_lang ),
			'#6e1f38',
		),
		array(
			tothiq_persona_t( __( 'Berries', 'tothiq-persona' ), _x( 'التوتي', 'Arabic version of: Berries', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Plum', 'tothiq-persona' ), _x( 'برقوقي', 'Arabic version of: Plum', 'tothiq-persona' ), $tothiq_lang ),
			'#4f1f35',
		),
	),
	$tothiq_lang
);
$tothiq_skin_tones = tothiq_persona_items(
	'skin_tones',
	array(
		array(
			tothiq_persona_t( __( 'Fair', 'tothiq-persona' ), _x( 'فاتحة', 'Arabic version of: Fair', 'tothiq-persona' ), $tothiq_lang ),
			'#f1d3c0',
		),
		array(
			tothiq_persona_t( __( 'Medium', 'tothiq-persona' ), _x( 'متوسطة', 'Arabic version of: Medium', 'tothiq-persona' ), $tothiq_lang ),
			'#d9a582',
		),
		array(
			tothiq_persona_t( __( 'Tan', 'tothiq-persona' ), _x( 'حنطية', 'Arabic version of: Tan', 'tothiq-persona' ), $tothiq_lang ),
			'#b07650',
		),
		array(
			tothiq_persona_t( __( 'Deep', 'tothiq-persona' ), _x( 'داكنة', 'Arabic version of: Deep', 'tothiq-persona' ), $tothiq_lang ),
			'#6e4330',
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-lipstick-shades', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'shades', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'shades_eyebrow', tothiq_persona_t( __( 'Every shade', 'tothiq-persona' ), _x( 'كل الألوان', 'Arabic version of: Every shade', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'shades_heading', tothiq_persona_t( __( 'Find yours by skin tone', 'tothiq-persona' ), _x( 'اختاري لونك حسب بشرتك', 'Arabic version of: Find yours by skin tone', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-muted"} -->
<p class="tothiq-muted"><?php echo esc_html( tothiq_persona_text( 'shades_hint', tothiq_persona_t( __( 'Tap a shade to choose it.', 'tothiq-persona' ), _x( 'اضغطي على أي لون لاختياره.', 'Arabic version of: Tap a shade to choose it.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<?php echo tothiq_persona_shade_grid( $tothiq_lipstick_shades, $tothiq_skin_tones ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
<!-- /wp:html -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
