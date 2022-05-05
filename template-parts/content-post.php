<?php get_header();
$post_id = get_the_id();
$post_category = get_the_category($post_id)[0];
$post_category_slug = $post_category->slug;

$related_products = wc_get_products(array(
    'category' => array($post_category->name),
));


?> <!-- end the if -->  

<div class="container">
    <div class="row text-center justify-content-center"> 
        <div class="col-12 col-md-9">
        <h1 class="mx-auto my-4"> <?php the_title(); ?>  </h1>

       

        <main class="col-12">
            <section class="my-2">
                <?php the_content() ?> 
            </section>
            <!--========== Related Products ==========-->
            <?php if(count($related_products) > 0): ?>
            <section>
                <h2>Relaterade Produkter</h2>
                <div class="row">
                    <?php foreach($related_products as $product) : ?>
                    <div class="col-12 col-md-3">
                    <img src="<?php echo get_the_post_thumbnail_url($product->id) ?>"
                        class="img-fluid"
                            alt="">
                        <h4><?php echo $product->name ?></h4>
                        <small>kr<?php echo $product->regular_price ?></small>
                        <br>
                        <a href="<?php echo get_permalink($product->id) ?>" class="btn btn-sm btn-dark">Read More...</a> 

                    </div>
                    <?php endforeach ?>
                </div>
            </section>
            <?php endif; ?>
        </main>
        </div>

   
       
    </div>
</div>