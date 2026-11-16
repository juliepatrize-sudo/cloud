<?php
/**
 * Title: Call to action
 * Slug: tothiq-persona/cta
 * Categories: tothiq-persona, call-to-action
 * Description: A closing band in deep navy with a booking button, WhatsApp and your phone number.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-cta', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-cta__band","backgroundColor":"contrast","textColor":"surface","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide tothiq-cta__band has-surface-color has-contrast-background-color has-text-color has-background"><!-- wp:heading {"textAlign":"center","textColor":"surface"} -->
<h2 class="wp-block-heading has-text-align-center has-surface-color has-text-color"><?php echo esc_html( tothiq_persona_text( 'cta_heading', tothiq_persona_t( __( 'Weighing a big decision?', 'tothiq-persona' ), _x( 'أمامك قرار كبير؟', 'Arabic version of: Weighing a big decision?', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"tothiq-cta__text"} -->
<p class="has-text-align-center tothiq-cta__text"><?php echo esc_html( tothiq_persona_text( 'cta_text', tothiq_persona_t( __( 'Tell me where things stand. If I am not the right person, I will say so and point you to someone who is.', 'tothiq-persona' ), _x( 'أخبرني أين تقف الأمور. وإن لم أكن الشخص المناسب فسأقول ذلك وأدلك على من يناسبك.', 'Arabic version of: Tell me where things stand. If I am not the right person, I', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><?php tothiq_persona_button( tothiq_persona_text( 'hero_button', tothiq_persona_t( __( 'Book a call', 'tothiq-persona' ), _x( 'احجز مكالمة', 'Arabic version of: Book a call', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'booking_url', $tothiq_lang, 'light' ); ?>
<?php tothiq_persona_button( tothiq_persona_t( __( 'WhatsApp', 'tothiq-persona' ), _x( 'واتساب', 'Arabic version of: WhatsApp', 'tothiq-persona' ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'outline-light' ); ?></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center",<?php tothiq_persona_bind( 'content', 'phone_link', $tothiq_lang ); ?>,"className":"tothiq-cta__phone"} -->
<p class="has-text-align-center tothiq-cta__phone"><?php tothiq_persona_value( 'phone_link', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
