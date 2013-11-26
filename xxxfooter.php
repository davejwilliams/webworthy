<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!-- Footer -->
<div class="footerBand big-shadow">
	<footer class="row">

		<?php if (dynamic_sidebar('Sidebar Footer One') || dynamic_sidebar('Sidebar Footer Two') || dynamic_sidebar('Sidebar Footer Three') || dynamic_sidebar('Sidebar Footer Four')) : else : ?>


			<?php $args = array(
				'depth'        => 1,
				'title_li'     => __(''),
			); ?>


			<div class="large-12 columns">
				<ul class="inline-list">
					<?php wp_list_pages($args); ?>
				</ul>
			</div>

		<?php endif; ?>



<!--		<div class="large-4 columns">-->
<!--			--><?php //wp_nav_menu(array('theme_location' => 'main-menu', 'depth' => '1')); ?>
<!--		</div>-->


	</footer>
</div>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>