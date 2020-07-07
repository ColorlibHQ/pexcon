<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'PEXCON_DIR_URI' ) )
		define( 'PEXCON_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'PEXCON_DIR_ASSETS_URI' ) )
		define( 'PEXCON_DIR_ASSETS_URI', PEXCON_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'PEXCON_DIR_CSS_URI' ) )
		define( 'PEXCON_DIR_CSS_URI', PEXCON_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'PEXCON_DIR_JS_URI' ) )
		define( 'PEXCON_DIR_JS_URI', PEXCON_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('PEXCON_DIR_ICON_IMG_URI') )
		define( 'PEXCON_DIR_ICON_IMG_URI', PEXCON_DIR_ASSETS_URI.'img/icons/' );
	
	//DIR inc
	if( !defined( 'PEXCON_DIR_INC' ) )
		define( 'PEXCON_DIR_INC', PEXCON_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'PEXCON_DIR_ELEMENTOR' ) )
		define( 'PEXCON_DIR_ELEMENTOR', PEXCON_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'PEXCON_DIR_PATH' ) )
		define( 'PEXCON_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'PEXCON_DIR_PATH_INC' ) )
		define( 'PEXCON_DIR_PATH_INC', PEXCON_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'PEXCON_DIR_PATH_LIB' ) )
		define( 'PEXCON_DIR_PATH_LIB', PEXCON_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'PEXCON_DIR_PATH_CLASSES' ) )
		define( 'PEXCON_DIR_PATH_CLASSES', PEXCON_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'PEXCON_DIR_PATH_WIDGET' ) )
		define( 'PEXCON_DIR_PATH_WIDGET', PEXCON_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'PEXCON_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'PEXCON_DIR_PATH_ELEMENTOR_WIDGETS', PEXCON_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( PEXCON_DIR_PATH_INC . 'pexcon-breadcrumbs.php' );
	// Sidebar register file include
	require_once( PEXCON_DIR_PATH_INC . 'widgets/pexcon-widgets-reg.php' );
	// Post widget file include
	require_once( PEXCON_DIR_PATH_INC . 'widgets/pexcon-recent-post-thumb.php' );
	// News letter widget file include
	require_once( PEXCON_DIR_PATH_INC . 'widgets/pexcon-newsletter-widget.php' );
	//Social Links
	require_once( PEXCON_DIR_PATH_INC . 'widgets/pexcon-social-links.php' );
	// Instagram Widget
	require_once( PEXCON_DIR_PATH_INC . 'widgets/pexcon-instagram.php' );
	// Nav walker file include
	require_once( PEXCON_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( PEXCON_DIR_PATH_INC . 'pexcon-functions.php' );

	// Theme Demo file include
	require_once( PEXCON_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( PEXCON_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( PEXCON_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( PEXCON_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( PEXCON_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( PEXCON_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( PEXCON_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( PEXCON_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( PEXCON_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( PEXCON_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class pexcon dashboard
	require_once( PEXCON_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( PEXCON_DIR_PATH_INC . 'pexcon-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( PEXCON_DIR_PATH_INC . 'pexcon-metabox.php' );
	}


	// Admin Enqueue Script
	function pexcon_admin_script(){
		wp_enqueue_style( 'pexcon-admin', get_template_directory_uri().'/assets/css/pexcon_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'pexcon_admin', get_template_directory_uri().'/assets/js/pexcon_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'pexcon_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Pexcon object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Pexcon Dashboard .
	 *
	 */
	
	$Pexcon = new Pexcon();
	
