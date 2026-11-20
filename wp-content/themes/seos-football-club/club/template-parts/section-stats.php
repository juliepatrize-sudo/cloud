<?php
/**
 * Animated club statistics.
 *
 * @package Seos_Football_Club
 */

if ( ! seos_football_club_get( 'stats_show' ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-stats"></div>';
	}
	return;
}

$seos_football_club_counts = seos_football_club_counts();
$seos_football_club_icons  = array( 'fa-trophy', 'fa-history', 'fa-users', 'fa-heart' );
?>
<section id="sfc-section-stats" class="sfc-section sfc-stats">
	<div class="sfc-container">
		<?php seos_football_club_heading( seos_football_club_get( 'stats_title' ) ); ?>
		<div class="sfc-stats__grid">
			<?php
			for ( $seos_football_club_i = 1; $seos_football_club_i <= $seos_football_club_counts['stats']; $seos_football_club_i++ ) :
				$seos_football_club_number = seos_football_club_get( 'stat_number_' . $seos_football_club_i );
				$seos_football_club_label  = seos_football_club_get( 'stat_label_' . $seos_football_club_i );
				if ( '' === (string) $seos_football_club_number && ! $seos_football_club_label ) {
					continue;
				}
				$seos_football_club_icon = isset( $seos_football_club_icons[ $seos_football_club_i - 1 ] ) ? $seos_football_club_icons[ $seos_football_club_i - 1 ] : 'fa-star';
				?>
				<div class="sfc-stat" data-sfc-reveal style="--d:<?php echo esc_attr( ( $seos_football_club_i - 1 ) * 0.12 ); ?>s">
					<span class="sfc-stat__icon fa <?php echo esc_attr( $seos_football_club_icon ); ?>" aria-hidden="true"></span>
					<span class="sfc-stat__number" data-sfc-count="<?php echo esc_attr( absint( $seos_football_club_number ) ); ?>"><?php echo esc_html( number_format_i18n( absint( $seos_football_club_number ) ) ); ?></span>
					<span class="sfc-stat__label"><?php echo esc_html( $seos_football_club_label ); ?></span>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>
