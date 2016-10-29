<?php
class collective_services extends collective {

	function __construct() {
		add_action( 'init', array(&$this, 'service_custom_type') );
		add_filter('fg_post_types', array(&$this, 'add_featured_galleries_to_ctp') );
	}

	function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'services'); // ($post_types comes in as array('post','page'). If you don't want FGs on those, you can just return a custom array instead of adding to it. )
    return $post_types;
	}

	function service_custom_type() {
		$labels = array(
				'name'                => _x( 'Service', 'Post Type General Name', 'collective' ),
				'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'collective' ),
				'menu_name'           => __( 'Services', 'collective' ),
				'parent_item_colon'   => __( 'Service Parent:', 'collective' ),
				'all_items'           => __( 'All the services', 'collective' ),
				'view_item'           => __( 'See the service', 'collective' ),
				'add_new_item'        => __( 'Add a new service', 'collective' ),
				'add_new'             => __( 'New service', 'collective' ),
				'edit_item'           => __( 'Edit the service', 'collective' ),
				'update_item'         => __( 'Update the service', 'collective' ),
				'search_items'        => __( 'Find the service', 'collective' ),
				'not_found'           => __( 'No service found', 'collective' ),
				'not_found_in_trash'  => __( 'No service found in the trash', 'collective' ),
			);

			$rewrite = array(
				'slug'                => 'services',
				'with_front'          => false,
				'pages'               => true,
				'feeds'               => true,
			);

			$args = array(
				'label'               => __( 'services', 'collective' ),
				'description'         => __( 'Services', 'collective' ),
				'labels'              => $labels,
				'supports'            => array(
					'title',
					'editor',
					'page-attributes',
					'thumbnail'
				),
				'hierarchical'        => true,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				//'menu_position'       => 5,
				'menu_icon'           => 'dashicons-sos',
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'rewrite'             => $rewrite,
				'capability_type'     => 'post',
				//'taxonomies' => array('post_tag')
			);
			register_post_type( 'services', $args );
	}

}

if ( class_exists("collective_services") ) {
	$service_post_type = new collective_services();
}
