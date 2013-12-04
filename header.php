<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package    WordPress
 * @subpackage Foundation, for WordPress
 * @since      Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta name="google-site-verification" content="aGMsPJ1F_rSMHkfMGAy7-t7jwCtHIzqRgSMXxjz_0mQ" />

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

<!--	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->

	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/mystyles.css">

	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="mainHeader">
	<div class="row">
		<div class="large-6 medium-6 small-12 columns logo-side">
			<a href=" <?php echo home_url(); ?> "><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/webworthy-logo-50.png" alt="<?php bloginfo('name'); ?>"></a>
			<p class="description"><?php bloginfo('description'); ?></p>
		</div>
		<div class="large-6 medium-6 small-12 columns contact-side">
			<div id="contactInfo">
				<a class="phone-link" href="tel:732-784-3141">(732) 784-3141 <img class="icons-phone" src="<?php bloginfo( 'template_directory' ); ?>/img/icons-phone.png" alt="732-784-3141 Phone Icon"></a><br>
				<a class="email-link" href="mailto:info@webworthydesign.com">info@webworthydesign.com <img class="icons-email" src="<?php bloginfo( 'template_directory' ); ?>/img/icons-email.png" alt="email-icon"></a>
			</div>
			<a class="quote-bubble" href="<?php echo site_url(); ?>/contact/"><img class="icons-email" src="<?php bloginfo( 'template_directory' ); ?>/img/free-quote-bubble.png" alt="Click Here For A Free Quote"></a>
		</div>
	</div>
</header>

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
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
			</section>
		</nav>
	</div>
</div>
