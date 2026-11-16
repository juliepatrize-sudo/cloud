<?php
/**
 * Title: Statement
 * Slug: tothiq-persona/statement
 * Categories: tothiq-persona, text
 * Description: One line that says what you believe, beside a short paragraph on how you work.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-statement', $tothiq_lang );

$tothiq_quote = tothiq_persona_text(
	'statement_quote',
	tothiq_persona_t( __( 'Advice is cheap. *Implementation* is the job.', 'tothiq-persona' ), _x( 'النصيحة سهلة. *التنفيذ* هو العمل الحقيقي.', 'Arabic version of: Advice is cheap. *Implementation* is the job.', 'tothiq-persona' ), $tothiq_lang ),
	$tothiq_lang
);
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:columns {"align":"wide","className":"tothiq-statement__cols"} -->
<div class="wp-block-columns alignwide tothiq-statement__cols"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"tothiq-statement__quote"} -->
<p class="tothiq-statement__quote"><?php echo wp_kses_post( tothiq_persona_highlight( $tothiq_quote ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"className":"tothiq-statement__body"} -->
<div class="wp-block-column tothiq-statement__body"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'statement_heading', tothiq_persona_t( __( 'I don’t hand over a report and leave.', 'tothiq-persona' ), _x( 'لا أسلم تقريرا ثم أغادر.', 'Arabic version of: I don’t hand over a report and leave.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'statement_body', tothiq_persona_t( __( 'Every engagement ends with something working: a plan the team owns, a process in use, a number that moved. I stay close until it does.', 'tothiq-persona' ), _x( 'ينتهي كل مشروع بشيء يعمل فعلا: خطة يملكها الفريق، وإجراء مطبق، ورقم تحسن. وأبقى قريبة حتى يتحقق ذلك.', 'Arabic version of: Every engagement ends with something working: a plan the team', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
