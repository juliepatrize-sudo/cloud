<?php
/**
 * Title: Perfume — reviews
 * Slug: tothiq-persona/perfume-reviews
 * Categories: tothiq-persona
 * Description: The rating and three short reviews, set large in the serif.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_perfume_reviews = tothiq_persona_items(
	'perfume_reviews',
	array(
		array(
			tothiq_persona_t( __( 'I am asked what I am wearing every single time.', 'tothiq-persona' ), _x( 'يسألونني في كل مرة عن العطر الذي أضعه.', 'Arabic version of: I am asked what I am wearing every single time.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Maryam', 'tothiq-persona' ), _x( 'مريم', 'Arabic version of: Maryam', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Warm and rich without being heavy. It lasted through a whole wedding.', 'tothiq-persona' ), _x( 'دافئ وغني دون ثقل، وبقي طوال حفل الزفاف.', 'Arabic version of: Warm and rich without being heavy. It lasted through a whole', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Abdullah', 'tothiq-persona' ), _x( 'عبدالله', 'Arabic version of: Abdullah', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'The gift box made it the best present I gave this year.', 'tothiq-persona' ), _x( 'صندوق الهدية جعله أجمل هدية قدمتها هذا العام.', 'Arabic version of: The gift box made it the best present I gave this year.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Hessa', 'tothiq-persona' ), _x( 'حصة', 'Arabic version of: Hessa', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_open  = 'ar' === $tothiq_lang ? '«' : '“';
$tothiq_close = 'ar' === $tothiq_lang ? '»' : '”';
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-perfume-reviews', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'reviews', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-reviews-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-reviews-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'perfume_reviews_eyebrow', tothiq_persona_t( __( 'Reviews', 'tothiq-persona' ), _x( 'آراء العملاء', 'Arabic version of: Reviews', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$tothiq_rating = tothiq_persona_latin_digits( tothiq_persona_text( 'perfume_rating', '', $tothiq_lang ) );
if ( '' !== $tothiq_rating ) :
	?>
<!-- wp:paragraph {"className":"tothiq-reviews-head__rating"} -->
<p class="tothiq-reviews-head__rating"><span class="tothiq-stars" aria-hidden="true">★★★★★</span> <?php echo esc_html( $tothiq_rating ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-quotes","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-quotes"><?php foreach ( $tothiq_perfume_reviews as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-quote","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-quote"><!-- wp:paragraph {"className":"tothiq-stars"} -->
<p class="tothiq-stars">★★★★★</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-serif tothiq-quote__text"} -->
<p class="tothiq-serif tothiq-quote__text"><?php echo esc_html( $tothiq_open . $tothiq_item[0] . $tothiq_close ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-quote__by"} -->
<p class="tothiq-quote__by"><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
