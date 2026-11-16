<?php
/**
 * Title: Header
 * Slug: tothiq-persona/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 * Description: Your name and role, the section menu, the language switch and a booking button — name, role and link come from Your details.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-header', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-header__inner","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide tothiq-header__inner"><!-- wp:group {"className":"tothiq-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tothiq-brand"><!-- wp:site-logo {"width":40} /-->
<!-- wp:group {"className":"tothiq-brand__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-brand__text"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-brand__name"} -->
<p class="tothiq-brand__name"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'role', $tothiq_lang ); ?>,"className":"tothiq-brand__role"} -->
<p class="tothiq-brand__role"><?php tothiq_persona_value( 'role', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"surface","overlayTextColor":"ink","className":"tothiq-nav","layout":{"type":"flex","justifyContent":"center"}} -->
<?php tothiq_persona_section_links( $tothiq_lang ); ?>
<!-- /wp:navigation -->
<!-- wp:group {"className":"tothiq-header__end","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tothiq-header__end"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'lang_switch', $tothiq_lang ); ?>,"className":"tothiq-lang-switch"} -->
<p class="tothiq-lang-switch"><?php tothiq_persona_value( 'lang_switch', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"tothiq-header__cta"} -->
<div class="wp-block-buttons tothiq-header__cta"><?php tothiq_persona_button( tothiq_persona_text( 'hero_button', tothiq_persona_t( __( 'Book a call', 'tothiq-persona' ), _x( 'احجز مكالمة', 'Arabic version of: Book a call', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'booking_url', $tothiq_lang, 'primary' ); ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
