<?php
/**
 * Title: Book and WhatsApp bar
 * Slug: tothiq-persona/actions
 * Categories: call-to-action
 * Block Types: core/template-part/uncategorized
 * Inserter: no
 * Description: The booking and WhatsApp buttons pinned to the bottom of the screen on phones, linked to Your details.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-actions', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:buttons -->
<div class="wp-block-buttons"><?php tothiq_persona_button( tothiq_persona_text( 'hero_button', tothiq_persona_t( __( 'Book a call', 'tothiq-persona' ), _x( 'احجز مكالمة', 'Arabic version of: Book a call', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'booking_url', $tothiq_lang, 'primary' ); ?></div>
<!-- /wp:buttons -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><?php tothiq_persona_button( tothiq_persona_t( __( 'WhatsApp', 'tothiq-persona' ), _x( 'واتساب', 'Arabic version of: WhatsApp', 'tothiq-persona' ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'ghost' ); ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
