<?php
namespace Pexconelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Pexcon elementor Team Member section widget.
 *
 * @since 1.0
 */
class Pexcon_Services extends Widget_Base {

	public function get_name() {
		return 'pexcon-services';
	}

	public function get_title() {
		return __( 'Services', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Services content ------------------------------
        $this->start_controls_section(
			'services_sec_head',
			[
				'label' => __( 'Service Section Heading', 'pexcon' ),
			]
        );

        $this->add_control(
            'section_heading',
            [
                'label'         => esc_html__( 'Section Heading', 'pexcon' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'our services', 'pexcon' )
            ]
        );

        $this->end_controls_section(); // End Services content

        // First service contents
        $this->start_controls_section(
			'services_item',
			[
				'label' => __( 'Services Contents', 'pexcon' ),
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
                        'default' => __( 'Better Future', 'pexcon' )
                    ],
                    [
                        'name'  => 'item_txt',
                        'label' => __( 'Item Text', 'pexcon' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'label_block' => true,
                        'default' => __( 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male', 'pexcon' )
                    ],
                    [
                        'name'  => 'btn_label',
                        'label' => __( 'Button Label', 'pexcon' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'read more', 'pexcon' )
                    ],
                    [
                        'name'  => 'btn_url',
                        'label' => __( 'Button URL', 'pexcon' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ],
                ],
                'default' => [
                    [
                        'item_icon'     => 'fa fa-book',
                        'item_title'     => __( 'Good Future', 'pexcon' ),
                        'item_txt'       => __( 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male', 'pexcon' ),
                        'btn_label'      => 'read more',
                        'btn_url'        => '#',
                    ],
                    [
                        'item_icon'     => 'fa fa-book',
                        'item_title'     => __( 'Qualified Trainers', 'pexcon' ),
                        'item_txt'       => __( 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male', 'pexcon' ),
                        'btn_label'      => 'read more',
                        'btn_url'        => '#',
                    ],
                    [
                        'item_icon'     => 'fa fa-book',
                        'item_title'     => __( 'Job Oppurtunity', 'pexcon' ),
                        'item_txt'       => __( 'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male', 'pexcon' ),
                        'btn_label'      => 'read more',
                        'btn_url'        => '#',
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Services content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'serv_color_sett', [
                'label' => __( 'Service Color Settings', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'title_color', [
                'label'     => __( 'Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'serv_styles_separator',
            [
                'label'     => __( 'Single Service Styles', 'pexcon' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
 
        $this->add_control(
            'single_serv_icon_color', [
                'label'     => __( 'Icon Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_title_color', [
                'label'     => __( 'Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service h4' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_txt_color', [
                'label'     => __( 'Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_btn_style_sep',
            [
                'label'     => __( 'Anchor Text Styles', 'pexcon' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'single_serv_btn_color', [
                'label'     => __( 'Anchor Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service .btn_3' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_btn_hvr_color', [
                'label'     => __( 'Anchor Text Hover Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service .btn_3:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_service .btn_3:hover:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

	}

	protected function render() {
    $settings        = $this->get_settings();
    $section_heading = !empty( $settings['section_heading'] ) ? $settings['section_heading'] : '';
    $items_content   = !empty( $settings['items_content'] ) ? $settings['items_content'] : '';
    $dynamic_class   = is_front_page() ? 'our_service padding_top' : 'our_service section_padding single_page_services';

    function pexcon_get_single_service_item( $item_icon, $item_title, $item_txt, $btn_label, $btn_url ) { ?>
        <div class="col-sm-6 col-xl-4">
            <div class="single_feature">
                <div class="single_service">
                    <?php
                        echo '<span class="'.esc_attr( $item_icon ).'"></span>';

                        echo '<h4>'.esc_html( $item_title ).'</h4>';

                        echo '<p>'.esc_html( $item_txt ).'</p>';

                        echo '<a href="'.esc_url( $btn_url ).'" class="btn_3">'.esc_html( $btn_label ).'</a>';
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- our_service start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2><?php echo esc_html( $section_heading );?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $items_content ) && count( $items_content ) > 0 ){
                    foreach ( $items_content as $item ) {
                        $item_icon    = !empty( $item['item_icon'] ) ? $item['item_icon'] : '';
                        $item_title   = !empty( $item['item_title'] ) ? $item['item_title'] : '';
                        $item_txt     = !empty( $item['item_txt'] ) ? $item['item_txt'] : '';
                        $btn_label    = !empty( $item['btn_label'] ) ? $item['btn_label'] : '';
                        $btn_url      = !empty( $item['btn_url']['url'] ) ? $item['btn_url']['url'] : '';
                        
                        pexcon_get_single_service_item( $item_icon, $item_title, $item_txt, $btn_label, $btn_url );
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    }
}
