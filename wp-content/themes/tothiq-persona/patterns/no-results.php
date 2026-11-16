<?php
/**
 * Title: No posts yet
 * Slug: tothiq-persona/no-results
 * Inserter: no
 * Description: Shown in a list of posts with nothing to show, in the page's language.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
?>
<!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_t( __( 'Nothing here yet.', 'tothiq-persona' ), _x( 'لا يوجد شيء هنا بعد.', 'Arabic version of: Nothing here yet.', 'tothiq-persona' ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
