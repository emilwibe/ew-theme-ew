<?php
  add_theme_support('title-tag');

  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('ew-styles', get_template_directory_uri() . '/dist/css/core.css', '', '', '');
  });

  register_nav_menus(array(
    'primary' => 'Primary Nav',
  ));
    