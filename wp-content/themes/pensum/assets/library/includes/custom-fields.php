<?php

if ( !class_exists("custom_fields") ) {

	class custom_fields extends collective {

		function __construct() {

			add_filter( 'rwmb_meta_boxes', array( &$this, 'custom_fields' ) );

		}

		function custom_fields( $meta_boxes ) {

			global $post;

			$prefix = 'airvu';

			$meta_boxes[] = array(

				'title'      => __( 'Careers', $prefix ),
				'post_types' => array('careers'),
				'fields'     => array(
					array(
						'name' => __( 'Type', 'rwmb' ),
						'id'   => 'job_type',
						'type' => 'text',
						'desc' => 'eg: Full Time / Part Time'
					),
					array(
						'name' => __( 'Expertise', 'rwmb' ),
						'id'   => 'job_expertise',
						'type' => 'text',
						'desc' => 'eg: Software'
					),
					array(
						'name' => __( 'Location', 'rwmb' ),
						'id'   => 'job_location',
						'type' => 'text',
						'desc' => 'eg: Cayman Islands'
					),
					array(
						'name' => __( 'Position Description', 'rwmb' ),
						'id'   => 'job_position',
						'type' => 'wysiwyg',
					),
					array(
						'name' => __( 'Tasks', 'rwmb' ),
						'id'   => 'job_tasks',
						'type' => 'text',
						'clone' => true,
						'sort_clone' => true
					),
					array(
						'name' => __( 'Your Profile', 'rwmb' ),
						'id'   => 'job_profile',
						'type' => 'text',
						'clone' => true,
						'sort_clone' => true
					),
					array(
						'name' => __( 'We offer', 'rwmb' ),
						'id'   => 'job_we_offer',
						'type' => 'wysiwyg',
					),
				),
			);

			$meta_boxes[] = array(

				'title'      => __( 'Services', $prefix ),
				'post_types' => array('services'),
				'fields'     => array(
					array(
						'name' => __( 'Content Banner', 'rwmb' ),
						'id'   => 'custom_html_banner',
						'type' => 'wysiwyg',
						'desc'	=> 'Custom HTML banner ',
					),
					array(
						'name' => __( 'Image Opacity', 'rwmb' ),
						'id'   => 'image_opacity',
						'type' => 'number',
						'desc'	=> 'Image Opacity',
					),
				),
			);

			$meta_boxes[] = array(

				'title'      => __( 'Featured Home Page', $prefix ),
				'post_types' => array('page','services'),
				'include' => array(
					'relation'        => 'OR',
					'is_child'        => false,
				),
				'fields'     => array(

					array(
						'name' => __( 'Short Description', 'rwmb' ),
						'id'   => 'short_description',
						'type' => 'textarea',
						'limit' => 140,
						'desc'	=> 'Text that will appear on the home page',
					),

					array(
						'name' => __( 'Image', 'rwmb' ),
						'id'   => 'preview_image',
						'type' => 'image_advanced',
						'multiple' => 0,
						'desc'	=> 'Image that will appear on the home page',
					),

				),
			);

			$meta_boxes[] = array(

				'title'      => __( 'Feature / Benefits', 'collective' ),
				'post_types' => array('page','services'),
				'fields'     => array(

	        array(
	            'name' => 'Group', // Optional
	            'id' => 'benefit',
	            'type' => 'group',
	            'clone' => true,
	            'fields' => array(
								array(
									'name' => __( 'Title', 'collective' ),
									'id'   => 'title',
									'type' => 'text'
								),
								array(
									'name' => __( 'Icon', 'collective' ),
									'id'   => 'icon',
									'type' => 'text',
									'desc' => 'available: cost, time'
								),
								array(
									'name' => __( 'SVG', 'collective' ),
									'id'   => 'svg',
									'type' => 'textarea',
									'desc' => 'SVG code'
								),
								array(
									'name' => __( 'Desc', 'collective' ),
									'id'   => 'desc',
									'type' => 'textarea',
									'limit' => 140,
									//'desc'	=> '',
								),
	            ),
	        ),

					array(
						'name' => 'Page Sub Title',
						'id' => 'sub_title',
						'type' => 'text',
					),

				),
			);

	    return $meta_boxes;

		}
	}
}

if ( class_exists("custom_fields") ) {
	$custom_fields = new custom_fields();
}

?>
