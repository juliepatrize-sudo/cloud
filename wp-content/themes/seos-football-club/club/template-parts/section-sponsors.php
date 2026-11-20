<?php
/**
 * Sponsors marquee.
 *
 * @package Seos_Football_Club
 */

$seos_football_club_sponsors = seos_football_club_sponsors();

if ( ! seos_football_club_get( 'sponsors_show' ) || empty( $seos_football_club_sponsors ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-sponsors"></div>';
	}
	return;
}
?>
<section id="sfc-section-sponsors" class="sfc-sponsors">
	<?php if ( seos_football_club_get( 'sponsors_title' ) ) : ?>
		<h2 class="sfc-sponsors__title"><?php echo esc_html( seos_football_club_get( 'sponsors_title' ) ); ?></h2>
	<?php endif; ?>
	<div class="sfc-sponsors__viewport">
		<div class="sfc-sponsors__track">
			<?php for ( $seos_football_club_loop = 0; $seos_football_club_loop < 2; $seos_football_club_loop++ ) : ?>
				<ul class="sfc-sponsors__list"<?php echo $seos_football_club_loop ? ' aria-hidden="true"' : ''; ?>>
					<?php foreach ( $seos_football_club_sponsors as $seos_football_club_sponsor ) : ?>
						<li><span class="sfc-sponsors__mark" aria-hidden="true"></span><?php echo esc_html( $seos_football_club_sponsor ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endfor; ?>
		</div>
	</div>
</section>
