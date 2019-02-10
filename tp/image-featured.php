<?php if(has_post_thumbnail()) : ?>

  <div class="hero wrapper fw" id="hero" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      <div class="overlay">

      </div><!--/.overlay-->

    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>" class="hero preload" id="hero-preload">

    <?php if(is_front_page()) : ?>

    <h2 class="thumbnail title"><?php echo get_bloginfo('description'); ?></h2>

    <?php else : ?>

    <h1 class="thumbnail title"><?php the_title(); ?></h1>

    <?php endif; ?>

  </div><!--/.hero.wrapper.fw-->

  <?php endif; ?>