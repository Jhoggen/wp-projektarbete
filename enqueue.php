<?php

function wpbootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');

    }

    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

/* ------------------------------------ */

function add_enqueue_scripts() {   
    
    wp_enqueue_script( 'script-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
    wp_enqueue_script( 'script-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script( 'script-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array(), '4.0.0', true);

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array (), '1.1', true);

      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
}

add_action( 'wp_enqueue_scripts', 'add_enqueue_scripts' );

?>