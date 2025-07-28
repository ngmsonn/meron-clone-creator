<?php
/**
 * Template Functions
 * Helper functions for template parts
 */

// Get social media links
function afchem_get_social_links() {
    return array(
        'facebook' => get_theme_mod('facebook_url', '#'),
        'twitter' => get_theme_mod('twitter_url', '#'),
        'linkedin' => get_theme_mod('linkedin_url', '#'),
        'instagram' => get_theme_mod('instagram_url', '#'),
    );
}

// Get company stats
function afchem_get_company_stats() {
    return array(
        array(
            'number' => '15+',
            'label' => 'Years Experience',
            'icon' => 'calendar'
        ),
        array(
            'number' => '500+',
            'label' => 'Products',
            'icon' => 'package'
        ),
        array(
            'number' => '50+',
            'label' => 'Countries',
            'icon' => 'globe'
        ),
        array(
            'number' => '1000+',
            'label' => 'Happy Clients',
            'icon' => 'users'
        )
    );
}

// Get product categories
function afchem_get_product_categories() {
    return array(
        array(
            'title' => 'Natural Extracts',
            'description' => 'Premium plant-based extracts for food and beverage applications.',
            'image' => 'food-powder.jpg',
            'features' => array('100% Natural', 'High Purity', 'Quality Tested')
        ),
        array(
            'title' => 'Functional Ingredients',
            'description' => 'Specialized ingredients that enhance nutritional value and functionality.',
            'image' => 'food-strips.jpg',
            'features' => array('Health Benefits', 'Research-Backed', 'Custom Solutions')
        ),
        array(
            'title' => 'Pharma Grade',
            'description' => 'Pharmaceutical-grade ingredients meeting the highest quality standards.',
            'image' => 'pharma-grade.jpg',
            'features' => array('GMP Certified', 'USP Grade', 'Regulatory Compliant')
        )
    );
}

// Get certifications
function afchem_get_certifications() {
    return array(
        array(
            'name' => 'ISO 22000',
            'description' => 'Food Safety Management System',
            'icon' => 'shield-check'
        ),
        array(
            'name' => 'HACCP',
            'description' => 'Hazard Analysis Critical Control Points',
            'icon' => 'check-circle'
        ),
        array(
            'name' => 'GMP',
            'description' => 'Good Manufacturing Practice',
            'icon' => 'award'
        ),
        array(
            'name' => 'Organic',
            'description' => 'Certified Organic Products',
            'icon' => 'leaf'
        )
    );
}