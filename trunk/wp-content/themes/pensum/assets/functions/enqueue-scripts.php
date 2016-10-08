<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    if( !is_admin() ){
      // Remove JQUERY
      //wp_deregister_script( 'jquery' );
    }

    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/dist/scripts.min.js', array( jquery ), '', true );
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/dist/style.min.css', array(), '', 'all' );

    if( is_page_template('page-contact.php') ):

      // wp_deregister_script('google-maps');
      // wp_register_script('google-maps', ( ('//maps.google.com/maps/api/js?sensor=true') ), false, '1', true);
      // wp_enqueue_script('google-maps');

    endif;

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
