<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1
);
$theQuery = new WP_Query($args);
?>
<?php if($theQuery->have_posts()) : ?>
    
    <h2>Seneste posts</h2>
    <div class="row col-33">
    <?php while($theQuery->have_posts()) : $theQuery->the_post(); ?>

        <div>
            <div>
            <article>
                <a href="<?php echo get_the_permalink(); ?>">
                    <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                </article>
            </div>
        </div>
 
    <?php endwhile; ?>
    </div><!--/.row-->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>