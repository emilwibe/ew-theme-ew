<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 2
);
$theQuery = new WP_Query($args);
?>
<?php if($theQuery->have_posts()) : ?>

    <div class="wrapper s">
    
    <h2 class="index posts">Seneste posts</h2>
    <div class="row lg-col-33 md-col-50 sm-col-100">
    <?php while($theQuery->have_posts()) : $theQuery->the_post(); ?>

        <div>
            <div>
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
            
            </div>
        </div>
 
    <?php endwhile; ?>
    </div><!--/.row-->

    </div><!--/.wrapper.s-->

    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="posts more">Se ældre indlæg</a>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>