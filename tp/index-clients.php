<?php if(have_rows('index_clients')) : ?>

    <div class="wrapper s">
        <ul class="clients">
    <?php while(have_rows('index_clients')) : the_row() ?>
    <?php
        $image = get_sub_field('index_client');
    ?>

    <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></li>

    <?php endwhile; ?>

        </ul><!--/.clients-->
    </div><!--/.wrapper-->
<?php endif; ?>