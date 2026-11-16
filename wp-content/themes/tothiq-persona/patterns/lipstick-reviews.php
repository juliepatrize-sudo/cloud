<?php
/**
 * Title: Lipstick — reviews
 * Slug: tothiq-persona/lipstick-reviews
 * Categories: tothiq-persona
 * Description: Reviews that say which shade and skin tone, with a filter by skin tone.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_lipstick_reviews = tothiq_persona_items(
	'lipstick_reviews',
	array(
		array(
			tothiq_persona_t( __( 'Rose Taif', 'tothiq-persona' ), _x( 'ورد طائفي', 'Arabic version of: Rose Taif', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Medium', 'tothiq-persona' ), _x( 'متوسطة', 'Arabic version of: Medium', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Still on after lunch and coffee. Finally a matte that does not crack.', 'tothiq-persona' ), _x( 'ما زال ثابتا بعد الغداء والقهوة. أخيرا مطفي لا يتشقق.', 'Arabic version of: Still on after lunch and coffee. Finally a matte that does n', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Dana', 'tothiq-persona' ), _x( 'دانة', 'Arabic version of: Dana', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Sand', 'tothiq-persona' ), _x( 'رملي', 'Arabic version of: Sand', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Tan', 'tothiq-persona' ), _x( 'حنطية', 'Arabic version of: Tan', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'The perfect nude for my skin tone. I bought two.', 'tothiq-persona' ), _x( 'النود المثالي للون بشرتي. اشتريت اثنين.', 'Arabic version of: The perfect nude for my skin tone. I bought two.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Latifa', 'tothiq-persona' ), _x( 'لطيفة', 'Arabic version of: Latifa', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Classic Red', 'tothiq-persona' ), _x( 'أحمر كلاسيكي', 'Arabic version of: Classic Red', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Deep', 'tothiq-persona' ), _x( 'داكنة', 'Arabic version of: Deep', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Bold, even colour in one swipe.', 'tothiq-persona' ), _x( 'لون جريء ومتساو من أول مرة.', 'Arabic version of: Bold, even colour in one swipe.', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Sheikha', 'tothiq-persona' ), _x( 'شيخة', 'Arabic version of: Sheikha', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_lipstick_shades = tothiq_persona_items(
	'lipstick_shades',
	array(
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Rose Taif', 'tothiq-persona' ), _x( 'ورد طائفي', 'Arabic version of: Rose Taif', 'tothiq-persona' ), $tothiq_lang ),
			'#b8436a',
		),
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Pink Pearl', 'tothiq-persona' ), _x( 'وردي لؤلؤي', 'Arabic version of: Pink Pearl', 'tothiq-persona' ), $tothiq_lang ),
			'#d77d93',
		),
		array(
			tothiq_persona_t( __( 'Pinks', 'tothiq-persona' ), _x( 'الوردي', 'Arabic version of: Pinks', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Mauve', 'tothiq-persona' ), _x( 'موف', 'Arabic version of: Mauve', 'tothiq-persona' ), $tothiq_lang ),
			'#9c5a6e',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Sand', 'tothiq-persona' ), _x( 'رملي', 'Arabic version of: Sand', 'tothiq-persona' ), $tothiq_lang ),
			'#b9826b',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Mocha', 'tothiq-persona' ), _x( 'موكا', 'Arabic version of: Mocha', 'tothiq-persona' ), $tothiq_lang ),
			'#7a4a3a',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Peach', 'tothiq-persona' ), _x( 'خوخي', 'Arabic version of: Peach', 'tothiq-persona' ), $tothiq_lang ),
			'#d98c75',
		),
		array(
			tothiq_persona_t( __( 'Nudes', 'tothiq-persona' ), _x( 'النود', 'Arabic version of: Nudes', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Dates', 'tothiq-persona' ), _x( 'تمر', 'Arabic version of: Dates', 'tothiq-persona' ), $tothiq_lang ),
			'#8e4a3a',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Classic Red', 'tothiq-persona' ), _x( 'أحمر كلاسيكي', 'Arabic version of: Classic Red', 'tothiq-persona' ), $tothiq_lang ),
			'#b3172f',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Brick', 'tothiq-persona' ), _x( 'طوبي', 'Arabic version of: Brick', 'tothiq-persona' ), $tothiq_lang ),
			'#a0412e',
		),
		array(
			tothiq_persona_t( __( 'Reds', 'tothiq-persona' ), _x( 'الأحمر', 'Arabic version of: Reds', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Cherry', 'tothiq-persona' ), _x( 'كرزي', 'Arabic version of: Cherry', 'tothiq-persona' ), $tothiq_lang ),
			'#8e1428',
		),
		array(
			tothiq_persona_t( __( 'Berries', 'tothiq-persona' ), _x( 'التوتي', 'Arabic version of: Berries', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Berry', 'tothiq-persona' ), _x( 'توتي', 'Arabic version of: Berry', 'tothiq-persona' ), $tothiq_lang ),
			'#6e1f38',
		),
		array(
			tothiq_persona_t( __( 'Berries', 'tothiq-persona' ), _x( 'التوتي', 'Arabic version of: Berries', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Plum', 'tothiq-persona' ), _x( 'برقوقي', 'Arabic version of: Plum', 'tothiq-persona' ), $tothiq_lang ),
			'#4f1f35',
		),
	),
	$tothiq_lang
);
$tothiq_skin_tones = tothiq_persona_items(
	'skin_tones',
	array(
		array(
			tothiq_persona_t( __( 'Fair', 'tothiq-persona' ), _x( 'فاتحة', 'Arabic version of: Fair', 'tothiq-persona' ), $tothiq_lang ),
			'#f1d3c0',
		),
		array(
			tothiq_persona_t( __( 'Medium', 'tothiq-persona' ), _x( 'متوسطة', 'Arabic version of: Medium', 'tothiq-persona' ), $tothiq_lang ),
			'#d9a582',
		),
		array(
			tothiq_persona_t( __( 'Tan', 'tothiq-persona' ), _x( 'حنطية', 'Arabic version of: Tan', 'tothiq-persona' ), $tothiq_lang ),
			'#b07650',
		),
		array(
			tothiq_persona_t( __( 'Deep', 'tothiq-persona' ), _x( 'داكنة', 'Arabic version of: Deep', 'tothiq-persona' ), $tothiq_lang ),
			'#6e4330',
		),
	),
	$tothiq_lang
);
$tothiq_colors = array();
foreach ( $tothiq_lipstick_shades as $tothiq_item ) {
	$tothiq_colors[ $tothiq_item[1] ] = tothiq_persona_hex( $tothiq_item[2] );
}
$tothiq_all = tothiq_persona_text( 'lipstick_reviews_all', tothiq_persona_t( __( 'All', 'tothiq-persona' ), _x( 'الكل', 'Arabic version of: All', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-lipstick-reviews', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'reviews', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'lipstick_reviews_eyebrow', tothiq_persona_t( __( 'Reviews', 'tothiq-persona' ), _x( 'آراء العميلات', 'Arabic version of: Reviews', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tothiq-chips" data-filter="#tothiq-lipstick-reviews-list" role="group"><button type="button" class="is-on" data-tone="" aria-pressed="true"><?php echo esc_html( $tothiq_all ); ?></button><?php foreach ( $tothiq_skin_tones as $tothiq_item ) : ?><button type="button" data-tone="<?php echo esc_attr( $tothiq_item[0] ); ?>" aria-pressed="false"><?php echo esc_html( $tothiq_item[0] ); ?></button><?php endforeach; ?></div>
<div class="tothiq-lreviews" id="tothiq-lipstick-reviews-list"><?php foreach ( $tothiq_lipstick_reviews as $tothiq_item ) : ?><div class="tothiq-lreview" data-review-tone="<?php echo esc_attr( $tothiq_item[1] ); ?>"><p class="tothiq-lreview__meta"><i style="background:<?php echo esc_attr( isset( $tothiq_colors[ $tothiq_item[0] ] ) ? $tothiq_colors[ $tothiq_item[0] ] : '#b8436a' ); ?>"></i><?php echo esc_html( $tothiq_item[0] . ' · ' . $tothiq_item[1] ); ?></p><p><?php echo esc_html( $tothiq_item[2] ); ?></p><p class="tothiq-lreview__by"><?php echo esc_html( $tothiq_item[3] ); ?></p></div><?php endforeach; ?></div>
<!-- /wp:html -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
