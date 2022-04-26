<?php
    /* Template Name: Homepage */
    get_header(); // prints out whats inside header.php
?>
<main class="magasin-container">

    <h1 ><?php wp_title( '', true, 'right' ); ?></h1> <!-- prints the title of the site  -->
    <?php if ( have_posts() ) {     // Determines whether current WordPress query has posts to loop over.
        while ( have_posts() ) {    // posts to loop over.
            the_post(); ?>          <!-- Iterate the post index in the loop. -->

            <article>
                    
                    <div class="hero-container-test">
                        <?php the_post_thumbnail('full', array('class' => 'magasin-hero-img', 'alt' => get_the_title(). ' review')); ?>
                        <h2 class="magasin-hero-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> <!-- the_permalink() = link the singel.php post for blogpost, the_title = the "rubrik"  -->
                    </h2> 
                    </div>
                
                    
                   
                    <ul class="meta">
                    <li>
                        <i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?> <!-- prints out what time the blogg was posted  -->
                    </li>
                    <li>
                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?> <!-- makes a link to author.php  -->
                    </li>
                    <li>
                        <i class="fa fa-tag"></i> <?php the_category(" , ", true, ""); ?> <!-- makes the link for category.php  " , " = makes space for if its more author   -->
                    </li>
                    </ul>
                    <p><?php the_excerpt(); ?> </p> <!-- makes the blog content shorter -->
            </article>
        <?php } // end while
    }?> <!-- end the if -->  

    <nav class="navigation pagination">
        <?php echo paginate_links();?> <!-- this fuction makes the pagination for blogpost -->
    </nav>

</main>
<?php get_footer(); ?> <!-- prints out whats inside footer.php -->