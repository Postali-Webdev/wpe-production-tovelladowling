<?php
/**
 * Custom Resources Custom Post Type
 *
 * @package Postali Child
 * @author Postali LLC
 */

function create_custom_post_type_resources() {

// set up labels
    $labels = array(
        'name' => 'Resources',
        'singular_name' => 'Resource',
        'add_new' => 'Add New Resource',
        'add_new_item' => 'Add New Resource',
        'edit_item' => 'Edit Resource',
        'new_item' => 'New Resource',
        'all_items' => 'All Resources',
        'view_item' => 'View Resource',
        'search_items' => 'Search Resources',
        'not_found' =>  'No Resources Found',
        'not_found_in_trash' => 'No Resources found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Resources',

    );
    //register post type
    register_post_type( 'Resources', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => false,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => '/'),
        'rewrite' => array( 'slug' => 'resources', 'with_front' => false ), // Has /about/ as pre front for the theme, if there are more then attorneys to be listed under here this need removed
        )
    );

}
add_action( 'init', 'create_custom_post_type_resources' );