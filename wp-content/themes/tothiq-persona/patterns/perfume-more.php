<?php
/**
 * Title: Perfume — also available
 * Slug: tothiq-persona/perfume-more
 * Categories: tothiq-persona
 * Description: Three more ways to buy: a discovery set, a gift box and an oil, each with its price and a WhatsApp link.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_perfume_sets = tothiq_persona_items(
	'perfume_sets',
	array(
		array(
			tothiq_persona_t( __( 'Discovery set', 'tothiq-persona' ), _x( 'مجموعة التجربة', 'Arabic version of: Discovery set', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 15', 'tothiq-persona' ), _x( '15 د.ك', 'Arabic version of: KD 15', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Three 10 ml sprays', 'tothiq-persona' ), _x( 'ثلاثة عطور 10 مل', 'Arabic version of: Three 10 ml sprays', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Gift box, 100 ml', 'tothiq-persona' ), _x( 'صندوق هدية 100 مل', 'Arabic version of: Gift box, 100 ml', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 45', 'tothiq-persona' ), _x( '45 د.ك', 'Arabic version of: KD 45', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Wooden box, hand-written card', 'tothiq-persona' ), _x( 'صندوق خشبي وبطاقة مكتوبة باليد', 'Arabic version of: Wooden box, hand-written card', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Oud oil', 'tothiq-persona' ), _x( 'دهن العود', 'Arabic version of: Oud oil', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 18', 'tothiq-persona' ), _x( '18 د.ك', 'Arabic version of: KD 18', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '6 ml roll-on', 'tothiq-persona' ), _x( '6 مل', 'Arabic version of: 6 ml roll-on', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_ask = tothiq_persona_text( 'perfume_sets_link', tothiq_persona_t( __( 'Order', 'tothiq-persona' ), _x( 'اطلب', 'Arabic version of: Order', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-perfume-more', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'more', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'perfume_sets_eyebrow', tothiq_persona_t( __( 'Also available', 'tothiq-persona' ), _x( 'متوفر أيضا', 'Arabic version of: Also available', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-sets","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-sets"><?php foreach ( $tothiq_perfume_sets as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-set","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-set"><?php $tothiq_photo = tothiq_persona_photo( 'perfume', 'images/perfume.svg', $tothiq_item[0] ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-set__photo"} -->
<figure class="wp-block-image size-full tothiq-set__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tothiq-set__name"} -->
<p class="tothiq-set__name"><strong><?php echo esc_html( $tothiq_item[0] ); ?></strong> <span><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[1] ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-set__note"} -->
<p class="tothiq-set__note"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[2] ) ); ?> · <a href="<?php echo esc_url( tothiq_persona_whatsapp_href( tothiq_persona_whatsapp(), sprintf( /* translators: %s: product. */ tothiq_persona_t( __( 'Hello, I would like to order: %s', 'tothiq-persona' ), _x( 'مرحبا، أرغب في طلب: %s', 'Arabic version of: Hello, I would like to order: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_item[0] ) ) ); ?>"><?php echo esc_html( $tothiq_ask ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
