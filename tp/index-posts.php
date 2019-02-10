<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3
);
$theQuery = new WP_Query($args);
?>
<?php if($theQuery->have_posts()) : ?>

    <div class="wrapper xs">
    
    <h2 class="index posts">Seneste posts</h2>
    
    <?php while($theQuery->have_posts()) : $theQuery->the_post(); ?>

       
                <div class="row lg-col-50 md-col-50 sm-col100">
                    <div>
                        <div>
                        <article>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php if(has_post_thumbnail()) : ?>

                    <?php the_post_thumbnail(); ?>

                <?php endif; ?>
                                  
                </a>
                </article>
                        </div>
                    </div>
                    <div>
                        <div>
                        <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
    <?php endwhile; ?>

    </div><!--/.wrapper.s-->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>