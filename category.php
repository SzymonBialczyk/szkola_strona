<?php
   
   if ( have_posts() ) {
       while ( have_posts() ) {
           the_post();
       ?>
           <a href="<?php echo get_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
           <small><?php the_time('d.m.Y'); ?> by <?php the_author_posts_link(); ?></small>
           
       <?php
       } 
   } 
?>