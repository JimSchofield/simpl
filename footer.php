<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpl
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="constrain constrain_center">
			<div class="site-info">
				<small><a href="mailto:oldcoyote@gmail.com">Contact Me</a></small>
				<small>Copyright 2018</small>
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'simpl' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'simpl' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'simpl' ), 'simpl', '<a href="http://underscores.me/">Underscores.me</a>' );
					?> -->
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
