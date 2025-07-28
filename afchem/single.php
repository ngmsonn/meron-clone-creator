<?php
/**
 * Template for displaying single posts
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post/content', 'single'); ?>
            
            <?php
            // Navigation between posts
            the_post_navigation(array(
                'prev_text' => '<span class="meta-nav">' . __('Previous:', 'afchem') . '</span> <span class="post-title">%title</span>',
                'next_text' => '<span class="meta-nav">' . __('Next:', 'afchem') . '</span> <span class="post-title">%title</span>',
            ));
            ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>