<?php
/**
 * Title: Perfume — story
 * Slug: tothiq-persona/perfume-story
 * Categories: tothiq-persona
 * Description: A full-width band: a warm colour panel (add a photo as its background in the editor) beside the story of the scent and three facts.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_perfume_facts = tothiq_persona_items(
	'perfume_facts',
	array(
		array(
			tothiq_persona_t( __( '10–12 h', 'tothiq-persona' ), _x( 'حتى 12 ساعة', 'Arabic version of: 10–12 h', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Lasting', 'tothiq-persona' ), _x( 'الثبات', 'Arabic version of: Lasting', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Moderate', 'tothiq-persona' ), _x( 'متوسط', 'Arabic version of: Moderate', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Trail', 'tothiq-persona' ), _x( 'الفوحان', 'Arabic version of: Trail', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Autumn, winter', 'tothiq-persona' ), _x( 'الخريف والشتاء', 'Arabic version of: Autumn, winter', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Best worn', 'tothiq-persona' ), _x( 'أفضل موسم', 'Arabic version of: Best worn', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-perfume-story', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'story', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"default"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"className":"tothiq-perfume-story__image","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-perfume-story__image"></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-perfume-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-perfume-story__text"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'story_eyebrow', tothiq_persona_t( __( 'The story', 'tothiq-persona' ), _x( 'الحكاية', 'Arabic version of: The story', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"tothiq-serif"} -->
<h2 class="wp-block-heading tothiq-serif"><?php echo esc_html( tothiq_persona_text( 'story_heading', tothiq_persona_t( __( 'Named after the evening light', 'tothiq-persona' ), _x( 'سمي على ضوء المساء', 'Arabic version of: Named after the evening light', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-perfume-story__lead"} -->
<p class="tothiq-perfume-story__lead"><?php echo esc_html( tothiq_persona_text( 'story_text', tothiq_persona_t( __( 'Noor began as a gift for my mother: our home in the evening, oud on the burner and roses brought from Taif. Two years and forty trials later, it is the scent I am asked about most.', 'tothiq-persona' ), _x( 'بدأ نور هدية لأمي: بيتنا في المساء، العود على المبخرة والورد القادم من الطائف. بعد سنتين وأربعين تجربة، صار العطر الذي أسأل عنه أكثر من غيره.', 'Arabic version of: Noor began as a gift for my mother: our home in the evening,', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-facts","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-facts"><?php foreach ( $tothiq_perfume_facts as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-fact"} -->
<p class="tothiq-fact"><strong class="tothiq-serif"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[0] ) ); ?></strong><br><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
