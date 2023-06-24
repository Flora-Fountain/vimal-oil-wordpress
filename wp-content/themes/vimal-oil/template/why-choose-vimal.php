<?php  
/* 
    Template Name: Why Choose Vimal Template 
*/

echo get_header();
?>
    
    <!--module-2 hero banner html code  -->
    <div class="hero-banner video-banner blue-bg-banner">
        <video autoplay muted loop id="video">
            <source src="<?php echo the_field('benner_video'); ?>" type="video/mp4">
        </video>
        <div class="text-middle">
            <div class="banner-right">
                <div class="h1-title white-text">
                    <h1 class="text-noeffect"><span><?php echo the_field('benner_title') ?></span><?php echo the_field('benner_sub_title') ?></h1>
                </div>
            </div>
            <div class="hash-sec">
                <span><?php echo the_field('benner_hash_tag_text') ?></span>
            </div>
            <div class="submit-button text-center">
                <a href="<?php echo the_field('benner_button_link') ?>" class="btn-effect"><?php echo the_field('benner_button_name') ?></a>
            </div>
        </div>
    </div>

    <!-- module-3 change for health health section -->
    <div class="health-section-wcv default-section help-pg">
        <div class="leaf-sec">
            <div class="falling-leaf">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
            </div>
            <div class="floating-ele after-banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut.png" alt="yellow-flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-clear.png" alt="white-flower">
            </div>
            <div class="container">
                <div class="h2-white">
                    <h2 class="text-noeffect">
                        <?php echo the_field('after_benner_section_title');?>
                    </h2>
                    <h2 class="text-noeffect">
                        <?php echo the_field('after_benner_section_sub_title');?>
                    </h2>
                </div>
                <div class="para">
                    <p><?php echo the_field('after_benner_section_description1') ?></p>
                    <p><?php echo the_field('after_benner_section_description2') ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 legacy of trust and promise  -->
    <div class="legacy-section default-section blue-bg why-vml">
        <div class="container">
            <div class="h2-blue">
                <h2 class="text-noeffect"><?php echo the_field('legacy_section_title');?></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="legacy-image image-part">
                        <img src="<?php echo the_field('legacy_section_image'); ?>" alt="A lagacy of trust & promice">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="content-part">
                        <div class="para">
                            <p><?php echo the_field('legacy_section_description1');?></p>
                            <p><?php echo the_field('legacy_section_description2');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-5 quality always paramount  -->
    <div class="quality-section default-section">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">
                    <?php echo the_field('quality_section_title');?>
                </h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordion-content-section">
                        <p><?php the_field('quality_section_description');?></p>
                        <div class="qa-acc">
                            <div class="accordion" id="accordionExample">
                                <?php 
                                    $count = 1;
                                    if (have_rows('quality_section_accordion')) {
                                        while (have_rows('quality_section_accordion')) {
                                            the_row(); ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading<?php echo $count;?>">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count;?>" aria-expanded="<?php if ($count == 1) { echo"true"; }else{ echo "false";} ?>" aria-controls="collapse<?php echo $count;?>"><?php the_sub_field('quality_section_accordion_title') ?></button>
                                                </h2>
                                                <div id="collapse<?php echo $count;?>" class="accordion-collapse collapse <?php if ($count == 1) { echo "show";} ?>" aria-labelledby="heading<?php echo $count;?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php the_sub_field('quality_section_accordion_description');?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $count++; }
                                    }
                                ?>
                                <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Measurement Factor 1</button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil. Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Measurement Factor 2</button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil. Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil.
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Measurement Factor 3</button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil. Hydrolysis of oil creates Free Fatty Acids in them. Raw oils and fats in their natural form contain a small amount of free fatty acids but they are removed while refining the oil.
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image-part">    
                        <img src="<?php echo the_field('quality_section_image'); ?>" alt="A quality is always paramount">
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <!-- module-6 sourcing and extraction  -->
    <div class="sourcing-section default-section blue-bg why-vml">
        <div class="leaf-sec">
            <div class="falling-leaf">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
            </div>
            <div class="floating-ele after-banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut.png" alt="yellow-flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-clear.png" alt="white-flower">
            </div>
            <div class="container">
                <div class="h2-blue">
                    <h2 class="text-noeffect">
                        <?php echo the_field('sourcing_section_title');?>
                    </h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image-part">
                            <img src="<?php echo the_field('sourcing_section_image'); ?>" alt="Souring and Extraction">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="content-part">
                            <p><?php echo the_field('sourcing_section_description1');?></p>
                            <p><?php echo the_field('sourcing_section_description2');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-7 NRT-section  -->
    <div class="nrt-sec default-section">
        <div class="lab-ele">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hexa.png" alt="hexa"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tube.png" alt="tube"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beaker.png" alt="beaker"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-tube.png" alt="test-tube"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hexa.png" alt="hexa"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/atom.png" alt="atom"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flask.png" alt="flask"/>
        </div>
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect"><?php the_field('nrt_section_title');?></h2>
            </div>
            <div class="text-center">
                <p><?php echo the_field('nrt_section_description1');?></p>
                <p><?php echo the_field('nrt_section_description1');?></p>
            </div>
            <div class="nr-det">
                <ul>
                    <?php  
                        if (have_rows('nrt_process')) {
                            while (have_rows('nrt_process')) {
                                the_row(); ?>
                                <li>
                                    <img src="<?php echo the_sub_field('nrt_process_image'); ?>" alt="<?php the_sub_field('nrt_process_title');?>"/>
                                    <h4><?php the_sub_field('nrt_process_title');?><span><?php the_sub_field('nrt_process_description');?> </span></h4>
                                </li>
                            <?php }
                        }
                    ?>
                </ul>
            </div>
            <div class="submit-button text-center">
                <a class="btn-effect blue-back" href="<?php echo the_field('nrt_section_button_link');?>" class="btn-effect"><?php echo the_field('nrt_section_button_name');?></a>
            </div>
        </div>
    </div>
    </div>
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

    <!-- module-9 location  -->
    <div class="footer-before net-sec default-section">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect"><?php echo the_field('before_footer_section_title');?></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="loc-img">
                        <img src="<?php echo the_field('before_footer_section_location_image'); ?>" alt="location-map"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-part">
                        <div class="form-inner net-form form-part">
                            <div class="h2-white">
                                <h2 class="text-noeffect">Have Question? Ask Away</h2>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="673" title="Footer Contact Form"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    echo get_footer();
?>