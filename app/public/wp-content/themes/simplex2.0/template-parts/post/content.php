<?php
/**
 * The template part for displaying posts.
 */
?>  
<article id="post-<?php the_ID() ?>"> <?php /**function to print the ID of the post */?>
    <header class="entry-header">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title">', '</h1>'); //on single page, title of post only
        else :
            the_title('<h2 class="entry-title"><a class="entry-link" href="' . esc_url(get_permalink()) . '">', '</a></h2>'); //Title of post + link to post 
        endif;
        ?>
    </header>

    <!-- Post thumbnail -->
    <?php 
        if(has_post_thumbnail()): 
            the_post_thumbnail('large');
        endif;
    ?>

    <!-- Post Content -->
    <?php if( is_home() || is_archive() ) : ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    <?php elseif(is_single()) : ?>
        <div class="entry-content">
            <?php 
                the_content(); 
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'simplex'),
                    'after' => '</div>',
                ));
            ?>
        </div>
    <?php endif; ?>
</article>