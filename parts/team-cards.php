<?php
$cards = array(); 
$args = array( 'tag' => 'team', 'nopaging'=>true, 'posts_per_page'=>10 );
$card_query = new WP_Query( $args );
if ( $card_query->have_posts() ) {
    while ( $card_query->have_posts() ) {
        $card_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['image'] = $thumb_url;
            $cards[] = $temp;
        }
    }
    
} 
wp_reset_postdata();
?>

<?php if(count($cards) > 0) { ?>

<div class="row">
    <?php foreach($cards as $card) { extract($card); ?>
    <div class="col-md-4 text-center">
    <div class="card" style="width:95%;">
  <img class="card-img-top rounded-circle" src="<?php echo $image ?>" alt="<?php echo esc_attr($title); ?>">
  <div class="card-body">
    <h4 class="card-title bold"><?php echo $title ?></h4>
    <p class="card-text"><?php echo $excerpt ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<?php } ?>

</div>
<?php } ?>
