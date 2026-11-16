<?php
/**
 * Title: Webinar — closing band
 * Slug: tothiq-persona/webinar-cta
 * Categories: tothiq-persona
 * Description: A closing band asking visitors to register, with the Save my seat button.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-landing-cta tothiq-webinar-cta', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-landing-cta__band","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-landing-cta__band"><!-- wp:group {"className":"tothiq-landing-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-cta__text"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'webinar_cta_heading', tothiq_persona_t( __( 'Seats are free, the session is live once', 'tothiq-persona' ), _x( 'المقاعد مجانية، والجلسة مباشرة مرة واحدة', 'Arabic version of: Seats are free, the session is live once', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-landing-cta__lead"} -->
<p class="tothiq-landing-cta__lead"><?php echo esc_html( tothiq_persona_text( 'webinar_cta_text', tothiq_persona_t( __( 'Register now and get the reminder and the recording on WhatsApp.', 'tothiq-persona' ), _x( 'سجل الآن ليصلك التذكير والتسجيل على واتساب.', 'Arabic version of: Register now and get the reminder and the recording on Whats', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php $tothiq_title = tothiq_persona_text( 'webinar_title', tothiq_persona_t( __( 'Launch without guessing: the 30-day brand launch plan', 'tothiq-persona' ), _x( 'أطلق دون تخمين: خطة إطلاق العلامة في 30 يوما', 'Arabic version of: Launch without guessing: the 30-day brand launch plan', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ); ?>
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_button( tothiq_persona_text( 'webinar_button', tothiq_persona_t( __( 'Save my seat on WhatsApp', 'tothiq-persona' ), _x( 'احجز مقعدك عبر واتساب', 'Arabic version of: Save my seat on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'cta', array( 'msg' => sprintf( /* translators: %s: webinar name. */ tothiq_persona_t( __( 'Hello, please save me a seat at: %s', 'tothiq-persona' ), _x( 'مرحبا، أرجو حجز مقعد لي في: %s', 'Arabic version of: Hello, please save me a seat at: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_title ) ) ); ?>
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
