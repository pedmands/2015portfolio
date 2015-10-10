<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sassy_Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
		<?php
	    /* translators: used between list items, there is a space after the comma */
	    $category_list = get_the_category_list( __( ', ', 'undersoressass' ) );

	    if ( undersoressass_categorized_blog() ) {
	        echo '<div class="category-list">' . $category_list . '</div>';
	    }
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'undersoressass' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'undersoressass' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		    echo get_the_tag_list( '<ul><li><i class="fa fa-check-square-o"></i>', '</li><li><i class="fa fa-check-square-o"></i>', '</li></ul>' );
			?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
