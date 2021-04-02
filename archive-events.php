<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

get_header();
?>
<div class="container-fluid">

<div class="row">
<div class="col-md-8 offset-md-1">
<h1>Events</h1><br />
<div class="row">
<?php
/**
 * Setup query to show the ‘events’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
        'post_type' => 'events',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        print the_title(); 
        the_excerpt(); 
    endwhile;

    wp_reset_postdata(); 
	?>
	</div>
	</div>
	<div class="col-md-3">
	<?php get_sidebar() ?>
	</div>
</div>
	</div>
<?php

get_footer();