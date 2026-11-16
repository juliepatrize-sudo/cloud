<?php
/**
 * Title: Footer
 * Slug: tothiq-persona/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 * Description: Your name, a short bio, the section menu, your social profiles and contact details, then the copyright line — all from Your details.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-footer', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:columns {"align":"wide","className":"tothiq-footer__cols"} -->
<div class="wp-block-columns alignwide tothiq-footer__cols"><!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-brand__name"} -->
<p class="tothiq-brand__name"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'bio', $tothiq_lang ); ?>,"className":"tothiq-footer__text"} -->
<p class="tothiq-footer__text"><?php tothiq_persona_value( 'bio', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'socials', $tothiq_lang ); ?>,"className":"tothiq-socials"} -->
<p class="tothiq-socials"><?php tothiq_persona_value( 'socials', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tothiq-footer__title"} -->
<h3 class="wp-block-heading tothiq-footer__title"><?php echo esc_html( tothiq_persona_t( __( 'On this site', 'tothiq-persona' ), _x( 'في هذا الموقع', 'Arabic version of: On this site', 'tothiq-persona' ), $tothiq_lang ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:navigation {"overlayMenu":"never","className":"tothiq-footer__nav","layout":{"type":"flex","orientation":"vertical"}} -->
<?php tothiq_persona_section_links( $tothiq_lang ); ?>
<!-- /wp:navigation --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tothiq-footer__title"} -->
<h3 class="wp-block-heading tothiq-footer__title"><?php echo esc_html( tothiq_persona_t( __( 'Get in touch', 'tothiq-persona' ), _x( 'تواصل معي', 'Arabic version of: Get in touch', 'tothiq-persona' ), $tothiq_lang ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'contact', $tothiq_lang ); ?>,"className":"tothiq-footer__text"} -->
<p class="tothiq-footer__text"><?php tothiq_persona_value( 'contact', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><?php tothiq_persona_button( tothiq_persona_t( __( 'WhatsApp', 'tothiq-persona' ), _x( 'واتساب', 'Arabic version of: WhatsApp', 'tothiq-persona' ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'ghost' ); ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"align":"wide","className":"tothiq-footer__bottom","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide tothiq-footer__bottom"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'copyright', $tothiq_lang ); ?>} -->
<p><?php tothiq_persona_value( 'copyright', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php
$tothiq_credit = '<a href="' . esc_url( 'https://tothiq.ai/wordpress/themes/tothiq-persona/' ) . '">Tothiq Persona</a>';
/* translators: %s: link to the theme's page. */
echo wp_kses_post( sprintf( tothiq_persona_t( __( 'Built with the %s theme', 'tothiq-persona' ), _x( 'صمم بقالب %s', 'Arabic version of: Built with the %s theme', 'tothiq-persona' ), $tothiq_lang ), $tothiq_credit ) );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
