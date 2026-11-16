<?php
/**
 * Title: Book — author
 * Slug: tothiq-persona/book-author
 * Categories: tothiq-persona
 * Description: Your photo, name and a line about you, with a Book a talk button (WhatsApp).
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-book-author', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'author', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-author","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-author"><?php $tothiq_photo = tothiq_persona_photo( 'hero', 'images/portrait.webp', tothiq_persona_name( $tothiq_lang ) ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-author__photo"} -->
<figure class="wp-block-image size-full tothiq-author__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tothiq-author__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-author__text"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'author_eyebrow', tothiq_persona_t( __( 'About the author', 'tothiq-persona' ), _x( 'عن المؤلفة', 'Arabic version of: About the author', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>} -->
<h2 class="wp-block-heading"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-muted"} -->
<p class="tothiq-muted"><?php echo esc_html( tothiq_persona_text( 'author_bio', tothiq_persona_t( __( 'Brand and marketing strategist, 80+ brand launches across the Gulf. Available for talks and workshops about the book.', 'tothiq-persona' ), _x( 'استشارية علامات تجارية وتسويق، أكثر من 80 إطلاقا في الخليج. متاحة للمحاضرات وورش العمل عن الكتاب.', 'Arabic version of: Brand and marketing strategist, 80+ brand launches across th', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_button( tothiq_persona_text( 'author_button', tothiq_persona_t( __( 'Book a talk on WhatsApp', 'tothiq-persona' ), _x( 'احجز محاضرة عبر واتساب', 'Arabic version of: Book a talk on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'whatsapp', array( 'msg' => tothiq_persona_t( __( 'Hello, I would like to book a talk about your book.', 'tothiq-persona' ), _x( 'مرحبا، أود حجز محاضرة عن كتابك.', 'Arabic version of: Hello, I would like to book a talk about your book.', 'tothiq-persona' ), $tothiq_lang ) ) ); ?>
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
