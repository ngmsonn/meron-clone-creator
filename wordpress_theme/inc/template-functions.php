<?php
/**
 * Template functions for AFChem theme
 */

/**
 * Custom comment callback
 */
function afchem_comment_callback($comment, $args, $depth) {
    $tag = ($args['style'] === 'div') ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <article class="comment-body bg-muted/30 rounded-lg p-6">
            <header class="comment-meta flex items-center space-x-4 mb-4">
                <div class="comment-author-avatar">
                    <?php echo get_avatar($comment, 48, '', '', array('class' => 'rounded-full')); ?>
                </div>
                <div class="comment-metadata">
                    <span class="comment-author font-semibold"><?php comment_author(); ?></span>
                    <time class="comment-time text-sm text-muted-foreground block" datetime="<?php comment_time('c'); ?>">
                        <?php comment_date(); ?> at <?php comment_time(); ?>
                    </time>
                </div>
            </header>

            <div class="comment-content">
                <?php comment_text(); ?>
            </div>

            <footer class="comment-actions mt-4">
                <?php
                comment_reply_link(array_merge($args, array(
                    'add_below' => 'comment',
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'class'     => 'text-sm text-primary hover:underline'
                )));
                ?>
            </footer>
        </article>
    <?php
}

/**
 * Register widget areas
 */
function afchem_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'afchem'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'afchem'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'afchem_widgets_init');