<?php

/*
 * Template Name: Page-Testimonials
 */

get_header(); ?>


<div class="row" style="margin-bottom: 10px;">

	<br><br>

	<?php if ( have_posts() ) : while ( have_posts() ) : ?>
		<?php the_post(); ?>


		<!-- TESTIMONIALS -->
		<div class="large-12 small-12 columns">

			<?php if ( get_field( 'testimonials' ) ): ?>

				<?php while ( has_sub_field( 'testimonials' ) ): ?>

					<p class='bubble'><?php echo the_sub_field( 'testimonial' ); ?></p>
					<p class='testimonial-name'>
						<?php echo the_sub_field( 'person' ); ?><br>
<!--						<span class='testimonial-company'>--><?php //echo the_sub_field( 'company' ); ?><!--</span>-->
						<span class='testimonial-company'><a href="http://<?php echo the_sub_field( 'website' ); ?>" target="_blank"><?php echo the_sub_field( 'company' ); ?></a></span>
					</p>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
		<!-- END TESTIMONIALS -->



	<?php endwhile;
	else: ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php
	endif; ?>

</div>

<?php get_footer(); ?>
