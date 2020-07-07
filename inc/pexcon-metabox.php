<?php
function pexcon_portfolio_metabox( $meta_boxes ) {

	$pexcon_prefix = '_pexcon_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'pexcon' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $pexcon_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'pexcon' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $pexcon_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'pexcon' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $pexcon_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'pexcon' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $pexcon_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'pexcon' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $pexcon_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'pexcon' ),
				'placeholder' => esc_html__( 'Project Location', 'pexcon' ),
			),
			array(
				'id'    			=> $pexcon_prefix . 'project_iner_img',
				'type'  			=> 'image_advanced',
				'multiple'			=> true,
				'max_file_uploads'	=> 2,
				'max_file_size'		=> '500kb',
				'image_size'       	=> 'pexcon_project_single_img_750x500',
				'name'  			=> esc_html__( 'Project Iner Image', 'pexcon' ),
				'placeholder' 		=> esc_html__( 'Project Iner Image', 'pexcon' ),
			),
			array(
				'id'    => $pexcon_prefix . 'client_brief',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Client Brief', 'pexcon' ),
				'placeholder' => esc_html__( 'Client Brief', 'pexcon' ),
			),
			array(
				'id'    => $pexcon_prefix . 'working_process',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Working Process', 'pexcon' ),
				'placeholder' => esc_html__( 'Working Process', 'pexcon' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'pexcon_portfolio_metabox' );