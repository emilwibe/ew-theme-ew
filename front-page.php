<?php get_header(); ?>

  <?php get_template_part('tp/image', 'featured'); ?>
  
  <main>

    <?php get_template_part('tp/index', 'projects'); ?>
    
    <?php get_template_part('tp/index', 'posts'); ?>

  </main>

<?php get_footer(); ?>