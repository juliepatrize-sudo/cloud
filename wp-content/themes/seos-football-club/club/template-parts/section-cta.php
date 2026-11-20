<?php
/**
 * Membership call to action.
 *
 * @package Seos_Football_Club
 */

if ( ! seos_football_club_get( 'cta_show' ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-cta"></div>';
	}
	return;
}
?>
<section id="sfc-section-cta" class="sfc-cta">
	<div class="sfc-cta__ball" aria-hidden="true"></div>
	<div class="sfc-container sfc-cta__inner" data-sfc-reveal>
		<div class="sfc-cta__text">
			<h2 class="sfc-cta__title"><?php echo esc_html( seos_football_club_get( 'cta_title' ) ); ?></h2>
			<p><?php echo esc_html( seos_football_club_get( 'cta_text' ) ); ?></p>
		</div>
		<?php if ( seos_football_club_get( 'cta_btn_text' ) ) : ?>
			<a class="sfc-btn sfc-btn--light" href="<?php echo esc_url( seos_football_club_get( 'cta_btn_url' ) ); ?>"><span><?php echo esc_html( seos_football_club_get( 'cta_btn_text' ) ); ?></span></a>
		<?php endif; ?>
	</div>
</section>
