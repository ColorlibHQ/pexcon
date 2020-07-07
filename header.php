<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php 
            echo pexcon_site_icon();
            wp_head(); 
        ?>
    </head>
    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            echo pexcon_theme_logo( 'navbar-brand' );
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            if(has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'menu'           => 'primary-menu',
                                    'theme_location' => 'primary-menu',
                                    'menu_id'        => 'menu-main-menu',
                                    'container_class'=> 'collapse navbar-collapse main-menu-item justify-content-end',
                                    'container_id'   => 'navbarSupportedContent',
                                    'menu_class'     => 'navbar-nav align-items-center',
                                    'walker'         => new pexcon_bootstrap_navwalker,
                                    'depth'          => 3
                                ));
                            }

                            // Header Button
                            if( pexcon_opt( 'pexcon_header_btn' ) == 1 ){
                                $btn_lbl = !empty( pexcon_opt( 'header_btn_label' ) ) ? pexcon_opt( 'header_btn_label' ) : '';
                                $btn_url = !empty( pexcon_opt( 'booking_btn_url' ) ) ? pexcon_opt( 'booking_btn_url' ) : '';
                                ?>
                                <div class="d-none d-lg-block">
                                    <a class="btn_1" href="<?php echo esc_url($btn_url)?>"><?php echo esc_html($btn_lbl)?></a>
                                </div>
                                <?php 
                            } 
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'pexcon_page_titlebar' ) ){
	    pexcon_page_titlebar();
    }

