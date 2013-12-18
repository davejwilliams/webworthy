<?php
/*
 * Template Name: Page-Home
 */

get_header(); ?>

<?php the_post(); ?>

	<!-- REVOLUTION SLIDER -->
<?php //putRevSlider( "homeslider" ) ?>
<?php //putRevSlider( "homepage" ) ?>
<?php putRevSlider( "homepageblue" ) ?>


	<!-- MAIN CONTENT -->
	<div id="ourDifference">
		<div class="row">
			<div class="large-12 columns">
				<!-- OUR DIFFERENCE ( MAIN CONTENT TEXT ) -->
				<?php the_content(); ?>
			</div>
		</div>
	</div>


	<!-- SERVICES -->
	<div class="services-bg">
		<div class="row">

			<?php
			$args = array(
				'orderby'   => 'post__in',
				'post_type' => 'page',
				'post__in'  => array(
					71, //Web Design
					83, //Graphic Design
					73, //Branding & Identity
					79, //Photo Retouching & Restoration
					77, //Audio/Video
					81, //SEO & Social Media
				),
			);
			$page_query = new WP_Query( $args ); ?>

			<?php while ( $page_query->have_posts() ) : $page_query->the_post(); ?>
				<div class="large-4 columns services-box">
					<h6>
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail( 'thumbnail', array( 'class' => 'icon' ) );
							} ?>
							<?php the_title(); ?></a>
					</h6>

					<p><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>
				</div>
			<?php endwhile; ?>

		</div>
	</div>

	<!-- END SERVICES -->

	<div class="row" style="margin-bottom: 20px;">
		<div class="large-12 small-12 columns">
			<hr class="embossed">
		</div>
	</div>


	<div class="row">
		<!-- NOTEWORTHY -->
		<?php
		global $more;
		$more = 0;

		$post_per_page = 3; // -1 shows all posts
		$args = array( 'posts_per_page' => $post_per_page );
		//$argsExample=array('category_name' => 'Latest News', 'posts_per_page' => $post_per_page);
		?>

		<div class="large-6 small-12 columns" id="whatsNew">
			<h6><a href="<?php echo site_url(); ?>/noteworthy">Noteworthy</a></h6>
			<ul>
				<?php query_posts( $args ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> / <small><?php echo get_the_date( $d ); ?></small>
						<p><?php echo the_excerpt(10); ?></p>
					</li>

<!--					<li>-->
<!--						<p><a href="--><?php //the_permalink(); ?><!--">--><?php //echo the_excerpt( 70 ); ?><!--</a></p>-->
<!--					</li>-->

<!--					<li><hr class="embossed"></li>-->

				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
		<!-- END NOTEWORTHY -->


		<!--TESTIMONIALS -->
		<div class="large-6 small-12 columns">
			<h6><a href="<?php echo site_url(); ?>/why-us/testimonials">Testimonials</a></h6>

			<?php $other_page = 92; //ID for Testimonials Page ?>

			<?php
			$rows = get_field( 'testimonials', $other_page );
			$row_count = count( $rows );
			$i = rand( 0, $row_count - 1 );

			echo "<p class='bubble'>" . $rows[$i]['testimonial'] . "</p>";
			echo "<p class='testimonial-name'>" . $rows[$i]['person'] . "<br>";
			echo "<span class='testimonial-company'>" . $rows[$i]['company'] . "</span></p>";
			?>

		</div>


	</div>


	<div class="row" style="margin-bottom: 20px;">
		<div class="large-12 small-12 columns">
			<hr class="embossed">
		</div>
	</div>

	<!--LATEST WORK -->

<?php
// Setup for the loop
$args = array(
	'cat'            => 'genre',
	'post_type'      => 'portfoliopiece',
	'genre'          => '',
	'posts_per_page' => 6
);

$portfolio_loop = new WP_Query( $args );
?>

	<div class="row">
		<div class="large-12 columns">
			<h6><a href="<?php echo site_url(); ?>/work">Latest Work</a></h6>

			<?php
			if ( $portfolio_loop->have_posts() ): ?>

				<ul class="large-block-grid-6 small-block-grid-2">
					<?php while ( $portfolio_loop->have_posts() ): ?>
						<?php $portfolio_loop->the_post(); ?>
						<!--						<li><img src="http://placehold.it/350x150" alt="placeholder"></li>-->

						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ): ?>
									<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'th' ) ); ?>
								<?php endif; ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>

			<?php else: ?>
				<p>No Website Pieces Found</p>
			<?php endif; ?>

			<?php
			// Restore original Post Data
			wp_reset_postdata();
			?>

		</div>
	</div>

<?php get_footer(); ?>