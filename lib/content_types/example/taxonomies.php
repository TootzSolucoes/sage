<?php

add_action( 'init', 'prefix_example_register_taxonomies' );

function prefix_example_register_taxonomies() {

    /* Register the example Category taxonomy. */

    register_taxonomy(
        'example-category',
        array( 'example' ),
        array(
            'public'            => true,
            'show_ui'           => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'show_admin_column' => true,
            'hierarchical'      => true,
            'query_var'         => 'example-category',

            /* Capabilities. */
            // 'capabilities' => array(
            //     'manage_terms' => 'manage_example',
            //     'edit_terms'   => 'manage_example',
            //     'delete_terms' => 'manage_example',
            //     'assign_terms' => 'edit_examples',
            // ),

            /* The rewrite handles the URL structure. */
            'rewrite' => array(
                'slug'         => 'example/category',
                'with_front'   => false,
                'hierarchical' => true,
                'ep_mask'      => EP_NONE
            ),

            /* Labels used when displaying taxonomy and terms. */
            'labels' => array(
                'name'                       => __( 'example Categories', 'example-textdomain' ),
                'singular_name'              => __( 'example Category',   'example-textdomain' ),
                'menu_name'                  => __( 'Categories',         'example-textdomain' ),
                'name_admin_bar'             => __( 'Category',           'example-textdomain' ),
                'search_items'               => __( 'Search Categories',  'example-textdomain' ),
                'popular_items'              => __( 'Popular Categories', 'example-textdomain' ),
                'all_items'                  => __( 'All Categories',     'example-textdomain' ),
                'edit_item'                  => __( 'Edit Category',      'example-textdomain' ),
                'view_item'                  => __( 'View Category',      'example-textdomain' ),
                'update_item'                => __( 'Update Category',    'example-textdomain' ),
                'add_new_item'               => __( 'Add New Category',   'example-textdomain' ),
                'new_item_name'              => __( 'New Category Name',  'example-textdomain' ),
                'parent_item'                => __( 'Parent Category',    'example-textdomain' ),
                'parent_item_colon'          => __( 'Parent Category:',   'example-textdomain' ),
                'separate_items_with_commas' => null,
                'add_or_remove_items'        => null,
                'choose_from_most_used'      => null,
                'not_found'                  => null,
            )
        )
    );

    /* Register the example Tag taxonomy. */

    register_taxonomy(
        'example_tag',
        array( 'example' ),
        array(
            'public'            => true,
            'show_ui'           => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'show_admin_column' => true,
            'hierarchical'      => false,
            'query_var'         => 'example_tag',

            /* Capabilities. */
            'capabilities' => array(
                'manage_terms' => 'manage_example',
                'edit_terms'   => 'manage_example',
                'delete_terms' => 'manage_example',
                'assign_terms' => 'edit_examples',
            ),

            /* The rewrite handles the URL structure. */
            'rewrite' => array(
                'slug'         => 'example/tag',
                'with_front'   => false,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE
            ),

            /* Labels used when displaying taxonomy and terms. */
            'labels' => array(
                'name'                       => __( 'example Tags',                   'example-textdomain' ),
                'singular_name'              => __( 'example Tag',                    'example-textdomain' ),
                'menu_name'                  => __( 'Tags',                           'example-textdomain' ),
                'name_admin_bar'             => __( 'Tag',                            'example-textdomain' ),
                'search_items'               => __( 'Search Tags',                    'example-textdomain' ),
                'popular_items'              => __( 'Popular Tags',                   'example-textdomain' ),
                'all_items'                  => __( 'All Tags',                       'example-textdomain' ),
                'edit_item'                  => __( 'Edit Tag',                       'example-textdomain' ),
                'view_item'                  => __( 'View Tag',                       'example-textdomain' ),
                'update_item'                => __( 'Update Tag',                     'example-textdomain' ),
                'add_new_item'               => __( 'Add New Tag',                    'example-textdomain' ),
                'new_item_name'              => __( 'New Tag Name',                   'example-textdomain' ),
                'separate_items_with_commas' => __( 'Separate tags with commas',      'example-textdomain' ),
                'add_or_remove_items'        => __( 'Add or remove tags',             'example-textdomain' ),
                'choose_from_most_used'      => __( 'Choose from the most used tags', 'example-textdomain' ),
                'not_found'                  => __( 'No tags found',                  'example-textdomain' ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
            )
        )
    );
}
