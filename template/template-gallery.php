<?php
/*
Template Name: Gallery
*/
get_header(); ?>
<h1>Gallery</h1>
<?php
$images = get_attached_media('image', get_the_ID());
if($images) {
  echo '<div class="gallery">';
  foreach($images as $img) {
    echo wp_get_attachment_image($img->ID, 'medium');
  }
  echo '</div>';
} else {
  echo '<p>No images attached to this page.</p>';
}
?>
<?php get_footer(); ?>
