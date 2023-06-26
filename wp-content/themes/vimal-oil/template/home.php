<?php

/* Template Name: Home Template */
?>
<?php echo get_header();?>
    <!--module-2 hero banner html code  -->
    <div class="hero-banner default-section blue-bg-banner">
        <div class="back-pattern">
            <div class="container-fluid">
                <div class="banner-slider owl-carousel owl-theme">
                    <?php 
                        if (have_rows('benner')) {
                            while (have_rows('benner')) {
                                the_row();?>
                                <div class="item">
                                    <div class="banner-info">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="banner-right">
                                                    <div class="h1-title">
                                                        <h1 class="text-noeffect"><?php the_sub_field('benner_title') ?> <span><?php the_sub_field('benner_sub_title');?></span></h1>
                                                    </div>
                                                </div>
                                                <div class="hash-sec">
                                                    <span><?php the_sub_field('benner_hash_section');?></span>
                                                </div>
                                                <div class="submit-button text-center">
                                                    <a href="<?php the_sub_field('benner_button_url');?>" class="btn-effect"><?php echo the_sub_field('banner_buttuon_name'); ?></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="banner-left">
                                                    <img src="<?php the_sub_field('banner_image'); ?>" alt="kiara-banner" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }
                    ?>
                </div>
            </div> 
        </div>
    </div>
    <!-- module-3 health section -->
    <?php get_template_part('template-part/health-section'); ?>

    <!-- Get Product -->
    <?php
        // $product_home = get_field('product_home_page_show');
        // // var_dump($product_home);
        // // die; 
        //  $args = array(
        //     'post_type' => 'product',
        //     'status'    => 'publish',
        //     'orderby' => 'date',
        //     'order' => 'DESC',
        //     'meta_query' =>array(
        //         array(
        //         'key' => 'product_home_page_show',
        //         'value' => true, 
        //         'type' => 'BOOLEAN',
        //         'compare' => '=='
        //         ),
        //     ),
        // );
        // $products = wc_get_products( $args );
        // print_r($products);
        // die;
        $args = array(
            'post_type' => 'product',
            'status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'product_home_page_show',
                    'value' => '1',
                    'type' => 'BOOLEAN',
                    'compare' => '==',
                ),
            ),
        );
        
        $products = new WP_Query( $args );
    ?>
    <!-- module-4 product section  -->
    <div class="product-section default-section blue-bg no-bottom-des home-pro">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="h2-blue">
                    <h2 class="text-noeffect"><?php echo the_field('product_section_title'); ?></h2>
                </div>
                <div class="home-prod-sldr owl-carousel owl-theme">
                    
                    <?php 
                        if ( $products->have_posts() ) {
                            while ( $products->have_posts() ) {
                                $products->the_post();
                                $color = get_field('product_background_color');?>
                                <a href="<?php the_permalink($product->get_id()); ?>">
                                <div class="item">
                                    <div class="pro-sld-main <?php if($color == '#e2c722'){echo "ylw";} ?>" style="background:<?php the_field('product_background_color'); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="vimal-cottonseed-oil" width="259" height="390"/>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                                </a>
                                
                            <?php }
                            wp_reset_postdata(); // Reset the post data
                        } else {
                            // No posts found
                        }
                    ?>
                </div>
                <div class="submit-button text-center">
                    <a href="<?php echo the_field('product_section_button_page_link'); ?>" class="btn-effect" type="submit">
                    <?php echo the_field('product_section_button_name'); ?>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- module-5 nrt-section  -->
    <div class="default-section nrt-ills" id="nrt-ills-section" data-anchor="NRTSection">
        <div class="droplets">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-blur-drop.png" alt="left-blur-drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-blur-drop.png" alt="left-blur-drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
        </div>
        <div class="nrt-blue-drop p-0">
            <div class="nrt-blue-head-sec">
                    <div class="h2-blue">
                        <h2 class="text-noeffect">
                            <?php echo the_field('default_nrt_section_title');?>
                        </h2>
                    </div>
                    <p class="text-center"><?php echo the_field('default_nrt_section_discription');?></p> 
                </div>
            <div class="nrt-drop-logo reveal" >
                    <!-- <div class="blue-drop text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-oil-flow.png" alt="temperature oil" class="b-o-drop">
                    </div> -->
                    <div class="nrt-d-logo text-center">
                        <img src="<?php echo the_field('default_nrt_section_logo');?>" alt="temperature oil" class="nrt-logo-drop">
                    </div>
                </div>
        </div>
    </div>
    <script type="text/javascript">
        gsap.registerPlugin(ScrollTrigger);

        let revealContainers = document.querySelectorAll(".reveal");

        revealContainers.forEach((container) => {
          let tl = gsap.timeline({
            scrollTrigger: {
              trigger: container,
              toggleActions: "restart none none reset"
            }
          });

          tl.set(revealContainers, { autoAlpha: 1 });
          // tl.from(revealContainers, 1.5, {
          //   duration: 1.4,
          //   ease: Power2.easeInOut,
          //   width: "0%"

          // });
          tl.from(revealContainers, 2.5, {
            yPercent: -50,
            scale: 0,
            delay: -1.5,
            ease: Power2.out
          });
        });

        // let canImg = document.querySelectorAll(".vimal-oil-can-img");

        let canCard = gsap.utils.toArray(".vimal-oil-can-img");

        canCard.forEach((card, i) => {
        gsap.from(card,  {duration: 3, x: 0, y: -200, 
            scrollTrigger: {
            trigger: card,    
            start: "top bottom",
            end: "center center",
            scrub: true
            }
        });
        });
    </script>
    <div class="nrt-section default-section nrt-ills-sec" id="nrt-ills-section-1">
        <div class="floating-ele">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yellow-flower.png" alt="yellow-flower" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-flower.png" alt="white-flower" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-blur.png" alt="groundnut-blur" />
        </div>
        <div class="floating-ele right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-flower-blur.png" alt="white-flower-blur" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut.png" alt="peanut" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yellow-flower-refl.png" alt="yellow-flower-refl" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leaf-blur.png" alt="leaf-blur" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-clear.png" alt="groundnut-clear" />
        </div>
        <div class="container">
            <div class="align-items-center">
                <div class="nrt-bottom">
                    <div class="h2-white">
                        <h2 class="text-noeffect"><?php echo the_field('nrt_section_title');?></h2>
                    </div>
                    <!-- <div class="animate-text">
                        <span><?php //echo the_field('nrt_section_sub_title'); ?></span>  
                    </div> -->
    
                    <div class="stroke-text">
                        <div class="text-animation">
                            <svg height="70" stroke="#0c54a0" stroke-width="1" class="text-line text-line-1" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">NUTRIENT-RICH</text></svg>
                        </div>
                        <div class="text-animation">
                            <svg height="70" stroke="#0c54a0" stroke-width="1" class="text-line text-line-2" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">PURE & NATURAL</text></svg>
                        </div>
                        <div class="text-animation">
                            <svg height="70" stroke="#0c54a0" stroke-width="1" class="text-line text-line-2" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">ANTIOXIDANT-RICH</text></svg>
                        </div>
                    </div>
                    <!-- <div class="nrt-text-ani text-center">
                        <p>NUTRIENT-RICH</p>
                        <p>PURE & NATURAL</p>
                        <p>ANTIOXIDANT-RICH</p>
                    </div> -->
                    <p class="text-center"><?php echo the_field('nrt_section_discription');?></p>
                </div>
                <div class="submit-button text-center">
                    <a href="<?php echo the_field('nrt_section_page_link') ?>" class="btn-effect blue-back" type="submit">
                       <?php echo the_field('ntr_section_button_name'); ?> 
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- module-6 journey section  -->
    <div class="vimal-journey default-section blue-bg" id="vimal-journey">
        <div class="container">
            <div class="h2-blue">
                <h2 class="text-noeffect">The journey <br/>of Health & Happiness!</h2>
            </div>
            <div class="row align-items-center">
                <div class="jorney-main">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php 
                                    // if (have_rows('main_jorney_section')) {
                                    //     while (have_rows('main_jorney_section')) {
                                    //         the_row();
                                    //     }
                                    // }
                                ?>
                                <div class="tab-pane fade active" id="v-pills-1993" role="tabpanel" aria-labelledby="v-pills-1993-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">1993</span>
                                                <p>Birth of <b>Vimal Oils</b> in a small 50-ton refinery, inaugurated by Pramukh Swami Maharaj.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2010" role="tabpanel" aria-labelledby="v-pills-2010-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-img2.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2010</span>
                                                <p>Expansion of refinery to XXX tonnes capacity, in Mehsana district of Gujarat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2015" role="tabpanel" aria-labelledby="v-pills-2015-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-img3.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2015</span>
                                                <p>Got listed on National Stock Exchange (NSE) and Bombay Stock Exchange (BSE)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2018" role="tabpanel" aria-labelledby="v-pills-2018-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-img4.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2023</span>
                                                <p><b>Vimal Oils</b> now has evolved into a fully-integrated automatic oil-processing unit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2020" role="tabpanel" aria-labelledby="v-pills-2020-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-img5.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2020</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2022" role="tabpanel" aria-labelledby="v-pills-2022-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-img6.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2022</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="nav flex-row nav-pills owl-carousel owl-tabbing-jour owl-theme" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link item active" id="v-pills-1993-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1993" type="button" role="tab" aria-controls="v-pills-1993" aria-selected="true">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993.png" alt="1993"/>
                                    <span>1993</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2010-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2010" type="button" role="tab" aria-controls="v-pills-2010" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2010</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2015-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2015" type="button" role="tab" aria-controls="v-pills-2015" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2015</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2018" type="button" role="tab" aria-controls="v-pills-2018" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2023</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020" type="button" role="tab" aria-controls="v-pills-2020" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2020</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2022</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2022</span>
                                </button>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="btn-tabs">
                                    <button class="nav-link item active" id="v-pills-1993-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1993" type="button" role="tab" aria-controls="v-pills-1993" aria-selected="true">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993.png" alt="1993"/>
                                    <span>1993</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2010-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2010" type="button" role="tab" aria-controls="v-pills-2010" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2010</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2015-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2015" type="button" role="tab" aria-controls="v-pills-2015" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2015</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2018" type="button" role="tab" aria-controls="v-pills-2018" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2018</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020" type="button" role="tab" aria-controls="v-pills-2020" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2020</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2022</span>
                                    </button>
                                    <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2022</span>
                                    </button>
                                </div>
                            </div>
                        </div> -->


                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- module-7 oil-quiz  -->
    <div class="oil-quiz default-section hm-qz">
        <div class="droplets">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-blur-drop.png" alt="left-blur-drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-blur-drop.png" alt="left-blur-drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop.png" alt="drop"/>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="oil-quiz-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quiz-heart.png" width="434" height="651">
                    </div>
                    <div class="submit-button text-center mobile-show">
                        <a href="<?php the_field('quiz_page_link') ?>" class="btn-effect blue-back">
                            <?php echo the_field('quiz_button_name');?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="oil-quiz-right">
                        <div class="h2-white">
                            <h2 class="text-noeffect">
                                <?php echo the_field('quiz_title'); ?>
                            </h2>
                        </div>
                        <p><?php echo the_field('quiz_description') ?></p>
                        <div class="submit-button text-center mobile-hide">
                            <a href="<?php the_field('quiz_page_link') ?>" class="btn-effect blue-back">
                                <?php echo the_field('quiz_button_name');?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

    <!-- module-8 recipe-section  -->
    <div class="recipe-section default-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="h2-white">
                    <h2 class="text-noeffect">Cook Healthy with Vimal Oils</h2>
                </div>


                <div class="cook-sldr owl-carousel owl-theme">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video.png" />
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"/></svg></span>
                            </button>
                        </div>
                        <div class="h4-title">
                            <h4>Dry Manchurian</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video.png" />
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"/></svg></span>
                            </button>
                        </div>
                        <div class="h4-title">
                            <h4>Amritsari Chole</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video.png" />
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"/></svg></span>
                        </div>
                        <div class="h4-title">
                            <h4>Corn Croquettes</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video.png" />
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"/></svg></span>
                        </div>
                        <div class="h4-title">
                            <h4>Aloo Patties</h4>
                        </div>
                    </div>
                </div>
                <div class="submit-button text-center">
                    <a href="#" class="btn-effect blue-back">Let's Explore</a>
                </div>
            </div>
        </div>
    </div>

    <!-- module-9 social-presence  -->
    <div class="social-presence default-section blue-bg">
        <div class="container">
            <div class="h2-blue">
                <h2 class="text-noeffect"><?php echo the_field('social_presence_title'); ?></h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="tinder">
                        <span class=""></span>
                        <div class="tinder--cards">
                            <div class="tinder--card" id="tinder--card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video-4.jpg" alt="social post" />
                            </div>
                            <div class="tinder--card" id="tinder--card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video-1.jpg" alt="social post" />
                            </div>
                            <div class="tinder--card" id="tinder--card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video-2.jpg" alt="social post" />
                            </div>
                            <div class="tinder--card" id="tinder--card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video-3.jpg" alt="social post" />
                            </div>
                            <div class="tinder--card" id="tinder--card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cook-video-4.jpg" alt="social post" />
                            </div>
                            <span id="dp-prev" onclick="prev()">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.7071 4.29289C16.0976 4.68342 16.0976 5.31658 15.7071 5.70711L9.41421 12L15.7071 18.2929C16.0976 18.6834 16.0976 19.3166 15.7071 19.7071C15.3166 20.0976 14.6834 20.0976 14.2929 19.7071L7.29289 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.29289 11.2929L14.2929 4.29289C14.6834 3.90237 15.3166 3.90237 15.7071 4.29289Z"/></svg>
                            </span>
                            <span id="dp-next" onclick="next()">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z"/></svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="social-sec">
                        <div class="h3-ttl">
                            <h3 class="text-noeffect"><?php echo the_field('social_section_title');?></h3>
                        </div>
                        <p><?php echo the_field('social_section_description');?></p>
                        <div class="socials">
                            <ul>
                                <li><a href="<?php echo the_field('facebook_share_icons_links');?>"><span>
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 12C22 6.47714 17.5229 1.99999 12 1.99999C6.47715 1.99999 2 6.47714 2 12C2 16.9913 5.65686 21.1283 10.4375 21.8785V14.8906H7.89844V12H10.4375V9.79687C10.4375 7.29062 11.9304 5.90624 14.2146 5.90624C15.3087 5.90624 16.4531 6.10155 16.4531 6.10155V8.56249H15.1921C13.9499 8.56249 13.5625 9.33333 13.5625 10.1242V12H16.3359L15.8926 14.8906H13.5625V21.8785C18.3431 21.1283 22 16.9913 22 12Z" stroke-linejoin="round"></path></svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('instagram_share_icons_links');?>"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="m21.436,8.26c-.058-1.225-.293-2.797-1.599-4.099-1.302-1.301-2.874-1.539-4.096-1.6-1.503-.086-5.979-.086-7.478,0-1.222.058-2.792.292-4.1,1.596-1.301,1.296-1.538,2.872-1.6,4.097-.086,1.503-.086,5.979,0,7.479.058,1.225.292,2.799,1.6,4.102,1.306,1.301,2.876,1.538,4.095,1.599.752.043,2.248.064,3.744.064s2.984-.021,3.733-.064c1.225-.058,2.798-.292,4.101-1.6,1.301-1.301,1.537-2.875,1.599-4.097.086-1.502.086-5.973,0-7.477Zm-.998,7.424c-.079,1.575-.471,2.605-1.309,3.443-.839.842-1.867,1.233-3.444,1.308-1.481.083-5.889.084-7.372,0-1.571-.079-2.601-.47-3.443-1.309-.841-.839-1.231-1.868-1.307-3.446-.085-1.481-.085-5.889,0-7.373.079-1.579.471-2.608,1.307-3.442.844-.84,1.873-1.23,3.446-1.305.74-.042,2.211-.063,3.683-.063s2.947.021,3.689.063c1.574.079,2.604.47,3.443,1.309.841.839,1.231,1.868,1.307,3.441v.005c.084,1.48.084,5.886,0,7.369ZM12,7.5c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5,4.5-2.019,4.5-4.5-2.019-4.5-4.5-4.5Zm0,8c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5,3.5,1.57,3.5,3.5-1.57,3.5-3.5,3.5Zm6.27-9c0,.414-.335.75-.75.75s-.755-.336-.755-.75.331-.75.745-.75h.01c.415,0,.75.336.75.75Z"></path></g></svg>
                                </span></a></li>
                                <li><a href="#"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m12,1.5C6.21,1.5,1.5,6.21,1.5,12s4.71,10.5,10.5,10.5,10.5-4.71,10.5-10.5S17.79,1.5,12,1.5Zm0,20c-.93,0-1.826-.14-2.676-.39.385-.654.837-1.521,1.03-2.251.12-.46.62-2.36.62-2.36.32.62,1.27,1.14,2.28,1.14,3,0,5.16-2.76,5.16-6.19,0-3.29-2.68-5.75-6.13-5.75-4.3,0-6.58,2.88-6.58,6.02,0,1.46.78,3.28,2.02,3.86.19.09.29.05.33-.13.03-.14.2-.82.28-1.13.03-.1,0-.21-.07-.29-.41-.5-.74-1.41-.74-2.27,0-2.2,1.66-4.32,4.49-4.32,2.45,0,4.16,1.67,4.16,4.05,0,2.69-1.36,4.56-3.13,4.56-.97,0-1.71-.81-1.47-1.8.28-1.18.82-2.46.82-3.31,0-.77-.41-1.41-1.26-1.41-1,0-1.8,1.04-1.8,2.42,0,.88.3,1.48.3,1.48,0,0-.99,4.17-1.17,4.95-.166.712-.137,1.653-.074,2.405-3.452-1.424-5.89-4.823-5.89-8.783C2.5,6.762,6.762,2.5,12,2.5s9.5,4.262,9.5,9.5-4.262,9.5-9.5,9.5Z" <="" svg="">
                                        </path></svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('twitter_share_icons_links');?>"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m22.389,5.585c-.142-.173-.378-.233-.584-.146-.156.066-.312.127-.469.183.249-.357.445-.75.581-1.168.064-.198,0-.415-.162-.545-.164-.13-.388-.146-.567-.041-.669.394-1.42.689-2.187.862-.848-.785-1.981-1.231-3.156-1.231-2.536,0-4.599,2.036-4.599,4.538,0,.124.005.25.016.377-2.926-.309-5.626-1.744-7.48-3.996-.104-.125-.251-.193-.425-.181-.162.013-.309.104-.392.244-.416.705-.627,1.476-.627,2.292,0,.864.247,1.692.694,2.401-.15-.071-.329-.043-.475.043-.151.09-.245.278-.245.455,0,1.425.68,2.728,1.759,3.569-.079.029-.15.079-.207.146-.111.132-.147.313-.094.478.459,1.411,1.581,2.483,2.969,2.925-1.415.771-3.086,1.078-4.683.898-.236-.03-.45.111-.528.33-.077.22.007.464.204.589,1.951,1.236,4.221,1.89,6.562,1.89,7.613,0,12.162-6.095,12.162-11.987,0-.094,0-.188-.002-.282.751-.574,1.408-1.261,1.955-2.045.127-.183.118-.428-.021-.601Zm-2.736,1.996c-.141.102-.22.269-.207.442.012.163.012.326.012.489,0,5.401-4.175,10.987-11.162,10.987-1.474,0-2.916-.281-4.254-.823,1.586-.184,3.071-.786,4.344-1.768.168-.13.235-.351.169-.552-.066-.202-.252-.339-.464-.344-1.274-.026-2.416-.7-3.041-1.738.392-.002.786-.054,1.174-.153.226-.058.382-.264.376-.498-.007-.233-.173-.432-.402-.477-1.407-.281-2.49-1.362-2.797-2.729.403.128.824.203,1.247.219.223.025.428-.134.495-.347.068-.214-.015-.447-.202-.57-1.003-.658-1.602-1.759-1.602-2.945,0-.393.062-.772.188-1.134,2.14,2.276,5.121,3.657,8.297,3.821.15.009.305-.057.405-.175.102-.118.142-.276.109-.428-.061-.284-.091-.561-.091-.821,0-1.951,1.614-3.538,3.599-3.538.997,0,1.957.408,2.633,1.119.116.124.287.178.455.147.436-.082.87-.2,1.292-.351-.24.264-.522.493-.838.678-.203.12-.296.364-.222.588.074.223.294.369.527.34.262-.028.525-.069.788-.123-.26.245-.536.473-.828.682Z"></path></svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('youtube_share_icons_links');?>"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m22.065,7.061c-.276-1.034-1.089-1.849-2.122-2.125-1.605-.431-7.686-.436-7.943-.436s-6.338.005-7.942.436c-1.033.276-1.846,1.091-2.123,2.125-.43,1.608-.435,4.817-.435,4.953s.005,3.345.435,4.953c.276,1.031,1.069,1.815,2.122,2.097,1.605.431,7.686.436,7.943.436s6.338-.005,7.942-.436c1.039-.278,1.853-1.082,2.123-2.097.43-1.608.435-4.817.435-4.953s-.005-3.345-.435-4.953Zm-.967,9.648c-.181.681-.71,1.2-1.415,1.389-1.227.33-5.962.402-7.684.402s-6.457-.072-7.685-.402c-.703-.188-1.232-.708-1.414-1.39-.396-1.481-.401-4.663-.401-4.694s.005-3.213.401-4.695c.185-.69.727-1.233,1.415-1.417,1.227-.33,5.962-.402,7.684-.402s6.457.072,7.685.402c.688.185,1.23.728,1.414,1.417h0c.396,1.482.401,4.664.401,4.695s-.005,3.213-.401,4.695Zm-11.099-7.709l5,3-5,3v-6Z"></path></svg>
                                </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-10 form-section  -->
    <div id="form-section" class="form-section default-section footer-before">
        <div class="floating-obj">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-f.png" alt="groundnut-f"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut.png" alt="peanut.png"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-clear-frm.png" alt="groundnut-clear-frm"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-blur-frm.png" alt="groundnut-blur-frm"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut-small.png" alt="peanut-small"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ground-nut-blur-frm.png" alt="ground-nut-blur-frm"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-leaf.png" alt="green-leaf"/>
        </div>
        <div class="container-fluid">
            <div class="btm-cta">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="form-left">
                            <div class="h2-white">
                                <h2 class="text-noeffect"><?php echo the_field('footer_before_section_title'); ?></h2>
                            </div>
                            <p><?php echo the_field('footer_before_section_description');?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="form-part">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="form-inner">
                                        <div class="h2-white">
                                            <h2 class="text-noeffect">Have questions? Ask away!</h2>
                                        </div>
                                        <?php echo do_shortcode('[contact-form-7 id="673" title="Footer Contact Form"]');?>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="form-image-part">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-img.png" alt="Form Kiara Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        "use strict";
        var countPost = 0;
            //Random Number generator
            function randomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            let tinderContainer = document.querySelector(".tinder");
            let allCards = document.querySelectorAll(".tinder--card");
            let currentCard;
            const nope = document.getElementById("dp-prev");
            const love = document.getElementById("dp-next");
            let num = 5;

            //create cards for page
            function initCards(card, index) {
                //the cards that haven't been removed
                var newCards = document.querySelectorAll(".tinder--card:not(.removed)");

                newCards.forEach(function (card, index) {
                    //put the card in front
                    card.style.zIndex = allCards.length - index;
                    //angle the card and make it smaller the further back it goes
                    card.style.transform =
                        "scale(" + (20 - index) / 20 + ") translateY(-" + 50 * index + "px)";
                    //change how opaque it is depending where it is in the stack (index 0 is fully opaque). uses 5 so that anything loaded after 5 is fully transparent
                    // card.style.opacity = (5 - index) / 5;
                });

                //give the ones that get initialized a "loaded" class
                tinderContainer.classList.add("loaded");
            }

            //run initialization
            initCards();

            function nodeToString(node) {
                var tmpNode = document.createElement("div");
                tmpNode.appendChild(node.cloneNode(true));
                var str = tmpNode.innerHTML;
                tmpNode = node = null; // prevent memory leaks in IE
                return str;
            }

            function cleanCurrentCard(thisCard) {
                let cleanedCard = nodeToString(thisCard)
                    .replace(/(\r\n|\n|\r)/gm, "")
                    .replace(" removed", "");
                return cleanedCard;
            }

            function removeRemoveClass() {
                var element = document.querySelector(".tinder--card");
                element.classList.remove("removed");
            }

            //my custom function
            function addNewCard(thisCard) {
                // console.log(thisCard);
                let cleanedCard = cleanCurrentCard(thisCard);

                //increment the number to be given to the card
                num++;

                //card area
                var allCardsArea = document.querySelector(".tinder--cards");

                //add a card to the end of the innerHTML
                setTimeout(function () {
                    allCardsArea.innerHTML += cleanedCard;
                    //remove the .removed ones
                    const paras = document.getElementsByClassName("removed");
                    while (paras[0]) {
                        paras[0].parentNode.removeChild(paras[0]);
                    }
                    // removeRemoveClass();
                }, 300);

                //try to get newest card at back to fade in
                //ooor just add so many that the last one is completely transparent since the opacity changes by .10 each card

                //run these two after a delay that is slightly longer than the delay for adding the new card
                //this makes a new card at the back and then transitions it smoothly to the smaller size
                setTimeout(initCards, 301);
                setTimeout(addHammers, 301);
            }

            function addHammers() {
                //redefined to be able to reinitialize on new card add
                allCards = document.querySelectorAll(".tinder--card");
                console.log('called add hammer');

                allCards.forEach(function (el) {
                    //initialize hammer on each card
                    var hammertime = new Hammer(el);

                    //add the moving class if the card is being panned
                    hammertime.on("pan", function (event) {
                        el.classList.add("moving");
                    });

                    //don't do anything if the movement hasn't changed
                    hammertime.on("pan", function (event) {
                        if (event.deltaX === 0) return;
                        if (event.center.x === 0 && event.center.y === 0) return;

                        //if it has been changed at all to the right, add the 'tinder-love' class
                        tinderContainer.classList.toggle("tinder_love", event.deltaX > 0);
                        //if it has been changed at all to the left, add the 'tinder-nope' class
                        tinderContainer.classList.toggle("tinder_nope", event.deltaX < 0);

                        //angle the further it goes right or left
                        var xMulti = event.deltaX * 0.03;
                        //angle the further it goes up or down
                        var yMulti = event.deltaY / 80;

                        //rotation is a combo of both
                        var rotate = xMulti * yMulti;
                        console.log("called");
                        //apply the movement and rotation
                        event.target.style.transform =
                            "translate(" +
                            event.deltaX +
                            "px, " +
                            event.deltaY +
                            "px) rotate(" +
                            rotate +
                            "deg)";
                    });

                    //when you're done with the panning event
                    hammertime.on("panend", function (event) {
                        //remove the 'moving' class from the card
                        el.classList.remove("moving");
                        //remove the love and nope classes from the rest of the cards just in case something happened where they stayed
                        tinderContainer.classList.remove("tinder_love");
                        tinderContainer.classList.remove("tinder_nope");

                        //set var for width of the body (including padding)
                        var moveOutWidth = document.body.clientWidth;

                        //determine if the card should be kept on screen. (Gotta be changed by a certain amount and be moving)
                        var keep = Math.abs(event.deltaX) < 80 || Math.abs(event.velocityX) < 0.5;

                        //toggle the removed class if the keep var has not evaluated to true
                        event.target.classList.toggle("removed", !keep);

                        //if the keep value evaluates true, set transform to nothing
                        if (keep) {
                            event.target.style.transform = "";
                        } else {
                            //if it's not being kept onscreen, move it on out
                            //calculate all of the movements and whatnot
                            var endX = Math.max(Math.abs(event.velocityX) * moveOutWidth, moveOutWidth);
                            var toX = event.deltaX > 0 ? endX : -endX;
                            var endY = Math.abs(event.velocityY) * moveOutWidth;
                            var toY = event.deltaY > 0 ? endY : -endY;
                            var xMulti = event.deltaX * 0.03;
                            var yMulti = event.deltaY / 80;
                            var rotate = xMulti * yMulti;

                            event.target.style.transform =
                                "translate(" +
                                toX +
                                "px, " +
                                (toY + event.deltaY) +
                                "px) rotate(" +
                                rotate +
                                "deg)";

                            //add the card to the back
                            addNewCard(event.target);
                        }
                    });
                });
            }

            //run the addHammers to allow card movement
            addHammers();


            // swipe effcet on button click 
            $("#dp-prev").on("click", function(){
                // console.log('Called Prev');
                // var cards = document.querySelectorAll(".tinder--card:not(.removed)");
                //     var moveOutWidth = document.body.clientWidth * 1.5;

                //     if (!cards.length) return false;

                //     var card = cards[countPost];
                //     countPost++;
                //     card.classList.add("removed");

                //     if (love) {
                //     card.style.transform =
                //         "translate(" + moveOutWidth + "px, -100px) rotate(-30deg)";
                //     } else {
                //     card.style.transform =
                //         "translate(-" + moveOutWidth + "px, 100px) rotate(30deg)";
                //     }
                //     addNewCard(card);
                //     console.log(cards);
                //     initCards();
                //     addHammers();
            })

            // // function for button 
            // function createButtonListener(love) {
            //     return function (event) {
            //         var cards = document.querySelectorAll(".tinder--card:not(.removed)");
            //         var moveOutWidth = document.body.clientWidth * 1.5;

            //         if (!cards.length) return false;

            //         var card = cards[countPost];
            //         countPost++;
            //         card.classList.add("removed");

            //         if (love) {
            //         card.style.transform =
            //             "translate(" + moveOutWidth + "px, -100px) rotate(-30deg)";
            //         } else {
            //         card.style.transform =
            //             "translate(-" + moveOutWidth + "px, 100px) rotate(30deg)";
            //         }
            //         addNewCard(card);
            //         console.log(cards);
            //         initCards();


            //         // event.preventDefault();
            //     };
            // }

            // //create love and nope button listeners
            // var nopeListener = createButtonListener(true);
            // var loveListener = createButtonListener(false);

            // //add click events to love and nope buttons
            // nope.addEventListener("click", nopeListener);
            // love.addEventListener("click", loveListener);

            // document.querySelector(".closeMe").addEventListener("click", function () {
            //     toggleInfoClose(true);
            // });
            // document.querySelector(".covering").addEventListener("click", function () {
            //     toggleInfoClose(true);
            // });
            // document.querySelector("#info").addEventListener("click", function () {
            //     toggleInfoClose(false);
            // });

            // function toggleInfoClose(bool) {
            //     if (!bool) {
            //         document.querySelector(".tinder--info").style.top = "50%";
            //     } else {
            //         document.querySelector(".tinder--info").style.top = "200vh";
            //     }
            // }

            // //stuff to prompt the user to swipe
            // //Shows the animation if your mouse is still for 15 seconds/hides it when you move
            // let fadein = null;

            // const myFunction = (fadeOutTime, fadeInAfterTime) => {
            //     document.querySelector(".promptBox").style.transition = fadeOutTime + "ms";
            //     document.querySelector(".promptBox").style.opacity = "0";
            //     if (fadein != null) {
            //         clearTimeout(fadein);
            //     }
            //     fadein = setTimeout(showMe, fadeInAfterTime);
            // };

            // const showMe = () => {
            //     document.querySelector(".promptBox").style.opacity = "1";
            // };

            // document.querySelector("body").addEventListener("mousemove", function () {
            //     myFunction(300, 15000);
            // });
            // document.querySelector("body").addEventListener("click", function () {
            //     myFunction(300, 15000);
            // });
            // document.querySelector("body").addEventListener("touchstart", function () {
            //     myFunction(300, 15000);
            // });
            // document.querySelector("body").addEventListener("touchmove", function () {
            //     myFunction(300, 15000);
            // });
            function prev()
            {
                console.log('Called Prev');
                var cards = document.querySelectorAll(".tinder--card:not(.removed)");
                    var moveOutWidth = document.body.clientWidth * -1.5;

                    if (!cards.length) return false;

                    var card = cards[0];
                    countPost++;
                    card.classList.add("removed");

                    card.style.transform = "translate(" + moveOutWidth + "px, -100px) rotate(-30deg)";
                    addNewCard(card);
                    console.log(cards);
                    initCards();
                    addHammers();
            }

            function next()
            {
                console.log('Called Prev');
                var cards = document.querySelectorAll(".tinder--card:not(.removed)");
                    var moveOutWidth = document.body.clientWidth * 1.5;

                    if (!cards.length) return false;

                    var card = cards[0];
                    countPost++;
                    card.classList.add("removed");

                    card.style.transform = "translate(" + moveOutWidth + "px, -100px) rotate(-30deg)";
                    addNewCard(card);
                    console.log(cards);
                    initCards();
                    addHammers();
            }
    </script>


<?php get_footer(); ?>