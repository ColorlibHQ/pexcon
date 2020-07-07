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
 * Pexcon elementor few words section widget.
 *
 * @since 1.0
 */

class Pexcon_Blog extends Widget_Base {

	public function get_name() {
		return 'pexcon-blog';
	}

	public function get_title() {
		return __( 'Blog', 'pexcon' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'pexcon-elements' ];
    }
    
    public function pexcon_featured_post_cat(){
        $post_cat_array = [];
        $cat_args = [
            'orderby' => 'name',
            'order'   => 'ASC'
        ];
        $categories = get_categories($cat_args);
        foreach($categories as $category) {
            $args = array(
                'showposts' => 2,
                'category_name' => $category->slug,
                'ignore_sticky_posts'=> 1
            );
            $posts = get_posts($args);
            if ($posts) {
                $post_cat_array[ $category->slug ] = $category->name;
            } else {
                return __( 'Select a different category, because this category have not enough posts.', 'pexcon' );
            }
        }
    
        return $post_cat_array;

             
    }

	protected function _register_controls() {

        // Section Heading
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
                'label_block'   => true,
                'default'       => __( 'Recent news', 'pexcon' )
            ]
        );
        $this->end_controls_section(); 


        // Blog post settings
        $this->start_controls_section(
            'blog_post_sec',
            [
                'label' => __( 'Blog Post Settings', 'pexcon' ),
            ]
        );
        $this->add_control(
            'post_cat',
            [
                'label'         => esc_html__( 'Select Category', 'pexcon' ),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'engineering',
                'description'   => esc_html__( 'Please use the featured images size 1159px width & 811px height or more for better look.', 'pexcon' ),
                'options'       => $this->pexcon_featured_post_cat()
            ]
        );
		$this->add_control(
			'post_num',
			[
				'label'         => esc_html__( 'Post Item', 'pexcon' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => false,
                'default'       => absint(3),
                'min'           => 1,
                'max'           => 6,
			]
		);
		$this->add_control(
			'post_order',
			[
				'label'         => esc_html__( 'Post Order', 'pexcon' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'ASC',
				'label_off'     => 'DESC',
                'default'       => 'yes',
                'options'       => [
                    'no'        => 'ASC',
                    'yes'       => 'DESC'
                ]
			]
		);

        $this->end_controls_section(); // End few words content


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Styles Blog Post Section', 'pexcon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .catagory_post .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_sub_title', [
                'label'     => __( 'Section Sub Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .catagory_post .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );  

        $this->add_control(
            'blog_color_sep',
            [
                'label'     => __( 'Blog Color Settings', 'pexcon' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'blog_meta_col', [
                'label'     => __( 'Blog Meta Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .catagory_post .single_catagory_post .post_text_1 h5' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'blog_title_col', [
                'label'     => __( 'Blog Title Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .catagory_post .single_catagory_post .post_text_1 h3' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'blog_txt_col', [
                'label'     => __( 'Blog Text Color', 'pexcon' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .catagory_post .single_catagory_post .post_text_1' => 'color: {{VALUE}};',
                ],
            ]
        );  

        $this->end_controls_section();

	}

	protected function render() {

    $settings  = $this->get_settings();
    $sec_heading = !empty( $settings['sec_heading'] ) ? $settings['sec_heading'] : '';
    $post_num   = !empty( $settings['post_num'] ) ? $settings['post_num'] : '';
    $post_cat   = !empty( $settings['post_cat'] ) ? $settings['post_cat'] : '';
    $post_order = !empty( $settings['post_order'] ) ? $settings['post_order'] : '';
    $post_order = $post_order == 'yes' ? 'DESC' : 'ASC';
    ?>

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-xl-5">
                    <div class="section_tittle ">
                        <h2><?php echo esc_html( $sec_heading )?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if( function_exists( 'pexcon_latest_blog' ) ) {
                        pexcon_latest_blog( $post_num, $post_cat, $post_order );
                    }
                ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    <?php
	}
}
