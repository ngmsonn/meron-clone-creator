<?php
/**
 * Template part for displaying page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-background rounded-xl p-8 shadow-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="mb-8 overflow-hidden rounded-lg">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
        </div>
    <?php endif; ?>
    
    <header class="entry-header mb-8">
        <h1 class="entry-title text-3xl lg:text-4xl font-bold text-foreground leading-tight">
            <?php the_title(); ?>
        </h1>
    </header>

    <div class="entry-content prose prose-lg max-w-none">
        <?php
        the_content();
        
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'afchem'),
            'after'  => '</div>',
        ));
        ?>
    </div>

    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer mt-8 pt-8 border-t border-border">
            <div class="text-sm">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            __('Edit <span class="screen-reader-text">"%s"</span>', 'afchem'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </div>
        </footer>
    <?php endif; ?>
</article>