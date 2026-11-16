<?php
/**
 * Title: About
 * Slug: tothiq-persona/about
 * Categories: tothiq-persona, about
 * Description: A heading and two short paragraphs about you, then four numbers that back them up.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-about', $tothiq_lang );
$tothiq_id   = tothiq_persona_anchor( 'about', $tothiq_lang );

$tothiq_stats = tothiq_persona_items(
	'stats',
	array(
		array( '15+', tothiq_persona_t( __( 'Years advising', 'tothiq-persona' ), _x( 'عاما من الاستشارات', 'Arabic version of: Years advising', 'tothiq-persona' ), $tothiq_lang ) ),
		array( '120+', tothiq_persona_t( __( 'Projects delivered', 'tothiq-persona' ), _x( 'مشروعا منجزا', 'Arabic version of: Projects delivered', 'tothiq-persona' ), $tothiq_lang ) ),
		array( '9', tothiq_persona_t( __( 'Industries', 'tothiq-persona' ), _x( 'قطاعات', 'Arabic version of: Industries', 'tothiq-persona' ), $tothiq_lang ) ),
		array( '6', tothiq_persona_t( __( 'Gulf countries', 'tothiq-persona' ), _x( 'دول خليجية', 'Arabic version of: Gulf countries', 'tothiq-persona' ), $tothiq_lang ) ),
	),
	$tothiq_lang
);
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","backgroundColor":"soft","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?> has-soft-background-color has-background"><!-- wp:columns {"align":"wide","className":"tothiq-about__cols"} -->
<div class="wp-block-columns alignwide tothiq-about__cols"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'about_eyebrow', tothiq_persona_t( __( 'About', 'tothiq-persona' ), _x( 'نبذة', 'Arabic version of: About', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'about_heading', tothiq_persona_t( __( 'Fifteen years in the rooms where decisions get made.', 'tothiq-persona' ), _x( 'خمسة عشر عاما في الغرف التي تتخذ فيها القرارات.', 'Arabic version of: Fifteen years in the rooms where decisions get made.', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'about_body', tothiq_persona_t( __( 'I started in corporate strategy, then spent a decade building and running teams inside growing companies. That is why my advice comes with a plan for Monday morning, not only a slide for the board.', 'tothiq-persona' ), _x( 'بدأت في الاستراتيجية المؤسسية، ثم أمضيت عشر سنوات أبني الفرق وأديرها داخل شركات نامية. لذلك تأتي نصيحتي ومعها خطة لصباح الأحد، لا مجرد شريحة لمجلس الإدارة.', 'Arabic version of: I started in corporate strategy, then spent a decade building', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'about_body_2', tothiq_persona_t( __( 'Today I work with a small number of clients at a time, so each one gets my full attention — in English or Arabic.', 'tothiq-persona' ), _x( 'اليوم أعمل مع عدد محدود من العملاء في الوقت نفسه، ليحصل كل منهم على اهتمامي الكامل، بالعربية أو الإنجليزية.', 'Arabic version of: Today I work with a small number of clients at a time, so ea', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"align":"wide","className":"tothiq-stats","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-stats"><?php foreach ( $tothiq_stats as $tothiq_stat ) : ?><!-- wp:group {"className":"tothiq-stat","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-stat"><!-- wp:paragraph {"className":"tothiq-stat__num"} -->
<p class="tothiq-stat__num"><?php echo wp_kses_post( tothiq_persona_ltr( $tothiq_stat[0] ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-stat__label"} -->
<p class="tothiq-stat__label"><?php echo esc_html( $tothiq_stat[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
