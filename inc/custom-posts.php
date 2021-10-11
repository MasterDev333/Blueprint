<?php
/**
 * Custom posts for use with this theme
 *
 *
 */

// Register Custom Post Type
function custom_post_type() {
	// Register People Custom Post Type
	// $labels = array(
	// 	'name'                  => _x( 'Peoples', 'peoples', 'text_domain' ),
	// 	'singular_name'         => _x( 'People', 'people', 'text_domain' ),
	// 	'menu_name'             => __( 'Peoples', 'text_domain' ),
	// 	'name_admin_bar'        => __( 'Peoples', 'text_domain' ),
	// 	'archives'              => __( 'Peoples Archives', 'text_domain' ),
	// 	'attributes'            => __( 'Peoples Attributes', 'text_domain' ),
	// 	'parent_item_colon'     => __( 'Parent Peoples:', 'text_domain' ),
	// 	'all_items'             => __( 'All Peoples', 'text_domain' ),
	// 	'add_new_item'          => __( 'Add People', 'text_domain' ),
	// 	'add_new'               => __( 'Add People', 'text_domain' ),
	// 	'new_item'              => __( 'New People', 'text_domain' ),
	// 	'edit_item'             => __( 'Edit People', 'text_domain' ),
	// 	'update_item'           => __( 'Update People', 'text_domain' ),
	// 	'view_item'             => __( 'View People', 'text_domain' ),
	// 	'view_items'            => __( 'View Peoples', 'text_domain' ),
	// 	'search_items'          => __( 'Search Peoples', 'text_domain' ),
	// 	'not_found'             => __( 'Not found', 'text_domain' ),
	// 	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 	'featured_image'        => __( 'Featured Image', 'text_domain' ),
	// 	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	// 	'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	// 	'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	// 	'insert_into_item'      => __( 'Insert into People', 'text_domain' ),
	// 	'uploaded_to_this_item' => __( 'Uploaded to this People', 'text_domain' ),
	// 	'items_list'            => __( 'Peoples list', 'text_domain' ),
	// 	'items_list_navigation' => __( 'Peoples list navigation', 'text_domain' ),
	// 	'filter_items_list'     => __( 'Filter Peoples list', 'text_domain' ),
	// );
	// $args = array(
	// 	'label'                 => __( 'Peoples', 'text_domain' ),
	// 	'description'           => __( 'Peoples post type', 'text_domain' ),
	// 	'labels'                => $labels,
	// 	'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail' ),
	// 	'hierarchical'          => true,
	// 	'public'                => true,
	// 	'show_ui'               => true,
	// 	'show_in_menu'          => true,
	// 	'show_in_rest'          => true,
	// 	'menu_position'         => 5,
	// 	'show_in_admin_bar'     => true,
	// 	'show_in_nav_menus'     => true,
	// 	'can_export'            => true,
	// 	'has_archive'           => false,
	// 	'exclude_from_search'   => false,
	// 	'publicly_queryable'    => true,
	// 	'capability_type'       => 'page',
	// 	'menu_icon'				=> 'dashicons-groups'
	// );
	// register_post_type( 'people', $args );
}
add_action( 'init', 'custom_post_type', 0 );
