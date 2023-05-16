<?php
// Register Custom Post Type Webinars
add_action('init', 'register_post_types', 0);
function register_post_types()
{

    $labels = array(
        'name' => _x('Webinars', 'Post Type General Name', 'intel'),
        'singular_name' => _x('Webinar', 'Post Type Singular Name', 'intel'),
        'menu_name' => __('Webinars', 'intel'),
        'name_admin_bar' => __('Webinars', 'intel'),
        'archives' => __('Webinar Archives', 'intel'),
        'attributes' => __('Webinar Attributes', 'intel'),
        'parent_item_colon' => __('Parent Item:', 'intel'),
        'all_items' => __('All Webinars', 'intel'),
        'add_new_item' => __('Add New Webinar', 'intel'),
        'add_new' => __('Add New', 'intel'),
        'new_item' => __('New Webinar', 'intel'),
        'edit_item' => __('Edit Webinar', 'intel'),
        'update_item' => __('Update Webinar', 'intel'),
        'view_item' => __('View Webinar', 'intel'),
        'view_items' => __('View Webinars', 'intel'),
        'search_items' => __('Search Webinar', 'intel'),
        'not_found' => __('Not found', 'intel'),
        'not_found_in_trash' => __('Not found in Trash', 'intel'),
        'featured_image' => __('Featured Image', 'intel'),
        'set_featured_image' => __('Set featured image', 'intel'),
        'remove_featured_image' => __('Remove featured image', 'intel'),
        'use_featured_image' => __('Use as featured image', 'intel'),
        'insert_into_item' => __('Insert into item', 'intel'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'intel'),
        'items_list' => __('Items list', 'intel'),
        'items_list_navigation' => __('Items list navigation', 'intel'),
        'filter_items_list' => __('Filter items list', 'intel'),
    );
    $args = array(
        'label' => __('Webinar', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'capability_type' => 'page',
    );
    register_post_type('webinars', $args);
}

