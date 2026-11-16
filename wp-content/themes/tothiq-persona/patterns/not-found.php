<?php
/**
 * Title: Page not found
 * Slug: tothiq-persona/not-found
 * Inserter: no
 * Description: The 404 message and a search box, in the page's language.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
?>
<!-- wp:group {"className":"<?php echo esc_attr( tothiq_persona_cls( 'tothiq-not-found', $tothiq_lang ) ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( tothiq_persona_cls( 'tothiq-not-found', $tothiq_lang ) ); ?>"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html( tothiq_persona_t( __( 'That page has moved or never existed', 'tothiq-persona' ), _x( 'هذه الصفحة نقلت أو لم تكن موجودة', 'Arabic version of: That page has moved or never existed', 'tothiq-persona' ), $tothiq_lang ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"tothiq-lead"} -->
<p class="has-text-align-center tothiq-lead"><?php echo esc_html( tothiq_persona_t( __( 'Try a search, or go back to the home page.', 'tothiq-persona' ), _x( 'جرب البحث، أو عد إلى الصفحة الرئيسية.', 'Arabic version of: Try a search, or go back to the home page.', 'tothiq-persona' ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_attr( tothiq_persona_t( __( 'Search', 'tothiq-persona' ), _x( 'بحث', 'Arabic version of: Search', 'tothiq-persona' ), $tothiq_lang ) ); ?>","buttonText":"<?php echo esc_attr( tothiq_persona_t( __( 'Search', 'tothiq-persona' ), _x( 'بحث', 'Arabic version of: Search', 'tothiq-persona' ), $tothiq_lang ) ); ?>"} /--></div>
<!-- /wp:group -->
