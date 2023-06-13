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
         $args = array(
            'post_type' => 'product',
            'status'    => 'publish'
        );
    
        $products = wc_get_products( $args );
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
                        foreach ($products as $product) {
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($product->get_id()));
                            $color = get_field('product_background_color',$product->get_id());
                            ?>
                                <div class="item">
                                    <div class="pro-sld-main <?php if($color == '#fbef4d'){echo "ylw";} ?>" style="background:<?php echo get_field('product_background_color',$product->get_id()); ?>">
                                        <img src="<?php print_r($image['0']);?>" alt="vimal-cottonseed-oil" width="259" height="390"/>
                                        <a href="<?php the_permalink($product->get_id()); ?>"><?php echo $product->get_title(); ?></a>
                                    </div>
                                </div>        
                        <?php }
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
    <div class="default-section nrt-ills">
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
        <div class="white-sec">
            <div class="container">
                <div class="align-items-center">
                    <div class="nrt-top">
                        <div class="h2-blue">
                            <h2 class="text-noeffect">
                                <?php echo the_field('default_nrt_section_title');?>
                            </h2>
                        </div>
                        <p class="text-center"><?php echo the_field('default_nrt_section_discription');?></p>
                    </div>
                </div>
                <div class="nrt-logo">
                    <img src="<?php echo the_field('default_nrt_section_logo');?>" alt="NRT-logo"/>
                </div>
            </div>
        </div>
    </div>
    <div class="nrt-section default-section">
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
                    <div class="animate-text">
                        <span><?php echo the_field('nrt_section_sub_title'); ?></span>
                    </div>
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
    <div class="vimal-journey default-section blue-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="h2-blue">
                    <h2 class="text-noeffect">The journey <br/>of Health & Happiness!</h2>
                </div>
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
                                <div class="tab-pane fade show active" id="v-pills-1993" role="tabpanel" aria-labelledby="v-pills-1993-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">1993</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2010" role="tabpanel" aria-labelledby="v-pills-2010-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2010</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2015" role="tabpanel" aria-labelledby="v-pills-2015-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2015</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2018" role="tabpanel" aria-labelledby="v-pills-2018-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                            <div class="j-para">
                                                <span class="j-year">2018</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-2020" role="tabpanel" aria-labelledby="v-pills-2020-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="slide-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
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
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993-main.jpg" alt="1993-main"/>
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
                            <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-1993-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1993" type="button" role="tab" aria-controls="v-pills-1993" aria-selected="true">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993.png" alt="1993"/>
                                    <span>1993</span>
                                </button>
                                <button class="nav-link" id="v-pills-2010-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2010" type="button" role="tab" aria-controls="v-pills-2010" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2010</span>
                                </button>
                                <button class="nav-link" id="v-pills-2015-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2015" type="button" role="tab" aria-controls="v-pills-2015" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2015</span>
                                </button>
                                <button class="nav-link" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2018" type="button" role="tab" aria-controls="v-pills-2018" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993"/>
                                    <span>2018</span>
                                </button>
                                <button class="nav-link" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020" type="button" role="tab" aria-controls="v-pills-2020" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2020</span>
                                </button>
                                <button class="nav-link" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993"/>
                                    <span>2022</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-7 oil-quiz  -->
    <div class="oil-quiz default-section">
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
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="oil-quiz-right">
                        <div class="h2-title">
                            <h2 class="text-noeffect">
                                <?php echo the_field('quiz_title'); ?>
                            </h2>
                        </div>
                        <p><?php echo the_field('quiz_description') ?></p>
                        <div class="submit-button text-center">
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
                    <h2 class="text-noeffect">Cook Healthy With Vimal Oils</h2>
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
                            <h4>Aloo Patties</h4>
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
                            <h4>Aloo Patties</h4>
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
                    <button class="btn-effect blue-back" type="submit">Let's Explore</button>
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
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div id="insrta-slider">
                        <div class="dp-wrap">
                            <div id="dp-slider">
                                <div class="dp_item" data-class="1" data-position="1"> 
                                    <div class="dp-img">
                                        <img class="img-fluid" src="https://i.postimg.cc/tgFRGt0P/MV5-BMGM2-Zm-E4-Yz-Mt-OTBm-NS00-Nm-E4-LWI4-NTUt-Mjg3-ZTJj-ZDYw-ZTc5-Xk-Ey-Xk-Fqc-Gde-QXVy-NDg4-Mjkz-NDk-V1.jpg" alt="investing">
                                    </div>
                                </div>
                                <div class="dp_item" data-class="2" data-position="2"> 
                                    <div class="dp-img">
                                        <img class="img-fluid" src="https://i.postimg.cc/rpTXWBb0/MV5-BOTQ0-NDY0-Y2-Mt-MTdi-Yi00-Zjgz-LWJj-Nm-It-Nz-Yw-Y2-Nk-Zjll-Ym-I1-Xk-Ey-Xk-Fqc-Gde-QXVy-NDg4-Mjkz-NDk-V1.jpg" alt="investing">
                                    </div>
                                </div>
 
                                <div class="dp_item" data-class="3" data-position="3"> 
                                    <div class="dp-img">
                                        <img class="img-fluid" src="https://i.postimg.cc/pVsWvLS0/ffbd73fd0e5e40a8443e11c9d2b29d5d.jpg" alt="investing">
                                    </div>
                                </div> 
                                
                                <div class="dp_item" data-class="4" data-position="4"> 
                                    <div class="dp-img">
                                        <img class="img-fluid" src="https://i.postimg.cc/wv6zKCQ8/MV5-BNj-I4-Yj-Jl-ZTct-Mj-U5-NS00-MGFh-LWFk-Zjgt-OTlj-N2-Y4-Nz-I1-Mj-A4-Xk-Ey-Xk-Fqc-Gde-QXVy-NDg4-Mjkz-NDk-V1.jpg" alt="investing">
                                    </div>
                                </div>
                            </div>
                            <span id="dp-next">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z"/></svg>
                            </span>
                            <span id="dp-prev">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.7071 4.29289C16.0976 4.68342 16.0976 5.31658 15.7071 5.70711L9.41421 12L15.7071 18.2929C16.0976 18.6834 16.0976 19.3166 15.7071 19.7071C15.3166 20.0976 14.6834 20.0976 14.2929 19.7071L7.29289 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.29289 11.2929L14.2929 4.29289C14.6834 3.90237 15.3166 3.90237 15.7071 4.29289Z"/></svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M14,6h3a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H14A5,5,0,0,0,9,7v3H7a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H9v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V14h2.22a1,1,0,0,0,1-.76l.5-2a1,1,0,0,0-1-1.24H13V7A1,1,0,0,1,14,6Z"></path>
                                    </svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('instagram_share_icons_links');?>"><span>
                                    <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <title>instagram</title>
                                        <path d="M25.805 7.996c0 0 0 0.001 0 0.001 0 0.994-0.806 1.799-1.799 1.799s-1.799-0.806-1.799-1.799c0-0.994 0.806-1.799 1.799-1.799v0c0.993 0.001 1.798 0.805 1.799 1.798v0zM16 20.999c-2.761 0-4.999-2.238-4.999-4.999s2.238-4.999 4.999-4.999c2.761 0 4.999 2.238 4.999 4.999v0c0 0 0 0.001 0 0.001 0 2.76-2.237 4.997-4.997 4.997-0 0-0.001 0-0.001 0h0zM16 8.3c0 0 0 0-0 0-4.253 0-7.7 3.448-7.7 7.7s3.448 7.7 7.7 7.7c4.253 0 7.7-3.448 7.7-7.7v0c0-0 0-0 0-0.001 0-4.252-3.447-7.7-7.7-7.7-0 0-0 0-0.001 0h0zM16 3.704c4.003 0 4.48 0.020 6.061 0.089 1.003 0.012 1.957 0.202 2.84 0.538l-0.057-0.019c1.314 0.512 2.334 1.532 2.835 2.812l0.012 0.034c0.316 0.826 0.504 1.781 0.516 2.778l0 0.005c0.071 1.582 0.087 2.057 0.087 6.061s-0.019 4.48-0.092 6.061c-0.019 1.004-0.21 1.958-0.545 2.841l0.019-0.058c-0.258 0.676-0.64 1.252-1.123 1.726l-0.001 0.001c-0.473 0.484-1.049 0.866-1.692 1.109l-0.032 0.011c-0.829 0.316-1.787 0.504-2.788 0.516l-0.005 0c-1.592 0.071-2.061 0.087-6.072 0.087-4.013 0-4.481-0.019-6.072-0.092-1.008-0.019-1.966-0.21-2.853-0.545l0.059 0.019c-0.676-0.254-1.252-0.637-1.722-1.122l-0.001-0.001c-0.489-0.47-0.873-1.047-1.114-1.693l-0.010-0.031c-0.315-0.828-0.506-1.785-0.525-2.785l-0-0.008c-0.056-1.575-0.076-2.061-0.076-6.053 0-3.994 0.020-4.481 0.076-6.075 0.019-1.007 0.209-1.964 0.544-2.85l-0.019 0.059c0.247-0.679 0.632-1.257 1.123-1.724l0.002-0.002c0.468-0.492 1.045-0.875 1.692-1.112l0.031-0.010c0.823-0.318 1.774-0.509 2.768-0.526l0.007-0c1.593-0.056 2.062-0.075 6.072-0.075zM16 1.004c-4.074 0-4.582 0.019-6.182 0.090-1.315 0.028-2.562 0.282-3.716 0.723l0.076-0.025c-1.040 0.397-1.926 0.986-2.656 1.728l-0.001 0.001c-0.745 0.73-1.333 1.617-1.713 2.607l-0.017 0.050c-0.416 1.078-0.67 2.326-0.697 3.628l-0 0.012c-0.075 1.6-0.090 2.108-0.090 6.182s0.019 4.582 0.090 6.182c0.028 1.315 0.282 2.562 0.723 3.716l-0.025-0.076c0.796 2.021 2.365 3.59 4.334 4.368l0.052 0.018c1.078 0.415 2.326 0.669 3.628 0.697l0.012 0c1.6 0.075 2.108 0.090 6.182 0.090s4.582-0.019 6.182-0.090c1.315-0.029 2.562-0.282 3.716-0.723l-0.076 0.026c2.021-0.796 3.59-2.365 4.368-4.334l0.018-0.052c0.416-1.078 0.669-2.326 0.697-3.628l0-0.012c0.075-1.6 0.090-2.108 0.090-6.182s-0.019-4.582-0.090-6.182c-0.029-1.315-0.282-2.562-0.723-3.716l0.026 0.076c-0.398-1.040-0.986-1.926-1.729-2.656l-0.001-0.001c-0.73-0.745-1.617-1.333-2.607-1.713l-0.050-0.017c-1.078-0.416-2.326-0.67-3.628-0.697l-0.012-0c-1.6-0.075-2.108-0.090-6.182-0.090z"></path>
                                    </svg>
                                </span></a></li>
                                <li><a href="#"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><g><path d="M220.646,338.475C207.223,408.825,190.842,476.269,142.3,511.5   c-14.996-106.33,21.994-186.188,39.173-270.971c-29.293-49.292,3.518-148.498,65.285-124.059   c76.001,30.066-65.809,183.279,29.38,202.417c99.405,19.974,139.989-172.476,78.359-235.054   C265.434-6.539,95.253,81.775,116.175,211.161c5.09,31.626,37.765,41.22,13.062,84.884c-57.001-12.65-74.005-57.6-71.822-117.533   c3.53-98.108,88.141-166.787,173.024-176.293c107.34-12.014,208.081,39.398,221.991,140.376   c15.67,113.978-48.442,237.412-163.23,228.529C258.085,368.704,245.023,353.283,220.646,338.475z"></path></g></svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('twitter_share_icons_links');?>"><span>
                                    <svg viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)">
                                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                                    <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span></a></li>
                                <li><a href="<?php echo the_field('youtube_share_icons_links');?>"><span>
                                    <svg width="800px" height="800px" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7442.000000)">
                                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                                    <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289" id="youtube-[#168]">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
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
                                            <h2 class="text-noeffect">Have Question? Ask Away</h2>
                                        </div>
                                        <div class="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Full Name" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="name" placeholder="Email ID" required="">
                                            </div>
                                            <div class="form-group state-select">
                                                <select name="State" id="state" class="form-control">
                                                    <option value="gujrat">Gujrat</option>
                                                    <option value="rajsthan">Rajsthan</option>
                                                    <option value="panjab">Panjab</option>
                                                </select>
                                            </div>
                                            <div class="form-group state-select">
                                                <select name="State" id="state" class="form-control">
                                                    <option value="ahmedabad">Ahmedabad</option>
                                                    <option value="rajkot">Rajkot</option>
                                                    <option value="surat">Surat</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="contact" placeholder="Contact No." required="">
                                            </div>
                                            <div class="iimg text-center">
                                                <button class="btn-effect blue-back" type="submit">Share</button>
                                            </div>
                                        </div>
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
<?php get_footer(); ?>