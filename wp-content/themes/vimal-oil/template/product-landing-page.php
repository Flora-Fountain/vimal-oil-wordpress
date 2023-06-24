<?php  
/* 
    Template Name: Product Landing  Template 
*/

echo get_header();
?>
    
<!--module-2 hero banner html code  -->

<div class="inner-banner default-section product-banner pb-0 swap-col-mob">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="banner-left">
                    <img src="<?php echo the_field('benner_image');?>" alt="privacy policy kiara image">
            </div>
                
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-middle">
                <div class="banner-right">
                    <div class="h1-title">
                        <h1 class="text-noeffect"><?php echo the_field('benner_title');?> <span><?php echo the_field('benner_sub_title'); ?></span></h1>
                    </div>
                </div>
                <div class="hash-sec">
                    <span class="text-center"><?php echo  the_field('benner_hash_tag_text') ?></span>
                </div>
                <div class="submit-button text-center">
                    <a href="<?php echo the_field('benner_button_link') ?>" class="btn-effect"><?php echo the_field('benner_button_name'); ?></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- module-3 about cooking oil section -->
<div class="health-section default-section product-cook-oil">
        <div class="leaf-sec prod-leaf-sec">
            <div class="falling-leaf cook-fall-leaf">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-flower-blur.png" alt="blur-leaf">
                </div>
            </div>
            <div class="floating-ele after-banner cook-oil-float-ele">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peanut.png" alt="yellow-flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundnut-clear.png" alt="white-flower">
            </div>
            <div class="container">
                <div class="h2-white">
                    <h2 class="text-noeffect"><?php echo  the_field('cook_oil_section_title'); ?></h2>
                </div>
                <div class="text-center">
                    <p><?php echo the_field('cook_oil_section_description'); ?></p>
                    <span class="cook-oil-sec-hd">“<?php echo  the_field('cook_oil_section_center_text');?>”</span>
                </div>
            </div>
        </div>
</div>
<!-- Get Product -->
<?php 
         $args = array(
            'post_type' => 'product',
            'status'    => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
        );
    
        $products = wc_get_products( $args );
    ?>
    <!-- module-4 product section  -->
    <div class="default-section product-section blue-bg">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect"><?php echo the_field('product_title');?></h2>
            </div>
            <div class="row">
                <?php 
                    foreach ($products as $product) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product->get_id()));
                        $color = get_field('product_background_color',$product->get_id()); ?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="<?php echo the_permalink($product->get_id());?>">
                            <div class="prod-item">
                                <div class="pro-sld-main <?php if($color == '#e2c722'){echo "ylw";} ?>" style="background:<?php echo $color;?>" >
                                    <img src="<?php print_r($image['0']);?>" alt="vimal-cottonseed-oil-slider" width="259" height="390">
                                    <!-- <a href="<?php echo the_permalink($product->get_id());?>"><?php echo $product->get_title();?></a> -->
                                    <p><?php echo $product->get_title();?></p>
                                </div>
                            </div>
                        </a>
                        </div>
                    <?php }
                ?>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main light-blue">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-cottonseed-oil-slider.png" alt="vimal-cottonseed-oil-slider" width="259" height="390">
                            <a href="#">Refined Cottonseed Oil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main red">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-kachi-ghani-oil-slider.png" alt="vimal-kachi-ghani-oil-slider" width="259" height="390">
                            <a href="#">Tikha Kachi Ghani Musterd Oil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main ylw">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-pure-gold-groundnut-oil-slider.png" alt="vimal-pure-gold-groundnut-oil-slider" width="259" height="390">
                            <a href="#">Pure Gold Groundnut Oil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main grn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-soyahary-soyabean-oil-slider.png" alt="vimal-soyahary-soyabean-oil-slider" width="259" height="390">
                            <a href="#">Soyahart Refined Soyabean Oil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main red">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-sunhart-oil-slider.png" alt="vimal-sunhart-oil-slider" width="259" height="390">
                            <a href="#">Sunhart Refined Sunflower Oil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="prod-item">
                        <div class="pro-sld-main light-blue">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vimal-cottonseed-oil-slider.png" alt="vimal-cottonseed-oil-slider" width="259" height="390">
                            <a href="#">Refined Cottonseed Oil</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="h3-title">
                <h3 class="text-noeffect"><?php echo  the_field('button_section_title'); ?></h3>
            </div>
            <div class="buy-btn">
                <?php 
                    if (have_rows('buy_now_button')) {
                        while (have_rows('buy_now_button')) {
                            the_row();?>
                            <a href="<?php echo  the_sub_field('buy_now_button_link') ?>">
                                <span>
                                    <img src="<?php echo the_sub_field('buy_now_button_logo'); ?>" alt="<?php the_sub_field('buy_now_button_brand_name'); ?>" /><?php the_sub_field('buy_now_button_brand_name'); ?>
                                </span>
                            </a>
                        <?php }
                    }
                ?>
            </div>

        </div>
    </div>

<!-- module-5 nrt-section  -->
<div class="default-section nrt-sec footer-before">
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
            <h2 class="text-noeffect"><?php echo the_field('nrt_title');?></h2>
        </div>
        <div class="text-center">
            <p><?php echo the_field('nrt_description1');?></p>
            <p><?php echo the_field('nrt_description2');?></p>
        </div>
        <div class="nr-det">
            <ul>
                <?php 
                    if (have_rows('process')) {
                        while (have_rows('process')) {
                            the_row(); ?>
                                <li>
                                    <img src="<?php echo the_sub_field('process_image'); ?>" alt="temperature"/>
                                    <h4><?php echo the_sub_field('process_title') ?><span><?php echo the_sub_field('process_description');?> </span></h4>
                                </li>                
                        <?php }
                    }
                ?>
                <!-- <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/temperature.png" alt="temperature"/>
                    <h4>Temperature<span>Lorem Ipsum is simply dummy text of the </span></h4>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.png" alt="time"/>
                    <h4>TIme<span>Lorem Ipsum is simply dummy text of the </span></h4>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pressure.png" alt="pressure"/>
                    <h4>Pressure<span>Lorem Ipsum is simply dummy text of the </span></h4>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vacuum.png" alt="vacuum"/>
                    <h4>Vacuum<span>Lorem Ipsum is simply dummy text of the </span></h4>
                </li> -->
            </ul>
        </div>
        <div class="submit-button text-center">
            <a href="<?php echo the_field('nrt_section_button_link'); ?>" class="btn-effect blue-back" type="submit"><?php echo the_field('nrt_section_button_name'); ?></a>
        </div>
    </div>
</div>
<?php 
    echo get_footer();
?>