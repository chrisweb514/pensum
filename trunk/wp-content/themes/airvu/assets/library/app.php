<?php

if ( !class_exists("collective") ) {

	class collective {

		function __construct() {

			require_once( 'classes/minify-html.php' );
			require_once( 'custom-post-types/services.php' );
			require_once( 'custom-post-types/careers.php' );
			require_once( 'includes/custom-fields.php' );

			add_action( 'wp_print_scripts' , array(&$this, 'print_js') );

		}

		function print_js() {
			$output = '<script type="text/javascript">';
			$output .= 'var ajaxurl = "' .admin_url( 'admin-ajax.php' ). '";';
			$output .= '</script>';

			echo $output;
		}

		function get_jobs($post_id = 0, $args=array()){

			return get_posts(
				array_merge(
					array(
						'posts_per_page'  => -1,
						'orderby' 				=> 'menu_order',
						'order' 					=> 'ASC',
						'post_type'       => 'careers',
					),
					$args
				)
			);

		}

		function get_services($post_id = 0, $args=array()){

			return get_posts(
				array_merge(
					array(
						'posts_per_page'  => -1,
						'post_parent' 		=> $post_id,
						'orderby' 				=> 'menu_order',
						'order' 					=> 'ASC',
						'post_type'       => 'services',
					),
					$args
				)
			);

		}

		function get_benefits($post_id = 0){
			return get_post_meta($post_id, 'benefit', true);
		}

		function is_production(){
			return WP_ENV == 'production' ? true : false;
		}


		function get_hero_banner($post, $og_id = 0){

			// Headers are only for pages
			//if(get_post_type($post->ID) != 'page') return array();

			$meta_query_args = array(
				'post_type'				=> 'hero',
				'posts_per_page' 	=> 1,
				'orderby'    			=> 'meta_value_num',
				'order'      			=> 'ASC',
				'meta_query' 			=> array(
					array(
						'key'     => '_wpcf_belongs_'.get_post_type($post->ID).'_id',
						'value'   => $post->ID,
						'compare' => '='
					)
				)
			);

			$meta_query = get_posts( $meta_query_args );

			// Check if slider is found, othrwise check parent
			if(!count($meta_query) && $post->post_parent){

				return ( self::get_hero_banner( get_post( ($post->post_parent) ), $post->ID ));

			} elseif(count($meta_query)) {

				$slide_post = array_shift($meta_query);

				$slide = array(
					'ID'				=> $og_id ? $og_id : $slide_post->ID,
					'title'			=> $og_id ? get_the_title($og_id) : $slide_post->post_title,
					'subtitle'	=> $og_id ? '' : get_post_meta( $slide_post->ID, 'wpcf-subtitle', true),
					'image'			=> get_post_meta( $slide_post->ID, 'wpcf-image', true),
		      'video'     => get_post_meta( $slide_post->ID, 'wpcf-video', true ),
					'play-video' 	=> get_post_meta( $slide_post->ID, 'wpcf-play-video', true ),
					'opacity'     => get_post_meta( $slide_post->ID, 'wpcf-opacity', true),
				);

				$video = get_post_meta($slide_post->ID, 'wpcf-youtube', true);

				if( $video ){
					parse_str( parse_url( $video, PHP_URL_QUERY ), $video );
					$slide['video'] = $video['v'];
		      //$slide['preview'] = get_template_directory_uri() . '/timthumb.php?src=' . get_post_meta($slide_post->ID, 'wpcf-image', true) . '&w=2000';
				}

				$slides[] = $slide;
				return $slides;

			}

			return array();

		}

	}
}

if ( class_exists("collective") ) {
	$collective = new collective();
}

?>
