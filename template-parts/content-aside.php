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
	<div class="index-box">
            
	<header class="entry-header">
		<?php
		// Display a thumb tack in the top right hand corner if this post is sticky
		if (is_sticky()) {
    		echo '<i class="fa fa-flag sticky-post"></i>';
		}
		?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	
		
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="entry-meta">
			<?php
		    echo get_the_tag_list( '<ul><li><i class="fa fa-check-square-o"></i>', '</li><li><i class="fa fa-check-square-o"></i>', '</li></ul>' );
			?>
		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->
        
	</div><!-- index-box -->
</article><!-- #post-## -->
