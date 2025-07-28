<?php
/**
 * Template for displaying search results
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php if (have_posts()) : ?>
            <header class="page-header mb-8">
                <h1 class="page-title text-3xl font-bold mb-4">
                    <?php
                    printf(
                        esc_html__('Search Results for: %s', 'afchem'),
                        '<span>' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
            </header>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post/content', 'search'); ?>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/post/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>