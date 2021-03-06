<?php

// include scripts
include('enqueue.php');
// 

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



/* -------------Sidebar widgets-------------------- */


function wpprojektarbete_widgets_init() {
    /* --header coupon menu -- */
    register_sidebar( array(
        'name'          => __( 'Coupon Header: Top-left', 'wpprojektarbete' ),
        'id'            => 'coupon-header-top-left',
        'before_widget' => '<div class="top-coupon-col-left">',
        'after_widget'  => '</div>',
    
    ) );
    register_sidebar( array(
        'name'          => __( 'Coupon Header: Top-right', 'wpprojektarbete' ),
        'id'            => 'coupon-header-top-right',
        'before_widget' => '<div class="top-coupon-col-right">',
        'after_widget'  => '</div>',
    ) );
    /* --header nav menu -- */
    register_sidebar( array(
        'name'          => __( 'Header: Top-left', 'wpprojektarbete' ),
        'id'            => 'header-top-left',
        'before_widget' => '',
        'after_widget'  => '',
        'label'          => '',

    ) );
    register_sidebar( array(
        'name'          => __( 'Header: Top-right', 'wpprojektarbete' ),
        'id'            => 'header-top-right',
        'before_widget' => '',
        'after_widget'  => '',

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



// Custom sidor f??r att g??ra lista till fysiska butikerna-----

function custom_post_type_for_physical_stores()
{

    $args = array(

            'labels' => array(
                'name' => 'Fysiska Butiker',
                'singular_name' => 'fysiskbutik',
        ),
        
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'has_archive_string' => '',
        'menu_icon' => 'dashicons-store',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('fysiskabutiker', $args);
}
add_action('init', 'custom_post_type_for_physical_stores');



add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
 
function bbloomer_remove_sidebar_product_pages() {
if ( is_product() | is_shop() | is_product_category()) {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> ??? <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}
?>

