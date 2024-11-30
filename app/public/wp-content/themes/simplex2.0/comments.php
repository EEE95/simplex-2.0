<?php   
/**
 * Template for displaying comments
 */

 if (post_password_required()) {
     return;
 }

?>

<div id="comments" class="comments-area">
    <?php if (have_comments()): ?>
        <h2 class="comments-title">
            <?php
                $comment_count = get_comments_number();
                if ('1' === $comment_count) {
                    printf(
                        esc_html__('Comments (1)', 'simplex')
                    );
                } else {
                    printf(
                        esc_html__('Comments (%1$s)', 'simplex'),
                        intval($comment_count)
                    );
                }
            ?>
        </h2>
        <?php the_comments_navigation(); ?>
        <ol class="comment-list">
            <?php
                wp_list_comments([
                    'style' => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 50,
                ]);
            ?>
        </ol>
        <?php
        the_comments_navigation();
        //if the comments are closed this message will be displayed
        if (!comments_open()) {
            printf(
                '<p class="no-comments">%s</p>',
                esc_html__('Comments are closed.', 'simplex')
            );
        }
        ?>
    <?php endif; 
    // show comments form
    comment_form();
    ?>
</div>