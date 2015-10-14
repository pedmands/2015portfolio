<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sassy_Underscores
 */

?>

	</div><!-- #content -->

    <?php 
    if ( !is_single() ) {
        echo '<footer id="colophon" class="site-footer" role="contentinfo">';
    } else {
        echo '<footer id="colophon" class="site-footer site-footer-full" role="contentinfo">';
    }
    ?>    
	
	<?php get_sidebar('footer'); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'undersoressass' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'undersoressass' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'undersoressass' ), 'undersoressass', '<a href="http://www.press10.me" rel="designer">Preston Edmands</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
