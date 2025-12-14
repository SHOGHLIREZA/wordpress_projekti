                                                                                <?php
/*
Template Name: Fullwidth
*/
get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="entry" style="width:100%">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
