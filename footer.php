<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lodc
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container site-info">
			<div style="position:absolute;bottom:10px;left:10px;">
 				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'MoZone' ), 'MoZone', '<a style="background-color:#fff;padding:3px;" href="#">The MOs</a>' );
				?>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
