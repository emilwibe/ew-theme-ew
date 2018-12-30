<?php get_header(); ?>

  <?php get_template_part('tp/image', 'featured'); ?>
  
  <main class="wrapper lg2">

    <div>
      <div>
        <?php get_template_part('tp/index', 'projects'); ?>
      </div>
    </div>
    <div>
      <div>
      <?php get_template_part('tp/index', 'posts'); ?>
      </div>
    </div>

  </main>

<?php get_footer(); ?>