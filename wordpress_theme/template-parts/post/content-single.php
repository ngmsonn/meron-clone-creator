<?php
/**
 * Template part for displaying single posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-background rounded-xl p-8 shadow-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="mb-8 overflow-hidden rounded-lg">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
        </div>
    <?php endif; ?>
    
    <header class="entry-header mb-8">
        <div class="flex items-center space-x-2 text-sm text-muted-foreground mb-4">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
            <span>•</span>
            <span><?php the_category(', '); ?></span>
            <span>•</span>
            <span><?php the_author(); ?></span>
        </div>
        
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

    <footer class="entry-footer mt-8 pt-8 border-t border-border">
        <div class="flex flex-wrap items-center space-x-4 text-sm text-muted-foreground">
            <?php if (has_tag()) : ?>
                <div class="flex items-center space-x-2">
                    <span><?php esc_html_e('Tags:', 'afchem'); ?></span>
                    <?php the_tags('', ', ', ''); ?>
                </div>
            <?php endif; ?>
        </div>
    </footer>
</article>