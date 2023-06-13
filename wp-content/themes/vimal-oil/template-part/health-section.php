<!-- module-3 health section -->
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
                    <h2 class="text-noeffect"><?php the_field('helth_section_title');    ?></h2>
                </div>
                <div class="sub-text">
                    <p><?php the_field('helth_section_description');?></p>
                </div>
                <div class="align-items-center">
                    <div class="owl">
                        <div class="pro-vdo-sld owl-carousel owl-theme">
                            <?php 
                                if (have_rows('youtube_video')) {
                                    while (have_rows('youtube_video')) {
                                        the_row(); ?>
                                            <div class="item">
                                                <div class="video-sld">
                                                    <img src="<?php echo the_sub_field('youtube_video_thumbnail_image'); ?>" width="366" height="720"/>
                                                    <button aria-label="Video Play" data-src="<?php echo the_sub_field('youtube_video_link'); ?>" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
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
                        <?php echo the_field('health_section_button_name'); ?>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>