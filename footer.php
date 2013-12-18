<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package    WordPress
 * @subpackage Foundation, for WordPress
 * @since      Foundation, for WordPress 4.0
 */
?>

<!-- Footer -->
<div class="footerBand big-shadow">
	<footer class="row full-width">

		<div class="large-7 columns">
			<a href=" <?php echo home_url(); ?> "><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/footerlogo.png" alt="<?php bloginfo('name'); ?>"></a>
			<p><em><span style="font-size: 14px;"><?php bloginfo('description'); ?></span></em></p>
		</div>

		<div class="large-5 columns">
			<div style="float: right; text-align: right; margin-bottom: 20px;">
				<div id="footerContactInfo">
					<a class="phone-link" href="tel:732-784-3141">(732) 784-3141 <img class="icons-phone" src="<?php bloginfo( 'template_directory' ); ?>/img/icons-phone-red.png" alt="732-784-3141 Phone Icon"></a><br>
					<a class="email-link" href="mailto:info@webworthydesign.com">info@webworthydesign.com <img class="icons-email" src="<?php bloginfo( 'template_directory' ); ?>/img/icons-email-red.png"  alt="email-icon"></a>
				</div>
				<a href="<?php echo site_url(); ?>/contact"><img src="<?php bloginfo( 'template_directory' ); ?>/img/social-icons-email.png" alt="envelope-icon"></a>
				<a href="http://www.facebook.com/webworthydesign/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/social-icons-facebook.png" alt="facebook-logo"></a>
				<a href="http://www.twitter.com/webworthydesign/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/social-icons-twitter.png" alt="twitter-logo"></a>
				<a href="http://www.youtube.com/webworthydesign/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/social-icons-youtube.png" alt="youtube-logo"></a>
			</div>
		</div>

		<div class="large-12 columns">

				<!-- CREATE FOOTER MENU -->
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'nav', 'container_class' => 'footer-menu' ) ); ?>

			<hr class="embossed">
		<p style="font-size: 12px;">Copyright &copy; <?php echo date( "Y" ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>

	</footer>
</div>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>