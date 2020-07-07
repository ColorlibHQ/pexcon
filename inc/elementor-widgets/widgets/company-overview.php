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
 * Pexcon elementor Company Overview section widget.
 *
 * @since 1.0
 */
class Pexcon_Company_Overview extends Widget_Base {

	public function get_name() {
		return 'pexcon-company-overview';
	}

	public function get_title() {
		return __( 'Company Overview', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-counter-circle';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Company Overview content ------------------------------

        // Company overview contents
        $this->start_controls_section(
			'overview_item',
			[
				'label' => __( 'Overview Contents', 'pexcon' ),
			]
        );

        $this->add_control(
            'items_content', [
                'label' => __( 'Create New', 'pexcon' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ count_val }}}',
                'fields' => [
                    [
                        'name'  => 'item_icon',
                        'label'     => __( 'Select Item Icon', 'pexcon' ),
                        'type'      => Controls_Manager::ICON,
                        'default'   => 'fa fa-book',
                        'options'   => pexcon_themify_icon()
                    ],
                    [
                        'name'  => 'count_val',
                        'label' => __( 'Counter Value', 'pexcon' ),
                        'type'  => Controls_Manager::NUMBER,
                        'label_block' => true,
                        'default' => __( '60', 'pexcon' )
                    ],
                    [
                        'name'  => 'first_line',
                        'label' => __( 'First Word', 'pexcon' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Satisfied', 'pexcon' )
                    ],
                    [
                        'name'  => 'sec_line',
                        'label' => __( 'Second Line', 'pexcon' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Clients', 'pexcon' )
                    ],
                ],
                'default' => [
                    [
                        'item_icon'     => 'fa fa-book',
                        'count_val'     => __( '60', 'pexcon' ),
                        'first_line'    => __( 'Satisfied', 'pexcon' ),
                        'sec_line'      => __( 'Clients', 'pexcon' ),
                    ],
                    [
                        'item_icon'     => 'fa fa-book',
                        'count_val'     => __( '30', 'pexcon' ),
                        'first_line'    => __( 'Worldwide', 'pexcon' ),
                        'sec_line'      => __( 'Branches', 'pexcon' ),
                    ],
                    [
                        'item_icon'     => 'fa fa-book',
                        'count_val'     => __( '90', 'pexcon' ),
                        'first_line'    => __( 'Total', 'pexcon' ),
                        'sec_line'      => __( 'Projects', 'pexcon' ),
                    ],
                    [
                        'item_icon'     => 'fa fa-book',
                        'count_val'     => __( '80', 'pexcon' ),
                        'first_line'    => __( 'Work', 'pexcon' ),
                        'sec_line'      => __( 'Finished', 'pexcon' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Company Overview content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Service Color Settings', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Sub Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .section_tittle p' => 'color: {{VALUE}};',
                ],
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
                'label'     => __( 'Service Styles', 'pexcon' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
 
        $this->add_control(
            'serv_txt_bg_color', [
                'label'     => __( 'Service Text Holder BG Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_icon_color', [
                'label'     => __( 'Service Icon Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_title_color', [
                'label'     => __( 'Service Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text h4' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_txt_color', [
                'label'     => __( 'Service Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_anc_color', [
                'label'     => __( 'Service Anchor Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1:before' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_txt_hov_color', [
                'label'     => __( 'Service Text Hover Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1:hover' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1:hover:before' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_offer_text .btn_1:hover:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 

        $this->end_controls_section();

	}

	protected function render() {
    $settings        = $this->get_settings();    
    
    // call load widget script
    $this->load_widget_script();

    $items_content = !empty( $settings['items_content'] ) ? $settings['items_content'] : '';
    $dynamic_class = is_front_page() ? 'our_service padding_bottom' : 'our_service padding_top';

    function pexcon_get_single_overview_item( $item_icon, $count_val, $first_line, $sec_line ) { ?>
        <div class="col-lg-3 col-sm-6">
            <div class="single_counter_icon">
                <?php
                    echo '<span class="'.esc_attr( $item_icon ).'"></span>';
                ?>
            </div>
            <div class="single_member_counter">
                <?php
                    echo '<span class="counter">'.esc_html( $count_val ).'</span>';

                    echo '<h4> <span>'.esc_html( $first_line ).'</span> '.esc_html( $sec_line ).'</h4>';
                ?>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- company overview counter start -->
    <section class="member_counter padding_bottom">
        <div class="container">
            <div class="row">
                <?php
                if( is_array( $items_content ) && count( $items_content ) > 0 ){
                    foreach ( $items_content as $item ) {
                        $item_icon    = !empty( $item['item_icon'] ) ? $item['item_icon'] : '';
                        $count_val   = !empty( $item['count_val'] ) ? $item['count_val'] : '';
                        $first_line     = !empty( $item['first_line'] ) ? $item['first_line'] : '';
                        $sec_line     = !empty( $item['sec_line'] ) ? $item['sec_line'] : '';
                        
                        pexcon_get_single_overview_item( $item_icon, $count_val, $first_line, $sec_line );
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- company overview counter end -->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('.counter').counterUp({
                time: 2000
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
}
