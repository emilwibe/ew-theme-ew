<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <?php get_template_part('tp/image', 'featured'); ?>

        <div class="wrapper s">
            <?php the_content(); ?>
        </div><!--/.wrapper-->

        <?php get_template_part('tp/portfolio', 'featured'); ?>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>