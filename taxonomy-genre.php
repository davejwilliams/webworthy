<?php get_header(); ?>

<div class="portMenuBand">
	<!-- CREATE PORTFOLIO MENU BASED ON CATEGORIES -->
	<?php wp_nav_menu(array('theme_location' => 'portfolio-menu', 'container' => 'nav', 'container_class' => 'portfolio-menu')); ?>
</div>

<div class="portfolioBand">


			<ul class="small-block-grid-1 large-block-grid-4">

				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
						<?php //get_template_part('content', get_post_format()); ?>
						<li class="portfolioItem">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()): ?>
									<?php the_post_thumbnail('thumbnail'); ?>
								<?php endif; ?>

								<p><?php echo the_title(); ?></p>

								<?php //the_content(); ?>
							</a>
						</li>
					<?php endwhile; ?>
			</ul>

				<?php else : ?>

					<h2><?php _e('No posts.', 'foundation'); ?></h2>
					<p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'foundation'); ?></p>

				<?php endif; ?>

			<?php //foundation_pagination(); ?>
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>





