<?php
/**
 * Latest club news. Shown on a static front page; with "Your latest posts"
 * the regular blog loop is displayed instead.
 *
 * @package Seos_Football_Club
 */

if ( ! seos_football_club_get( 'news_show' ) || 'page' !== get_option( 'show_on_front' ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-news"></div>';
	}
	return;
}

$seos_football_club_news = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => max( 1, min( 9, absint( seos_football_club_get( 'news_count' ) ) ) ),
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	)
);

if ( ! $seos_football_club_news->have_posts() ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-news"></div>';
	}
	return;
}

$seos_football_club_blog = get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : '';
?>
<section id="sfc-section-news" class="sfc-section sfc-news">
	<div class="sfc-container">
		<?php seos_football_club_heading( seos_football_club_get( 'news_title' ), '', seos_football_club_get( 'news_kicker' ) ); ?>
		<div class="sfc-news__grid">
			<?php
			$seos_football_club_i = 0;
			while ( $seos_football_club_news->have_posts() ) :
				$seos_football_club_news->the_post();
				?>
				<article <?php post_class( 'sfc-card' ); ?> data-sfc-reveal style="--d:<?php echo esc_attr( $seos_football_club_i * 0.12 ); ?>s">
					<a class="sfc-card__media" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'seos-football-club-card' );
						} else {
							echo '<span class="sfc-card__placeholder">' . seos_football_club_crest_svg() . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped inside the function.
						}
						?>
					</a>
					<div class="sfc-card__body">
						<span class="sfc-card__date"><?php echo esc_html( get_the_date() ); ?></span>
						<h3 class="sfc-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="sfc-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
						<a class="sfc-card__more" href="<?php the_permalink(); ?>">
							<?php echo esc_html( seos_football_club_get( 'news_read_more' ) ); ?>
							<span class="screen-reader-text"><?php the_title(); ?></span>
							<span aria-hidden="true">→</span>
						</a>
					</div>
				</article>
				<?php
				++$seos_football_club_i;
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<?php if ( $seos_football_club_blog ) : ?>
			<p class="sfc-news__all" data-sfc-reveal><a class="sfc-btn sfc-btn--ghost" href="<?php echo esc_url( $seos_football_club_blog ); ?>"><span><?php echo esc_html( seos_football_club_get( 'news_all' ) ); ?></span></a></p>
		<?php endif; ?>
	</div>
</section>
