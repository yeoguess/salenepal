<?php

//Exit if accccessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    create_post_type();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

function create_post_type() {

    //Slideshow
    $labels = array(
            'name'                      => _x('Slideshow', 'post type general name'),
            'singular_name'             => _x('Slideshow', 'post type singular name'),
            'add_new'                   => _x('Add New', 'Slideshow'),
            'add_new_item'              => __('Add new Slideshow'),
            'edit_item'                 => __('Edit Slideshow'),
            'new_item'                  => __('New Slideshow'),
            'view_item'                 => __('View Slideshow'),
            'search_items'              => __('Search Slideshow'),
            'not_found'                 =>  __('No Slideshow found'),
            'not_found_in_trash'        => __('No Slideshow found in Trash'),
            'parent_item_colon'         => ''
      );

    $args = array(
            'labels'                    => $labels,
            'public'                    => true,
            'publicly_queryable'        => true,
            'show_ui'                   => true,
            'rewrite'                   => true,
            'query_var'                 => true,
            'capability_type'           => 'post',
            'hierarchical'              => false,
            '_builtin'                  => false, // It's a custom post type, not built in!
            'rewrite'  => array(
                        'slug'          => 'slideshow',
                        'with_front'    => true
                        ),
            'show_in_nav_menus'         => false,
            'menu_position'             => 5,
            'supports'  => array(
                        'title'
                        ),
      );
      
      register_post_type('Slideshow',$args);

    // Featured
    $labels = array(
            'name'                       => _x('Featured', 'post type general name'),
            'singular_name'              => _x('Featured', 'post type singular name'),
            'add_new'                    => _x('Add New', 'Featured'),
            'add_new_item'               => __('Add new Featured'),
            'edit_item'                  => __('Edit Featured'),
            'new_item'                   => __('New Featured'),
            'view_item'                  => __('View Featured'),
            'search_items'               => __('Search Featured'),
            'not_found'                  =>  __('No Featured found'),
            'not_found_in_trash'         => __('No Featured found in Trash'),
            'parent_item_colon'          => ''
      );

    $args = array(
            'labels'                     => $labels,
            'public'                     => true,
            'publicly_queryable'         => true,
            'show_ui'                    => true,
            'menu_icon'                  => 'dashicons-editor-unlink',
            'rewrite'                    => true,
            'query_var'                  => true,
            'capability_type'            => 'post',
            'hierarchical'               => false,
            '_builtin'                   => false, // It's a custom post type, not built in!
            'rewrite'                    => array(
                                            'slug'        => 'new_arrivals',
                                            'with_front'  => true ),
            'show_in_nav_menus'          => false,
            'menu_position'              => 5,
            'supports'                   => array(
                                            'title'
                                            ),
      );

      register_post_type('Featured',$args);

    //Partners
    $labels = array(
            'name'                       => _x('Partners', 'post type general name'),
            'singular_name'              => _x('Partners', 'post type singular name'),
            'add_new'                    => _x('Add New', 'Partners'),
            'add_new_item'               => __('Add new Partners'),
            'edit_item'                  => __('Edit Partners'),
            'new_item'                   => __('New Partners'),
            'view_item'                  => __('View Partners'),
            'search_items'               => __('Search Partners'),
            'not_found'                  =>  __('No Partners found'),
            'not_found_in_trash'         => __('No Partners found in Trash'),
            'parent_item_colon'          => ''
      );

    $args = array(
            'labels'                     => $labels,
            'public'                     => true,
            'publicly_queryable'         => true,
            'show_ui'                    => true,
            'show_in_menu'               => true,
            'menu_position'              => 5,
            'menu_icon'                  => 'dashicons-universal-access',
            'rewrite'                    => true,
            'query_var'                  => true,
            'capability_type'            => 'post',
            'has_archive'                => true,
            'hierarchical'               => false,
            '_builtin'                   => false, // It's a custom post type, not built in!
            'rewrite'                    => array(
                                            'slug'        => 'partners',
                                            'with_front'  => true
                                            ),
            'show_in_nav_menus'          => false,
            'menu_position'              => 5,
            'supports'                   => array(
                                            'title',
                                            'thumbnail'
                                            ),
        );
      
      register_post_type('Partners',$args);
    }

   
 
?>