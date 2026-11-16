<?php
/**
 * Title: Book — reviews
 * Slug: tothiq-persona/book-reviews
 * Categories: tothiq-persona
 * Description: Three short reader reviews with a name and role.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_book_reviews = tothiq_persona_items(
	'book_reviews',
	array(
		array(
			tothiq_persona_t( __( 'Short, sharp and useful. I gave a copy to every manager.', 'tothiq-persona' ), _x( 'قصير وحاد ومفيد. أهديت نسخة لكل مدير.', 'Arabic version of: Short, sharp and useful. I gave a copy to every manager.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Faisal, founder', 'tothiq-persona' ), _x( 'فيصل، مؤسس', 'Arabic version of: Faisal, founder', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'The chapter on two languages is the best thing written on the subject.', 'tothiq-persona' ), _x( 'فصل اللغتين هو أفضل ما كتب في هذا الموضوع.', 'Arabic version of: The chapter on two languages is the best thing written on th', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Noura, marketing director', 'tothiq-persona' ), _x( 'نورة، مديرة تسويق', 'Arabic version of: Noura, marketing director', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Finally a brand book with Gulf examples.', 'tothiq-persona' ), _x( 'أخيرا كتاب عن العلامات بأمثلة من الخليج.', 'Arabic version of: Finally a brand book with Gulf examples.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Khalid, agency owner', 'tothiq-persona' ), _x( 'خالد، صاحب وكالة', 'Arabic version of: Khalid, agency owner', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-book-reviews', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'reviews', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'book_reviews_eyebrow', tothiq_persona_t( __( 'What readers say', 'tothiq-persona' ), _x( 'ماذا يقول القراء', 'Arabic version of: What readers say', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'book_reviews_heading', tothiq_persona_t( __( 'Early readers', 'tothiq-persona' ), _x( 'القراء الأوائل', 'Arabic version of: Early readers', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-endorsements","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-endorsements"><?php foreach ( $tothiq_book_reviews as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-endorsement"} -->
<p class="tothiq-endorsement"><?php echo esc_html( $tothiq_item[0] ); ?><br><strong><?php echo esc_html( $tothiq_item[1] ); ?></strong></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
