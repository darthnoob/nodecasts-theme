<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nodecasts
 */

?>

<li class="list-group-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
        }

    ?>

    <div class="entry-content">
        <?php
            the_excerpt( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nodecasts' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nodecasts' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
</li>
