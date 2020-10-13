<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Gallery', TEXTDOMAIN ),
        'singular_name'       => _x( 'Gallery', TEXTDOMAIN ),
        'menu_name'           => __( 'Gallery', TEXTDOMAIN ),
        'parent_item_colon'   => __( 'Parent Gallery', TEXTDOMAIN ),
        'all_items'           => __( 'All Galleries', TEXTDOMAIN ),
        'view_item'           => __( 'View Gallery', TEXTDOMAIN ),
        'add_new_item'        => __( 'Add New Gallery', TEXTDOMAIN ),
        'add_new'             => __( 'Add New Gallery', TEXTDOMAIN ),
        'edit_item'           => __( 'Edit Gallery', TEXTDOMAIN ),
        'update_item'         => __( 'Update Gallery', TEXTDOMAIN ),
        'search_items'        => __( 'Search Gallery', TEXTDOMAIN ),
        'not_found'           => __( 'Not Found', TEXTDOMAIN ),
        'not_found_in_trash'  => __( 'Not found in Trash', TEXTDOMAIN ),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'gallery', TEXTDOMAIN ),
        'description'         => __( 'Galleries of Hassan\'s Inclusions Education', TEXTDOMAIN ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'galleries', $args );


    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', TEXTDOMAIN ),
        'singular_name'       => _x( 'Testimonial', TEXTDOMAIN ),
        'menu_name'           => __( 'Testimonial Slider', TEXTDOMAIN ),
        'parent_item_colon'   => __( 'Parent Testimonial', TEXTDOMAIN ),
        'all_items'           => __( 'All Testimonial Sliders', TEXTDOMAIN ),
        'view_item'           => __( 'View Testimonials', TEXTDOMAIN ),
        'add_new_item'        => __( 'Add New Testimonial Slider', TEXTDOMAIN ),
        'add_new'             => __( 'Add New', TEXTDOMAIN ),
        'edit_item'           => __( 'Edit Testimonial Slider', TEXTDOMAIN ),
        'update_item'         => __( 'Update Testimonial Slider', TEXTDOMAIN ),
        'search_items'        => __( 'Search Testimonial Slider', TEXTDOMAIN ),
        'not_found'           => __( 'Not Found', TEXTDOMAIN ),
        'not_found_in_trash'  => __( 'Not found in Trash', TEXTDOMAIN ),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'testimonials', TEXTDOMAIN ),
        'description'         => __( 'Testimonials of Blubird Interactive Ltd', TEXTDOMAIN ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','thumbnail'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );



}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );