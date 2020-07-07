<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pexcon
 */

get_header();
$project_start_time   = pexcon_meta( 'project_start_time' );
$project_start_date   = pexcon_meta( 'project_start_date' );
$project_end_time     = pexcon_meta( 'project_end_time' );
$project_end_date     = pexcon_meta( 'project_end_date' );
$project_location     = pexcon_meta( 'project_location' );
$project_iner_imgs    = pexcon_meta( 'project_iner_img', false );
$client_brief         = pexcon_meta( 'client_brief' );
$working_process      = pexcon_meta( 'working_process' );
?>

    <!-- project_details part start -->
    <section class="project_details section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                if( have_posts() ) {
                    while( have_posts() ) : the_post();
                ?>
                <div class="col-lg-8 col-md-8">
                    <div class="project_details_img">
                        <?php
                            // Post Navigation 
                            echo pexcon_get_project_iner_imgs( $project_iner_imgs );

                            // Post Navigation
                            pexcon_blog_single_post_navigation();
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="project_details_content">
                        <h3><?php the_title()?></h3>
                        <?php the_content()?>
                    </div>
                    <div class="project_details_widget">
                        <div class="single_project_details_widget">
                            <span class="ti-time"></span>
                            <?php
                                echo '<h5>'. esc_html__( 'Start Time', 'pexcon' ) . '</h5>';
                                
                                if( !empty( $project_start_time ) ){
                                    echo '<p>'. esc_html( $project_start_time ) . '</p>';
                                }
                                
                                if( !empty( $project_start_date ) ){
                                    echo '<h6>'. esc_html( $project_start_date ) . '</h6>';
                                }
                            ?>
                        </div>
                        <div class="single_project_details_widget">
                            <span class="ti-check-box"></span>
                            <?php
                                echo '<h5>'. esc_html__( 'Finish Time', 'pexcon' ) . '</h5>';
                                
                                if( !empty( $project_end_time ) ){
                                    echo '<p>'. esc_html( $project_end_time ) . '</p>';
                                }
                                
                                if( !empty( $project_end_date ) ){
                                    echo '<h6>'. esc_html( $project_end_date ) . '</h6>';
                                }
                            ?>
                        </div>
                        <div class="single_project_details_widget">
                            <span class="ti-location-pin"></span>
                            <?php
                                echo '<h5>'. esc_html__( 'Project Location', 'pexcon' ) . '</h5>';
                                
                                if( !empty( $project_location ) ){
                                    echo '<p>'. esc_html( $project_location ) . '</p>';
                                }
                            ?>
                        </div>

                        <?php
                            if( !empty( $client_brief ) ){
                                echo '<h4>'. esc_html__( 'Project Description', 'pexcon' ) . '</h4>';
                                
                                echo '<p>'. esc_html( $client_brief ) . '</p>';
                            }

                            if( !empty( $working_process ) ){
                                echo '<h4>'. esc_html__( 'Working Process', 'pexcon' ) . '</h4>';

                                echo '<p>'. esc_html( $working_process ) . '</p>';
                            }
                        ?>
                    </div>
                </div>
                <?php
                    endwhile;
                }
            ?>
            </div>
        </div>
    </section>
    <!-- project_details part end -->

    <?php

// Footer============
get_footer();