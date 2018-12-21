<?php if(has_post_thumbnail()) : ?>

  <div class="hero wrapper lg2" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      <div class="overlay">

      </div><!--/.overlay-->

    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>" class="hero preload" id="hero-preload">

    <h2></h2>

  </div><!--/.hero.wrapper.fw-->

  <?php endif; ?>