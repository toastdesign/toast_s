<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toast_s
 */

?>

	</div><!-- #content -->

	<footer role="contentinfo">
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'toast_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'toast_s' ), 'WordPress' ); ?></a>
			<span> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'toast_s' ), 'toast_s', '<a href="https://automattic.com/" rel="designer">Daniel Plinsinga</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
