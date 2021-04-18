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
<div id="colophon" class="container-fluid site-footer">
    <div class="row">
        <div id="footer-sidebar1" class="col-md-4">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
                }
            ?>
        </div>
	    <div id="footer-sidebar2" class="col-md-4">
            <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
            }
            ?>
        </div>	    
        <div id="footer-sidebar3" class="col-md-4 text-center">
                <?php
                    if(is_active_sidebar('footer-sidebar-3')){
                    dynamic_sidebar('footer-sidebar-3');
                }
                ?>
        </div>		    
	</div>	
</div>
<div class="container-fluid copyright">
	<div class="row">
	    <div class="col-12">
 				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'MoZone' ), 'MoZone', '<a href="#">The MOs</a>' );
				?>
		</div>
	</div>
</div><!-- .site-info -->
<?php wp_footer(); ?>
</body>
</html>