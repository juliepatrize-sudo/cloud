<?php
/**
 * Title: Webinar — speakers
 * Slug: tothiq-persona/webinar-speakers
 * Categories: tothiq-persona
 * Description: You first (name, role and photo from Your details), then your guest speakers.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_speakers = tothiq_persona_items(
	'speakers',
	array(
		array(
			tothiq_persona_t( __( 'Guest speaker', 'tothiq-persona' ), _x( 'متحدث ضيف', 'Arabic version of: Guest speaker', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Head of growth, fintech app', 'tothiq-persona' ), _x( 'رئيس النمو، تطبيق مالي', 'Arabic version of: Head of growth, fintech app', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Guest speaker', 'tothiq-persona' ), _x( 'متحدث ضيف', 'Arabic version of: Guest speaker', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Founder, retail group', 'tothiq-persona' ), _x( 'مؤسس، مجموعة تجزئة', 'Arabic version of: Founder, retail group', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-webinar-speakers', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'speakers', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'speakers_eyebrow', tothiq_persona_t( __( 'Speakers', 'tothiq-persona' ), _x( 'المتحدثون', 'Arabic version of: Speakers', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'speakers_heading', tothiq_persona_t( __( 'Who you will hear from', 'tothiq-persona' ), _x( 'من ستستمع إليهم', 'Arabic version of: Who you will hear from', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-speakers","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-speakers"><!-- wp:group {"className":"tothiq-speaker","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-speaker"><?php $tothiq_photo = tothiq_persona_photo( 'hero', 'images/portrait.webp', tothiq_persona_name( $tothiq_lang ) ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-speaker__photo"} -->
<figure class="wp-block-image size-full tothiq-speaker__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tothiq-speaker__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-speaker__text"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-speaker__name"} -->
<p class="tothiq-speaker__name"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'role', $tothiq_lang ); ?>,"className":"tothiq-speaker__role"} -->
<p class="tothiq-speaker__role"><?php tothiq_persona_value( 'role', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php foreach ( $tothiq_speakers as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-speaker is-guest","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-speaker is-guest"><!-- wp:paragraph {"className":"tothiq-speaker__avatar"} -->
<p class="tothiq-speaker__avatar"><?php echo esc_html( mb_substr( $tothiq_item[0], 0, 1 ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-speaker__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-speaker__text"><!-- wp:paragraph {"className":"tothiq-speaker__name"} -->
<p class="tothiq-speaker__name"><?php echo esc_html( $tothiq_item[0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-speaker__role"} -->
<p class="tothiq-speaker__role"><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
