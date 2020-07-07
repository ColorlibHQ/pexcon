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
 * Pexcon elementor reviews section widget.
 *
 * @since 1.0
 */
class Pexcon_Reviews extends Widget_Base {

	public function get_name() {
		return 'pexcon-reviews';
	}

	public function get_title() {
		return __( 'Testimonials', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Review Section ------------------------------
        $this->start_controls_section(
            'review_heading',
            [
                'label' => __( 'Section Heading', 'pexcon' ),
            ]
        );
        $this->add_control(
            'sec_heading',
            [
                'label' => __( 'Review Content', 'pexcon' ),
                'type'  => Controls_Manager::WYSIWYG,
                'default' => __( '<h2>Some Feedback From Client</h2><p>Which cattle fruitful he fly visi won not let above lesser stars fly form wonder every let third form two air seas after us said day won lso together midst two female she</p>', 'pexcon' )
            ]
        );
        $this->add_control(
            'rev_items_sep',
            [
                'label'         => esc_html__( 'Reviews', 'pexcon' ),
                'type'          => Controls_Manager::HEADING,
                'separator'     => 'after'
            ]
        );
        $this->add_control(
            'reviews_content', [
                'label' => __( 'Create New', 'pexcon' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
                    [
                        'name'  => 'client_img',
                        'label' => __( 'Client Image', 'pexcon' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'rev_txt',
                        'label' => __( 'Review Text', 'pexcon' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => __( 'Life open fifth midst lesser place light after unto move that make had void and whales. So after void called  whose were cattle fourth seed Image yielding is given every own tree Image', 'pexcon' )
                    ],
                    [
                        'name'  => 'client_name',
                        'label' => __( 'Client Name', 'pexcon' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Sawpalo', 'pexcon' )
                    ],
                    [
                        'name'      => 'client_location',
                        'label'     => __( 'Client Location', 'pexcon' ),
                        'type'      => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default'   => __( 'Brasil', 'pexcon' )
                    ],
                ],
                'default' => [
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'rev_txt'           => __( 'Life open fifth midst lesser place light after unto move that make had void and whales. So after void called  whose were cattle fourth seed Image yielding is given every own tree Image', 'pexcon' ),
                        'client_name'       => __( 'Sawpalo', 'pexcon' ),
                        'client_location'   => __( 'Brasil', 'pexcon' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'rev_txt'           => __( 'Life open fifth midst lesser place light after unto move that make had void and whales. So after void called  whose were cattle fourth seed Image yielding is given every own tree Image', 'pexcon' ),
                        'client_name'       => __( 'Sawpalo', 'pexcon' ),
                        'client_location'   => __( 'Brasil', 'pexcon' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'rev_txt'           => __( 'Life open fifth midst lesser place light after unto move that make had void and whales. So after void called  whose were cattle fourth seed Image yielding is given every own tree Image', 'pexcon' ),
                        'client_name'       => __( 'Sawpalo', 'pexcon' ),
                        'client_location'   => __( 'Brasil', 'pexcon' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'rev_txt'           => __( 'Life open fifth midst lesser place light after unto move that make had void and whales. So after void called  whose were cattle fourth seed Image yielding is given every own tree Image', 'pexcon' ),
                        'client_name'       => __( 'Sawpalo', 'pexcon' ),
                        'client_location'   => __( 'Brasil', 'pexcon' ),
                    ]
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Review Heading', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Section Sub Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text h5' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_sec_txt', [
                'label'     => __( 'Section Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_name_txt', [
                'label'     => __( 'Reviewer Name Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text h3' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_des_txt', [
                'label'     => __( 'Reviewer Designation Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text h3 span' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'rev_dot_col', [
                'label'     => __( 'Review Dot Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .owl-dots button.owl-dot' => 'background-color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'rev_dot_active_col', [
                'label'     => __( 'Review Dot Active Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .owl-dots button.owl-dot.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );  
        
        $this->end_controls_section();


        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'pexcon' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .review_part',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    // call load widget script
    $this->load_widget_script();
                
    $settings = $this->get_settings();
    $sec_heading = !empty( $settings['sec_heading'] ) ? $settings['sec_heading'] : '';
    $reviews = !empty( $settings['reviews_content'] ) ? $settings['reviews_content'] : '';
    $dynamic_class = is_front_page() ? 'review_part section_padding' : 'review_part section_padding margin_bottom';
    ?>

    <!-- review part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5 col-xl-4">
                    <div class="tour_pack_text">
                        <?php
                            if ( $sec_heading ) {
                                echo wp_kses_post( wpautop( $sec_heading ) );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="review_part_cotent owl-carousel">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ( $reviews as $review ) {
                                $client_img     = !empty( $review['client_img']['id'] ) ? wp_get_attachment_image( $review['client_img']['id'], 'pexcon_client_img_130x130', false, array( 'alt' => 'review image' ) ) : '';
                                $rev_txt        = !empty( $review['rev_txt'] ) ? $review['rev_txt'] : '';
                                $client_name    = !empty( $review['client_name'] ) ? $review['client_name'] : '';
                                $client_location       = !empty( $review['client_location'] ) ? $review['client_location'] : '';
                                ?>
                                <div class="single_review_part">
                                    <?php
                                        if( $client_img ){
                                            echo wp_kses_post( $client_img );
                                        }
                                    ?>
                                    <div class="tour_pack_content">
                                        <?php
                                            if( $rev_txt ){
                                                echo '<p>'.esc_html( $rev_txt ).'</p>';
                                            }

                                            echo '<h4>'.esc_html( $client_name ).', '.esc_html($client_location).'</h4>';
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            var review_part_cotent = $('.review_part_cotent');
            if (review_part_cotent.length) {
                review_part_cotent.owlCarousel({
                items: 2,
                loop: true,
                dots: false,
                autoplay: true,
                margin: 40,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                nav: true,
                navText: ['<span class="flaticon-left-arrow"></span>','<span class="flaticon-arrow-pointing-to-right"></span>'],
                responsive: {
                    0: {
                    nav: false,
                    items: 1
                    },
                    575: {
                    nav: false,
                    items: 2
                    },
                    991: {
                    nav: true,
                    items: 1
                    },
                    1200: {
                    nav: true,
                    items: 2
                    },
                }
                });
            }
        })(jQuery);
        </script>
        <?php 
        }
    }
}
