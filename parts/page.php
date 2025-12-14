<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="entry">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php echo do_shortcode('[latest_movies]'); ?>
