<?php get_header(); ?>

  <div class="hero wrapper fw">
      <div class="overlay">

      </div><!--/.overlay-->

    <?php if(get_field('hero_image_index')) : ?>

    <img src="<?php the_field('hero_image_index'); ?>" alt="" class="hero preload">

    <?php endif; ?>

  </div><!--/.hero.wrapper.fw-->

    

<?php get_footer(); ?>