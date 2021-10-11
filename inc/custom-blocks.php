<?php
// Custom ACF Blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // Register Accordion Block
        // acf_register_block_type(array(
        //     'name'              => 'accordion',
        //     'title'             => __('Accordion'),
        //     'description'       => __('Accordion'),
        //     'render_template'   => 'template-parts/blocks/accordion/accordion.php',
        //     'category'          => 'individual-blocks',
        //     'icon'              => 'list-view',
        //     'keywords'          => array( 'accordion' ),
        // ));
    }
}


// function custom_block_categories( $categories ) {
// 	return array_merge(
// 		$categories,
// 		[
// 			[
// 				'slug'  => 'individual-blocks',
// 				'title' => 'individual Blocks',
// 			],
// 		]
// 	);
// }
// add_action( 'block_categories', 'custom_block_categories', 10, 2 );