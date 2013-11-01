<?php

/*
 * Template Name: Page-Home
 */

get_header(); ?>

<?php the_post(); ?>
	<!-- Usually in the <head> section -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/nivo-slider.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider/themes/default/default.css" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/nivo-slider/jquery.nivo.slider.pack.js"
	        type="text/javascript"></script>


	<!-- Slider -->
<?php if (get_field('images')): ?>
	<div class="slider-wrapper theme-default">
		<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
				<?php while (the_repeater_field('images')): ?>
					<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
					<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php the_sub_field('title'); ?>"
					     rel="<?php echo $thumb[0]; ?>"/>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

	<script type="text/javascript">
		(function ($) {
			$(window).load(function () {
				$('#slider').nivoSlider({
					animSpeed: 500,     // Slide transition speed
					pauseTime: 3000,    // How long each slide will show
					directionNav: true, // Next & Prev navigation
					controlNav: false,  // 1,2,3... navigation
					pauseOnHover: true  // Stop animation while hovering
				});
			});
		})(jQuery);
	</script>

<?php get_footer(); ?>