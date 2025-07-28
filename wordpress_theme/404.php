<?php
/**
 * Template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container mx-auto px-4 py-16 text-center">
        <section class="error-404 not-found">
            <header class="page-header mb-8">
                <h1 class="page-title text-6xl font-bold text-primary mb-4"><?php esc_html_e('404', 'afchem'); ?></h1>
                <h2 class="text-3xl font-semibold mb-4"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'afchem'); ?></h2>
            </header>

            <div class="page-content max-w-2xl mx-auto">
                <p class="text-lg text-muted-foreground mb-8"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'afchem'); ?></p>

                <?php get_search_form(); ?>

                <div class="mt-12">
                    <h3 class="text-xl font-semibold mb-4"><?php esc_html_e('Try looking in the monthly archives.', 'afchem'); ?></h3>
                    <?php
                    wp_get_archives(array(
                        'type'    => 'monthly',
                        'format'  => 'option',
                        'show_post_count' => 1,
                    ));
                    ?>
                </div>

                <div class="mt-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-6 py-3 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors">
                        <?php esc_html_e('Return to Homepage', 'afchem'); ?>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>