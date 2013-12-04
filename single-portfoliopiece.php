<?php
/**
 * Single-Portfoliopiece
 *
 * Loop container for single portfolio piece post content
 *
 * @package    WordPress
 * @subpackage Foundation, for WordPress
 * @since      Foundation, for WordPress 4.0
 */

get_header(); ?>

<!--	<div class="portMenuBand">-->
		<!-- CREATE PORTFOLIO MENU BASED ON CATEGORIES -->
<!--		--><?php //wp_nav_menu( array( 'theme_location' => 'portfolio-menu', 'container' => 'nav', 'container_class' => 'portfolio-menu' ) ); ?>
<!--	</div>-->

<div class="portMenuBand"><a class="back-btn" href="javascript:history.go(-1)">&lt;&lt; Back</a></div>

	<!-- Begin Page -->
	<div class="row" style="margin-top: 10px; margin-bottom: 10px;">

		<!-- Main Content -->
		<div class="large-12 columns">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'portfoliopiece' ); ?>
				<?php endwhile; ?>

			<?php endif; ?>

		</div>
		<!-- End Main Content -->

		<?php //get_sidebar(); ?>

	</div>
	<!-- End Page -->


<?php get_footer(); ?>