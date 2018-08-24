<?php get_header(); ?>

<div class="row">

  <!-- This will get the very latest post to put on top of the page. -->
	<div class="col-xs-12 well">

		<?php

			$lastBlog = new WP_Query('type=post&posts_per_page=1');

			if( $lastBlog->have_posts() ):

				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

					<?php get_template_part('content',get_post_format()); ?>

				<?php endwhile;

			endif;

			wp_reset_postdata();

		?>
	</div>

  <!-- This will display the main home content (static area) -->
	<div class="col-xs-12 col-sm-8">

		<?php

		if( have_posts() ):

			while( have_posts() ): the_post(); ?>

				<?php get_template_part('content',get_post_format()); ?>

			<?php endwhile;

		endif;

		// Will print the next 2 posts.
		$args = array(
			'type' => 'post',
			'posts_per_page' => 2,
			'offset' => 1,
		);

		$lastBlog = new WP_Query($args);

		if( $lastBlog->have_posts() ):

			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

				<?php get_template_part('content',get_post_format()); ?>

			<?php endwhile;

		endif;

		wp_reset_postdata();

		?>

		<hr>

		<?php

		//Will print the first article with a news category
		$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');

		if( $lastBlog->have_posts() ):

			while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

				<?php get_template_part('content',get_post_format()); ?>

			<?php endwhile;

		endif;

		wp_reset_postdata();

		?>

	</div>

  <!-- Retrieve Sidebar -->
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
