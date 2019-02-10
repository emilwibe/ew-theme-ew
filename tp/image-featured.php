<?php if(has_post_thumbnail()) : ?>

  <div class="hero wrapper fw" id="hero" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      <div class="overlay">

      </div><!--/.overlay-->

    <?php if(is_front_page()) : ?>

    <h2 class="thumbnail title"><?php echo get_bloginfo('description'); ?></h2>

    <?php else : ?>

    <h1 class="thumbnail title"><?php the_title(); ?></h1>

    <?php endif; ?>

  </div><!--/.hero.wrapper.fw-->

  <?php endif; ?>