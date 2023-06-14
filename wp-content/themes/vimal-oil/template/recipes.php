<?php  
/* 
    Template Name: Recipes Template 
*/

echo get_header();
?>

<!--module-2 hero banner html code  -->
<div class="hero-banner video-banner blue-bg-banner recipes-sec">
        <video autoplay muted loop id="video">
            <source src="<?php echo the_field('banner_section_video'); ?>" type="video/mp4">
        </video>
        <div class="text-middle">
            <div class="banner-right">
                <div class="h1-title">
                    <h1 class="text-noeffect"><?php echo the_field('banner_section_title');?></h1>
                </div>
            </div>
            <div class="max-para">
                <p><?php echo the_field('banner_section_description'); ?></p>
            </div>
            <div class="submit-button text-center">
                <a href="<?php echo  the_field('banner_section_link');?>" class="btn-effect" type="submit"><?php echo the_field('banner_section_button_name');?></a>
            </div>
        </div>
</div>


<!-- module-3 recipe section -->
<div class="health-section default-section recipe-section reci-sec footer-before">
    <div class="container">
        <div class="h2-white">
            <h2 class="text-noeffect"><?php echo the_field('recipe_section_title');?></h2>
        </div>
        <div class="text-center max-para">
            <p><?php echo the_field('recipe_section_description');?></p>
        </div>
        <div class="row align-items-center">
            <?php 
                if (have_rows('recipe_section_videos')) {
                    while (have_rows('recipe_section_videos')) {
                        the_row();?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="recipe-video">
                                <div class="item">
                                    <div class="cook-video">
                                        <img src="<?php echo the_sub_field('youtube_video_thumbnail_image'); ?>" alt="vimal oil">
                                        <button aria-label="Video Play" data-src="<?php the_sub_field('youtube_video_link');?>" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                                        </button>  
                                    </div>
                                    <div class="reci-video-des">
                                            <div class="h3-title">
                                                <h3><?php echo the_sub_field('youtube_video_title');?></h3>
                                            </div>
                                            <p><?php echo the_sub_field('youtube_video_description');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                }
            ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="recipe-video">
                    <div class="item">
                        <div class="cook-video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-video-img.jpg" alt="vimal oil">
                            <button aria-label="Video Play" data-src="https://www.youtube.com/embed/1WudR5boKGc" data-modal="videoPlaypopup" type="button" class="wl-modal-btn video-play-btn">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.286 3.407A1.5 1.5 0 0 0 6 4.684v14.632a1.5 1.5 0 0 0 2.286 1.277l11.888-7.316a1.5 1.5 0 0 0 0-2.555L8.286 3.407z"></path></svg></span>
                            </button>  
                        </div>
                        <div class="reci-video-des">
                                <div class="h3-title">
                                    <h3>Aloo Patties</h3>
                                </div>
                                <p>simply dummy text of the printing and typesetting industry. Loremg and typesetting industry. Lorem</p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
        
    </div>
</div>
    
<?php 
    echo get_footer();
?>