<?php
    $post_object = get_field('index_project');
    
    if($post_object) :
    
        // override $post
        $post = $post_object;
        setup_postdata( $post ); 
    
?>
<div class="wrapper lg2 row lg-col-75-25 md-col75-25 sm-col-100">
    <div>
        <div>
            <h2 class="index posts">Udvalgt Projekt</h2>
            <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
    </div>
    <div>
        <div>
        
        </div>
    </div>
</div><!--/.row-->
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>