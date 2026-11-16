<?php
/**
 * Title: Results
 * Slug: tothiq-persona/testimonials
 * Categories: tothiq-persona, testimonials
 * Description: Three short quotes from clients about what changed, each with a name and role. Use real words from real clients.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-results', $tothiq_lang );
$tothiq_id   = tothiq_persona_anchor( 'results', $tothiq_lang );

$tothiq_quotes = tothiq_persona_items(
	'quotes',
	array(
		array(
			tothiq_persona_t( __( 'We left the first workshop with three priorities instead of fifteen. Revenue was up 38% within the year.', 'tothiq-persona' ), _x( 'خرجنا من ورشة العمل الأولى بثلاث أولويات بدلا من خمس عشرة. وارتفعت الإيرادات 38% خلال عام.', 'Arabic version of: We left the first workshop with three priorities instead of f', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Khalid M.', 'tothiq-persona' ), _x( 'خالد م.', 'Arabic version of: Khalid M.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Founder, retail group', 'tothiq-persona' ), _x( 'مؤسس، مجموعة تجزئة', 'Arabic version of: Founder, retail group', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'She rebuilt our reporting so the board sees the same numbers we do. Meetings got shorter and decisions got faster.', 'tothiq-persona' ), _x( 'أعادت بناء تقاريرنا فأصبح مجلس الإدارة يرى الأرقام نفسها التي نراها. قصرت الاجتماعات وتسارعت القرارات.', 'Arabic version of: She rebuilt our reporting so the board sees the same numbers', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Noura A.', 'tothiq-persona' ), _x( 'نورة ع.', 'Arabic version of: Noura A.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'CEO, healthcare provider', 'tothiq-persona' ), _x( 'الرئيسة التنفيذية، مقدم رعاية صحية', 'Arabic version of: CEO, healthcare provider', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'The platform decision alone saved us a year and a large contract we did not need.', 'tothiq-persona' ), _x( 'قرار اختيار المنصة وحده وفر علينا عاما كاملا وعقدا كبيرا لم نكن نحتاجه.', 'Arabic version of: The platform decision alone saved us a year and a large contr', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Faisal R.', 'tothiq-persona' ), _x( 'فيصل ر.', 'Arabic version of: Faisal R.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'COO, logistics company', 'tothiq-persona' ), _x( 'مدير العمليات، شركة لوجستية', 'Arabic version of: COO, logistics company', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-section-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-section-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'results_eyebrow', tothiq_persona_t( __( 'Results', 'tothiq-persona' ), _x( 'النتائج', 'Arabic version of: Results', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'results_heading', tothiq_persona_t( __( 'What clients say changed', 'tothiq-persona' ), _x( 'ما الذي تغير بحسب العملاء', 'Arabic version of: What clients say changed', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"tothiq-quotes","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-quotes"><?php foreach ( $tothiq_quotes as $tothiq_quote ) : ?><!-- wp:group {"className":"tothiq-quote","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-quote"><!-- wp:paragraph {"className":"tothiq-quote__text"} -->
<p class="tothiq-quote__text"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_quote[0] ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-quote__by"} -->
<p class="tothiq-quote__by"><strong><?php echo esc_html( $tothiq_quote[1] ); ?></strong><br><?php echo esc_html( $tothiq_quote[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
