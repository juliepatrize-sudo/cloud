<?php
/**
 * Results ticker.
 *
 * @package Seos_Football_Club
 */

$seos_football_club_counts = seos_football_club_counts();
$seos_football_club_items  = array();
for ( $seos_football_club_i = 1; $seos_football_club_i <= $seos_football_club_counts['ticker']; $seos_football_club_i++ ) {
	$seos_football_club_item = seos_football_club_get( 'ticker_item_' . $seos_football_club_i );
	if ( $seos_football_club_item ) {
		$seos_football_club_items[] = $seos_football_club_item;
	}
}

if ( ! seos_football_club_get( 'ticker_show' ) || empty( $seos_football_club_items ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-ticker"></div>';
	}
	return;
}
?>
<section id="sfc-section-ticker" class="sfc-ticker" aria-label="<?php echo esc_attr( seos_football_club_get( 'ticker_label' ) ); ?>">
	<?php if ( seos_football_club_get( 'ticker_label' ) ) : ?>
		<div class="sfc-ticker__label"><span class="fa fa-futbol-o" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'ticker_label' ) ); ?></div>
	<?php endif; ?>
	<div class="sfc-ticker__viewport">
		<div class="sfc-ticker__track">
			<?php for ( $seos_football_club_loop = 0; $seos_football_club_loop < 2; $seos_football_club_loop++ ) : ?>
				<ul class="sfc-ticker__list"<?php echo $seos_football_club_loop ? ' aria-hidden="true"' : ''; ?>>
					<?php foreach ( $seos_football_club_items as $seos_football_club_item ) : ?>
						<li><?php echo esc_html( $seos_football_club_item ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endfor; ?>
		</div>
	</div>
</section>
