<?php

/*
 * Template Name: Page-Portfolio
 */

get_header(); ?>

	<div class="portMenuBand">
			<!-- CREATE PORTFOLIO MENU BASED ON CATEGORIES -->
			<?php wp_nav_menu(array('theme_location' => 'portfolio-menu', 'container' => 'nav', 'container_class' => 'portfolio-menu')); ?>
	</div>


	<!-- DISPLAY PORTFOLIO PIECES -->
	<div class="portfolioBand" style="margin-bottom: 10px;">

		<ul class="small-block-grid-1 large-block-grid-4">
			<?php
			// Setup for the loop

			$args = array(
				'cat' => 'genre',
				//'post_type' => 'website',
				'post_type' => 'portfoliopiece',
				'genre' => '',
				'posts_per_page' => 10
			);

			$portfolio_loop = new WP_Query($args);
			?>


			<?php
			if ($portfolio_loop->have_posts()): ?>
				<?php while ($portfolio_loop->have_posts()): ?>
					<?php $portfolio_loop->the_post(); ?>

					<li class="portfolioItem">
						<a href="<?php the_permalink(); ?>" style='text-decoration:none;'>
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail('thumbnail', array('class' => 'th')); ?>
							<?php endif; ?>

							<p><?php echo the_title(); ?></p>

							<?php //the_content(); ?>
						</a>
					</li>


				<?php endwhile; ?>
			<?php else: ?>
				<p>No Portfolio Pieces Found</p>
			<?php endif; ?>

		</ul>
	</div>
	<!-- END DISPLAY PORTFOLIO PIECES -->



<?php
// Restore original Post Data
wp_reset_postdata();
?>




<?php get_footer(); ?>