<?php
add_action( 'init', 'codex_tutorial_init' );
/**
 * Register a tutorial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function codex_tutorial_init() {
	$labels = array(
		'name'               => _x( 'Tutorials', 'post type general name', 'davwd' ),
		'singular_name'      => _x( 'Tutorial', 'post type singular name', 'davwd' ),
		'menu_name'          => _x( 'Tutorials', 'admin menu', 'davwd' ),
		'name_admin_bar'     => _x( 'Tutorial', 'add new on admin bar', 'davwd' ),
		'add_new'            => _x( 'Add New', 'Tutorial', 'davwd' ),
		'add_new_item'       => __( 'Add New Tutorial', 'davwd' ),
		'new_item'           => __( 'New Tutorial', 'davwd' ),
		'edit_item'          => __( 'Edit Tutorial', 'davwd' ),
		'view_item'          => __( 'View Tutorial', 'davwd' ),
		'all_items'          => __( 'All Tutorials', 'davwd' ),
		'search_items'       => __( 'Search Tutorials', 'davwd' ),
		'parent_item_colon'  => __( 'Parent Tutorials:', 'davwd' ),
		'not_found'          => __( 'No Tutorials found.', 'davwd' ),
		'not_found_in_trash' => __( 'No Tutorials found in Trash.', 'davwd' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'davwd' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tutorial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

	);

	register_post_type( 'tutorial', $args );
}















add_action( 'init', 'codex_snippet_init' );
/**
 * Register a snippet post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function codex_snippet_init() {
	$labels = array(
		'name'               => _x( 'Snippets', 'post type general name', 'davwd' ),
		'singular_name'      => _x( 'Snippet', 'post type singular name', 'davwd' ),
		'menu_name'          => _x( 'Snippets', 'admin menu', 'davwd' ),
		'name_admin_bar'     => _x( 'Snippet', 'add new on admin bar', 'davwd' ),
		'add_new'            => _x( 'Add New', 'Snippet', 'davwd' ),
		'add_new_item'       => __( 'Add New Snippet', 'davwd' ),
		'new_item'           => __( 'New Snippet', 'davwd' ),
		'edit_item'          => __( 'Edit Snippet', 'davwd' ),
		'view_item'          => __( 'View Snippet', 'davwd' ),
		'all_items'          => __( 'All Snippets', 'davwd' ),
		'search_items'       => __( 'Search Snippets', 'davwd' ),
		'parent_item_colon'  => __( 'Parent Snippets:', 'davwd' ),
		'not_found'          => __( 'No Snippets found.', 'davwd' ),
		'not_found_in_trash' => __( 'No Snippets found in Trash.', 'davwd' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'davwd' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'snippet' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author' )
	);

	register_post_type( 'snippet', $args );
}



add_action( 'init', 'create_snippet_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_snippet_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('snippet_tag','snippet',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'snippet_tag' ),
  ));
}
















add_action( 'init', 'codex_blog_init' );
/**
 * Register a blog post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function codex_blog_init() {
	$labels = array(
		'name'               => _x( 'Blogs', 'post type general name', 'davwd' ),
		'singular_name'      => _x( 'Blog', 'post type singular name', 'davwd' ),
		'menu_name'          => _x( 'Blogs', 'admin menu', 'davwd' ),
		'name_admin_bar'     => _x( 'Blog', 'add new on admin bar', 'davwd' ),
		'add_new'            => _x( 'Add New', 'Blog', 'davwd' ),
		'add_new_item'       => __( 'Add New Blog', 'davwd' ),
		'new_item'           => __( 'New Blog', 'davwd' ),
		'edit_item'          => __( 'Edit Blog', 'davwd' ),
		'view_item'          => __( 'View Blog', 'davwd' ),
		'all_items'          => __( 'All Blogs', 'davwd' ),
		'search_items'       => __( 'Search Blogs', 'davwd' ),
		'parent_item_colon'  => __( 'Parent Blogs:', 'davwd' ),
		'not_found'          => __( 'No Blogs found.', 'davwd' ),
		'not_found_in_trash' => __( 'No Blogs found in Trash.', 'davwd' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'davwd' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'blog' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'blog', $args );
}
















add_action( 'init', 'codex_portfolio_init' );
/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function codex_portfolio_init() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'davwd' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'davwd' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'davwd' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'davwd' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'davwd' ),
		'add_new_item'       => __( 'Add New Portfolio', 'davwd' ),
		'new_item'           => __( 'New Portfolio', 'davwd' ),
		'edit_item'          => __( 'Edit Portfolio', 'davwd' ),
		'view_item'          => __( 'View Portfolio', 'davwd' ),
		'all_items'          => __( 'All Portfolios', 'davwd' ),
		'search_items'       => __( 'Search Portfolios', 'davwd' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'davwd' ),
		'not_found'          => __( 'No Portfolios found.', 'davwd' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'davwd' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'davwd' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'portfolio', $args );
}




add_action( 'init', 'create_portfolio_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_portfolio_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','portfolio',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}




add_action( 'init', 'create_portfolio_category_taxonomies', 0 );


function create_portfolio_category_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Portfolio Categories', 'textdomain' ),
		'all_items'         => __( 'All Portfolio Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Portfolio Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Portfolio Category', 'textdomain' ),
		'update_item'       => __( 'Update Portfolio Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Portfolio Category', 'textdomain' ),
		'new_item_name'     => __( 'New Portfolio Category Name', 'textdomain' ),
		'menu_name'         => __( 'Portfolio Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio_category' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );

}

