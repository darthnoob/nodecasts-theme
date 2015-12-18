<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nodecasts
 */

?>

<?php if (has_tag('free')) { $free =  '<span class="label label-success right">Free</span></a>'; } ?>
<?php the_title( '<a class="list-group-item" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', ($free) ? $free : '</a>' ); ?>
<span class="entry-content">
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
</span><!-- .entry-content -->
