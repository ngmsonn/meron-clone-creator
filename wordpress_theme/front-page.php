<?php
/**
 * Front page template - Homepage
 * This is the main landing page for the AFChem website
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    // Hero Section
    get_template_part('template-parts/page/hero-section');
    
    // About Section
    get_template_part('template-parts/page/about-section');
    
    // Products Section
    get_template_part('template-parts/page/products-section');
    
    // Applications Section
    get_template_part('template-parts/page/applications-section');
    
    // Certifications Section
    get_template_part('template-parts/page/certifications-section');
    ?>
</main>

<?php get_footer(); ?>