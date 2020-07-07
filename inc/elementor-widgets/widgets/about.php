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
class Pexcon_About extends Widget_Base {

	public function get_name() {
		return 'pexcon-about';
	}

	public function get_title() {
		return __( 'About', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Section', 'pexcon' ),
			]
        );
        $this->add_control(
            'about_img',
            [
                'label'         => esc_html__( 'Upload Image', 'pexcon' ),
                'type'          => Controls_Manager::MEDIA,
                'show_external' => false,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'About Text', 'pexcon' ),
                'description'   => esc_html__('Use <br> tag for line break', 'pexcon'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Engineering Your Dreams With Us</h2><p>Which cattle fruitful he fly visi won\'t let above lesser stars. Fly form wonder every let third form two air seas after us said day won light also  together midst two female she great to open.</p>', 'pexcon' )
            ]
        );
        $this->end_controls_section(); // End about content


        // Items content
        $this->start_controls_section(
			'items_content_section',
			[
				'label' => __( 'Items Section', 'pexcon' ),
			]
        );
        $this->add_control(
            'items_content', [
                'label' => __( 'Create New', 'pexcon' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_icon',
                        'label'     => __( 'Select Item Icon', 'pexcon' ),
                        'type'      => Controls_Manager::ICON,
                        'default'   => 'fa fa-book',
                        'options'   => pexcon_themify_icon()
                    ],
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Item Title', 'pexcon' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Certified Company', 'pexcon' )
                    ],
                    [
                        'name'  => 'item_txt',
                        'label' => __( 'Item Text', 'pexcon' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'label_block' => true,
                        'default' => __( 'Be man air male shall under create light together grass fly dat also also his brought itself air abundantly', 'pexcon' )
                    ],
                ],
                'default' => [
                    [
                        'item_icon'     => 'fa fa-book',
                        'item_title'     => __( 'Certified Company', 'pexcon' ),
                        'item_txt'       => __( 'Be man air male shall under create light together grass fly dat also also his brought itself air abundantly', 'pexcon' ),
                    ],
                    [
                        'item_icon'     => 'fa fa-briefcase',
                        'item_title'     => __( 'Experience Employee', 'pexcon' ),
                        'item_txt'       => __( 'Be man air male shall under create light together grass fly dat also also his brought itself air abundantly', 'pexcon' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End item content
        

        /**
         * Style Tab
         * ------------------------------ About Settings ------------------------------
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
					'{{WRAPPER}} .about_part .about_part_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text p' => 'color: {{VALUE}};',
				],
			]
		);
		
        $this->end_controls_section();


        // List items Style ==============================
        $this->start_controls_section(
            'list_styles', [
                'label' => __( 'List Items Style', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'icon_color', [
				'label'     => __( 'Icon Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text ul li span' => 'color: {{VALUE}};',
				],
			]
		);
        $this->add_control(
			'title_color', [
				'label'     => __( 'Title Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text ul li h3' => 'color: {{VALUE}};',
				],
			]
		);
        $this->add_control(
			'txt_color', [
				'label'     => __( 'Text Color', 'pexcon' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text ul li p' => 'color: {{VALUE}};',
				],
			]
		);
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Background Overlay', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'pexcon' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part',
            ]
        );
        $this->end_controls_section();


	}

	protected function render() {
        $settings       = $this->get_settings();
        $about_img      = !empty( $settings['about_img']['id'] ) ? wp_get_attachment_image( $settings['about_img']['id'], 'pexcon_about_img_555x634', false, array( 'alt' => 'about left image' ) ) : '';
        $content        = !empty( $settings['content'] ) ? $settings['content'] : '';
        $items_content  = !empty( $settings['items_content'] ) ? $settings['items_content'] : '';
        $dynamic_class  = is_front_page() ? 'about_part section_padding' : 'about_part section_padding';
        ?>

    <!-- about part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <?php
                            if( $about_img ){
                                echo wp_kses_post( $about_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text">
                        <?php
                            if ( $content ) {
                                echo wp_kses_post( wpautop( $content ) );
                            }
                        ?>
                        <ul>
                            <?php
                            if( is_array( $items_content ) && count( $items_content ) > 0 ){
                                foreach ( $items_content as $item ) {
                                    $item_icon    = !empty( $item['item_icon'] ) ? $item['item_icon'] : '';
                                    $item_title   = !empty( $item['item_title'] ) ? $item['item_title'] : '';
                                    $item_txt     = !empty( $item['item_txt'] ) ? $item['item_txt'] : '';
                                    ?>
                                    <li>
                                        <?php
                                            echo '<span class="'.esc_attr( $item_icon ).'"></span>';

                                            echo '<h3>'.esc_html( $item_title ).'</h3>';

                                            echo '<p>'.esc_html( $item_txt ).'</p>';
                                        ?>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
    <?php

    }

}
