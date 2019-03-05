<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
  <script>
    document.body.classList.add("enhanced");
  </script>
    <header class="header primary">
      <div class="wrapper xl">
        <a href="<?php echo get_site_url(); ?>" class="logo">EmilWibe <span>WebDesign</span></a>

        <?php get_template_part('tp/nav', 'primary'); ?>

        <button id="nav-toggle" class="nav toggle">Menu</button>

      </div><!--/.wrapper.lg-->
    </header><!--/.header.primary-->