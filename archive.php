<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>

<header class="page-header">
    <?php
        the_archive_title( '
 
<h1 class="page-title">', '</h1>
 
 
' );
        the_archive_description( '
 
<div class="taxonomy-description">', '</div>
 
 
' );
    ?>
</header>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <div class="wrapper sm row lg-col-25-75 md-col-33-66 sm-col-100">
        <div>
            <div>
                
            </div>
        </div>
        <div>
            <div>
                <main><?php the_excerpt(); ?></main>
            </div>
        </div>
    </div><!--/.row-->

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>