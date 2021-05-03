<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armonia
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'armonia' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'armonia' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'armonia' ), 'armonia', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> --><!-- .site-info -->
		<div class="site-info">
			<span>&copy;<?php echo date('Y'); ?></span>
			<span>Armonia. All rights reserved.</span>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
