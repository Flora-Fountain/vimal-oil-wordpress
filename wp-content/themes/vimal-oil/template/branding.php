<?php  
/* 
    Template Name: Branding Template 
*/

echo get_header();
?>
    
    <!--module-2 hero banner html code  -->
    <div class="inner-banner default-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 colp-md-6 col-sm-12">
                    <div class="text-aside">
                        <div class="banner-right">
                            <div class="h1-title">
                                <h1 class="text-noeffect"><span><?php echo the_field('benner_section_title'); ?></span> <?php echo the_field('benner_section_sub_title');?></h1>
                            </div>
                        </div>
                        <div class="submit-button text-center">
                            <a href="<?php echo the_field('benner_section_button_link'); ?>" class="btn-effect"><?php echo the_field('benner_section_button_name');?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 colp-md-6 col-sm-12">
                    <div class="social-post">
                        <div class="post post-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                        <div class="post post-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                        <div class="post post-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                        <div class="post post-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                        <div class="post post-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                        <div class="post post-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta-post.png" alt="Instagram Post">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-3 change health with kiara -->
    <div class="health-section default-section">
        <div class="leaf-sec">
            <div class="falling-leaf">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf"/>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf"/>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leaf.png" alt="blur-leaf"/>
                </div>
            </div>
            <div class="container">
                <div class="h2-white">
                    <h2 class="text-noeffect"><?php echo the_field('helth_section_title'); ?></h2>
                </div>
                <div class="sub-text">
                    <p><?php echo the_field('helth_section_description'); ?></p>
                </div>
                <div class="align-items-center">
                    <div class="owl">
                        <div class="pro-vdo-sld owl-carousel owl-theme">
                            <?php 
                                if (have_rows('youtube_video')) {
                                    while (have_rows('youtube_video')) {
                                        the_row();?>
                                        <div class="item">
                                            <div class="video-sld">
                                                <img src="<?php echo the_sub_field('youtube_video_thumbnail_image'); ?>" width="366" height="720"/>
                                                <button aria-label="Video Play" data-src="<?php echo the_sub_field('youtube_video_link');?>" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"/></svg></span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="submit-button text-center">
                        <a href="<?php echo the_field('health_section_button_page_link'); ?>" class="btn-effect blue-back" type="submit">
                            <?php echo the_field('health_section_button_name') ?>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 journey section  -->
    <div class="vimal-journey default-section blue-bg">
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
            <div class="gen-sec">
                <div class="h2-blue">
                    <h2 class="text-noeffect"><?php echo the_field('change_for_health_title'); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php echo the_field('change_for_health_image'); ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p><?php echo the_field('change_for_health_description1'); ?></p>
                        <p><?php echo the_field('change_for_health_description2'); ?></p>
                    </div>
                </div>
                <div class="submit-button text-center">
                    <a href="<?php echo the_field('change_for_health_button_link');?>" class="btn-effect" type="submit">
                        <?php echo the_field('change_for_health_button_name');?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="tvc-section default-section">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">
                    <?php echo the_field('our_tvcs_section_title');?>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" id="tvc-carousel">
                        <?php 
                            if (have_rows('tvcs_youtube')) {
                                while (have_rows('tvcs_youtube')) {
                                    the_row(); ?>
                                    <div class="tvc-owl">
                                        <div class="tvc-content">
                                            <p><?php echo the_sub_field('tvcs_youtube_video_title');?></p>
                                        </div>
                                        <div class="tvc-video">
                                            <img src="<?php echo the_sub_field('tvcs_youtube_video_background_image'); ?>"  alt="vimal oil">
                                            <button aria-label="Video Play" data-src="<?php echo the_sub_field('tvcs_youtube_video_iink'); ?>" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                                            </button>  
                                        </div>
                                    </div>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- module-6 billbooard section  -->
    <div class="billboard-section default-section footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">
                    <?php echo the_field('billboard_section_title');?>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel billboard-carousel" id="billboard-carousel">
                        <?php  
                            if (have_rows('billboard_image')) {
                                while (have_rows('billboard_image')) {
                                    the_row(); ?>
                                    <div class="billboard-owl">
                                        <img src="<?php echo the_sub_field('billboard_section_image'); ?>" alt="">
                                    </div>      
                                <?php }
                            }
                        ?>
                        <!-- <div class="board-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="billboard-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="billboard-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="billboard-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="billboard-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="billboard-owl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billboard.png" alt="">
                        </div>
                        <div class="bill -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    echo get_footer();
?>