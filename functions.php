<?php
/**
 * WordPress Theme Functions
 * Setup theme support, enqueue scripts, register menus, etc.
 */

// Theme setup
function afchem_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'afchem'),
        'footer_products' => __('Footer Products Menu', 'afchem'),
        'footer_services' => __('Footer Services Menu', 'afchem'),
        'footer_company' => __('Footer Company Menu', 'afchem'),
    ));
}
add_action('after_setup_theme', 'afchem_theme_setup');

// Enqueue styles and scripts
function afchem_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('afchem-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0');
    
    // Enqueue custom scripts
    wp_enqueue_script('afchem-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'afchem_scripts');

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

// Custom Navigation Walker for Header
class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . $item->url . '" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors relative group">';
        $output .= $item->title;
        $output .= '<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>';
        $output .= '</a>';
    }
}

// Custom Navigation Walker for Mobile
class Mobile_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . $item->url . '" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors py-2">';
        $output .= $item->title;
        $output .= '</a>';
    }
}

// Custom Navigation Walker for Footer
class Footer_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li><a href="' . $item->url . '" class="hover:text-white transition-colors">' . $item->title . '</a></li>';
    }
}

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

// Add mobile menu toggle script
function afchem_mobile_menu_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'afchem_mobile_menu_script');
?>