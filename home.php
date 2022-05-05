<?php  get_header();?>

<main>
<div class="test">
        <?php if ( have_posts() ) : ?>    
          <div class="row justify-content-center text-center">
            <?php while ( have_posts() ) : ?>    
                <?php the_post(); ?>          
                <div class="col-12 col-md-9 my-4 border rounded shadow-sm">
                <h2 class="my-3 mx-auto"> <?php the_title(); ?>  </h2>

                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    class="img-fluid rounded"
                     alt="<?php the_title(); ?>">
              <div class="my-3">
                <?php echo the_excerpt(); ?>   <!--the blog content-->
              </div>
              <br>
              <a href="<?php echo get_permalink(); ?>" class="btn btn-sm btn-dark w-25 d-block mx-auto my-4">Read More...</a> 
          </div>
            <?php endwhile ?> 
          </div>
        <?php endif ?> <!-- end the if -->  
</div>

</main>
<?php get_footer(); ?>