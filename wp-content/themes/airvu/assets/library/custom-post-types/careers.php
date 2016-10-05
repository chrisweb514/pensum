<?php
class collective_careers extends collective {

	function __construct() {
		add_action( 'init', array(&$this, 'career_custom_type') );
		add_filter('fg_post_types', array(&$this, 'add_featured_galleries_to_ctp') );
	}

	function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'careers'); // ($post_types comes in as array('post','page'). If you don't want FGs on those, you can just return a custom array instead of adding to it. )
    return $post_types;
	}

	function career_custom_type() {
		$labels = array(
				'name'                => _x( 'Jobs', 'Post Type General Name', 'collective' ),
				'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'collective' ),
				'menu_name'           => __( 'Careers', 'collective' ),
				'parent_item_colon'   => __( 'Job Parent:', 'collective' ),
				'all_items'           => __( 'All the Jobs', 'collective' ),
				'view_item'           => __( 'See the Job', 'collective' ),
				'add_new_item'        => __( 'Add a new Job', 'collective' ),
				'add_new'             => __( 'New Job', 'collective' ),
				'edit_item'           => __( 'Edit the Job', 'collective' ),
				'update_item'         => __( 'Update the Job', 'collective' ),
				'search_items'        => __( 'Find the Job', 'collective' ),
				'not_found'           => __( 'No job found', 'collective' ),
				'not_found_in_trash'  => __( 'No job found in the trash', 'collective' ),
			);

			$rewrite = array(
				'slug'                => 'careers',
				'with_front'          => false,
				'pages'               => true,
				'feeds'               => true,
			);

			$args = array(
				'label'               => __( 'Job', 'collective' ),
				'description'         => __( 'Job', 'collective' ),
				'labels'              => $labels,
				'supports'            => array(
					'title',
					//'editor',
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
				'menu_icon'           => 'dashicons-clipboard',
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'rewrite'             => $rewrite,
				'capability_type'     => 'post',
				//'taxonomies' => array('post_tag')
			);
			register_post_type( 'careers', $args );
	}

}

if ( class_exists("collective_careers") ) {
	$career_post_type = new collective_careers();
}
