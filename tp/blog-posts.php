<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => get_option('posts_per_page'),
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged
    );
    $theQuery = new WP_Query($args);
?>
<?php if($theQuery->have_posts()) : ?>

    <div class="wrapper xs">
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
                    <div class="blog archive heading">
                        <div>
                        <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div><!--/.wrapper.xs-->
<?php endif; ?>