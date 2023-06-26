<?php 
    get_header();
?>
<?php 
    // global $product;
     
    $product = get_product(get_the_id());
    // die;
    // echo '<div style="background-color:'.get_field('product_background_color',$product->get_id()).'">';
    // echo "<center><br><br><br><br><br>";
    // echo $product->get_image()."<br><br>";
    $product_name = $product->get_name();
    $product_gellery_id = $product->get_gallery_image_ids();
    // $product_gellery_image = wp_get_attachment_image_src($product_gellery_id);
    // echo "</center></div>"; 
    // var_dump($product_gellery_image);
    // die;
?>
    <!--module-2 hero banner html code  -->
    <div class="default-section blue-bg-banner product-single-banner hero-banner">
            <div class="container-fluid">
                <div class="banner-slider owl-carousel owl-theme">
                    <?php 
                        foreach ($product_gellery_id as $gellery_id) {
                            $image_link = wp_get_attachment_url( $gellery_id ); ?>
                            <div class="item">
                                <div class="banner-info">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="banner-right">
                                                <div class="h1-title">
                                                    <h1 class="text-noeffect"><?php echo $product_name;; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="banner-left product-img">
                                                <img src="<?php echo $image_link; ?>" alt="kachi ghani oil" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <?php }?>
                </div>
            </div> 
    </div>

    <!-- module-3 oil details -->

    <div class="default-section oil-details pro-ani">
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
        <div class="container">
            <div class="row align-items-center">
                <div class="default-section oil-details">
                    <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="oil-det-right">
                            <div class="h2-white">
                                <h2 class="text-noeffect"><?php the_field('product_name');?></h2>
                            </div>
                            <div class="oil-para">
                                <p><?php echo the_field('product_description');?></p>
                            </div>
                            <div class="oil-size">
                                <div class="h4-title">
                                    <h4 class="text-noeffect">
                                        Size available
                                    </h4>
                                </div>
                                <div class="size-icon">
                                    <?php $size_array = get_field('product_available_size'); 
                                        // $size = implode(",",$size_array);
                                        foreach ($size_array as $size) { ?>
                                            <div class="size">
                                                <a href="#"><?php echo $size;?></a>
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                            </div>
                            <div class="shop-button">
                                <div class="h3-title">
                                    <h3 class="text-noeffect">
                                        <?php echo the_field('shop_button_title');?>
                                    </h3>
                                </div>
                                <div class="buy-btn">
                                    <?php 
                                        if (have_rows('shop_button')) {
                                            while (have_rows('shop_button')) {
                                                the_row(); ?>
                                                <!-- echo the_sub_field('shop_button_brand_name'); -->
                                                <a href="<?php echo the_sub_field('shop_brand_link'); ?>">
                                                    <span>
                                                        <img src="<?php echo the_sub_field('shop_button_image'); ?>" alt="<?php echo the_sub_field('shop_button_brand_name');?>"><?php echo the_sub_field('shop_button_brand_name');?>
                                                    </span>
                                                </a>
                                        <?php }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="product-accor">
                            <div class="accordion" id="accordionExample">
                                <?php 
                                    $count = 1;
                                    if (have_rows('product_accordion')) {
                                        while (have_rows('product_accordion')) {
                                            the_row(); ?>
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="heading<?php echo $count;?>">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count;?>" aria-expanded="<?php if ($count == 1) { echo "true";} else{echo "false";} ?>" aria-controls="collapse<?php echo $count;?>">
                                                        <span>
                                                            <img src="<?php echo the_sub_field('product_accordion_image'); ?>" alt="<?php echo the_sub_field('product_accordion_title'); ?>">
                                                            <?php echo the_sub_field('product_accordion_title'); ?>
                                                        </span>
                                                    </button>
                                                </h4>
                                                <div id="collapse<?php echo $count;?>" class="accordion-collapse collapse <?php if ($count == 1) { echo "show";}?> " aria-labelledby="heading<?php echo $count;?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p><?php echo the_sub_field('product_accordion_description') ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                            $count++;    
                                    }
                                        
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- module-4 oil benefits section  -->
    <div class="default-section blue-bg oil-benefits-sec">
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
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="benefits-part-left">
                            <div class="h2-blue">
                                <h2 class="text-noeffect">
                                    <?php echo the_field('benefits_section_title');?>
                                </h2>
                            </div>
                            <div class="b-para">
                                <p><?php echo the_field('benefits_section_description') ?></p>
                            </div>
                            <div class="product-accor must-oil-accor">
                                <div class="accordion" id="accordionExample2">
                                    <?php 
                                    $count = 1;
                                        if (have_rows('benefits_section_accordion')) {
                                            while (have_rows('benefits_section_accordion')) {
                                                the_row(); ?>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-header" id="heading<?php echo $count;?>2">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count;?>2" aria-expanded="<?php if ($count == 1) { echo "true";} else{echo "false";} ?>" aria-controls="collapse<?php echo $count;?>2">
                                                            <span>
                                                                <img src="<?php echo the_sub_field('benefits_section_accordion_image'); ?>" alt="Nutrition Facts">
                                                                <?php echo the_sub_field('benefits_section_accordion_title');?>
                                                            </span>
                                                        </button>
                                                    </h4>
                                                    <div id="collapse<?php echo $count;?>2" class="accordion-collapse collapse <?php if ($count == 1) { echo "show";}?>" aria-labelledby="heading<?php echo $count;?>2" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <div class="fat-hd">
                                                                <p class="mb-0">Per Serving*</p>
                                                            </div>
                                                            <?php 
                                                                if (have_rows('per_serving_accordion')) {
                                                                    while (have_rows('per_serving_accordion')) {
                                                                        the_row();?>
                                                                        <div class="accor-body-cont">
                                                                            <div class=""><?php echo the_sub_field('per_serving_name');?></div>
                                                                            <div class=""><?php echo  the_sub_field('per_serving_units'); ?></div>
                                                                        </div>
                                                                    <?php }
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php $count++; }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="benefits-part-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-oil.png" alt="Oil Benefits">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- module-5 faq section  -->
    <div class="default-section faq-sec footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect"><?php the_field('faq_main_title');?></h2>
            </div>
            <div class="faq-item">
                <div class="accordion" id="accordionExampleThree">
                    <?php 
                        $count = 1;
                        if (have_rows('faq_accordion')) {
                            while (have_rows('faq_accordion')) {
                                the_row();?>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="heading<?php echo $count;?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count;?>" aria-expanded="<?php if ($count == 1) { echo "true";} else{echo "false";} ?>" aria-controls="collapse<?php echo $count;?>">
                                                <span>
                                                    <?php echo  the_sub_field('faq_accordion_title') ?>
                                                </span>
                                            </button>
                                        </h4>
                                        <div id="collapse<?php echo $count;?>" class="accordion-collapse collapse <?php if ($count == 1) { echo "show";}?>" aria-labelledby="heading<?php echo $count;?>" data-bs-parent="#accordionExampleThree">
                                            <div class="accordion-body">
                                                <p><?php echo the_sub_field('faq_accordion_description');?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php $count++; }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>