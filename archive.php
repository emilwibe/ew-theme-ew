<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <?php get_template_part('tp/image', 'featured'); ?>

    <main class="wrapper s">
        
                <?php the_content(); ?>

                <?php get_template_part('tp/blog', 'posts'); ?>

    </main><!--/.wrapper-->

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>