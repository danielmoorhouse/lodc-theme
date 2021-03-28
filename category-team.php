<?php
$category_query = new WP_Query( array( 'category_name' => 'team', 'posts_per_page' => '10' ) );
get_header();
?>



<?php if ( category_description() ) { ?>
<?php echo category_description(); ?>
<?php } ?>



    <div class="container">
    <br>
    <h1 class="archive-title">MEET THE TEAM</h1>
    <hr>
    <br>
    <!--pull through staff-->
    <h2>STAFF</h2>
    <br>
    <div class="row">
    <?php if ( $category_query->have_posts() ) : ?>
<?php while ( $category_query->have_posts() ) : $category_query->the_post(); ?>
<div class="col-md-4 col-sm-6 text-center">
<a style="text-decoration:none;" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<div id="team-card" style="">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' class="rounded-circle" style="width:60%;"/>


<?php endif; ?>
<br><span class="h2"><?php the_title(); ?></span>
<hr>
<p><?php echo wp_kses_post( substr( get_the_excerpt(), 0, 80 ) ); ?></p>
<p>Interests: <?php echo get_post_meta($post->ID, 'Interests', true); ?></p>
</div>
</a>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>

<?php endif; ?>
</div>

<!--pull through trustees-->
<?php
$category_query_trust = new WP_Query( array( 'category_name' => 'trustee', 'posts_per_page' => '10' ) );

?>

<div class="container">
    <br>
    <h2 class="archive-title">TRUSTEES</h2>
    <br>
    <br>
    <div class="row">
    <?php if ( $category_query_trust->have_posts() ) : ?>
<?php while ( $category_query_trust->have_posts() ) : $category_query_trust->the_post(); ?>
<div class="col-md-4 col-sm-6 text-center">
<a style="text-decoration:none;" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<div id="team-card" style="">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' class="rounded-circle" style="width:60%;"/>


<?php endif; ?>
<br><span class="h2"><?php the_title(); ?></span>
<hr>
<p><?php echo wp_kses_post( substr( get_the_excerpt(), 0, 80 ) ); ?></p>
<p>Interests: <?php echo get_post_meta($post->ID, 'Interests', true); ?></p>
</div>
</a>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>

<?php endif; ?>
</div>

<!--pull through patrons-->
<?php
$category_query_patron = new WP_Query( array( 'category_name' => 'patron', 'posts_per_page' => '10' ) );

?>
<div class="container">
    <br>
    <h2 class="archive-title">PATRONS</h2>
    <br>
    <br>
    <div class="row">
    <?php if ( $category_query_patron->have_posts() ) : ?>
<?php while ( $category_query_patron->have_posts() ) : $category_query_patron->the_post(); ?>
<div class="col-md-4 col-sm-6 text-center">
<a style="text-decoration:none;" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<div id="team-card" style="">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src='<?php echo $image[0]; ?>' class="rounded-circle" style="width:60%;"/>


<?php endif; ?>
<br><span class="h2"><?php the_title(); ?></span>
<hr>
<p><?php echo wp_kses_post( substr( get_the_excerpt(), 0, 80 ) ); ?></p>
<p>Interests: <?php echo get_post_meta($post->ID, 'Interests', true); ?></p>
</div>
</a>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>

<?php endif; ?>
</div>