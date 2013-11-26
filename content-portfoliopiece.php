<?php
/**
 * Content Single Portfolio Piece
 *
 * Loop content in single portfolio piece post template (single-portfoliopiece.php)
 *
 * @package    WordPress
 * @subpackage Foundation, for WordPress
 * @since      Foundation, for WordPress 4.0
 */
?>
<!-- THIS SHOWS THE CONTENT OF A SINGLE POST -->


<h5><?php the_title(); ?></h5>


<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'full', array( 'class' => 'portfolio-piece' ) ); ?>
<?php endif; ?>
<br>
<?php
if ( get_field( 'url' ) ) {
	echo "<a href='http://" . get_field('url') . "' target='_blank' class='button' style='text-decoration:none;'>Visit Page</a>";
}
?>
<br>
<br>
<p><?php the_content(); ?></p>

