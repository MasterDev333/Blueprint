<?php
/**
 * Custom taxonomies for use with this theme
 *
 *
 */
function custom_taxonomies() {
    // register_taxonomy(
    //     'people_role',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    //     'people',             // post type name
    //     array(
    //         'hierarchical' => true,
    //         'label' => 'Roles', // display name
    //         'query_var' => true,
    //         'rewrite' => array(
    //             'slug' => 'people',    // This controls the base slug that will display before each term
    //             'with_front' => false  // Don't display the category base before
    //         )
    //     )
    // );
}
add_action( 'init', 'custom_taxonomies');
