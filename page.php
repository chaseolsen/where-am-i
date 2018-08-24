<?php
/**
 * This is a standard page layout
 *
 */

get_header(); ?>
	<section id="primary" class="content-area">


          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            the_content(); // displays what's put in the editor, like the gutenberg editor
            endwhile;
          endif;
          ?>


			<?php the_posts_pagination(); ?>

	</section><!-- #primary -->

<?php get_footer(); ?>
