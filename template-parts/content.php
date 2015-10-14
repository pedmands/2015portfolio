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
	<?php 
        if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) { // Custom template for the first post on the front page
            if (has_post_thumbnail()) {
                echo '<div class="front-index-thumbnail clear">';
                echo '<div class="image-shifter">';
                echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'undersoressass') . get_the_title() . '" rel="bookmark">';
                echo the_post_thumbnail('large-thumb');
                echo '</a>';
                echo '</div>';
                echo '</div>';
            } 
            echo '<div class="index-box';
            if (has_post_thumbnail()) { echo ' has-thumbnail'; };
            echo '">';
        } else {
            echo '<div class="index-box">';
            if (has_post_thumbnail()) {
                echo '<div class="small-index-thumbnail clear">';
                echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'undersoressass') . get_the_title() . '" rel="bookmark">';
                echo the_post_thumbnail('index-thumb');
                echo '</a>';
                echo '</div>';
            }
        }
        ?>
	<header class="entry-header">
		<?php
		// Display a thumb tack in the top right hand corner if this post is sticky
		if (is_sticky()) {
    		echo '<i class="fa fa-flag sticky-post"></i>';
		}
		?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
		<?php
                /* translators: used between list items, there is a space after the comma */
                $category_list = get_the_category_list( __( ', ', 'undersoressass' ) );

                if ( undersoressass_categorized_blog() && is_front_page() ) {
                    echo '<div class="category-list">' . $category_list . '</div>';
                }
		?>
		<div class="entry-meta">
			<?php
		    echo get_the_tag_list( '<ul><li><i class="fa fa-check-square-o"></i>', '</li><li><i class="fa fa-check-square-o"></i>', '</li></ul>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php 
        if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) { 
            echo '<div class="entry-content">';
            the_content( __( '', 'undersoresass' ) );
            echo '</div>';
            echo '<footer class="entry-footer continue-reading">';
            echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'undersoresass') . get_the_title() . '" rel="bookmark">View The Project<i class="fa fa-arrow-circle-right"></i></a>'; 
            echo '</footer><!-- .entry-footer -->';
        } else { ?>
            <div class="entry-content">
            <?php the_excerpt(); ?>
            </div><!-- .entry-content -->
            <footer class="entry-footer continue-reading">
            <?php echo '<a href="' . get_permalink() . '" title="' . __('Project Details ', 'undersoresass') . get_the_title() . '" rel="bookmark">Project Details<i class="fa fa-arrow-circle-right"></i></a>'; ?>
            </footer><!-- .entry-footer -->
        <?php } ?>
	</div><!-- index-box -->
</article><!-- #post-## -->
