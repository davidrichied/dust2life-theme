<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package davwd
 */


get_header();

//Get the post type to pass into the shortcode
$archive_cpt = get_post_type();
?>
	<div id="primary" class="content-area">
		<main id="main" class="content" role="main">
			<header class="entry-header">
				<?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
			<?php echo do_shortcode("[d2l_vid_posts post_type='$archive_cpt']"); ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php

get_footer();
