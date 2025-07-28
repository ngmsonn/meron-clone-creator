<?php
/**
 * Custom Post Types
 * Register custom post types for products, applications, and certifications
 */

function afchem_custom_post_types() {
    // Products Post Type
    register_post_type('products', array(
        'labels' => array(
            'name' => __('Products', 'afchem'),
            'singular_name' => __('Product', 'afchem'),
            'add_new' => __('Add New Product', 'afchem'),
            'add_new_item' => __('Add New Product', 'afchem'),
            'edit_item' => __('Edit Product', 'afchem'),
            'new_item' => __('New Product', 'afchem'),
            'view_item' => __('View Product', 'afchem'),
            'search_items' => __('Search Products', 'afchem'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-products',
        'rewrite' => array('slug' => 'products'),
    ));
    
    // Applications Post Type
    register_post_type('applications', array(
        'labels' => array(
            'name' => __('Applications', 'afchem'),
            'singular_name' => __('Application', 'afchem'),
            'add_new' => __('Add New Application', 'afchem'),
            'add_new_item' => __('Add New Application', 'afchem'),
            'edit_item' => __('Edit Application', 'afchem'),
            'new_item' => __('New Application', 'afchem'),
            'view_item' => __('View Application', 'afchem'),
            'search_items' => __('Search Applications', 'afchem'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'applications'),
    ));
    
    // Certifications Post Type
    register_post_type('certifications', array(
        'labels' => array(
            'name' => __('Certifications', 'afchem'),
            'singular_name' => __('Certification', 'afchem'),
            'add_new' => __('Add New Certification', 'afchem'),
            'add_new_item' => __('Add New Certification', 'afchem'),
            'edit_item' => __('Edit Certification', 'afchem'),
            'new_item' => __('New Certification', 'afchem'),
            'view_item' => __('View Certification', 'afchem'),
            'search_items' => __('Search Certifications', 'afchem'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-awards',
        'rewrite' => array('slug' => 'certifications'),
    ));
}
add_action('init', 'afchem_custom_post_types');