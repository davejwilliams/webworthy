<?php

/*
 * Template Name: Page-Sidebar-Right
 */

get_header(); ?>

<!-- Begin Page -->
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">

    <!-- Main Content -->
    <div class="large-9 columns" role="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->

	<?php get_sidebar(); ?>

</div>
<!-- End Page -->

<?php get_footer(); ?>