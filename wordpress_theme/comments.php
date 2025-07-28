<?php
/**
 * Template for displaying comments
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mt-12">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title text-2xl font-semibold mb-6">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'afchem'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    esc_html(_nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comment_count,
                        'comments title',
                        'afchem'
                    )),
                    number_format_i18n($comment_count),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'callback'   => 'afchem_comment_callback',
            ));
            ?>
        </ol>

        <?php the_comments_pagination(); ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments text-muted-foreground"><?php esc_html_e('Comments are closed.', 'afchem'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>