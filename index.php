<?php get_header(); ?>

<div class="">
  <div class="row">
    <div class="col-md-12 well">

      <!-- This gets the last post -->
      <h1>Latest News</h1>
      <?php
        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if( $lastBlog->have_posts() ):
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

          <?php endwhile;
        endif;
        wp_reset_postdata();
       ?>
    </div>


    <div class="col-md-8">
      <!-- Check for posts -->
        <?php

        if( have_posts() ):
          while( have_posts() ): the_post(); ?>


          <!-- This pulls content from files with 'content-{whatever is passed through here by get_post_format}' -->
          <!-- So if it was an aside post, it will get 'content-aside.php' -->
          <!-- If its a standard post it will get 'content.php' -->
          <!-- Image will be 'content-image.php' -->
          <!-- 'content' DOESN'T HAVE TO BE 'CONTENT', IT CAN BE WHATEVER YOU WANT AS LONG AS THE PHP FILES ARE RENAMED TO WHATEVER IT IS. -->
          <?php get_template_part('content', get_post_format()); ?>

          <?php endwhile;
        endif;
        ?>
    </div>
  <div class="col-md-4">

    <?php get_sidebar(); ?>

  </div>

  </div>
</div>
<?php get_footer(); ?>
