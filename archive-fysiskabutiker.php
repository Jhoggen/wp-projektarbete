<?php get_header();


 if ( have_posts() ) {    
            
    while ( have_posts() ) {    
         the_post();
         the_title(); ?>          
         <div class="g-col-6 g-col-md-4">     
                 <?php the_content(); ?>    
         </div>    
         
     <?php } // end while
      
 }?> <!-- end the if -->  