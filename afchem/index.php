<?php
/**
 * Main index template
 * This template handles blog posts and fallback for other content
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php if (have_posts()) : ?>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/post/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>