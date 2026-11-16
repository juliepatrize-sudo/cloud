<?php
/**
 * Title: Book — chapters
 * Slug: tothiq-persona/book-chapters
 * Categories: tothiq-persona
 * Description: The chapters, numbered, with one line each.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_chapters = tothiq_persona_items(
	'chapters',
	array(
		array(
			tothiq_persona_t( __( 'The cost of saying too much', 'tothiq-persona' ), _x( 'ثمن قول الكثير', 'Arabic version of: The cost of saying too much', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Why brands with ten messages are remembered for none.', 'tothiq-persona' ), _x( 'لماذا لا تتذكر الناس علامة لها عشر رسائل.', 'Arabic version of: Why brands with ten messages are remembered for none.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Finding the one thing', 'tothiq-persona' ), _x( 'إيجاد الشيء الواحد', 'Arabic version of: Finding the one thing', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'A workshop you can run with your team in one afternoon.', 'tothiq-persona' ), _x( 'ورشة تديرها مع فريقك في ظهيرة واحدة.', 'Arabic version of: A workshop you can run with your team in one afternoon.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Two languages, one voice', 'tothiq-persona' ), _x( 'لغتان وصوت واحد', 'Arabic version of: Two languages, one voice', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Writing a message that works in English and Arabic.', 'tothiq-persona' ), _x( 'كتابة رسالة تعمل بالعربية والإنجليزية.', 'Arabic version of: Writing a message that works in English and Arabic.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Saying it everywhere', 'tothiq-persona' ), _x( 'قولها في كل مكان', 'Arabic version of: Saying it everywhere', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'From the website to the shop floor to the WhatsApp reply.', 'tothiq-persona' ), _x( 'من الموقع إلى المتجر إلى رد واتساب.', 'Arabic version of: From the website to the shop floor to the WhatsApp reply.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Launches that stick', 'tothiq-persona' ), _x( 'إطلاقات تبقى', 'Arabic version of: Launches that stick', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Using the message to plan a launch people remember.', 'tothiq-persona' ), _x( 'استخدام الرسالة للتخطيط لإطلاق يتذكره الناس.', 'Arabic version of: Using the message to plan a launch people remember.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Keeping it for years', 'tothiq-persona' ), _x( 'الحفاظ عليها لسنوات', 'Arabic version of: Keeping it for years', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'How to protect the message when the company grows.', 'tothiq-persona' ), _x( 'كيف تحمي الرسالة حين تكبر الشركة.', 'Arabic version of: How to protect the message when the company grows.', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-book-chapters', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'chapters', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'chapters_eyebrow', tothiq_persona_t( __( 'Inside the book', 'tothiq-persona' ), _x( 'داخل الكتاب', 'Arabic version of: Inside the book', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'chapters_heading', tothiq_persona_t( __( 'Six chapters, one idea', 'tothiq-persona' ), _x( 'ستة فصول وفكرة واحدة', 'Arabic version of: Six chapters, one idea', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-chapters","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-chapters"><?php foreach ( $tothiq_chapters as $tothiq_n => $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-chapter"} -->
<p class="tothiq-chapter"><span class="tothiq-chapter__n"><?php echo esc_html( sprintf( '%02d', $tothiq_n + 1 ) ); ?></span><strong><?php echo esc_html( $tothiq_item[0] ); ?></strong><br><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
