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
<div class="container">

<h1>Videos</h1><br />
<div class="row">
<?php
/**
 * Setup query to show the ‘videos’ post type.
 * Output the title with an excerpt.
 */
    $args = array( 
        'post_type' => 'video',
        'post_status' => 'publish',
        //'meta_key' => 'event_start_date',
        //'orderby' => 'meta_value',
         //'order' => 'ASC'
 
    );

        $loop = new WP_Query( $args );   
 if( $loop->have_posts() ):   ?>

  <?php  while ( have_posts() ) : the_post(); ?>
  <?php if(get_field('video_provider') === "YouTube") : ?>


            <div class="col-md-4 text-center">
            <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:300px;">
            
            <?php if(get_field('video_category') === "Fundamentals") : ?>
                <p style="padding:3px;background-color:green;color:#fff;font-weight:600;">Fundamentals</p>
            <?php endif; ?>
            <?php if(get_field('video_category') === "Cardio") : ?>
                <p style="padding:3px;background-color:yellow;color:#000;font-weight:600;">Cardio</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Re-warm up") : ?>
    <p style="padding:3px;background-color:red;color:#fff;font-weight:600;">Re-warm up</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Floor") : ?>
    <p style="padding:3px;background-color:purple;color:#fff;font-weight:600;">Floor</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Dance") : ?>
    <p style="padding:3px;background-color:blue;color:#fff;font-weight:600;">Dance</p>

<?php endif; ?>
            <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
                <p><?php the_content(); ?></p>
                </a>
                </div>
      </div>
      
      <?php endif; ?>
  
      <?php if(get_field('video_provider') === "Vimeo") : ?>
   
<!--Not working, requires vimeo api key-->
            <div class="col-md-4 text-center">
            <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:300px;">
            <?php if(get_field('video_category') === "Fundamentals") : ?>
                <p style="padding:3px;background-color:green;color:#fff;font-weight:600;">Fundamentals</p>
            <?php endif; ?>
            <?php if(get_field('video_category') === "Cardio") : ?>
                <p style="padding:3px;background-color:yellow;color:#000;font-weight:600;">Cardio</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Re-warm up") : ?>
    <p style="padding:3px;background-color:red;color:#fff;font-weight:600;">Re-warm up</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Floor") : ?>
    <p style="padding:3px;background-color:purple;color:#fff;font-weight:600;">Floor</p>

<?php endif; ?>
<?php if(get_field('video_category') === "Dance") : ?>
    <p style="padding:3px;background-color:blue;color:#fff;font-weight:600;">Dance</p>

<?php endif; ?>
            <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-vimeo" style="color:#86c9ef;font-size:50px;background-color:#fff;background-size: contain; "></i>
                <p><?php the_content(); ?></p>
                </a>
                </div>
      </div>
      <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
            
        <?php endif; // end of the if statement. ?>
    
        </div><!-- #content -->
    </div><!-- #primary -->
    <div class="container-fluid">
    <?php get_footer(); ?>
    </div>