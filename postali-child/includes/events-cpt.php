<?php
/**
 * Custom Events Custom Post Type
 *
 * @package Postali Child
 * @author Postali LLC
 */

function create_custom_post_type_Events() {

// set up labels
    $labels = array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => 'Add New Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'all_items' => 'All Events',
        'view_item' => 'View Event',
        'search_items' => 'Search Events',
        'not_found' =>  'No Events Found',
        'not_found_in_trash' => 'No Events found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Events',

    );
    //register post type
    register_post_type( 'Events', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => '/'),
        'rewrite' => array( 'slug' => 'the-firm/events-and-awards', 'with_front' => false ), // Has /about/ as pre front for the theme, if there are more then attorneys to be listed under here this need removed
        )
    );

}
add_action( 'init', 'create_custom_post_type_Events' );