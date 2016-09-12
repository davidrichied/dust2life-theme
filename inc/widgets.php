<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function d2l_tabs() {

	register_sidebar( array(
		'name'          => 'Ajax Tabs',
		'id'            => 'd2l_tabs',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'd2l_tabs' );