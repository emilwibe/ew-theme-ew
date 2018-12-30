<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>

    <?php if(have_posts()) : ?>

    <div class="wrapper sm">
        <?php while(have_posts()) : the_post(); ?>

            <?php get_template_part('tp/image', 'featured'); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    </div><!--/.wrapper-->
    <?php endif; ?>

<?php get_footer(); ?>