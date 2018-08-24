

  <footer>
    <div class="row navbar-default">
      <div class="col-md-8">
        <h5><?php echo get_bloginfo('description') ?></h5>
      </div>
      <div class="col-md-4">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'social',
          'container' => false,
          'menu_class' => 'nav navbar-nav navbar-right'
          )
        );
      ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>
</html>
