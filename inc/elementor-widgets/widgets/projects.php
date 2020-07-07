<?php
namespace Pexconelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * elementor projects section widget.
 *
 * @since 1.0
 */
class Pexcon_Projects extends Widget_Base {

	public function get_name() {
		return 'pexcon-projects';
	}

	public function get_title() {
		return __( 'Our Projects', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {

        $this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'pexcon' ),
			]
        );
        
        $this->add_control(
            'sec_heading',
            [
                'label'         => esc_html__( 'Heading Text', 'pexcon' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => __( 'Our Projects', 'pexcon' )
            ]
        );
		$this->end_controls_section(); 


        // ----------------------------------------  Projects Content ------------------------------
        $this->start_controls_section(
            'menu_tab_sec',
            [
                'label' => __( 'Projects', 'pexcon' ),
            ]
        );
		$this->add_control(
			'portfolio_number', [
				'label'         => esc_html__( 'Project Number', 'pexcon' ),
				'type'          => Controls_Manager::NUMBER,
				'max'           => 9,
				'min'           => 1,
				'step'          => 1,
				'default'       => 3

			]
		);

        $this->end_controls_section(); // End projects content

        //------------------------------ Color Settings ------------------------------
        $this->start_controls_section(
            'color_settings', [
                'label' => __( 'Color Settings', 'pexcon' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_big_title_color', [
                'label'     => __( 'Section Big Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'proj_styles_sep',
            [
                'label'     => __( 'Project Styles', 'pexcon' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'project_cat_color', [
                'label'     => __( 'Project Category text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .portfolio-filter ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'project_cat_act_color', [
                'label'     => __( 'Project Category active text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .portfolio-filter ul li.active' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'project_hov_bg_color', [
                'label'     => __( 'Project hover BG Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .single_gallery_item .single_gallery_item_iner:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'project_hov_sub_color', [
                'label'     => __( 'Project hober Sub Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .single_gallery_item .single_gallery_item_iner p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'project_hov_title_color', [
                'label'     => __( 'Project hober title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_part .single_gallery_item .single_gallery_item_iner h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        
    // call load widget script
    $this->load_widget_script();

    $settings       = $this->get_settings();
    $sec_heading    = !empty( $settings['sec_heading'] ) ? $settings['sec_heading'] : '';
    $pNumber        = $settings['portfolio_number'];
    ?>

    <!-- our_project part start-->
    <section class="our_project section_padding" id="portfolio">
        <div class="container">
            <?php
                //Load Portfolios ==============
                pexcon_portfolio_section( $sec_heading, $pNumber );
            ?>
        </div>
    </section>
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $(window).on('load', function() {
                if (document.getElementById('portfolio')) {
                    var $workGrid = $('.portfolio-grid').isotope({
                        itemSelector: '.all',
                    });
                }
            
                $('.portfolio-filter ul li').on('click', function() {
                    $('.portfolio-filter ul li').removeClass('active');
                    $(this).addClass('active');
                
                    var data = $(this).attr('data-filter');
                    $workGrid.isotope({
                        filter: data
                    });
                });
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
}
