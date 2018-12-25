<?php
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('ew-styles', get_template_directory_uri() . '/dist/css/core.css', '', '', '');
  });

  add_action('wp_print_styles', function(){
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');
  });

  register_nav_menus(array(
    'primary' => 'Primary Nav',
  ));

  //Custom post types
  add_action('init', function(){
    register_post_type('project', array(
      'labels' => array(
			  'name' => __('Project'),
			  'singular_name' => __('Project'),
			  'add_new' => __('Tilføj nyt'),
			  'add_new_item' => __('Tilføj nyt Project')
			),
		  'public' => true,
		  'has_archive' => true,
		));
  });