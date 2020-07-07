<?php
namespace Pexconelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
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
 * Pexcon elementor section widget.
 *
 * @since 1.0
 */
class Pexcon_Our_Experience extends Widget_Base {

	public function get_name() {
		return 'pexcon-experience';
	}

	public function get_title() {
		return __( 'Our Experience', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-right';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  Our Experience content ------------------------------
		$this->start_controls_section(
			'experience_content',
			[
				'label' => __( 'Our Experience Section', 'pexcon' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'pexcon' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'We Are Experience in Construction', 'pexcon' )
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Our Experience Text', 'pexcon' ),
                'description'   => esc_html__('Use <br> tag for line break', 'pexcon'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( 'Their whose made waters there our, air above first give dry fruit that second whose herb creeping it us light spirit appear mans. So green abundantly She\'d. Greater divide dry bearing years ourends herb upon which open lights had blessed replenish Cattle give his. Abundantly over saying which beast dominion multiply behold to wateo.', 'pexcon' )
            ]
        );
        $this->add_control(
            'exp_years',
            [
                'label'         => esc_html__( 'Years of Experience', 'pexcon' ),
                'type'          => Controls_Manager::NUMBER,
                'label_block'  => true,
                'default'       => __( '20', 'pexcon' )
            ]
        );
        $this->add_control(
            'exp_first_line',
            [
                'label'         => esc_html__( 'Experience First Line', 'pexcon' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'  => true,
                'default'       => __( 'year', 'pexcon' )
            ]
        );
        $this->add_control(
            'exp_sec_line',
            [
                'label'         => esc_html__( 'Experience Second Line', 'pexcon' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'  => true,
                'default'       => __( 'of Experience', 'pexcon' )
            ]
        );
        $this->add_control(
            'experience_img',
            [
                'label'         => esc_html__( 'Upload Image', 'pexcon' ),
                'type'          => Controls_Manager::MEDIA,
                'show_external' => false,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->end_controls_section(); // End experience content
        

        /**
         * Style Tab
         * ------------------------------ Our Experience Settings ------------------------------
         *
         */


        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'sec_title_color', [
				'label'     => __( 'Section Title Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_us_text h5' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'big_title_color', [
				'label'     => __( 'Big Title Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_us_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_us_text p' => 'color: {{VALUE}};',
				],
			]
		);
        $this->end_controls_section();


        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Styles', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2' => 'background-color: {{VALUE}};border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2:hover' => 'background-color: {{VALUE}};border-color: {{VALUE}} !important;',
                ],
            ]
        );
        
            
        $this->add_control(
            'btn_hover_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text .btn_2:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {
        $settings           = $this->get_settings();
        $sec_title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $content            = !empty( $settings['content'] ) ? $settings['content'] : '';
        $exp_years          = !empty( $settings['exp_years'] ) ? $settings['exp_years'] : '';
        $exp_first_line     = !empty( $settings['exp_first_line'] ) ? $settings['exp_first_line'] : '';
        $exp_sec_line       = !empty( $settings['exp_sec_line'] ) ? $settings['exp_sec_line'] : '';
        $experience_img     = !empty( $settings['experience_img']['id'] ) ? wp_get_attachment_image( $settings['experience_img']['id'], 'pexcon_about_img_555x634', false, array( 'alt' => 'our experience image' ) ) : '';
        $dynamic_class      = is_front_page() ? 'about_part experiance_part section_padding' : 'about_part experiance_part section_padding single_experiance_section';
        ?>

    <!-- about part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_text">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <?php echo wp_kses_post( wpautop($content) )?>
                        <div class="about_text_iner">
                            <div class="about_text_counter">
                                <h2><?php echo esc_html( $exp_years )?></h2>
                            </div>
                            <div class="about_iner_content">
                                <h3><?php echo esc_html( $exp_first_line )?> <span><?php echo esc_html( $exp_sec_line )?></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <?php
                            if( $experience_img ){
                                echo wp_kses_post( $experience_img );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
    <?php

    }

}
