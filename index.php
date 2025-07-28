<?php
/**
 * Main homepage template
 * Static: Layout structure
 * Dynamic: All section content
 */

get_header(); ?>

<div class="min-h-screen">
    <?php get_template_part('template-parts/hero-section'); ?>
    <?php get_template_part('template-parts/about-section'); ?>
    <?php get_template_part('template-parts/products-section'); ?>
    <?php get_template_part('template-parts/applications-section'); ?>
    <?php get_template_part('template-parts/certifications-section'); ?>
</div>

<?php get_footer(); ?>