<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sassy_Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
            if (has_post_thumbnail()) {
                echo '<div class="single-post-thumbnail clear">';
                echo the_post_thumbnail('large-thumb');
                echo '</div>';
            }
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
	    /* translators: used between list items, there is a space after the comma */
	    $category_list = get_the_category_list( __( ', ', 'undersoressass' ) );

	    if ( undersoressass_categorized_blog() ) {
	        echo '<div class="category-list">' . $category_list . '</div>';
	    }
		?>
<div class="entry-meta">
	<h3 class="skills">Skills:</h3>
			<?php
		    echo get_the_tag_list( '<ul><li><i class="fa fa-check-square-o"></i>', '</li><li><i class="fa fa-check-square-o"></i>', '</li></ul>' );
			?>
		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->
		
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

