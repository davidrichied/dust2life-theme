<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davwd
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>




<!--   <header class="site-header">
    <nav class="wrap main-navigation" id="site-navigation" role="navigation">
        <h1 class="title-area">
          <p class="site-title">
            <a class='current' href="<?php bloginfo('url'); ?>">
            	<?php bloginfo( 'name' ); ?>
            </a>
          </p>
        </h1>
          
      	<?php
        $defaults = array(
          'container' => 'div',
          'container_class' => 'nav-primary',
          'theme_location' => 'primary',
          'menu_class' => 'menu-primary'
        );

        wp_nav_menu( $defaults );
					?>
    </nav>
  </header>
 -->



<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'davwd' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				
				<?php
        $defaults = array(
          'container' => 'div',
          'theme_location' => 'primary',
          'menu_class' => 'menu-primary',
          'menu_id' => 'primary-menu'
        );

        wp_nav_menu( $defaults );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
