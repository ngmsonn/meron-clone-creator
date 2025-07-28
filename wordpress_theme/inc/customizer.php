<?php
/**
 * Customizer settings for AFChem theme
 */

// Customizer settings
function afchem_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'afchem'),
        'priority' => 30,
    ));
    
    // Hero Badge Text
    $wp_customize->add_setting('hero_badge_text', array(
        'default' => 'Leading Vietnamese Natural Ingredients Company',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_badge_text', array(
        'label' => __('Hero Badge Text', 'afchem'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Hero Title Highlight
    $wp_customize->add_setting('hero_title_highlight', array(
        'default' => 'Encapsulating Nature',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title_highlight', array(
        'label' => __('Hero Title Highlight', 'afchem'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Hero Title Main
    $wp_customize->add_setting('hero_title_main', array(
        'default' => 'Empowering Healthy Living',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title_main', array(
        'label' => __('Hero Title Main', 'afchem'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Asia Food Chemical (AFChem) is a leading Vietnamese company specializing in natural food ingredients. We offer full-stack R&D, manufacturing, OEM/ODM, and international distribution services.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'afchem'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Company Information Section
    $wp_customize->add_section('company_info', array(
        'title' => __('Company Information', 'afchem'),
        'priority' => 35,
    ));
    
    // Company Name Line 1
    $wp_customize->add_setting('company_name_line1', array(
        'default' => 'Asia Food',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_name_line1', array(
        'label' => __('Company Name Line 1', 'afchem'),
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Company Name Line 2
    $wp_customize->add_setting('company_name_line2', array(
        'default' => 'Chemical',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_name_line2', array(
        'label' => __('Company Name Line 2', 'afchem'),
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Company Description
    $wp_customize->add_setting('company_description', array(
        'default' => 'Leading Vietnamese company specializing in natural food ingredients. Full-stack R&D, manufacturing, OEM/ODM, and international distribution services.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('company_description', array(
        'label' => __('Company Description', 'afchem'),
        'section' => 'company_info',
        'type' => 'textarea',
    ));
    
    // Contact Information
    $wp_customize->add_setting('company_phone', array(
        'default' => '+84 989 111 222',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => __('Company Phone', 'afchem'),
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('company_email', array(
        'default' => 'contact@asia-foodchem.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => __('Company Email', 'afchem'),
        'section' => 'company_info',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('company_locations', array(
        'default' => 'Hanoi (HQ), HCM Branch, R&D Factory in Bac Ninh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_locations', array(
        'label' => __('Company Locations', 'afchem'),
        'section' => 'company_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'afchem_customize_register');