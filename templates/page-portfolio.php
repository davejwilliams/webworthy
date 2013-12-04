<?php
/*
 * Template Name: Page-Portfolio
 */
get_header(); ?>

	<div class="portMenuBand">
		<!-- CREATE PORTFOLIO MENU BASED ON CATEGORIES -->
		<?php wp_nav_menu( array( 'theme_location' => 'portfolio-menu', 'container' => 'nav', 'container_class' => 'portfolio-menu' ) ); ?>
	</div>

	<!-- DISPLAY PORTFOLIO PIECES -->

	<!-- WEBSITES -->
	<div class="portfolioBand">
		<?php
		// Setup for the loop
		$args = array(
			'cat'            => 'genre',
			'post_type'      => 'portfoliopiece',
			'genre'          => 'website',
			'posts_per_page' => - 1
		);

		$portfolio_loop = new WP_Query( $args );
		?>

		<?php
		if ( $portfolio_loop->have_posts() ): ?>
			<h2>WEBSITES</h2>
			<ul class="small-block-grid-1 large-block-grid-4">
				<?php while ( $portfolio_loop->have_posts() ): ?>
					<?php $portfolio_loop->the_post(); ?>
					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
							<?php endif; ?>
							<p><?php echo the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>No Website Pieces Found</p>
		<?php endif; ?>
	</div>

<?php
// Restore original Post Data
wp_reset_postdata();
?>
	<!-- END WEBSITES-->

	<!-- PRINT -->
	<div class="portfolioBand">
		<?php
		// Setup for the loop
		$args = array(
			'cat'            => 'genre',
			'post_type'      => 'portfoliopiece',
			'genre'          => 'print',
			'posts_per_page' => - 1
		);

		$portfolio_loop = new WP_Query( $args );
		?>

		<?php
		if ( $portfolio_loop->have_posts() ): ?>
			<h2>PRINT</h2>
			<ul class="small-block-grid-1 large-block-grid-4">
				<?php while ( $portfolio_loop->have_posts() ): ?>
					<?php $portfolio_loop->the_post(); ?>
					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
							<?php endif; ?>
							<p><?php echo the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>No Print Pieces Found</p>
		<?php endif; ?>
	</div>

<?php
// Restore original Post Data
wp_reset_postdata();
?>
	<!-- END PRINT-->

	<!-- LOGOS -->
	<div class="portfolioBand">
		<?php
		// Setup for the loop
		$args = array(
			'cat'            => 'genre',
			'post_type'      => 'portfoliopiece',
			'genre'          => 'logo',
			'posts_per_page' => - 1
		);

		$portfolio_loop = new WP_Query( $args );
		?>

		<?php
		if ( $portfolio_loop->have_posts() ): ?>
			<h2>LOGOS</h2>
			<ul class="small-block-grid-1 large-block-grid-4">
				<?php while ( $portfolio_loop->have_posts() ): ?>
					<?php $portfolio_loop->the_post(); ?>
					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
							<?php endif; ?>
							<p><?php echo the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>No Logo Pieces Found</p>
		<?php endif; ?>
	</div>

<?php
// Restore original Post Data
wp_reset_postdata();
?>
	<!-- END LOGOS-->

	<!-- VIDEOS -->
	<div class="portfolioBand">
		<?php
		// Setup for the loop
		$args = array(
			'cat'            => 'genre',
			'post_type'      => 'portfoliopiece',
			'genre'          => 'video',
			'posts_per_page' => - 1
		);

		$portfolio_loop = new WP_Query( $args );
		?>

		<?php
		if ( $portfolio_loop->have_posts() ): ?>
			<h2>VIDEOS</h2>
			<ul class="small-block-grid-1 large-block-grid-4">
				<?php while ( $portfolio_loop->have_posts() ): ?>
					<?php $portfolio_loop->the_post(); ?>
					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
							<?php endif; ?>
							<p><?php echo the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<!--<p>No Video Pieces Found</p>-->
		<?php endif; ?>
	</div>

<?php
// Restore original Post Data
wp_reset_postdata();
?>
	<!-- END VIDEOS-->

	<!-- MISC. -->
	<div class="portfolioBand">
		<?php
		// Setup for the loop
		$args = array(
			'cat'            => 'genre',
			'post_type'      => 'portfoliopiece',
			'genre'          => 'misc',
			'posts_per_page' => - 1
		);

		$portfolio_loop = new WP_Query( $args );
		?>

		<?php
		if ( $portfolio_loop->have_posts() ): ?>
			<h2>MISC.</h2>
			<ul class="small-block-grid-1 large-block-grid-4">
				<?php while ( $portfolio_loop->have_posts() ): ?>
					<?php $portfolio_loop->the_post(); ?>
					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
							<?php endif; ?>
							<p><?php echo the_title(); ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>No Misc. Pieces Found</p>
		<?php endif; ?>
	</div>

<?php
// Restore original Post Data
wp_reset_postdata();
?>
	<!-- END MISC.-->

	<!-- END DISPLAY PORTFOLIO PIECES -->

<?php get_footer(); ?>