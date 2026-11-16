<?php
/**
 * Title: Book — quote
 * Slug: tothiq-persona/book-quote
 * Categories: tothiq-persona
 * Description: One line from the book, large, on a coloured band.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-book-quote', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'quote', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-book-quote__band","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-book-quote__band"><!-- wp:paragraph {"className":"tothiq-book-quote__text"} -->
<p class="tothiq-book-quote__text"><?php echo esc_html( 'ar' === $tothiq_lang ? '«' . tothiq_persona_text( 'book_quote', tothiq_persona_t( __( 'The brands people remember are not the loudest. They are the ones that say one thing, and say it every time.', 'tothiq-persona' ), _x( 'العلامات التي يتذكرها الناس ليست الأعلى صوتا، بل تلك التي تقول شيئا واحدا وتكرره في كل مرة.', 'Arabic version of: The brands people remember are not the loudest. They are the', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) . '»' : '“' . tothiq_persona_text( 'book_quote', tothiq_persona_t( __( 'The brands people remember are not the loudest. They are the ones that say one thing, and say it every time.', 'tothiq-persona' ), _x( 'العلامات التي يتذكرها الناس ليست الأعلى صوتا، بل تلك التي تقول شيئا واحدا وتكرره في كل مرة.', 'Arabic version of: The brands people remember are not the loudest. They are the', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) . '”' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-book-quote__cite"} -->
<p class="tothiq-book-quote__cite"><?php echo esc_html( tothiq_persona_text( 'book_quote_cite', tothiq_persona_t( __( 'From chapter one', 'tothiq-persona' ), _x( 'من الفصل الأول', 'Arabic version of: From chapter one', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
