<?php

/*
 * Template Name: Page-Home
 */

get_header(); ?>

	<!-- Begin Page -->
	<div class="sliderBand">
		<div class="large-12 columns">
			<img src="<?php bloginfo('template_directory'); ?>/img/slide-01.jpg">
		</div>
	</div>

	<div class="row">

		<!-- Main Content -->
		<div class="large-12 columns" role="content">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('content', 'page'); ?>
				<?php endwhile; ?>

			<?php endif; ?>

		</div>
		<!-- End Main Content -->

	</div>
	<!-- End Page -->

<?php get_footer(); ?>