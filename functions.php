<?php

function myCustom_script_enqueue() {
  // Bootstrap
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');

  // Loads custom css and js... get_template_directory_uri gets direct file location.
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/myCustom.css', array(), '1.0.0', 'all');

  wp_enqueue_script('jquery');

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/myCustom.js', array(), '1.0.0', true);

}
//First param is when to fire function, second param is which function to fire.
add_action('wp_enqueue_scripts', 'myCustom_script_enqueue');



function myCustom_theme_setup(){
  // Adds menu support
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation (this is from functions.php)');
  register_nav_menu('secondary', 'Footer Navigation(also clarified in functions.php)');
  register_nav_menu('social', 'Social Navigation(created in functions.php)');
}
//First param is when to fire function, second param is which function to fire.
add_action('init', 'myCustom_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

// Post formats: Their are 9 different post formats, currenly im only bringing in 3 as you can see below.
add_theme_support('post-formats', array('aside', 'image', 'video'));


// Side bar functions
function myCustom_widget_setup(){

// This will create/register a sidebar to be used very similar to register_nav_menu. Make as many as you want.
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar (created in functions.php)',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
    )
  );


}
//First param is when to fire function, second param is which function to fire.
add_action('widgets_init', 'myCustom_widget_setup');




?>
