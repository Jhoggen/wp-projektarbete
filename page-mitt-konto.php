<?php get_header();?>


<main>
<div class="my-page-container">
        <?php if ( have_posts() ) {    
            
           while ( have_posts() ) {    
                the_post(); ?>    
                         <h1 class="title-cart"><?php the_title(); ?></h1>      
                        <?php the_content(); ?>    
                
                
            <?php } // end while
             
        }?> <!-- end the if -->  
</div>

</main>

<?php get_footer(); ?>

