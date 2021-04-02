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
<h1>Projects</h1><br />
<div class="row">
<?php
/**
 * Setup query to show the ‘events’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
        'post_type' => 'projects',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'order_by' => 'date',
 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
     ?>
     <div class="col-md-12">
        <div class="row">
        <div class="col-md-4">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' style="width:100%;"/>
        </div>
        <div class="col-md-8">
        <h1><?php the_title(); ?></h1><br>
        <span class="h2"><i class="far fa-calendar-alt"></i> &nbsp;<?php the_field('date'); ?></span><br>
        <h4><i class="far fa-clock"></i> &nbsp; <?php the_field('time_starts'); ?> - <?php the_field('time_ends'); ?></h4><br>
        <h5><i class="fas fa-location-arrow"></i> &nbsp;<strong><?php the_field('location_name'); ?></strong></h5><br>
        <p><?php the_field('project_description'); ?></p>
        </div>
        
        </div>
     </div>
     <?php
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