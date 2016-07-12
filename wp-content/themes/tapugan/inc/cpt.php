<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{
   
    
    $labels = array(

        'name' => 'Products',
        'singular_name' => 'Products',
        'menu_name' => 'Products',
        'all_items' => 'All Products',
        'view_item' => 'View Products',
        'add_new_item' => 'Add Products',
        'add_new' => 'Add Products',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        ),
    );

    register_post_type('products', $args);


    function tr_create_my_taxonomy() {

        register_taxonomy(
            'products_cat',
            'products',
            array(
                'label' => __( 'Category' ),
                'hierarchical' => true,
            )
        );
    }
    add_action( 'init', 'tr_create_my_taxonomy' );

}
