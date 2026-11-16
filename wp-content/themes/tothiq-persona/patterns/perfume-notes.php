<?php
/**
 * Title: Perfume — notes
 * Slug: tothiq-persona/perfume-notes
 * Categories: tothiq-persona
 * Description: Top, heart and base notes in three quiet columns.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_perfume_notes = tothiq_persona_items(
	'perfume_notes',
	array(
		array(
			tothiq_persona_t( __( 'Top', 'tothiq-persona' ), _x( 'البداية', 'Arabic version of: Top', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'The first minutes', 'tothiq-persona' ), _x( 'الدقائق الأولى', 'Arabic version of: The first minutes', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'زعفران', 'برغموت', 'فلفل وردي' ) : array( 'Saffron', 'Bergamot', 'Pink pepper' ),
		),
		array(
			tothiq_persona_t( __( 'Heart', 'tothiq-persona' ), _x( 'القلب', 'Arabic version of: Heart', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'The first hours', 'tothiq-persona' ), _x( 'الساعات الأولى', 'Arabic version of: The first hours', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'ورد طائفي', 'ياسمين', 'هيل' ) : array( 'Taif rose', 'Jasmine', 'Cardamom' ),
		),
		array(
			tothiq_persona_t( __( 'Base', 'tothiq-persona' ), _x( 'القاعدة', 'Arabic version of: Base', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Into the night', 'tothiq-persona' ), _x( 'حتى آخر الليل', 'Arabic version of: Into the night', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'عود كمبودي', 'عنبر', 'مسك أبيض', 'صندل' ) : array( 'Cambodian oud', 'Amber', 'White musk', 'Sandalwood' ),
		),
	),
	$tothiq_lang
);
$tothiq_cls = tothiq_persona_cls( 'tothiq-section tothiq-perfume-notes', $tothiq_lang );
$tothiq_id  = tothiq_persona_anchor( 'notes', $tothiq_lang );
?>
<!-- wp:group {"anchor":"<?php echo esc_attr( $tothiq_id ); ?>","className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div id="<?php echo esc_attr( $tothiq_id ); ?>" class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"tothiq-landing-head","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-head"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'notes_eyebrow', tothiq_persona_t( __( 'The composition', 'tothiq-persona' ), _x( 'التركيبة', 'Arabic version of: The composition', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"tothiq-serif"} -->
<h2 class="wp-block-heading tothiq-serif"><?php echo esc_html( tothiq_persona_text( 'notes_heading', tothiq_persona_t( __( 'How it opens, settles and stays', 'tothiq-persona' ), _x( 'كيف يبدأ ويستقر ويبقى', 'Arabic version of: How it opens, settles and stays', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-notes","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-notes"><?php foreach ( $tothiq_perfume_notes as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-note","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-note"><!-- wp:paragraph {"className":"tothiq-note__tier"} -->
<p class="tothiq-note__tier"><?php echo esc_html( $tothiq_item[0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"tothiq-serif"} -->
<h3 class="wp-block-heading tothiq-serif"><?php echo esc_html( $tothiq_item[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"tothiq-note__list"} -->
<ul class="wp-block-list tothiq-note__list"><?php foreach ( tothiq_persona_lines( $tothiq_item[2] ) as $tothiq_line ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $tothiq_line ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
