

<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
        ?>
            <h2><?php the_title();?></h2>
            <span><?php the_time('d.m.Y');?>  by <?php the_author_posts_link(); ?></span>
            <span><?php the_content();?></span>
        <?php
        } 
    } 
?>