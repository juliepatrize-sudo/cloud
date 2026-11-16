<?php
/**
 * Title: Webinar — who it is for
 * Slug: tothiq-persona/webinar-audience
 * Categories: tothiq-persona
 * Description: Three short columns on who the session is for.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_audience = tothiq_persona_items(
	'audience',
	array(
		array(
			tothiq_persona_t( __( 'Founders', 'tothiq-persona' ), _x( 'المؤسسون', 'Arabic version of: Founders', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'launching a first product or a new line', 'tothiq-persona' ), _x( 'يطلقون منتجا أول أو خطا جديدا', 'Arabic version of: launching a first product or a new line', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Marketing leads', 'tothiq-persona' ), _x( 'مسؤولو التسويق', 'Arabic version of: Marketing leads', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'who need a plan the whole company can follow', 'tothiq-persona' ), _x( 'يحتاجون خطة تتبعها الشركة كلها', 'Arabic version of: who need a plan the whole company can follow', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Agencies', 'tothiq-persona' ), _x( 'الوكالات', 'Arabic version of: Agencies', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'planning launches for clients in the Gulf', 'tothiq-persona' ), _x( 'تخطط لإطلاقات عملائها في الخليج', 'Arabic version of: planning launches for clients in the Gulf', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-webinar-audience', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'audience', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-audience","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-audience"><?php foreach ( $tothiq_audience as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-audience__item"} -->
<p class="tothiq-audience__item"><strong><?php echo esc_html( $tothiq_item[0] ); ?></strong><br><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
