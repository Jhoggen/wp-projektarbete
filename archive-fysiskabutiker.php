<?php get_header(); ?>

<?php
if ( have_posts() ) {    
            
    while ( have_posts() ) {    
        the_post(); 
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
        <?php 
             
         
    } // end while
      
}?> <!-- end the if -->