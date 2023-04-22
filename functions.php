<?php
/**
 * Literary Theme functions
 */

function literarytheme_scri()
{

  wp_enqueue_style('literarytheme-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
  wp_enqueue_style('literarytheme-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
  wp_enqueue_style('literarytheme-style', get_stylesheet_uri());
  wp_enqueue_script('foxxx-script', get_template_directory_uri() . '/js/scripts.js', array(), '656969', true);
}
add_action('wp_enqueue_scripts', 'literarytheme_scri');


add_theme_support('post-thumbnails');
function new_excerpt_end($more)
{
  return null;
}

add_filter('excerpt_more', 'new_excerpt_end');

function new_excerpt_length($length)
{
  return 34;
}
add_filter('excerpt_length', 'new_excerpt_length', 999);

add_filter('show_admin_bar', '__return_false');