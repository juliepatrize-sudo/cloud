<?php
/**
 * Title: Webinar — agenda
 * Slug: tothiq-persona/webinar-agenda
 * Categories: tothiq-persona
 * Description: A timeline of the session: time, topic and one line each.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_agenda = tothiq_persona_items(
	'agenda',
	array(
		array(
			'19:00',
			tothiq_persona_t( __( 'Why most launches are forgotten in a week', 'tothiq-persona' ), _x( 'لماذا تنسى معظم الإطلاقات خلال أسبوع', 'Arabic version of: Why most launches are forgotten in a week', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Three patterns behind launches that fade, with Gulf examples.', 'tothiq-persona' ), _x( 'ثلاثة أنماط وراء الإطلاقات التي تتلاشى، بأمثلة من الخليج.', 'Arabic version of: Three patterns behind launches that fade, with Gulf examples', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'19:15',
			tothiq_persona_t( __( 'The 30-day plan, step by step', 'tothiq-persona' ), _x( 'خطة الثلاثين يوما خطوة بخطوة', 'Arabic version of: The 30-day plan, step by step', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'What to do in the four weeks before launch day, and what to skip.', 'tothiq-persona' ), _x( 'ما تفعله في الأسابيع الأربعة قبل يوم الإطلاق، وما تتجاوزه.', 'Arabic version of: What to do in the four weeks before launch day, and what to ', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'19:40',
			tothiq_persona_t( __( 'Live Q&A', 'tothiq-persona' ), _x( 'أسئلة مباشرة', 'Arabic version of: Live Q&A', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Bring your launch; we look at three of them together.', 'tothiq-persona' ), _x( 'أحضر إطلاقك، ونراجع ثلاثة منها معا.', 'Arabic version of: Bring your launch; we look at three of them together.', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'19:55',
			tothiq_persona_t( __( 'Your template', 'tothiq-persona' ), _x( 'قالبك', 'Arabic version of: Your template', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Everyone leaves with the launch plan template in English and Arabic.', 'tothiq-persona' ), _x( 'يخرج الجميع بقالب خطة الإطلاق بالعربية والإنجليزية.', 'Arabic version of: Everyone leaves with the launch plan template in English and', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-webinar-agenda', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'agenda', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head is-centered","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head is-centered"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'agenda_eyebrow', tothiq_persona_t( __( 'Agenda', 'tothiq-persona' ), _x( 'البرنامج', 'Arabic version of: Agenda', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'agenda_heading', tothiq_persona_t( __( 'Sixty minutes, no filler', 'tothiq-persona' ), _x( 'ستون دقيقة بلا حشو', 'Arabic version of: Sixty minutes, no filler', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-agenda","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-agenda"><?php foreach ( $tothiq_agenda as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-agenda__item","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-agenda__item"><!-- wp:paragraph {"className":"tothiq-agenda__time"} -->
<p class="tothiq-agenda__time"><span class="tothiq-range"><?php echo esc_html( tothiq_persona_clock( $tothiq_item[0], $tothiq_lang ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $tothiq_item[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-muted"} -->
<p class="tothiq-muted"><?php echo esc_html( $tothiq_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
