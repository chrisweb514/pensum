<?php

class Topbar_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"menu\">\n";
    }
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical nested menu\">\n";
    }
}

class Collective_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
       $indent = str_repeat("\t", $depth);
       $output .= "\n$indent<div class='sub-menu-wr'><ul class='sub-menu'>\n";
   }
   function end_lvl( &$output, $depth = 0, $args = array() ) {
       $indent = str_repeat("\t", $depth);
       $output .= "$indent</ul></div>\n";
   }

   function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query, $post;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      $class_names = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $class_names .'>';
      //clean_print_r($item);
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

      if ( 'main-navigation' == $args->theme_location ) {
          $submenus = 0 == $depth || 1 == $depth ? get_posts( array( 'post_type' => 'nav_menu_item', 'numberposts' => 1, 'meta_query' => array( array( 'key' => '_menu_item_menu_item_parent', 'value' => $item->ID, 'fields' => 'ids' ) ) ) ) : false;
          $item_output .= ! empty( $submenus ) ? ( 0 == $depth ? '<span class="arrow"></span>' : '<span class="sub-arrow"></span>' ) : '';
      }

      if(stristr(get_the_permalink( $post->ID ), apply_filters( 'the_title', $item->title, $item->ID ))) {
	  	$item_output .= '<span class="subtitle">'. get_post_meta($item->object_id,'wpcf-menu-sub-title', true) .'</span>';
	  	$item_output .= '<span class="underline active"></span></a>';
    	} else {
    		$item_output .= '<span class="subtitle">'. get_post_meta($item->object_id,'wpcf-menu-sub-title', true) .'</span>';
    		$item_output .= '<span class="underline"></span></a>';
    	}

      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

}
class Clean_Walker extends Walker_Page {
	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	function start_el(&$output, $page, $depth, $args, $current_page) {

    if($args['has_children'])
       {

       }

		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';
		extract($args, EXTR_SKIP);
		$class_attr = '';
		if ( !empty($current_page) ) {
			$_current_page = get_page( $current_page );
			if ( (isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors)) || ( $page->ID == $current_page ) || ( $_current_page && $page->ID == $_current_page->post_parent ) ) {
				$class_attr = 'sel';
			}
		} elseif ( (is_single() || is_archive()) && ($page->ID == get_option('page_for_posts')) ) {
			$class_attr = 'sel';
		}
    if($args['has_children']){
      $class_attr .= ' has-children';
    }
		if ( $class_attr != '' ) {
			$class_attr = ' class="' . $class_attr . '"';
		}
		$output .= $indent . '<li' . $class_attr . '><a href="' . (get_page_link($page->ID)) . '"' . $class_attr . '>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';
	}
}
