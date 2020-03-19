<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function sponsor_post_type() {

	$labels = array(
		'name'                  => _x( 'Sponsors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sponsors', 'text_domain' ),
		'name_admin_bar'        => __( 'Sponsors', 'text_domain' ),
		'archives'              => __( 'Sponsor Archives', 'text_domain' ),
		'attributes'            => __( 'Sponsor Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Sponsors', 'text_domain' ),
		'add_new_item'          => __( 'Add New Sponsor', 'text_domain' ),
		'add_new'               => __( 'Add New Sponsor', 'text_domain' ),
		'new_item'              => __( 'New Sponsor', 'text_domain' ),
		'edit_item'             => __( 'Edit Sponsor', 'text_domain' ),
		'update_item'           => __( 'Update Sponsor', 'text_domain' ),
		'view_item'             => __( 'View Sponsor', 'text_domain' ),
		'view_items'            => __( 'View Sponsor', 'text_domain' ),
		'search_items'          => __( 'Search Sponsor', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this sponsor', 'text_domain' ),
		'items_list'            => __( 'Sponsor list', 'text_domain' ),
		'items_list_navigation' => __( 'Sponsors list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter sponsor list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Sponsor', 'text_domain' ),
		'description'           => __( 'Sponsor posts', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sponsor_type', $args );

}
add_action( 'init', 'sponsor_post_type', 0 );