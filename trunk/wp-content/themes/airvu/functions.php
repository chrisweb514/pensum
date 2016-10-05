<?php

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Theme support options
require_once(get_template_directory().'/assets/library/app.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');


function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'profile'); // ($post_types comes in as array('post','page'). If you don't want FGs on those, you can just return a custom array instead of adding to it. )
    return $post_types;
}
add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );

function limit_words($string, $word_limit=15)
{
		$string = wp_strip_all_tags($string);
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( !function_exists( 'of_get_option' ) ) {
	function of_get_option($name, $default = false) {

		$optionsframework_settings = get_option('optionsframework');

		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];

		if ( get_option($option_name) ) {
			$options = get_option($option_name);
		}

		if ( isset($options[$name]) ) {
			return $options[$name];
		} else {
			return $default;
		}
	}
}

function timthumb($src, $params){

	if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {

		// not a valid URL
		return false;

	} elseif( false ){
		// check if <img>
	} else{

	}

	$base = get_template_directory_uri() . '/timthumb.php';
	$image_url = $base . $src;

}

add_filter('body_class','body_classes');

function body_classes($classes) {

	global $post;

	$class = $classes;
	//$class[] = 'smooth-active';
	$class[] = $post->post_name;
	$class[] = get_post_type();
	$class[] = 'use-animations';


  if ( is_page_template( 'page-contact.php' ) || is_page_template( 'page-book-demo.php' ) || is_404() ) {
      $class[] = 'top-bar-active';
  }

	if( is_front_page() ){
		$class[] = 'front-page';
	} else{
		$class[] = 'not-home';
		//$class[] = 'menu-sticky';
    if( get_post_type() == 'page' || get_post_type() == 'careers' ){
      $class[] = 'slim-header';
    }
	}

	if ( current_user_can('editor') || current_user_can('administrator') ){
		$class[] = 'wp-admin';
	}

	return $class;

}

add_action( 'admin_menu', 'remove_submenu_wpse_82873' );

function remove_submenu_wpse_82873()
{
    global $current_user;
    get_currentuserinfo();

    // If user not Super Admin remove export page
    if ( !is_super_admin() )
    {
        remove_submenu_page( 'tools.php', 'export.php' );
    }
}

add_action( 'admin_head-export.php', 'prevent_url_access_wpse_82873' );

function prevent_url_access_wpse_82873()
{
    global $current_user;

    // Only Super Admin Authorized, exit if user not
    if ( !is_super_admin() ) {

      // User not authorized to access page, redirect to dashboard
      wp_redirect( admin_url( 'index.php' ) );
      exit;
    }
}

function clean_print_r($obj=''){

	if($obj == ''){
		return;
	}

	print "<pre>";
		print_r($obj);
	print "</pre>";
}
