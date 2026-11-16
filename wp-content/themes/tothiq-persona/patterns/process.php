<?php
/**
 * Title: How we work together
 * Slug: tothiq-persona/process
 * Categories: tothiq-persona
 * Description: Three numbered steps from the first conversation to results, so a visitor knows what happens after they get in touch.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-process', $tothiq_lang );

$tothiq_steps = tothiq_persona_items(
	'steps',
	array(
		array( tothiq_persona_t( __( 'A first conversation', 'tothiq-persona' ), _x( 'محادثة أولى', 'Arabic version of: A first conversation', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Thirty minutes, free, to understand where things stand and whether I am the right person.', 'tothiq-persona' ), _x( 'ثلاثون دقيقة مجانا، لنفهم الوضع الحالي ونعرف إن كنت الشخص المناسب.', 'Arabic version of: Thirty minutes, free, to understand where things stand and w', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'A clear proposal', 'tothiq-persona' ), _x( 'عرض واضح', 'Arabic version of: A clear proposal', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'A fixed scope, timeline and fee within three working days. No hourly surprises.', 'tothiq-persona' ), _x( 'نطاق عمل وجدول زمني وأتعاب ثابتة خلال ثلاثة أيام عمل، دون مفاجآت.', 'Arabic version of: A fixed scope, timeline and fee within three working days. N', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Work that shows', 'tothiq-persona' ), _x( 'عمل تظهر نتائجه', 'Arabic version of: Work that shows', 'tothiq-persona' ), $tothiq_lang ), tothiq_persona_t( __( 'Weekly progress, and results measured against the numbers we agreed at the start.', 'tothiq-persona' ), _x( 'تقدم أسبوعي، ونتائج تقاس بالأرقام التي اتفقنا عليها في البداية.', 'Arabic version of: Weekly progress, and results measured against the numbers we', 'tothiq-persona' ), $tothiq_lang ) ),
	),
	$tothiq_lang
);
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-section-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-section-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'process_eyebrow', tothiq_persona_t( __( 'How it works', 'tothiq-persona' ), _x( 'طريقة العمل', 'Arabic version of: How it works', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'process_heading', tothiq_persona_t( __( 'From first call to results', 'tothiq-persona' ), _x( 'من أول مكالمة حتى النتائج', 'Arabic version of: From first call to results', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"ordered":true,"className":"tothiq-steps"} -->
<ol class="wp-block-list tothiq-steps"><?php foreach ( $tothiq_steps as $tothiq_step ) : ?><!-- wp:list-item -->
<li><strong><?php echo esc_html( $tothiq_step[0] ); ?></strong> <?php echo esc_html( $tothiq_step[1] ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
