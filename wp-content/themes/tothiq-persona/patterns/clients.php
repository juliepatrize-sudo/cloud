<?php
/**
 * Title: Clients
 * Slug: tothiq-persona/clients
 * Categories: tothiq-persona
 * Description: A short line of the organisations you have worked with, set as quiet wordmarks. Keep it to five or six names.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_cls  = tothiq_persona_cls( 'tothiq-clients', $tothiq_lang );

$tothiq_clients = tothiq_persona_items(
	'clients',
	array(
		array( tothiq_persona_t( __( 'Gulf Ventures', 'tothiq-persona' ), _x( 'خليج فنتشرز', 'Arabic version of: Gulf Ventures', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Northwind Holdings', 'tothiq-persona' ), _x( 'نورثويند القابضة', 'Arabic version of: Northwind Holdings', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Al Noor Group', 'tothiq-persona' ), _x( 'مجموعة النور', 'Arabic version of: Al Noor Group', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Crescent Health', 'tothiq-persona' ), _x( 'الهلال الصحية', 'Arabic version of: Crescent Health', 'tothiq-persona' ), $tothiq_lang ) ),
		array( tothiq_persona_t( __( 'Bayan Logistics', 'tothiq-persona' ), _x( 'بيان للخدمات اللوجستية', 'Arabic version of: Bayan Logistics', 'tothiq-persona' ), $tothiq_lang ) ),
	),
	$tothiq_lang
);
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:paragraph {"align":"center","className":"tothiq-clients__label"} -->
<p class="has-text-align-center tothiq-clients__label"><?php echo esc_html( tothiq_persona_text( 'clients_label', tothiq_persona_t( __( 'Trusted by leadership teams at', 'tothiq-persona' ), _x( 'عملت مع فرق القيادة في', 'Arabic version of: Trusted by leadership teams at', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"tothiq-clients__list"} -->
<ul class="wp-block-list tothiq-clients__list"><?php foreach ( $tothiq_clients as $tothiq_client ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $tothiq_client[0] ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
