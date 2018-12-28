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

  add_action('widgets_init', function(){
    register_sidebar(array(
      'name' => 'Project Widgets',
      'id' => 'project_widgets',
      'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));
  });

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
      'has_archive' => false,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		));
  });