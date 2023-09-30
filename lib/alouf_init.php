<?php


add_action('init', 'alouf_custom_post_types');
/**********************
 ** create CPT Types
 **********************/
function alouf_custom_post_types()
{

    $cpts = [
        array(
            'single'       => 'Slide',
            'plural'       => 'Slides',
            'cptname'      => 'slide',
            'icon'         => 'dashicons-slides',
            'supports'     => ["title", "thumbnail"],
            'show_in_menu' => true,
            'position'     => 4
        ),
        array(
            'single'       => 'service',
            'plural'       => 'services',
            'cptname'      => 'service',
            'icon'         => 'dashicons-admin-tools',
            'supports'     => ["title", "thumbnail", "editor"],
            'show_in_menu' => true,
            'position'     => 5
        ),
        array(
            'single'       => 'partener',
            'plural'       => 'parteners',
            'cptname'      => 'partener',
            'icon'         => 'dashicons-groups',
            'supports'     => ["title", "thumbnail"],
            'show_in_menu' => true,
            'position'     => 6
        ),
        array(
            'single'       => 'award',
            'plural'       => 'awards',
            'cptname'      => 'award',
            'icon'         => 'dashicons-awards',
            'supports'     => ["title", "thumbnail"],
            'show_in_menu' => true,
            'position'     => 7
        )
        ,
        array(
            'single'       => 'vehicle',
            'plural'       => 'vehicles',
            'cptname'      => 'vehicle',
            'icon'         => 'dashicons-car',
            'supports'     => ["title", "thumbnail"],
            'show_in_menu' => true,
            'position'     => 8
        )
        
    ];
    foreach ($cpts as $cpt) {

        $labels = array(
            'name'                  => _x($cpt['single'], 'Post Type General Name', 'alouf'),
            'singular_name'         => _x($cpt['single'], 'Post Type Singular Name', 'alouf'),
            'menu_name'             => __($cpt['plural'], 'alouf'),
            'all_items'             => __('All ' . $cpt['plural'], 'alouf'),
            'add_new_item'          => __('Add New ' . $cpt['single'], 'alouf'),
            'add_new'               => __('Add New', 'alouf'),
            'new_item'              => __('New ' . $cpt['single'], 'alouf'),
            'edit_item'             => __('Edit ' . $cpt['single'], 'alouf'),
            'update_item'           => __('Update ' . $cpt['single'], 'alouf'),
            'view_item'             => __('View ' . $cpt['single'], 'alouf'),
            'search_items'          => __('Search ' . $cpt['plural'], 'alouf'),
            'not_found'             => __('Not found', 'alouf'),
            'not_found_in_trash'    => __('Not found in Trash', 'alouf'),
            'featured_image'        => __('Featured Image', 'alouf'),
            'set_featured_image'    => __('Set featured image', 'alouf'),
            'remove_featured_image' => __('Remove featured image', 'alouf'),
            'use_featured_image'    => __('Use as featured image', 'alouf'),
        );
        $args = array(
            'label'                 => __($cpt['plural'], 'alouf'),
            'description'           => __($cpt['plural'] . ' Description', 'alouf'),
            'labels'                => $labels,
            'supports'              => $cpt['supports'],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => $cpt['show_in_menu'],
            'menu_position'         => $cpt['position'],
            'menu_icon'             => $cpt['icon'],
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',

        );

        // Register Custom Post Type>
        register_post_type($cpt['cptname'], $args);
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////
// create theme options menue page
function custom_theme_options_menu()
{
    add_menu_page(
        'Theme Options', // Page title
        'Theme Options', // Menu title
        'manage_options', // Capability required to access
        'custom-theme-options', // Menu slug
        'custom_theme_options_page', // Callback function
        'dashicons-admin-generic', // Icon (optional),
        2
    );
    add_submenu_page(
        'custom-theme-options',
        'Home options',
        'Home Page Options',
        'manage_options',
        'home-page-content',
        'home_page_content_callback',
        3
    );
    add_submenu_page(
        'custom-theme-options',
        'About options',
        'About Page Options',
        'manage_options',
        'about-page-content',
        'about_page_content_callback',
        4
    );
}
add_action('admin_menu', 'custom_theme_options_menu');

require_once(alouf_ROOT . 'lib/alouf_taxonomy_terms.php');
require_once(alouf_ROOT . 'theme options/theme_opptions.php');
require_once(alouf_ROOT . 'theme options/home_page_options.php');
require_once(alouf_ROOT . 'theme options/about_page_options.php');
