<?php get_header(); ?>

    <?php get_template_part('tp/image', 'featured'); ?>

    <div class="row lg-col-25-75 md-col-33-66 sm-col-100">
        <div>
            <div></div>
        </div>
        <div>
            <div>
                <main><?php the_content(); ?></main>
            </div>
        </div>
    </div><!--/.row-->

<?php get_footer(); ?>