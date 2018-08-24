<!--
As you can see, the template name is being clarified here to be selected when creating a new page in wordpress.
The name of this file can be ANYTHING as long as you have 'page-' at the beginning of it.
-->

<?php
/*
  Template Name: Page No Title (created in file page-notitle.php)
*/
get_header(); ?>

<!-- Check for posts -->
  <?php

  if( have_posts() ):
    while( have_posts() ): the_post(); ?>

    <h1>This is my Static Title</h1>

    <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>
    <p><?php the_content(); ?></p>
    <hr>

    <?php endwhile;
  endif;
  ?>



<?php get_footer(); ?>
