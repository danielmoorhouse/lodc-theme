<?php
$category_query = new WP_Query( array( 'category_name' => 'event', 'posts_per_page' => '1' ) );
get_header();
?>



<?php if ( category_description() ) { ?>
<?php echo category_description(); ?>
<?php } ?>


<section class="container-fluid">
    <div class="container">
    <br>
    <h1 class="archive-title">EVENTS</h1>
    <hr>
    <br>
    <!--pull through staff-->
    <h2>NEXT EVENT</h2>
    <br>

    <?php if ( $category_query->have_posts() ) : ?>
<?php while ( $category_query->have_posts() ) : $category_query->the_post(); ?>



<div class="jumbotron" style="background-color:#f5f5f5;padding:15px;border-left:10px solid #0285fa;">
<div class="row">
<div class="col-md-6 offset-md-1 ">
<br><span class="h2"><?php the_title(); ?></span><hr>
<p> <i class="far fa-calendar-alt"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Date', true); ?></p>
<p> <i class="far fa-clock"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Time Starts', true); ?> - <?php echo get_post_meta($post->ID, 'Time Ends', true); ?></p>
<p><i class="fas fa-location-arrow"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Location', true); ?></p>
<hr>
<p><?php echo wp_kses_post( substr( get_the_excerpt(), 0, 150 ) ); ?></p>
<a class="btn btn-primary" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
More info & booking &nbsp; <i class="fas fa-arrow-circle-right"></i>
</a>

<?php //echo get_post_meta($post->ID, 'Interests', true); ?>


</div>
<div class="col-md-5 text-left"><?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' style="width:100%;"/>


<?php endif; ?>
</div>
</div>


</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


</div>

<?php endif; ?>


<!--pull through trustees-->
<?php
$category_query_trust = new WP_Query( array( 'category_name' => 'event', 'posts_per_page' => '10', 'offset' => '1' ) );

?>
<hr>
<div class="container">
    <br>
    <h2 class="archive-title">UPCOMING EVENTS</h2>
    <br>
    <br>
    <div class="row">
    <?php if ( $category_query_trust->have_posts() ) : ?>
<?php while ( $category_query_trust->have_posts() ) : $category_query_trust->the_post(); ?>
<div class="col-md-4 col-sm-6 text-center">
<div class="text-left" id="event-card" style="width:90%;background-color:#f5f5f5;">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' style="width:100%;"/>


<?php endif; ?>
<br><h3 style="width:100%;"><?php the_title(); ?></h3>

<p> <i class="far fa-calendar-alt"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Date', true); ?></p>
<p> <i class="far fa-clock"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Time Starts', true); ?> - <?php echo get_post_meta($post->ID, 'Time Ends', true); ?></p>
<p><i class="fas fa-location-arrow"></i> &nbsp;<?php echo get_post_meta($post->ID, 'Location', true); ?></p>

<a class="btn btn-primary" style="width:100%;" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<strong>More info & booking &nbsp; <i class="fas fa-arrow-circle-right"></i></strong>
</a>
<p><?php //echo get_post_meta($post->ID, 'Interests', true); ?></p>
</div>

</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>

<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>
