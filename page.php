<?php get_header(); ?>
  <main class="container">

  <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>

            <div class="single-paget">
              <div class="featured-image">
              <?php  the_post_thumbnail('large'); ?>
              </div>

              <div class="text-container">
                <h2><?php the_title(); ?></h2>
                <p class="body-contentt"><?php the_content(); ?></p>
              </div>
            </div>

          <?php

        }
      }
   ?>

  </main>

<?php get_footer(); ?>
