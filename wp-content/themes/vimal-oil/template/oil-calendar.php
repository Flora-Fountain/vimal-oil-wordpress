<?php  
/* 
    Template Name: Oil Calendar 
*/

echo get_header();
?>
    
    <!--module-2 hero banner html code  -->
    <div class="inner-banner default-section ani rev-col" id="ani">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 colp-md-6 col-sm-12">
                    <div class="text-aside">
                        <div class="banner-right">
                            <div class="h1-title">
                                <h1 class="text-noeffect">
                                    <span class="white-text"><?php echo the_field('banner_title');?></span>
                                    <?php echo the_field('banner_sub_title');?>
                                </h1>
                            </div>
                        </div>
                        <div class="head-para">
                            <p>Lorem ipsum is simply dummy text of printing and typesetting industries</p>
                        </div>
                        <div class="submit-button text-center">
                            <a href="<?php echo the_field('banner_button_link');?>" class="btn-effect" type="submit">
                                <?php the_field('button_name');?>
                            </a>
                            <a href="#" class="btn-effect" type="submit">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 colp-md-6 col-sm-12">
                <div class="quiz-cel" id="con-run">
						<div class="box-image text-center">
                            <img src="<?php echo the_field('banner_gift_box_image'); ?>" alt="quiz end banner image" />
                        </div>
                        <div class="oil-cans">
                            <img src="<?php echo the_field('banner_oil_cans_image'); ?>" alt="quiz end banner image" />
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Product -->
    <?php 
         $args = array(
            'post_type' => 'product',
            'status'    => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',

        );
    
        $products = wc_get_products( $args );
        // echo "<pre>";
        // print_r($products);
        // die;
    ?>
    <div class="calender-product default-section footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">Here’s your oil calendar</h2>
            </div>
            <div class="row">
                <?php 
                    foreach ($products as $product) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product->get_id()));
                        $color = get_field('product_background_color',$product->get_id()); ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="winter-oil season-oil" style="background:<?php echo $color;?>">
                        <div class="pr-name">
                            <div class="pro-img">
                                <img src="<?php print_r($image['0']);?>" alt="oil for winter" width="153px" height="225px">

                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oil-tikha-kachi-ghani.png" alt="oil for winter" width="153px" height="225px"> -->

                            </div>
                            <div class="h3-title">
                                <h3 class="text-noeffect">
                                    <span><?php echo the_field('season_name',$product->get_id()); ?></span> <br>
                                    <?php echo $product->get_title();?>
                                </h3>
                            </div>
                        </div>
                        <div class="season-benefits">
                            <?php echo the_field('season_description',$product->get_id());?>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima quis sunt alias animi, ipsum totam maiores beatae eius voluptatum magnam rem culpa</p> -->
                        </div>
                        <div class="h3-title text-center">
                            <h3 class="text-noeffect">Buy now on</h3>
                        </div>
                        <div class="buy-btn">

                            <?php 
                                if (have_rows('shop_button',$product->get_id())) {
                                    while (have_rows('shop_button',$product->get_id())) {
                                        the_row(); ?>
                                        <!-- echo the_sub_field('shop_button_brand_name'); -->
                                        <a href="<?php echo the_sub_field('shop_brand_link',$product->get_id()); ?>">
                                            <span>
                                                <img src="<?php echo the_sub_field('shop_button_image',$product->get_id()); ?>" alt="<?php echo the_sub_field('shop_button_brand_name',$product->get_id());?>"><?php echo the_sub_field('shop_button_brand_name',$product->get_id());?>
                                            </span>
                                        </a>
                                    <?php }
                                }
                            ?>
                            <!-- <a href="#">
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amazon_logo.png" alt="amazon logo" />Amazon
                                </span>
                            </a>
                            <a href="#">
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jiomart_logo.png" alt="jiomart logo" />JioMart
                                </span>
                            </a> -->
                        </div>
                    </div>
                </div>
                    <?php }
                ?>
            </div>
            <div class="row align-items-center justify-content-center mt-5">
                <div class="h2-white">
                    <h2 class="text-noeffect">
                        Email my oil calender
                    </h2>
                </div>
                <div class="form-group text-center">
                    <input type="email" class="email-form" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="submit-button text-center">
                    <a href="#" class="btn-effect blue-back">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    echo get_footer();
?>