<?php  
/* 
    Template Name: Our Network Template 
*/

echo get_header();
?>
    
    <!--module-2 hero banner html code  -->
    <div class="inner-banner default-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="text-aside">
                        <div class="banner-right">
                            <div class="h1-title">
                                <h1 class="text-noeffect"><span><?php echo the_field('benner_section_title');?></span> <?php the_field('banner_section_sub_title') ?></h1>
                            </div>
                        </div>
                        <div class="submit-button text-center">
                            <a href="<?php echo the_field('banner_button_link') ?>" class="btn-effect"><?php echo the_field('banner_section_button_name');?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                        <img src="<?php echo the_field('banner_image');?>" alt="network-banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-3 our network -->
    <div class="health-section default-section">
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
                    <h2 class="text-noeffect"><?php echo the_field('our_network_section_title');?></h2>
                </div>
                <div class="text-center">
                    <p><?php echo the_field('our_network_section_description') ?></p>
                    <p><?php echo the_field('our_network_section_description') ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 countdown section  -->
    <div class="default-section blue-bg net-cnt">
        <div class="container">
            <div class="counter-main">
                <?php 
                    if (have_rows('countdown_section')) {
                        while (have_rows('countdown_section')) {
                            the_row(); ?>
                            <div class="count-box">
                                <div class="counter" data-count="<?php the_sub_field('countdown_number') ?>"></div><span>+</span>
                                <div class="count-name"><?php the_sub_field('countdown_title') ?></div>
                            </div>
                        <?php }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- module-5 our location  -->
    <div class="footer-before net-sec default-section">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect"><?php the_field('our_location_title');?></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="loc-img">
                        <img src="<?php echo the_field('our_location_image'); ?>" alt="location-map"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-part">
                        <div class="form-inner net-form form-part">
                            <div class="h2-white">
                                <h2 class="text-noeffect">Have Question? Ask Away</h2>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="673" title="Footer Contact Form"]');?>
                            
                            <!-- <div class="form">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    echo get_footer();
?>