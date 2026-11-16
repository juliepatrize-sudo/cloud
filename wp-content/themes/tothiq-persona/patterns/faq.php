<?php
/**
 * Title: FAQ
 * Slug: tothiq-persona/faq
 * Categories: tothiq-persona
 * Description: The questions people ask before they get in touch — also the block answer engines quote.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-faq', $tothiq_lang );
$tothiq_id   = tothiq_persona_anchor( 'faq', $tothiq_lang );

$tothiq_faq = tothiq_persona_items(
	'faq',
	array(
		array( tothiq_persona_t( __( 'What kind of companies do you work with?', 'tothiq-persona' ), _x( 'ما نوع الشركات التي تعملين معها؟', 'Arabic version of: What kind of companies do you work with?', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Mostly founder-led and family businesses between 20 and 500 people, at the point where what got them here is no longer enough.', 'tothiq-persona' ), _x( 'في الغالب شركات يقودها مؤسسوها وشركات عائلية بين 20 و500 موظف، في المرحلة التي لم يعد فيها ما أوصلها إلى هنا كافيا.', 'Arabic version of: Mostly founder-led and family businesses between 20 and 500', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'How are fees structured?', 'tothiq-persona' ), _x( 'كيف تحدد الأتعاب؟', 'Arabic version of: How are fees structured?', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'A fixed fee per project, or a monthly retainer for ongoing advisory. You know the full cost before anything starts.', 'tothiq-persona' ), _x( 'أتعاب ثابتة لكل مشروع، أو اشتراك شهري للاستشارات المستمرة. تعرف التكلفة كاملة قبل أن نبدأ.', 'Arabic version of: A fixed fee per project, or a monthly retainer for ongoing a', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Do you work remotely?', 'tothiq-persona' ), _x( 'هل تعملين عن بعد؟', 'Arabic version of: Do you work remotely?', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Both. Workshops and board sessions are best in person; most of the weekly work happens remotely across the Gulf.', 'tothiq-persona' ), _x( 'الاثنان. ورش العمل وجلسات مجلس الإدارة أفضل حضوريا، ومعظم العمل الأسبوعي يتم عن بعد في دول الخليج.', 'Arabic version of: Both. Workshops and board sessions are best in person; most', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Do you work in Arabic?', 'tothiq-persona' ), _x( 'هل تعملين باللغة العربية؟', 'Arabic version of: Do you work in Arabic?', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Yes. Workshops, reports and board papers in Arabic, English or both.', 'tothiq-persona' ), _x( 'نعم. ورش العمل والتقارير وأوراق مجلس الإدارة بالعربية أو الإنجليزية أو بكلتيهما.', 'Arabic version of: Yes. Workshops, reports and board papers in Arabic, English o', 'tothiq-persona' ), $tothiq_lang ) ),
	),
	$tothiq_lang
);
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","backgroundColor":"soft","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?> has-soft-background-color has-background"><!-- wp:columns {"align":"wide","className":"tothiq-faq__cols"} -->
<div class="wp-block-columns alignwide tothiq-faq__cols"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'faq_eyebrow', tothiq_persona_t( __( 'FAQ', 'tothiq-persona' ), _x( 'الأسئلة الشائعة', 'Arabic version of: FAQ', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'faq_heading', tothiq_persona_t( __( 'Before we talk', 'tothiq-persona' ), _x( 'قبل أن نتحدث', 'Arabic version of: Before we talk', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'faq_lead', tothiq_persona_t( __( 'Anything else? Send a message on WhatsApp and I will reply the same day.', 'tothiq-persona' ), _x( 'سؤال آخر؟ أرسل رسالة على واتساب وسأرد في اليوم نفسه.', 'Arabic version of: Anything else? Send a message on WhatsApp and I will reply t', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><?php tothiq_persona_button( tothiq_persona_t( __( 'Ask on WhatsApp', 'tothiq-persona' ), _x( 'اسأل على واتساب', 'Arabic version of: Ask on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'ghost' ); ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><?php foreach ( $tothiq_faq as $tothiq_i => $tothiq_item ) : ?>
<?php if ( 0 === $tothiq_i ) : ?>
<!-- wp:details {"showContent":true,"className":"tothiq-faq__item"} -->
<details class="wp-block-details tothiq-faq__item" open><summary><?php echo esc_html( $tothiq_item[0] ); ?></summary><!-- wp:paragraph -->
<?php else : ?>
<!-- wp:details {"className":"tothiq-faq__item"} -->
<details class="wp-block-details tothiq-faq__item"><summary><?php echo esc_html( $tothiq_item[0] ); ?></summary><!-- wp:paragraph -->
<?php endif; ?>
<p><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[1] ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
