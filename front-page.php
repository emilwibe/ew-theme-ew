<?php get_header(); ?>

  <?php get_template_part('tp/image', 'featured'); ?>

  <main>
  
<?php if(have_posts()) : ?>

  <div class="wrapper s">
  <?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>
  </div><!--/.wrapper.sm-->
<?php endif; ?>

  <?php get_template_part('tp/index', 'clients'); ?>

  <div class="wrapper xl">
      <?php get_template_part('tp/index', 'posts'); ?>
  </div><!--/.wrapper-->

</main>
<?php get_footer(); ?>