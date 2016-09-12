<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davwd
 */

?>



			<?php
			while ( have_posts() ) : the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.

			endwhile; // End of the loop.
			?>


<div class="wpa-slogan-banner" id="section-1">
	<div class="wrap bldg-bg" >
		<?php dynamic_sidebar("d2l_tabs"); ?>
		
	</div>
</div>

