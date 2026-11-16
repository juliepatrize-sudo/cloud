<?php
/**
 * Title: Lipstick — top
 * Slug: tothiq-persona/lipstick-hero
 * Categories: tothiq-persona
 * Description: The lipstick large (its colour follows the chosen shade), then the name, rating, price, shade swatches by family, the chosen shade on four skin tones, Order on WhatsApp with the shade in the message, and three fold-out notes.
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
$tothiq_name  = tothiq_persona_text( 'lipstick_name', tothiq_persona_t( __( 'Velvet Matte Lipstick', 'tothiq-persona' ), _x( 'أحمر شفاه مخملي مطفي', 'Arabic version of: Velvet Matte Lipstick', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_shade = isset( $tothiq_lipstick_shades[0][1] ) ? $tothiq_lipstick_shades[0][1] : '';
$tothiq_color = tothiq_persona_hex( isset( $tothiq_lipstick_shades[0][2] ) ? $tothiq_lipstick_shades[0][2] : '' );
$tothiq_msg   = array( 'msg' => sprintf( /* translators: 1: product, 2: shade. */ tothiq_persona_t( __( 'Hello, I would like to order %1$s in the shade %2$s.', 'tothiq-persona' ), _x( 'مرحبا، أرغب في طلب %1$s باللون %2$s.', 'Arabic version of: Hello, I would like to order %1$s in the shade %2$s.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_name, $tothiq_shade ) );
$tothiq_cls = tothiq_persona_cls( 'tothiq-product-hero tothiq-product-hero--lipstick', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-product","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-product"><!-- wp:group {"className":"tothiq-product__stage","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-product__stage"><!-- wp:html -->
<div class="tothiq-product__canvas" data-shade-host style="--tothiq-shade:<?php echo esc_attr( $tothiq_color ); ?>"><?php echo tothiq_persona_lipstick_image( $tothiq_lang ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-product__info","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-product__info"><!-- wp:heading {"level":1,"className":"tothiq-product__title"} -->
<h1 class="wp-block-heading tothiq-product__title"><?php echo esc_html( $tothiq_name ); ?></h1>
<!-- /wp:heading -->
<?php
$tothiq_rating = tothiq_persona_latin_digits( tothiq_persona_text( 'lipstick_rating', '', $tothiq_lang ) );
if ( '' !== $tothiq_rating ) :
	?>
<!-- wp:paragraph {"className":"tothiq-product__rating"} -->
<p class="tothiq-product__rating"><span class="tothiq-stars" aria-hidden="true">★★★★★</span> <?php echo esc_html( $tothiq_rating ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
<!-- wp:paragraph {"className":"tothiq-product__price"} -->
<p class="tothiq-product__price"><?php echo esc_html( tothiq_persona_latin_digits( tothiq_persona_text( 'lipstick_price', tothiq_persona_t( __( 'KD 7', 'tothiq-persona' ), _x( '7 د.ك', 'Arabic version of: KD 7', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-product__lead"} -->
<p class="tothiq-product__lead"><?php echo esc_html( tothiq_persona_text( 'lipstick_lead', tothiq_persona_t( __( 'A soft matte that feels weightless, holds colour for 8 hours and does not dry your lips.', 'tothiq-persona' ), _x( 'لمسة مطفية ناعمة وخفيفة، تثبت 8 ساعات ولا تجفف الشفاه.', 'Arabic version of: A soft matte that feels weightless, holds colour for 8 hours', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="tothiq-product__label"><?php echo esc_html( tothiq_persona_text( 'lipstick_shade_label', tothiq_persona_t( __( 'Shade', 'tothiq-persona' ), _x( 'اللون', 'Arabic version of: Shade', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?>: <span data-choice-label="shade"><?php echo esc_html( $tothiq_shade ); ?></span></p>
<?php echo tothiq_persona_shade_picker( $tothiq_lipstick_shades ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
<p class="tothiq-product__label is-small"><?php echo esc_html( tothiq_persona_text( 'lipstick_tones_label', tothiq_persona_t( __( 'On four skin tones', 'tothiq-persona' ), _x( 'على أربع درجات بشرة', 'Arabic version of: On four skin tones', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<div data-shade-host style="--tothiq-shade:<?php echo esc_attr( $tothiq_color ); ?>"><?php echo tothiq_persona_skin_tones( $tothiq_skin_tones ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?></div>
<!-- /wp:html -->
<!-- wp:buttons {"className":"tothiq-choice-order tothiq-product__buy"} -->
<div class="wp-block-buttons tothiq-choice-order tothiq-product__buy"><?php tothiq_persona_button( tothiq_persona_text( 'lipstick_button', tothiq_persona_t( __( 'Order this shade on WhatsApp', 'tothiq-persona' ), _x( 'اطلبي هذا اللون عبر واتساب', 'Arabic version of: Order this shade on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'buy', $tothiq_msg ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"tothiq-product__note"} -->
<p class="tothiq-product__note"><?php echo esc_html( tothiq_persona_latin_digits( tothiq_persona_text( 'lipstick_note', tothiq_persona_t( __( 'Pay on delivery · Free delivery in Kuwait over KD 15', 'tothiq-persona' ), _x( 'الدفع عند الاستلام · توصيل مجاني داخل الكويت فوق 15 د.ك', 'Arabic version of: Pay on delivery · Free delivery in Kuwait over KD 15', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:details {"className":"tothiq-product__more","showContent":true} -->
<details class="wp-block-details tothiq-product__more" open><summary><?php echo esc_html( tothiq_persona_text( 'lipstick_finish_title', tothiq_persona_t( __( 'Finish and wear', 'tothiq-persona' ), _x( 'اللمسة والثبات', 'Arabic version of: Finish and wear', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'lipstick_finish_text', tothiq_persona_t( __( 'Velvet matte. Up to 8 hours; after eating, a light touch-up.', 'tothiq-persona' ), _x( 'مخملي مطفي. حتى 8 ساعات، مع لمسة خفيفة بعد الأكل.', 'Arabic version of: Velvet matte. Up to 8 hours; after eating, a light touch-up.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"tothiq-product__more"} -->
<details class="wp-block-details tothiq-product__more"><summary><?php echo esc_html( tothiq_persona_text( 'lipstick_ingredients_title', tothiq_persona_t( __( 'Ingredients', 'tothiq-persona' ), _x( 'المكونات', 'Arabic version of: Ingredients', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'lipstick_ingredients_text', tothiq_persona_t( __( 'Shea butter, vitamin E, jojoba oil. No parabens. Not tested on animals.', 'tothiq-persona' ), _x( 'زبدة الشيا، فيتامين E، زيت الجوجوبا. بدون بارابين. غير مختبر على الحيوانات.', 'Arabic version of: Shea butter, vitamin E, jojoba oil. No parabens. Not tested ', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"tothiq-product__more"} -->
<details class="wp-block-details tothiq-product__more"><summary><?php echo esc_html( tothiq_persona_text( 'lipstick_apply_title', tothiq_persona_t( __( 'How to apply', 'tothiq-persona' ), _x( 'طريقة الاستخدام', 'Arabic version of: How to apply', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'lipstick_apply_text', tothiq_persona_t( __( 'Start at the centre of the lips and work outwards. For a softer look, blot once.', 'tothiq-persona' ), _x( 'ابدئي من منتصف الشفاه نحو الأطراف. لمظهر أنعم اضغطي بمنديل مرة واحدة.', 'Arabic version of: Start at the centre of the lips and work outwards. For a sof', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
