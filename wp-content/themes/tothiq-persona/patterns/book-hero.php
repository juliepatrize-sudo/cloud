<?php
/**
 * Title: Book — top
 * Slug: tothiq-persona/book-hero
 * Categories: tothiq-persona
 * Description: A book cover drawn by the theme (title, subtitle and your name), the headline, rating and two buy buttons. Each button opens your store link, or WhatsApp when you have none.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_book = tothiq_persona_text( 'book_cover_title', tothiq_persona_t( __( 'Say It Once', 'tothiq-persona' ), _x( 'قلها مرة', 'Arabic version of: Say It Once', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_msg1 = sprintf( /* translators: %s: book title. */ tothiq_persona_t( __( 'Hello, I would like to buy the paperback of: %s', 'tothiq-persona' ), _x( 'مرحبا، أرغب في شراء النسخة الورقية من: %s', 'Arabic version of: Hello, I would like to buy the paperback of: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_book );
$tothiq_msg2 = sprintf( /* translators: %s: book title. */ tothiq_persona_t( __( 'Hello, I would like the e-book of: %s', 'tothiq-persona' ), _x( 'مرحبا، أرغب في النسخة الإلكترونية من: %s', 'Arabic version of: Hello, I would like the e-book of: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_book );
$tothiq_cls = tothiq_persona_cls( 'tothiq-book-hero', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-book-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-book-hero__grid"><!-- wp:group {"className":"tothiq-book-hero__cover","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-book-hero__cover"><!-- wp:group {"className":"tothiq-book-cover","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-book-cover"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-book-cover__author"} -->
<p class="tothiq-book-cover__author"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-book-cover__title"} -->
<p class="tothiq-book-cover__title"><?php echo esc_html( $tothiq_book ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-book-cover__sub"} -->
<p class="tothiq-book-cover__sub"><?php echo esc_html( tothiq_persona_text( 'book_cover_subtitle', tothiq_persona_t( __( 'How Gulf brands find one message and keep it', 'tothiq-persona' ), _x( 'كيف تجد علامات الخليج رسالة واحدة وتحافظ عليها', 'Arabic version of: How Gulf brands find one message and keep it', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-book-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-book-hero__copy"><!-- wp:paragraph {"className":"tothiq-tag"} -->
<p class="tothiq-tag"><?php echo esc_html( tothiq_persona_text( 'book_tag', tothiq_persona_t( __( 'New book · out now', 'tothiq-persona' ), _x( 'كتاب جديد · متوفر الآن', 'Arabic version of: New book · out now', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'book_title', tothiq_persona_t( __( 'One message your whole company can repeat', 'tothiq-persona' ), _x( 'رسالة واحدة تستطيع شركتك كلها ترديدها', 'Arabic version of: One message your whole company can repeat', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'book_lead', tothiq_persona_t( __( 'Twelve years of brand work in the Gulf, turned into a short, practical book for founders and marketing teams. In English and Arabic.', 'tothiq-persona' ), _x( 'اثنا عشر عاما من العمل على العلامات في الخليج، في كتاب قصير وعملي للمؤسسين وفرق التسويق. بالعربية والإنجليزية.', 'Arabic version of: Twelve years of brand work in the Gulf, turned into a short,', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$tothiq_rating_score = tothiq_persona_text( 'book_rating', '', $tothiq_lang );
$tothiq_rating_text  = tothiq_persona_text( 'book_rating_text', '', $tothiq_lang );
if ( '' !== $tothiq_rating_score || '' !== $tothiq_rating_text ) :
	?>
<!-- wp:paragraph {"className":"tothiq-book-rating"} -->
<p class="tothiq-book-rating"><span class="tothiq-stars" aria-hidden="true">★★★★★</span> <?php if ( '' !== $tothiq_rating_score ) : ?><strong class="tothiq-ltr-number"><?php echo esc_html( $tothiq_rating_score ); ?></strong> <?php endif; ?><?php echo esc_html( $tothiq_rating_text ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_link_button( tothiq_persona_text( 'book_button_1', tothiq_persona_t( __( 'Buy the paperback', 'tothiq-persona' ), _x( 'اشتر النسخة الورقية', 'Arabic version of: Buy the paperback', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), tothiq_persona_text_url( 'book_url_1', $tothiq_msg1, $tothiq_lang ), 'book' ); ?>
<?php tothiq_persona_link_button( tothiq_persona_text( 'book_button_2', tothiq_persona_t( __( 'Get the e-book', 'tothiq-persona' ), _x( 'احصل على النسخة الإلكترونية', 'Arabic version of: Get the e-book', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), tothiq_persona_text_url( 'book_url_2', $tothiq_msg2, $tothiq_lang ), 'ghost' ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"tothiq-webinar-note"} -->
<p class="tothiq-webinar-note"><?php echo esc_html( tothiq_persona_text( 'book_note', tothiq_persona_t( __( 'Free delivery in Kuwait · signed copies on request by WhatsApp', 'tothiq-persona' ), _x( 'توصيل مجاني داخل الكويت · نسخ موقعة عند الطلب عبر واتساب', 'Arabic version of: Free delivery in Kuwait · signed copies on request by WhatsA', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
