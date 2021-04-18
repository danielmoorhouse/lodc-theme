<?php
$category_query = new WP_Query( array( 'category_name' => 'team', 'posts_per_page' => '10' ) );
get_header();
?>
	<main id="primary" class="container-fluid site-main">
<div class="container mt-3">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Trustees</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Patrons</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active">
    <div class="row">
    <?php
$category_query = new WP_Query( array( 'category_name' => 'team', 'posts_per_page' => '10' ) );

?>
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

    <div id="menu1" class="container tab-pane fade"><br>
    <!--pull through trustees-->
    <?php
$category_query_trust = new WP_Query( array( 'category_name' => 'trustee', 'posts_per_page' => '10' ) );

?>
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

    <div id="menu2" class="container tab-pane fade"><br>
<!--pull through patrons-->
<?php
$category_query_patron = new WP_Query( array( 'category_name' => 'patron', 'posts_per_page' => '10' ) );

?>
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
</div >

<?php endif; ?>
  </div>
</div>
</div>
</main>
<?php get_footer(); ?>
