<?php get_header(); ?>

    <?php if(get_field('hero_image_index')) : ?>

    <img src="<?php the_field('hero_image_index'); ?>" alt="" class="hero">

    <?php endif; ?>

<?php get_footer(); ?>