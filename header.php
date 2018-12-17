<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>

  </head>
  <body>
    <header class="header primary">
      <div class="wrapper lg2">
        <a href="/" class="logo">EmilWibe <span>WebDesign</span></a>

        <?php get_template_part('tp/nav', 'primary'); ?>

      </div><!--/.wrapper.lg-->
    </header><!--/.header.primary-->