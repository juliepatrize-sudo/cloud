<?php
/**
 * Title: Lipstick — closing band
 * Slug: tothiq-persona/lipstick-cta
 * Categories: tothiq-persona
 * Description: A soft band with the bundle offer and the order button.
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
$tothiq_name  = tothiq_persona_text( 'lipstick_name', tothiq_persona_t( __( 'Velvet Matte Lipstick', 'tothiq-persona' ), _x( 'أحمر شفاه مخملي مطفي', 'Arabic version of: Velvet Matte Lipstick', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_shade = isset( $tothiq_lipstick_shades[0][1] ) ? $tothiq_lipstick_shades[0][1] : '';
$tothiq_msg   = array( 'msg' => sprintf( /* translators: 1: product, 2: shade. */ tothiq_persona_t( __( 'Hello, I would like to order %1$s in the shade %2$s.', 'tothiq-persona' ), _x( 'مرحبا، أرغب في طلب %1$s باللون %2$s.', 'Arabic version of: Hello, I would like to order %1$s in the shade %2$s.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_name, $tothiq_shade ) );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-lipstick-cta', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'order', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-soft-band","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-soft-band"><!-- wp:group {"className":"tothiq-soft-band__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-soft-band__text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_latin_digits( tothiq_persona_text( 'lipstick_cta_heading', tothiq_persona_t( __( 'Pick any 3 for KD 18', 'tothiq-persona' ), _x( 'أي 3 ألوان بـ 18 د.ك', 'Arabic version of: Pick any 3 for KD 18', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-muted"} -->
<p class="tothiq-muted"><?php echo esc_html( tothiq_persona_text( 'lipstick_cta_text', tothiq_persona_t( __( 'Mix shades from any family. Tell us your three on WhatsApp.', 'tothiq-persona' ), _x( 'اختاري من أي مجموعة، وأرسلي لنا الألوان الثلاثة عبر واتساب.', 'Arabic version of: Mix shades from any family. Tell us your three on WhatsApp.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"tothiq-choice-order"} -->
<div class="wp-block-buttons tothiq-choice-order"><?php tothiq_persona_button( tothiq_persona_text( 'lipstick_button', tothiq_persona_t( __( 'Order this shade on WhatsApp', 'tothiq-persona' ), _x( 'اطلبي هذا اللون عبر واتساب', 'Arabic version of: Order this shade on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'buy', $tothiq_msg ); ?>
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
