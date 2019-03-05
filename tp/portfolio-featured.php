<?php if(have_rows('project_featured_portfolio')): ?>
  <div class="row all-gutter-zero lg-col-33 md-col-33 portfolio archive">
    <?php while (have_rows('project_featured_portfolio')) : the_row(); ?>

<?php

$post_object = get_sub_field('object_project_featured_portfolio');

if($post_object) :
  $post = $post_object;
	setup_postdata($post);
?>
  <article>
    <div>
      <div>
        <a href="<?php echo get_the_permalink(); ?>">
          <div class="overlay">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('client_project'); ?></p>
          </div><!--/.overlay-->

          <?php //the_post_thumbnail(); ?>

          <img src="<?php the_field('project_image_small'); ?>" alt="<?php the_title(); ?> - Logo" class="portfolio thumbnail">
        </a>
      </div>
    </div>
  </article>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
    <?php endwhile; ?>
  </div><!--/.row.col50-->
<?php endif; ?>
