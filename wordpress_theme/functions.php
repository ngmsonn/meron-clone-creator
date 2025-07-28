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

// Include theme functions
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-post-types.php';

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