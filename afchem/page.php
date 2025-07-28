<?php
/**
 * Template for displaying pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/page/content', 'page'); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>