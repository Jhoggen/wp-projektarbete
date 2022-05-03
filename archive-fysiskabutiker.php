<?php get_header(); ?>

<div class="container-fysiskabutiker">

<?php
if ( have_posts() ) {    
            
    while ( have_posts() ) {    
        the_post(); 
        ?>


            <div class="rowfysiska">
                <div class="hero-fysiskabutiker">

                
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'hero-img', 'alt' => get_the_title(). ' review' )); ?> </a>
                
                    <a class="titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                    
                </div>
            </div>
        <?php         
         
    } // end while
      
}?> <!-- end the if -->

<?php get_footer(); ?>