<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>

	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width"/>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mystyles.css">

	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

</head>

<header class="mainHeader">
	<div class="row">
		<img src="<?php bloginfo('template_directory'); ?>/img/wwd-logo.jpg">
	</div>
</header>

<body <?php body_class(); ?>>

<div class="navBand">
	<div class="row">
		<nav class="top-bar">
			<ul class="title-area">
				<!--<li class="name"><h1><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="-->
				<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" rel="home">-->
				<?php //bloginfo('name'); ?><!--</a></h1></li>-->
				<li class="name"></li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation())); ?>
			</section>
		</nav>
	</div>
</div>
