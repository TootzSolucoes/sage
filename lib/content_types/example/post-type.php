<?php

add_action( 'init', 'Example_register_post_types' );

function Example_register_post_types() {

    /* Register the Example example post type. */

    register_post_type(
        'example',
        array(
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => true,
            'exclude_from_search' => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 12,
            'menu_icon'           => 'dashicons-Example',
            'can_export'          => true,
            'delete_with_user'    => false,
            'hierarchical'        => false,
            'has_archive'         => 'Example',
            'query_var'           => 'example',
            'capability_type'     => 'post',
            'map_meta_cap'        => true,

            /* Capabilities. */
            // 'capabilities' => array(

            //     // meta caps (don't assign these to roles)
            //     'edit_post'              => 'edit_example',
            //     'read_post'              => 'read_example',
            //     'delete_post'            => 'delete_example',

            //     // primitive/meta caps
            //     'create_posts'           => 'create_examples',

            //     // primitive caps used outside of map_meta_cap()
            //     'edit_posts'             => 'edit_examples',
            //     'edit_others_posts'      => 'manage_Example',
            //     'publish_posts'          => 'manage_Example',
            //     'read_private_posts'     => 'read',

            //     // primitive caps used inside of map_meta_cap()
            //     'read'                   => 'read',
            //     'delete_posts'           => 'manage_Example',
            //     'delete_private_posts'   => 'manage_Example',
            //     'delete_published_posts' => 'manage_Example',
            //     'delete_others_posts'    => 'manage_Example',
            //     'edit_private_posts'     => 'edit_examples',
            //     'edit_published_posts'   => 'edit_examples'
            // ),

            /* The rewrite handles the URL structure. */
            'rewrite' => array(
                'slug'       => 'Example',
                'with_front' => false,
                'pages'      => true,
                'feeds'      => true,
                'ep_mask'    => EP_PERMALINK,
            ),

            /* What features the post type supports. */
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail'
            ),

            /* Labels used when displaying the posts. */
            'labels' => array(
                'name'               => __( 'examples',                   'example-textdomain' ),
                'singular_name'      => __( 'example',                    'example-textdomain' ),
                'menu_name'          => __( 'Example',                  'example-textdomain' ),
                'name_admin_bar'     => __( 'Example example',          'example-textdomain' ),
                'add_new'            => __( 'Add New',                    'example-textdomain' ),
                'add_new_item'       => __( 'Add New example',            'example-textdomain' ),
                'edit_item'          => __( 'Edit example',               'example-textdomain' ),
                'new_item'           => __( 'New example',                'example-textdomain' ),
                'view_item'          => __( 'View example',               'example-textdomain' ),
                'search_items'       => __( 'Search examples',            'example-textdomain' ),
                'not_found'          => __( 'No examples found',          'example-textdomain' ),
                'not_found_in_trash' => __( 'No examples found in trash', 'example-textdomain' ),
                'all_items'          => __( 'examples',                   'example-textdomain' ),
            )
        )
    );
}
