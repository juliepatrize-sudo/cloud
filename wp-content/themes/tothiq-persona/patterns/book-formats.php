<?php
/**
 * Title: Book — formats
 * Slug: tothiq-persona/book-formats
 * Categories: tothiq-persona
 * Description: Three format cards: the format, its price and one line. The first is highlighted.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_formats = tothiq_persona_items(
	'formats',
	array(
		array(
			tothiq_persona_t( __( 'Paperback', 'tothiq-persona' ), _x( 'نسخة ورقية', 'Arabic version of: Paperback', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 8', 'tothiq-persona' ), _x( '8 د.ك', 'Arabic version of: KD 8', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '224 pages · signed on request', 'tothiq-persona' ), _x( '224 صفحة · موقعة عند الطلب', 'Arabic version of: 224 pages · signed on request', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'E-book', 'tothiq-persona' ), _x( 'نسخة إلكترونية', 'Arabic version of: E-book', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 5', 'tothiq-persona' ), _x( '5 د.ك', 'Arabic version of: KD 5', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'PDF and EPUB, instant download', 'tothiq-persona' ), _x( 'PDF و EPUB، تحميل فوري', 'Arabic version of: PDF and EPUB, instant download', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Audiobook', 'tothiq-persona' ), _x( 'كتاب صوتي', 'Arabic version of: Audiobook', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'KD 6', 'tothiq-persona' ), _x( '6 د.ك', 'Arabic version of: KD 6', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '4 h 20 min, read by the author', 'tothiq-persona' ), _x( '4 ساعات و20 دقيقة، بصوت المؤلفة', 'Arabic version of: 4 h 20 min, read by the author', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-book-formats', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'formats', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'formats_eyebrow', tothiq_persona_t( __( 'Formats', 'tothiq-persona' ), _x( 'الصيغ', 'Arabic version of: Formats', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'formats_heading', tothiq_persona_t( __( 'Read it your way', 'tothiq-persona' ), _x( 'اقرأه بطريقتك', 'Arabic version of: Read it your way', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-formats","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-formats"><?php foreach ( $tothiq_formats as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-format"} -->
<p class="tothiq-format"><?php echo esc_html( $tothiq_item[0] ); ?><br><strong class="tothiq-ltr-number"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[1] ) ); ?></strong><br><span><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[2] ) ); ?></span></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
