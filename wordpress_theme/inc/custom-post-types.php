<?php
/**
 * Custom post types for AFChem theme
 */

// Register custom post types for dynamic content
function afchem_custom_post_types() {
    // Products post type
    register_post_type('products', array(
        'labels' => array(
            'name' => __('Products'),
            'singular_name' => __('Product'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-cart',
    ));
    
    // Applications post type
    register_post_type('applications', array(
        'labels' => array(
            'name' => __('Applications'),
            'singular_name' => __('Application'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
    ));
    
    // Certifications post type
    register_post_type('certifications', array(
        'labels' => array(
            'name' => __('Certifications'),
            'singular_name' => __('Certification'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-awards',
    ));
}
add_action('init', 'afchem_custom_post_types');