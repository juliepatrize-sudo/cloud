<?php
/**
 * League table and upcoming fixtures.
 *
 * @package Seos_Football_Club
 */

$seos_football_club_rows     = seos_football_club_table_rows();
$seos_football_club_fixtures = seos_football_club_fixture_rows();

if ( ! seos_football_club_get( 'table_show' ) || ( empty( $seos_football_club_rows ) && empty( $seos_football_club_fixtures ) ) ) {
	if ( is_customize_preview() ) {
		echo '<div id="sfc-section-table"></div>';
	}
	return;
}

$seos_football_club_highlight = strtolower( trim( (string) seos_football_club_get( 'table_highlight' ) ) );
?>
<section id="sfc-section-table" class="sfc-section sfc-table">
	<div class="sfc-container sfc-table__grid">
		<?php if ( $seos_football_club_rows ) : ?>
			<div class="sfc-panel" data-sfc-reveal>
				<h2 class="sfc-panel__title"><span class="fa fa-list-ol" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'table_title' ) ); ?></h2>
				<div class="sfc-table__scroll">
					<table class="sfc-standings">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col" class="sfc-standings__team"><?php echo esc_html( seos_football_club_get( 'label_team' ) ); ?></th>
								<th scope="col"><?php echo esc_html( seos_football_club_get( 'label_played' ) ); ?></th>
								<th scope="col"><?php echo esc_html( seos_football_club_get( 'label_won' ) ); ?></th>
								<th scope="col"><?php echo esc_html( seos_football_club_get( 'label_drawn' ) ); ?></th>
								<th scope="col"><?php echo esc_html( seos_football_club_get( 'label_lost' ) ); ?></th>
								<th scope="col"><?php echo esc_html( seos_football_club_get( 'label_points' ) ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ( $seos_football_club_rows as $seos_football_club_pos => $seos_football_club_row ) : ?>
								<tr class="<?php echo ( strtolower( $seos_football_club_row[0] ) === $seos_football_club_highlight ) ? 'is-club' : ''; ?>" style="--d:<?php echo esc_attr( $seos_football_club_pos * 0.07 ); ?>s">
									<td><span class="sfc-standings__pos"><?php echo absint( $seos_football_club_pos + 1 ); ?></span></td>
									<th scope="row" class="sfc-standings__team"><?php echo esc_html( $seos_football_club_row[0] ); ?></th>
									<td><?php echo esc_html( $seos_football_club_row[1] ); ?></td>
									<td><?php echo esc_html( $seos_football_club_row[2] ); ?></td>
									<td><?php echo esc_html( $seos_football_club_row[3] ); ?></td>
									<td><?php echo esc_html( $seos_football_club_row[4] ); ?></td>
									<td class="sfc-standings__pts"><?php echo esc_html( $seos_football_club_row[5] ); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $seos_football_club_fixtures ) : ?>
			<div class="sfc-panel" data-sfc-reveal style="--d:.15s">
				<h2 class="sfc-panel__title"><span class="fa fa-calendar" aria-hidden="true"></span> <?php echo esc_html( seos_football_club_get( 'fixtures_title' ) ); ?></h2>
				<ul class="sfc-fixtures">
					<?php foreach ( $seos_football_club_fixtures as $seos_football_club_i => $seos_football_club_fixture ) : ?>
						<?php $seos_football_club_away = ( 'A' === strtoupper( $seos_football_club_fixture[2] ) ); ?>
						<li class="sfc-fixture" style="--d:<?php echo esc_attr( $seos_football_club_i * 0.08 ); ?>s">
							<span class="sfc-fixture__date"><?php echo esc_html( $seos_football_club_fixture[0] ); ?></span>
							<span class="sfc-fixture__teams">
								<?php if ( $seos_football_club_away ) : ?>
									<?php echo esc_html( $seos_football_club_fixture[1] ); ?> <em><?php echo esc_html( seos_football_club_get( 'label_vs_fixture' ) ); ?></em> <strong><?php echo esc_html( seos_football_club_name() ); ?></strong>
								<?php else : ?>
									<strong><?php echo esc_html( seos_football_club_name() ); ?></strong> <em><?php echo esc_html( seos_football_club_get( 'label_vs_fixture' ) ); ?></em> <?php echo esc_html( $seos_football_club_fixture[1] ); ?>
								<?php endif; ?>
							</span>
							<span class="sfc-badge sfc-badge--<?php echo $seos_football_club_away ? 'away' : 'home'; ?>"><?php echo $seos_football_club_away ? esc_html( seos_football_club_get( 'label_away' ) ) : esc_html( seos_football_club_get( 'label_home' ) ); ?></span>
							<span class="sfc-fixture__time"><?php echo esc_html( $seos_football_club_fixture[3] ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>
</section>
