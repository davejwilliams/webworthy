<?php

/*
 * Template Name: Page-Home
 */

get_header(); ?>

<?php the_post(); ?>
	<!-- Usually in the <head> section -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/nivo-slider/themes/default/default.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/nivo-slider/jquery.nivo.slider.pack.js"
					type="text/javascript"></script>


	<!-- Slider -->
<?php if ( get_field( 'nivoslider' ) ): ?>
	<div class="slider-wrapper theme-default">
		<div class="ribbon"></div>
		<div id="slider" class="nivoSlider">
			<?php while ( has_sub_field( 'nivoslider' ) ): ?>
				<img src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_sub_field( 'image_alt' ); ?>">
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>


	<!------------ MAIN CONTENT ------------>
<div id="mainBand">
	<div id="ourDifference">
		<div class="row">
			<div class="large-12 columns">
				<!-- OUR DIFFERENCE ( MAIN CONTENT TEXT ) -->
				<?php the_content(); ?>
			</div>
		</div>
	</div>


	<!------------ MAIN BOXES ------------>
	<div class="row">

		<?php
		$args = array(
			//'orderby'   => 'parent',
			'order'     => 'asc',
			'post_type' => 'page',
			'post__in'  => array( 71, 73, 77, 79, 81, 83 ),
		);
		$page_query = new WP_Query( $args ); ?>

		<?php while ( $page_query->have_posts() ) : $page_query->the_post(); ?>
			<div class="large-4 columns">
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
		<!------------ END MAIN BOXES ------------>

		<div class="row">
			<div class="large-12 small-12 columns">
				<hr class="embossed">
			</div>
		</div>


		<div class="row">
			<!------------ WHAT'S NEW ------------>
			<?php
			global $more;
			$more = 0;

			$post_per_page = 3; // -1 shows all posts
			$args = array( 'posts_per_page' => $post_per_page );
			//$argsExample=array('category_name' => 'Latest News', 'posts_per_page' => $post_per_page);
			?>

			<div class="large-6 small-12 columns" id="whatsNew">
				<h6><a href="#">What's New</a></h6>
				<ul>
					<?php query_posts( $args ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!--<li>
					<a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a>
					<?php //the_date(); ?>
					<p><?php //echo get_excerpt(50); ?></p>
				</li>-->

						<li>
							<p><?php echo the_excerpt( 70 ); ?></p>
						</li>
						<li>
							<hr class="embossed">
						</li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<!------------ END WHAT'S NEW ------------>


			<!------------ TESTIMONIALS ------------>
			<div class="large-6 small-12 columns">
				<h6><a href="<?php echo site_url(); ?>/testimonials">Testimonials</a></h6>

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


		<!------------ LATEST WORK ------------>
		<div class="row">
			<div class="large-12 columns">
				<h6><a href="<?php echo site_url(); ?>/work">Latest Work</a></h6>
				<ul class="large-block-grid-6 small-block-grid-2">
					<li><img src="http://placehold.it/350x150"></li>
					<li><img src="http://placehold.it/350x150"></li>
					<li><img src="http://placehold.it/350x150"></li>
					<li><img src="http://placehold.it/350x150"></li>
					<li><img src="http://placehold.it/350x150"></li>
					<li><img src="http://placehold.it/350x150"></li>
				</ul>
			</div>
		</div>

	</div>
	<!-- END Main Content -->

	<!----------------------------------------------------------------->


	<script type="text/javascript">
		(function ($) {
			$(window).load(function () {
				$('#slider').nivoSlider({
					animSpeed   : 500,     // Slide transition speed
					pauseTime   : 3000,    // How long each slide will show
					directionNav: true, // Next & Prev navigation
					controlNav  : false,  // 1,2,3... navigation
					pauseOnHover: true  // Stop animation while hovering
				});
			});
		})(jQuery);
	</script>

<?php get_footer(); ?>