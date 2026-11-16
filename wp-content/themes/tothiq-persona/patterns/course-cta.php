<?php
/**
 * Title: Course — closing band
 * Slug: tothiq-persona/course-cta
 * Categories: tothiq-persona
 * Description: A dark closing band with the start date, one line and the enrol button.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-landing-cta tothiq-course-cta', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-landing-cta__band","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-landing-cta__band"><!-- wp:group {"className":"tothiq-landing-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-cta__text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'course_cta_heading', tothiq_persona_t( __( 'Cohort 3 starts 12 October', 'tothiq-persona' ), _x( 'الدفعة 3 تبدأ 12 أكتوبر', 'Arabic version of: Cohort 3 starts 12 October', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-landing-cta__lead"} -->
<p class="tothiq-landing-cta__lead"><?php echo esc_html( tothiq_persona_text( 'course_cta_text', tothiq_persona_t( __( 'Seats are limited to 25 so every live session stays personal.', 'tothiq-persona' ), _x( 'المقاعد محدودة بخمسة وعشرين حتى تبقى كل جلسة مباشرة شخصية.', 'Arabic version of: Seats are limited to 25 so every live session stays personal', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php $tothiq_title = tothiq_persona_text( 'course_title', tothiq_persona_t( __( 'Brand strategy for founders', 'tothiq-persona' ), _x( 'استراتيجية العلامة التجارية للمؤسسين', 'Arabic version of: Brand strategy for founders', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ); ?>
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_button( tothiq_persona_text( 'course_button', tothiq_persona_t( __( 'Enrol on WhatsApp', 'tothiq-persona' ), _x( 'سجل عبر واتساب', 'Arabic version of: Enrol on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'amber', array( 'msg' => sprintf( /* translators: %s: course name. */ tothiq_persona_t( __( 'Hello, I would like to enrol in: %s', 'tothiq-persona' ), _x( 'مرحبا، أرغب في التسجيل في: %s', 'Arabic version of: Hello, I would like to enrol in: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_title ) ) ); ?>
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
