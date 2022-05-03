  




<?php get_header();


if ( have_posts() ) {    
           
   while ( have_posts() ) {    
        the_post(); ?>            
            <?php if ( WC()->cart->get_cart_contents_count() == 0 ) {
                
                echo '<div class="cart-is-empty">';
                echo '<span>🍌</span>';
                echo '<h2>Tyvärr så finns det inga bannaner i varukorgen!</h2>';
                echo '<h3>Men lägg gärna till några möbler istället!</h3>';
                echo '</div>';
                // Do something fun
            }else {
             ?>
              <h1 class="title-cart"><?php the_title(); ?></h1>
               <?php the_content();
            } ?>  
                
        
    <?php } // end while
     
}?> <!-- end the if -->  

<?php get_footer(); ?>