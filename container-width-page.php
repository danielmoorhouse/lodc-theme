<?php
/**
 * Template Name: BS4 Container
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

get_header();
?>

	<main id="primary" class="site-main container-fluid">
		<div class="row">
		<div class="col-md-8 offset-md-0 offset-lg-1 p-4">		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
		<div class="col-md-3 p-2" >
		<?php
get_sidebar(); ?>
		</div>
	</div>
	</main><!-- #main -->

<?php 
get_footer();
