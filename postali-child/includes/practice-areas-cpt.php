<?php
/**
 * Custom Attorneys Custom Post Type
 *
 * @package Postali Child
 * @author Postali LLC
 */

function create_custom_post_type_practices() {

// set up labels
    $labels = array(
        'name' => 'Practice Areas',
        'singular_name' => 'Practice Area',
        'add_new' => 'Add New Practice Area',
        'add_new_item' => 'Add New Practice Area',
        'edit_item' => 'Edit Practice Area',
        'new_item' => 'New Practice Area',
        'all_items' => 'All Practice Areas',
        'view_item' => 'View Practice Area',
        'search_items' => 'Search Practice Areas',
        'not_found' =>  'No Practice Areas Found',
        'not_found_in_trash' => 'No Practice Areas found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Practice Areas',

    );
    //register post type
    register_post_type( 'Practice Areas', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => '/'),
        'rewrite' => array( 'slug' => 'practices', 'with_front' => false ), // Has /about/ as pre front for the theme, if there are more then attorneys to be listed under here this need removed
        )
    );

}
add_action( 'init', 'create_custom_post_type_practices' );