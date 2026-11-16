<?php
/**
 * Title: Header — landing page
 * Slug: tothiq-persona/header-landing
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 * Description: Your name and the language switch, without the home page menu, for the course, webinar and book pages.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls = tothiq_persona_cls( 'tothiq-landing-header', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-landing-header__name"} -->
<p class="tothiq-landing-header__name"><a href="<?php echo esc_url( tothiq_persona_home_url( $tothiq_lang ) ); ?>"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'lang_switch', $tothiq_lang ); ?>,"className":"tothiq-lang-switch"} -->
<p class="tothiq-lang-switch"><?php tothiq_persona_value( 'lang_switch', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
