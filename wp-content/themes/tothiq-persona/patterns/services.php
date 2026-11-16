<?php
/**
 * Title: Services
 * Slug: tothiq-persona/services
 * Categories: tothiq-persona
 * Description: What you offer, as two columns of short cards — a title, one line, what is included and a link that opens WhatsApp naming the service.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-section tothiq-services', $tothiq_lang );
$tothiq_id   = tothiq_persona_anchor( 'services', $tothiq_lang );

// The "what is included" points are written one per line and passed on as a list.
$tothiq_services = tothiq_persona_items(
	'services',
	array_map(
		static function ( $tothiq_row ) {
			$tothiq_row[2] = tothiq_persona_lines( $tothiq_row[2] );
			return $tothiq_row;
		},
		array(
			array(
				tothiq_persona_t( __( 'Growth strategy', 'tothiq-persona' ), _x( 'استراتيجية النمو', 'Arabic version of: Growth strategy', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( 'Where to play, how to win, and the plan to get there.', 'tothiq-persona' ), _x( 'أين تنافس، وكيف تتفوق، والخطة التي توصلك إلى هناك.', 'Arabic version of: Where to play, how to win, and the plan to get there.', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( "Market and customer research\nPricing and positioning\nA twelve-month growth roadmap", 'tothiq-persona' ), _x( "دراسة السوق والعملاء\nالتسعير والتموضع\nخارطة نمو لاثني عشر شهرا", 'Arabic version of: Market and customer research / Pricing and positioning / A twelve-month growth roadmap', 'tothiq-persona' ), $tothiq_lang ),
			),
			array(
				tothiq_persona_t( __( 'Operations and scale', 'tothiq-persona' ), _x( 'التشغيل والتوسع', 'Arabic version of: Operations and scale', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( 'Processes, teams and systems that keep up with growth.', 'tothiq-persona' ), _x( 'إجراءات وفرق وأنظمة تواكب النمو.', 'Arabic version of: Processes, teams and systems that keep up with growth.', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( "Operating model design\nKPIs and management reporting\nHiring plans for key roles", 'tothiq-persona' ), _x( "تصميم نموذج التشغيل\nمؤشرات الأداء وتقارير الإدارة\nخطط التوظيف للمناصب الرئيسية", 'Arabic version of: Operating model design / KPIs and management reporting / Hiring plans for key roles', 'tothiq-persona' ), $tothiq_lang ),
			),
			array(
				tothiq_persona_t( __( 'Digital transformation', 'tothiq-persona' ), _x( 'التحول الرقمي', 'Arabic version of: Digital transformation', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( 'Technology decisions made on business terms, not vendor terms.', 'tothiq-persona' ), _x( 'قرارات تقنية تتخذ بمنطق العمل، لا بمنطق المورد.', 'Arabic version of: Technology decisions made on business terms, not vendor terms.', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( "A digital roadmap\nVendor and platform selection\nPractical AI adoption", 'tothiq-persona' ), _x( "خارطة طريق رقمية\nاختيار الموردين والمنصات\nتبني الذكاء الاصطناعي عمليا", 'Arabic version of: A digital roadmap / Vendor and platform selection / Practical AI adoption', 'tothiq-persona' ), $tothiq_lang ),
			),
			array(
				tothiq_persona_t( __( 'Founder and board advisory', 'tothiq-persona' ), _x( 'استشارات المؤسسين ومجالس الإدارة', 'Arabic version of: Founder and board advisory', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( 'A standing second opinion for the decisions that matter.', 'tothiq-persona' ), _x( 'رأي ثان دائم في القرارات المهمة.', 'Arabic version of: A standing second opinion for the decisions that matter.', 'tothiq-persona' ), $tothiq_lang ),
				tothiq_persona_t( __( "Monthly advisory sessions\nBoard meeting preparation\nThe investor story", 'tothiq-persona' ), _x( "جلسات استشارية شهرية\nالتحضير لاجتماعات مجلس الإدارة\nقصة الشركة للمستثمرين", 'Arabic version of: Monthly advisory sessions / Board meeting preparation / The investor story', 'tothiq-persona' ), $tothiq_lang ),
			),
		)
	),
	$tothiq_lang
);

$tothiq_link = tothiq_persona_text( 'services_link', tothiq_persona_t( __( 'Discuss this', 'tothiq-persona' ), _x( 'ناقش هذه الخدمة', 'Arabic version of: Discuss this', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
/* translators: %s: service name. */
$tothiq_msg = tothiq_persona_t( __( 'Hello, I would like to discuss: %s', 'tothiq-persona' ), _x( 'مرحبا، أود مناقشة: %s', 'Arabic version of: Hello, I would like to discuss: %s', 'tothiq-persona' ), $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-section-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-section-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'services_eyebrow', tothiq_persona_t( __( 'Services', 'tothiq-persona' ), _x( 'الخدمات', 'Arabic version of: Services', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'services_heading', tothiq_persona_t( __( 'Where I can help', 'tothiq-persona' ), _x( 'كيف يمكنني المساعدة', 'Arabic version of: Where I can help', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"tothiq-services__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-services__grid"><?php foreach ( $tothiq_services as $tothiq_service ) : ?><!-- wp:group {"className":"tothiq-service","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-service"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $tothiq_service[0] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( $tothiq_service[1] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list"><?php foreach ( tothiq_persona_lines( isset( $tothiq_service[2] ) ? $tothiq_service[2] : '' ) as $tothiq_point ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $tothiq_point ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><?php tothiq_persona_button( $tothiq_link, 'whatsapp_url', $tothiq_lang, 'link', array( 'msg' => sprintf( $tothiq_msg, $tothiq_service[0] ) ) ); ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
