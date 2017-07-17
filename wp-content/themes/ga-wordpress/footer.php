<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GA_Wordpress
 */

?>


	</div><!-- #content -->

	<footer id="colophon" class="clear site-footer size size2" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ga-wordpress' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ga-wordpress' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ga-wordpress' ), 'ga-wordpress', '<a href="http://pkpatricia.com" rel="designer">Patricia Parker</a>' ); ?>
		</div><!-- .site-info -->
			<?php wp_footer(); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->



</body>
</html>
