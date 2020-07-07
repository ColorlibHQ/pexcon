<?php 
/**
 * @Packge     : Pexcon
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

// demo import file
function pexcon_import_files() {
	
	$demoImg = '<img src="'. PEXCON_DIR_INC . 'demo/screen-image.jpg' .' " alt="'.esc_attr__( 'Demo Preview Imgae', 'pexcon' ).'" />';
	
  return array(
    array(
      'import_file_name'             => 'Pexcon Demo',
      'local_import_file'            => PEXCON_DIR_PATH_INC .'demo/pexcon-demo.xml',
      'local_import_widget_file'     => PEXCON_DIR_PATH_INC .'demo/pexcon-widgets.wie',
      'import_customizer_file_url'   => PEXCON_DIR_INC . 'demo/pexcon-customizer.dat',
      'import_notice' => $demoImg,
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'pexcon_import_files' );
	
// demo import setup
function pexcon_after_import_setup() {
	// Assign menus to their locations.
    $main_menu    	  = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$best_services    = get_term_by( 'name', 'Best Services', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary-menu' => $main_menu->term_id,
            'best-services' => $best_services->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Homepage' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'pexcon_demodata_import', 'yes' );

}
add_action( 'pt-ocdi/after_import', 'pexcon_after_import_setup' );

//disable the branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//change the location, title and other parameters of the plugin page
function pexcon_import_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'pexcon' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'pexcon' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'pexcon-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'pexcon_import_plugin_page_setup' );

// Enqueue scripts
function pexcon_demo_import_custom_scripts(){
	
	
	if( isset( $_GET['page'] ) && $_GET['page'] == 'pexcon-demo-import' ){
		// style
		wp_enqueue_style( 'pexcon-demo-import', PEXCON_DIR_INC . 'demo/css/demo-import.css', array(), '1.0', false );
	}
	
	
}
add_action( 'admin_enqueue_scripts', 'pexcon_demo_import_custom_scripts' );



?>