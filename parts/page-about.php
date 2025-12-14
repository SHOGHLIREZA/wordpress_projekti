<?php
/*
Template Name: About Me Page
*/
get_header(); ?>

<section class="about-me">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="about-content">
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
    </div>

    
  </div>
</section>

<?php get_footer(); ?>
