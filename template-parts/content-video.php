<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

?>

<div class="row">
<h1><?php the_title() ?></h1>
<?php if(get_field('video_provider') === "YouTube") : ?>
<div class="col-md-12 iframe-container">
<iframe src="https://www.youtube.com/embed/<?php the_field('youtube_video_id') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php endif; ?>
<?php if(get_field('video_provider') === "Vimeo") : ?>
<div class="col-md-12 iframe-container">
<iframe src="https://player.vimeo.com/video/<?php the_field('youtube_video_id') ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
<?php endif; ?>
</div>
<footer class="entry-footer">
		<?php lodc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<!-- #post-<?php the_ID(); ?> -->