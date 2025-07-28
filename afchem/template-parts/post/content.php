<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-background rounded-xl p-6 shadow-card hover:shadow-elevated transition-all duration-300'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="mb-6 overflow-hidden rounded-lg">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300')); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <header class="entry-header mb-4">
        <div class="flex items-center space-x-2 text-sm text-muted-foreground mb-2">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
            <span>•</span>
            <span><?php the_category(', '); ?></span>
        </div>
        
        <?php if (is_singular()) : ?>
            <h1 class="entry-title text-2xl font-bold text-foreground">
                <?php the_title(); ?>
            </h1>
        <?php else : ?>
            <h2 class="entry-title text-xl font-semibold text-foreground hover:text-primary transition-colors">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
        <?php endif; ?>
    </header>

    <div class="entry-content text-muted-foreground">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            echo wp_trim_words(get_the_excerpt(), 20);
        }
        ?>
    </div>

    <?php if (!is_singular()) : ?>
        <footer class="entry-footer mt-4">
            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:text-primary/80 transition-colors font-medium">
                Read More
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </footer>
    <?php endif; ?>
</article>