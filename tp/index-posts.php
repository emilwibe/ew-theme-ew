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
    <?php while($theQuery->have_posts()) : $theQuery->the_post(); ?>

        <article>

        </article>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>