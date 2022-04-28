<?php get_header();?>


<main>
<div class="test">
        <?php if ( have_posts() ) {    
            
           while ( have_posts() ) {    
                the_post(); ?>          
                        <?php the_content(); ?>    
                
                
            <?php } // end while
             
        }?> <!-- end the if -->  
</div>

</main>

<?php get_footer(); ?>

