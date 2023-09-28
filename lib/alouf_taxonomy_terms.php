<?php

/************************
** create Custom Taxonomies for portfolio post type
************************/
add_action( 'init', 'alouf_custom_tax', 0 );
function alouf_custom_tax() 
{
    $my_taxonomies = array(
        array(
          'labels' => array(
            'name' => _x( 'vehicles brands', 'taxonomy general name' ),
            'singular_name' => _x( 'brand', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Vehicles Brands','codzilla' ),
            'popular_items' => __( 'Popular Vehicles Brands' ,'codzilla'),
            'all_items' => __( 'All Vehicles Brands' ),
            'parent_item' => __('Parent'),
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Vehicles Brands' ), 
            'update_item' => __( 'Update Vehicles Brands' ),
            'add_new_item' => __( 'Add New Vehicles Brands' ),
            'new_item_name' => __( 'New Vehicles Brands' ),
            'separate_items_with_commas' => __( 'Separate Vehicles Brands with commas' ),
            'add_or_remove_items' => __( 'Add or remove Vehicles Brands' ),
            'choose_from_most_used' => __( 'Choose from the most used Vehicles Brands' ),
            'menu_name' => __( 'Vehicles Brands' ),
          ),
          'tax_name' => 'vehicles-brands',
          'post_types' =>  array('vehicle'),
          'slug' => 'vehicles-brands'          
        ),

        array(
            'labels' => array(
              'name' => _x( 'Vehicle Type', 'taxonomy general name' ),
              'singular_name' => _x( 'Type', 'taxonomy singular name' ),
              'search_items' =>  __( 'Search Vehicles Types','codzilla' ),
              'popular_items' => __( 'Popular Vehicles Types' ,'codzilla'),
              'all_items' => __( 'All Vehicles Types' ),
              'parent_item' => __('Parent'),
              'parent_item_colon' => null,
              'edit_item' => __( 'Edit Vehicle Type' ), 
              'update_item' => __( 'Update Vehicle Type' ),
              'add_new_item' => __( 'Add New Vehicle Type' ),
              'new_item_name' => __( 'New Vehicle Type' ),
              'separate_items_with_commas' => __( 'Separate Vehicles Types with commas' ),
              'add_or_remove_items' => __( 'Add or remove Vehicles Type' ),
              'choose_from_most_used' => __( 'Choose from the most used Vehicles Types' ),
              'menu_name' => __( 'Vehicles Types' ),
            ),
            'tax_name' => 'vehicles-Types',
            'post_types' =>  array('vehicle'),
            'slug' => 'vehicles-Types'          
          )
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($my_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),
      ));
    }
}

