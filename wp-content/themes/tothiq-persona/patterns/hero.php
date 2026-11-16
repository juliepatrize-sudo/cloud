<?php
/**
 * Title: Hero — personal brand
 * Slug: tothiq-persona/hero
 * Categories: tothiq-persona, banner
 * Description: Your role and city, a headline, a short introduction, booking and WhatsApp buttons, three quick facts and your portrait on clean ground with a soft light behind it. Replace the portrait with your own photo — a cut-out on a transparent background looks best.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-hero', $tothiq_lang );

$tothiq_facts = tothiq_persona_items(
	'facts',
	array(
		array( tothiq_persona_t( __( '15+ years', 'tothiq-persona' ), _x( 'أكثر من 15 عاما', 'Arabic version of: 15+ years', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Advising founders and boards', 'tothiq-persona' ), _x( 'مع المؤسسين ومجالس الإدارة', 'Arabic version of: Advising founders and boards', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( '120+ projects', 'tothiq-persona' ), _x( 'أكثر من 120 مشروعا', 'Arabic version of: 120+ projects', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Across nine industries', 'tothiq-persona' ), _x( 'في تسعة قطاعات', 'Arabic version of: Across nine industries', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'English and Arabic', 'tothiq-persona' ), _x( 'العربية والإنجليزية', 'Arabic version of: English and Arabic', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Workshops, reports and boards', 'tothiq-persona' ), _x( 'ورش العمل والتقارير والاجتماعات', 'Arabic version of: Workshops, reports and boards', 'tothiq-persona' ), $tothiq_lang ) ),
	),
	$tothiq_lang
);

$tothiq_title = tothiq_persona_text(
	'hero_title',
	tothiq_persona_t( __( 'I help growing companies turn strategy into *results*.', 'tothiq-persona' ), _x( 'أساعد الشركات النامية على تحويل الاستراتيجية إلى *نتائج*.', 'Arabic version of: I help growing companies turn strategy into *results*.', 'tothiq-persona' ), $tothiq_lang ),
	$tothiq_lang
);

$tothiq_photo = tothiq_persona_photo(
	'hero',
	'images/portrait.webp',
	tothiq_persona_t( __( 'Portrait of the consultant, smiling and holding a tablet', 'tothiq-persona' ), _x( 'صورة المستشارة مبتسمة وتحمل جهازا لوحيا', 'Arabic version of: Portrait of the consultant, smiling and holding a tablet', 'tothiq-persona' ), $tothiq_lang )
);
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-hero__inner"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'eyebrow', $tothiq_lang ); ?>,"className":"tothiq-eyebrow tothiq-hero__eyebrow"} -->
<p class="tothiq-eyebrow tothiq-hero__eyebrow"><?php tothiq_persona_value( 'eyebrow', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-hero__copy"><!-- wp:heading {"level":1,"className":"tothiq-hero__title"} -->
<h1 class="wp-block-heading tothiq-hero__title"><?php echo wp_kses_post( tothiq_persona_highlight( $tothiq_title ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead tothiq-hero__lead"} -->
<p class="tothiq-lead tothiq-hero__lead"><?php echo esc_html( tothiq_persona_text( 'hero_lead', tothiq_persona_t( __( 'Fifteen years advising founders and leadership teams across the Gulf on growth, operations and digital transformation — from the first workshop to the numbers that prove it worked.', 'tothiq-persona' ), _x( 'خمسة عشر عاما من العمل مع المؤسسين وفرق القيادة في الخليج على النمو والتشغيل والتحول الرقمي، من ورشة العمل الأولى حتى الأرقام التي تثبت النتيجة.', 'Arabic version of: Fifteen years advising founders and leadership teams across', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_button( tothiq_persona_text( 'hero_button', tothiq_persona_t( __( 'Book a call', 'tothiq-persona' ), _x( 'احجز مكالمة', 'Arabic version of: Book a call', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'booking_url', $tothiq_lang, 'primary' ); ?>
<?php tothiq_persona_button( tothiq_persona_t( __( 'Message on WhatsApp', 'tothiq-persona' ), _x( 'راسلني على واتساب', 'Arabic version of: Message on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'ghost' ); ?></div>
<!-- /wp:buttons -->
<!-- wp:group {"className":"tothiq-facts","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-facts"><?php foreach ( $tothiq_facts as $tothiq_fact ) : ?><!-- wp:group {"className":"tothiq-fact","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-fact"><!-- wp:paragraph {"className":"tothiq-fact__title"} -->
<p class="tothiq-fact__title"><?php echo esc_html( $tothiq_fact[0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-fact__sub"} -->
<p class="tothiq-fact__sub"><?php echo esc_html( $tothiq_fact[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-hero__portrait"} -->
<figure class="wp-block-image size-full tothiq-hero__portrait"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
