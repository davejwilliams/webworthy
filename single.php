<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package    WordPress
 * @subpackage Foundation, for WordPress
 * @since      Foundation, for WordPress 4.0
 */

get_header(); ?>

	<!-- Begin Page -->
	<div class="row" style="margin-top: 10px; margin-bottom: 10px; min-height:800px;">

		<!-- Main Content -->
		<div class="large-9 columns" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>
				<?php endwhile; ?>

			<?php endif; ?>

		</div>
		<!-- End Main Content -->

		<?php get_sidebar(); ?>

	</div>
	<!-- End Page -->

<?php get_footer(); ?>