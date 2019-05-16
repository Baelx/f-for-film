<?php


function site_assets() {
  wp_enqueue_script('main-js', get_theme_file_uri('./js/scripts-bundled.js'), NULL, microtime(), 'true');
  wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Signika:300,400,600,700');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
  wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

function site_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support( 'custom-logo');
}

add_action('wp_enqueue_scripts', 'site_assets');
add_action('after_setup_theme', 'site_features');
?>
