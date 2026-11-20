<?php
/**
 * Club front page content: sections + Settings > Reading content.
 * Loaded by seos_football_club_front_page().
 *
 * @package Seos_Football_Club
 */


foreach ( array( 'ticker', 'stats', 'table' ) as $seos_football_club_section ) {
	seos_football_club_render_section( $seos_football_club_section );
}

if ( 'page' === get_option( 'show_on_front' ) ) :

	while ( have_posts() ) :
		the_post();
		if ( '' !== trim( get_the_content() ) ) :
			?>
			<section class="sfc-section sfc-page-content">
				<div class="sfc-container">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'sfc-prose' ); ?> data-sfc-reveal>
						<?php the_title( '<h2 class="sfc-heading__title">', '</h2>' ); ?>
						<div class="entry-content">
							<?php
							the_content();
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seos-football-club' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
					</article>
				</div>
			</section>
			<?php
		endif;
	endwhile;

	seos_football_club_render_section( 'news' );

else :
	?>
	<div class="sfc-blog">
	<div id="content-center">
		<div id="primary" class="content-area">
			<div class="ig-home">
				<main id="main" class="site-main" role="main">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						the_posts_pagination();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</main>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
	<?php
endif;

seos_football_club_render_section( 'cta' );
seos_football_club_render_section( 'sponsors' );
