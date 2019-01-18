<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <?php get_template_part('tp/image', 'featured'); ?>

    <div class="wrapper xl row lg-col-25-75 md-col-33-66 sm-col-100">
        <div class="sm-order-2">
            <div>
                <?php get_template_part('tp/author', 'bio'); ?>

                <?php if(is_active_sidebar('project_widgets')) : ?>

                <ul id="sidebar">
                    <?php dynamic_sidebar('project_widgets'); ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="sm-order-1">
            <div>
                <main><?php the_content(); ?></main>
            </div>
        </div>
    </div><!--/.row-->

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>