<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( "Name" ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    
<header>
    <div class="coupon-header-container">
        
            <?php dynamic_sidebar("coupon-header-top-left"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            <?php dynamic_sidebar("coupon-header-top-right"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
      
    </div>
    <div class="header-top-menu-container">
        <div class="header-top-menu">
            <div class="top-menu-col">
                <?php dynamic_sidebar("header-top-left"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            </div>
            <div class="top-menu-col">
                <a class="logo" href="<?php bloginfo( "wpurl" ); ?>"><h1><?php bloginfo( "name" ); ?></h1> </a> <!-- name of the page and link it back to the set webbpage -->
            </div>
            <div class="top-menu-col ">
                <div class="top-menu-row">
                    <?php dynamic_sidebar("header-top-right"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" ><img class="na" src="https://img.icons8.com/external-kmg-design-basic-outline-kmg-design/32/000000/external-user-back-to-school-kmg-design-basic-outline-kmg-design.png"/></a>
                </div>
                    <a class="top-menu-row" href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>" >
                        <p>(<?php echo WC()->cart->get_cart_contents_count() ?>)</p>
                        <img src="https://img.icons8.com/windows/32/000000/shopping-basket-2.png"/>
                    </a>
            </div>
        </div>
    </div>
        <?php 
        wp_nav_menu( 
            array(                       //  looking for header_nav id in the registerMenu() in function.php 
            'theme_location' => 'header_nav',
            'menu_class' => 'header-bottom-nav'
            )
        ); ?>
</header>