<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found text-center py-16">
    <header class="page-header mb-8">
        <h1 class="page-title text-3xl font-bold text-foreground mb-4">
            <?php esc_html_e('Nothing here', 'afchem'); ?>
        </h1>
    </header>

    <div class="page-content max-w-2xl mx-auto">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p class="text-lg text-muted-foreground mb-8">
                <?php
                printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'afchem'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?>
            </p>
        <?php elseif (is_search()) : ?>
            <p class="text-lg text-muted-foreground mb-8">
                <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'afchem'); ?>
            </p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p class="text-lg text-muted-foreground mb-8">
                <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'afchem'); ?>
            </p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>