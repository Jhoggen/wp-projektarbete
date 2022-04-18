<?php

/* --------Registers theme support for a given feature. ------------ */

add_theme_support('post-thumbnails'); 
add_theme_support('menus');
add_theme_support('widgets');

/* ---------------------------Menus----------------------------------- */
function registerMenu() {

    register_nav_menu('header_nav', 'Header menu');
    
} 

add_action('after_setup_theme', 'registerMenu'); //

/* ---------------------------------------------------------------------- */
add_filter('woocommerce_enqueue_style','__return_false');



function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'thumbnail_image_height' => 150,
        'single_image_width'    => 300,
        'single_image_height'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/* ---------------------------------------------------------------------- */

function wpbootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

/* ------------------------------------ */

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.1', 'all');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.1', 'all');
    
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/* ------------------------------------ */
/* -------------Sidebar widgets-------------------- */


function wpprojektarbete_widgets_init() {
    /* --header nav menu -- */
    register_sidebar( array(
        'name'          => __( 'Header: Top-left', 'wpprojektarbete' ),
        'id'            => 'header-top-left',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Header: Top-right', 'wpprojektarbete' ),
        'id'            => 'header-top-right',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    /* --footer top sidebar -- */
    register_sidebar( array(
        'name'          => __( 'Footer: Top-left', 'wpprojektarbete' ),
        'id'            => 'footer-top-left',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer: Top-right', 'wpprojektarbete' ),
        'id'            => 'footer-top-right',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    /* --footer bottom sidebars start left to right -- */

    register_sidebar( array(
        'name'          => __( 'Footer: bottom-kolum 1', 'wpprojektarbete' ),
        'id'            => 'footer-bottom-colum-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer: bottom-kolum 2', 'wpprojektarbete' ),
        'id'            => 'footer-bottom-colum-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer: bottom-kolum 3', 'wpprojektarbete' ),
        'id'            => 'footer-bottom-colum-3',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer: bottom-kolum 4', 'wpprojektarbete' ),
        'id'            => 'footer-bottom-colum-4',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'wpprojektarbete_widgets_init' );


function wc_product_widgets_init() {
    /* --header nav menu -- */
    register_sidebar( array(
        'name'          => __( 'Product: Featuerd', 'wpprojektarbete' ),
        'id'            => 'product-featured',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


 
}

add_action( 'widgets_init', 'wc_product_widgets_init' );

// The shortcode function
function wpb_demo_shortcode_2($attr) {

    $product_ids = explode( ',', $attr['ids'] );
    
    if($product_ids){
        error_log(print_r($product_ids ,1));
        
        foreach($product_ids as $id):
            $product = wc_get_product( $id );
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );

            ?>
            
            <h2><?php echo $product->get_name(); ?></h2>
            <?php echo $product->get_image(); ?>

            <?php
        endforeach;
    }
}
// Register shortcode
add_shortcode('my_ad_code', 'wpb_demo_shortcode_2'); 


?>