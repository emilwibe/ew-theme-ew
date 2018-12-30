<?php
    $post_object = get_field('index_project');
    
    if($post_object) :
    
        // override $post
        $post = $post_object;
        setup_postdata( $post ); 
    
?>

<h2 class="index posts">Udvalgt Projekt</h2>

<?php echo the_post_thumbnail(); ?>

<h3 class="index project"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php wp_reset_postdata(); ?>
<?php endif; ?>