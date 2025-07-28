<?php
/**
 * WordPress Customizer Settings
 * Customizable theme options for content management
 */

function afchem_customizer_sections($wp_customize) {
    // About Section
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'afchem'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('about_title', array(
        'default' => 'Leading Natural Food Ingredients Manufacturer',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('about_title', array(
        'label' => __('About Title', 'afchem'),
        'section' => 'about_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('about_description', array(
        'default' => 'With over 15 years of experience, AFChem has established itself as a trusted partner in the food and beverage industry.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'afchem'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));
    
    // Products Section
    $wp_customize->add_section('products_section', array(
        'title' => __('Products Section', 'afchem'),
        'priority' => 45,
    ));
    
    $wp_customize->add_setting('products_title', array(
        'default' => 'Our Premium Product Range',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('products_title', array(
        'label' => __('Products Title', 'afchem'),
        'section' => 'products_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('products_description', array(
        'default' => 'Discover our comprehensive range of natural food ingredients and functional additives.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('products_description', array(
        'label' => __('Products Description', 'afchem'),
        'section' => 'products_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'afchem_customizer_sections');