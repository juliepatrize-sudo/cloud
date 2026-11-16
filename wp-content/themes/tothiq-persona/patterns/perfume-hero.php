<?php
/**
 * Title: Perfume — top
 * Slug: tothiq-persona/perfume-hero
 * Categories: tothiq-persona
 * Description: The bottle large on its own panel; beside it the name, the scent family, sizes to choose from, Order on WhatsApp (with the chosen size in the message), a free-sample link and three fold-out notes.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_perfume_sizes = tothiq_persona_items(
	'perfume_sizes',
	array(
		array(
			tothiq_persona_t( __( '100 ml', 'tothiq-persona' ), _x( '100 مل', 'Arabic version of: 100 ml', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 45', 'tothiq-persona' ), _x( '45 د.ك', 'Arabic version of: KD 45', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( '50 ml', 'tothiq-persona' ), _x( '50 مل', 'Arabic version of: 50 ml', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 28', 'tothiq-persona' ), _x( '28 د.ك', 'Arabic version of: KD 28', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( '10 ml', 'tothiq-persona' ), _x( '10 مل', 'Arabic version of: 10 ml', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 9', 'tothiq-persona' ), _x( '9 د.ك', 'Arabic version of: KD 9', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_name  = tothiq_persona_text( 'perfume_name', tothiq_persona_t( __( 'Noor', 'tothiq-persona' ), _x( 'نور', 'Arabic version of: Noor', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_first = isset( $tothiq_perfume_sizes[0][0] ) ? tothiq_persona_latin_digits( $tothiq_perfume_sizes[0][0] ) : '';
$tothiq_msg   = array( 'msg' => sprintf( /* translators: 1: perfume name, 2: size. */ tothiq_persona_t( __( 'Hello, I would like to order %1$s, %2$s.', 'tothiq-persona' ), _x( 'مرحبا، أرغب في طلب %1$s، %2$s.', 'Arabic version of: Hello, I would like to order %1$s, %2$s.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_name, $tothiq_first ) );
$tothiq_msg2  = array( 'msg' => sprintf( /* translators: %s: perfume name. */ tothiq_persona_t( __( 'Hello, I would like a free sample of %s with my order.', 'tothiq-persona' ), _x( 'مرحبا، أرغب في عينة مجانية من %s مع طلبي.', 'Arabic version of: Hello, I would like a free sample of %s with my order.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_name ) );
$tothiq_cls = tothiq_persona_cls( 'tothiq-product-hero', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-product","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-product"><!-- wp:group {"className":"tothiq-product__stage","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-product__stage"><?php $tothiq_photo = tothiq_persona_photo( 'perfume', 'images/perfume.svg', $tothiq_name ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-product__photo"} -->
<figure class="wp-block-image size-full tothiq-product__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-product__info","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-product__info"><!-- wp:paragraph {"className":"tothiq-product__kicker"} -->
<p class="tothiq-product__kicker"><?php echo esc_html( tothiq_persona_text( 'perfume_collection', tothiq_persona_t( __( 'The Kuwait collection', 'tothiq-persona' ), _x( 'مجموعة الكويت', 'Arabic version of: The Kuwait collection', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tothiq-serif tothiq-product__name"} -->
<h1 class="wp-block-heading tothiq-serif tothiq-product__name"><?php echo esc_html( $tothiq_name ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-product__type"} -->
<p class="tothiq-product__type"><?php echo esc_html( tothiq_persona_text( 'perfume_type', tothiq_persona_t( __( 'Eau de parfum', 'tothiq-persona' ), _x( 'او دو بارفان', 'Arabic version of: Eau de parfum', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-serif tothiq-product__family"} -->
<p class="tothiq-serif tothiq-product__family"><?php echo esc_html( tothiq_persona_text( 'perfume_family', tothiq_persona_t( __( 'Oud, amber and Taif rose', 'tothiq-persona' ), _x( 'عود وعنبر وورد طائفي', 'Arabic version of: Oud, amber and Taif rose', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-product__lead"} -->
<p class="tothiq-product__lead"><?php echo esc_html( tothiq_persona_text( 'perfume_lead', tothiq_persona_t( __( 'A warm evening scent built on Cambodian oud and Taif rose, blended by hand in small batches in Kuwait.', 'tothiq-persona' ), _x( 'عطر مسائي دافئ من العود الكمبودي والورد الطائفي، يمزج يدويا بكميات صغيرة في الكويت.', 'Arabic version of: A warm evening scent built on Cambodian oud and Taif rose, b', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-product__label"} -->
<p class="tothiq-product__label"><?php echo esc_html( tothiq_persona_text( 'perfume_size_label', tothiq_persona_t( __( 'Size', 'tothiq-persona' ), _x( 'الحجم', 'Arabic version of: Size', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<?php echo tothiq_persona_size_picker( $tothiq_perfume_sizes ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
<!-- /wp:html -->
<!-- wp:buttons {"className":"tothiq-choice-order tothiq-product__buy"} -->
<div class="wp-block-buttons tothiq-choice-order tothiq-product__buy"><?php tothiq_persona_button( tothiq_persona_text( 'perfume_button', tothiq_persona_t( __( 'Order on WhatsApp', 'tothiq-persona' ), _x( 'اطلب عبر واتساب', 'Arabic version of: Order on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'buy', $tothiq_msg ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:buttons {"className":"tothiq-product__sample"} -->
<div class="wp-block-buttons tothiq-product__sample"><?php tothiq_persona_button( tothiq_persona_text( 'perfume_sample', tothiq_persona_t( __( 'Ask for a free sample with your order', 'tothiq-persona' ), _x( 'اطلب عينة مجانية مع طلبك', 'Arabic version of: Ask for a free sample with your order', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'link', $tothiq_msg2 ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:details {"className":"tothiq-product__more","showContent":true} -->
<details class="wp-block-details tothiq-product__more" open><summary><?php echo esc_html( tothiq_persona_text( 'perfume_notes_title', tothiq_persona_t( __( 'Notes', 'tothiq-persona' ), _x( 'المكونات', 'Arabic version of: Notes', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'perfume_notes_text', tothiq_persona_t( __( 'Saffron, bergamot · Taif rose, jasmine · oud, amber, musk', 'tothiq-persona' ), _x( 'زعفران، برغموت · ورد طائفي، ياسمين · عود، عنبر، مسك', 'Arabic version of: Saffron, bergamot · Taif rose, jasmine · oud, amber, musk', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"tothiq-product__more"} -->
<details class="wp-block-details tothiq-product__more"><summary><?php echo esc_html( tothiq_persona_text( 'perfume_wear_title', tothiq_persona_t( __( 'How to wear', 'tothiq-persona' ), _x( 'طريقة الاستخدام', 'Arabic version of: How to wear', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'perfume_wear_text', tothiq_persona_t( __( 'Two sprays on the neck and wrists. Lasts 10 to 12 hours.', 'tothiq-persona' ), _x( 'رشتان على الرقبة والمعصمين. يدوم من 10 إلى 12 ساعة.', 'Arabic version of: Two sprays on the neck and wrists. Lasts 10 to 12 hours.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"tothiq-product__more"} -->
<details class="wp-block-details tothiq-product__more"><summary><?php echo esc_html( tothiq_persona_text( 'perfume_delivery_title', tothiq_persona_t( __( 'Delivery', 'tothiq-persona' ), _x( 'التوصيل', 'Arabic version of: Delivery', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_text( 'perfume_delivery_text', tothiq_persona_t( __( 'Free in Kuwait within 24 hours. Gift wrapping on request.', 'tothiq-persona' ), _x( 'مجاني داخل الكويت خلال 24 ساعة. تغليف هدية عند الطلب.', 'Arabic version of: Free in Kuwait within 24 hours. Gift wrapping on request.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
