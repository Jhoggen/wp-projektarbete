<?php get_header();?>

<?php echo 'banan'; ?>
        <?php if ( have_posts() ) {    
            
           while ( have_posts() ) {    
                the_post(); ?>          
                <div class="g-col-6 g-col-md-4">     
                        <?php the_content(); ?>    
                </div>    
                
            <?php } // end while
             
        }?> <!-- end the if -->  



<?php get_footer(); ?>