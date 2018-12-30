<?php
    $post_object = get_field('index_project');
    
    if($post_object) :
    
        // override $post
        $post = $post_object;
        setup_postdata( $post ); 
    
?>

<h2 class="index posts">Udvalgt Projekt</h2>
<div class="row lg-col-75-25 md-col66-33 sm-col-100">
    <div>
        <div>
            <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php echo get_the_excerpt(); ?>
        </div>
    </div>
    <div>
        <div>
            <?php echo the_post_thumbnail(); ?>
        </div>
    </div>
</div><!--/.row-->
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>