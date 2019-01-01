<?php get_header(); ?>

  <?php get_template_part('tp/image', 'featured'); ?>

  <main>
  
<?php if(have_posts()) : ?>

  <div class="wrapper sm">
  <?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>
  </div><!--/.wrapper.sm-->
<?php endif; ?>

  <?php get_template_part('tp/index', 'clients'); ?>

  <div class="wrapper lg2 row lg-col-75-25 md-col-66-33 sm-col-100">

    <div>
      <div>
      <?php get_template_part('tp/index', 'posts'); ?>
      </div>
    </div>
    <div>
      <div>
      <?php get_template_part('tp/index', 'projects'); ?>
      </div>
    </div>

</div><!--/.row-->

</main>
<?php get_footer(); ?>