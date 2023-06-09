<?php  
/* 
    Template Name: About Us Template 
*/
echo get_header();
?>

    <!--module-2 hero banner html code   -->
    <div class="hero-banner video-banner blue-bg-banner">
        <video autoplay muted loop id="video">
            <source src="<?php echo the_field('benner_video'); ?>" type="video/mp4">
        </video>
        <div class="text-middle">
            <div class="banner-right">
                <div class="h1-title">
                    <h1 class="text-noeffect"><?php the_field('benner_title');?> <span><?php the_field('benner_sub_title');?></span></h1>
                </div>
            </div>
            <div class="hash-sec">
                <span><?php echo the_field('benner_hash_tag_text');?></span>
            </div>
            <div class="submit-button text-center">
                <a href="<?php echo the_field('benner_button_link') ?>" class="btn-effect" type="submit">
                    <?php echo the_field('benner_button_name');?>
                </a>
            </div>
        </div>
    </div>

    <!-- module-3 about vimal oil section -->
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
            </div>
            <div class="container">
                <div class="h2-white">
                    <h2 class="text-noeffect"><?php echo the_field('about_title');?></h2>
                </div>
                <div class="text-center">
                    <p><?php echo the_field('about_description1');?></p>
                    <p><?php echo the_field('about_description2');?></p>
                    <img class="img-mx" src="<?php echo the_field('about_tagline_img'); ?>" alt="tagline-img.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 journey setion  -->
    <div class="vimal-journey default-section blue-bg" id="vimal-journey">
        <div class="container">
            <div class="h2-blue">
                <h2 class="text-noeffect">The journey <br/>of Health & Happiness!</h2>
            </div>
            <div class="row align-items-center">
                <div class="jorney-main">
                    <!-- <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="tab-content" id="v-pills-tabContent">
                               
                                <div class="tab-pane fade active" id="v-pills-1993" role="tabpanel" aria-labelledby="v-pills-1993-tab" tabindex="0">
                                    <div class="row align-items-center">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1993.png" alt="1993" width="80" height="80"/>
                                    <span>1993</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2010-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2010" type="button" role="tab" aria-controls="v-pills-2010" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993" width="80" height="80"/>
                                    <span>2010</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2015-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2015" type="button" role="tab" aria-controls="v-pills-2015" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993" width="80" height="80"/>
                                    <span>2015</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2018" type="button" role="tab" aria-controls="v-pills-2018" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2010.png" alt="1993" width="80" height="80"/>
                                    <span>2023</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2018-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020" type="button" role="tab" aria-controls="v-pills-2020" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993" width="80" height="80"/>
                                    <span>2020</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993" width="80" height="80"/>
                                    <span>2022</span>
                                </button>
                                <button class="nav-link item" id="v-pills-2022-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022" type="button" role="tab" aria-controls="v-pills-2022" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015.png" alt="1993" width="80" height="80"/>
                                    <span>2022</span>
                                </button>
                            </div>
                        </div>
                    </div> -->
                    <div class="row align-items-center">
                <div class="jorney-main">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php 
                                    $count = 1;
                                    if (have_rows('main_jorney_section')) {
                                        while (have_rows('main_jorney_section')) {
                                            the_row(); ?>
                                            <div class="tab-pane fade <?php if ($count == 1) {echo "active"; } ?> " id="v-pills-<?php echo the_sub_field('main_jorney_year'); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo the_sub_field('main_jorney_year'); ?>-tab" tabindex="0">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                                        <div class="slide-img">
                                                            <img src="<?php echo the_sub_field('main_jorney_image'); ?>" alt="<?php echo the_sub_field('main_jorney_year'); ?>-main" width="550" height="550"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                                        <div class="j-para">
                                                            <span class="j-year"><?php echo the_sub_field('main_jorney_year'); ?></span>
                                                            <p><?php echo the_sub_field('main_jorney_description'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $count++; }
                                    }
                                ?>


                                <!-- <div class="tab-pane fade active" id="v-pills-1993" role="tabpanel" aria-labelledby="v-pills-1993-tab" tabindex="0">
                                    <div class="row align-items-center">
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
                                <div class="tab-pane fade show active" id="v-pills-1993" role="tabpanel" aria-labelledby="v-pills-1993-tab" tabindex="0">
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-2010" role="tabpanel" aria-labelledby="v-pills-2010-tab" tabindex="0">
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-2015" role="tabpanel" aria-labelledby="v-pills-2015-tab" tabindex="0">
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-2018" role="tabpanel" aria-labelledby="v-pills-2018-tab" tabindex="0">
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-2020" role="tabpanel" aria-labelledby="v-pills-2020-tab" tabindex="0">
                                    
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
                                </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="nav flex-row nav-pills owl-carousel owl-tabbing-jour owl-theme" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                    $counts = 1;
                                    if (have_rows('jorney_section_image_&_year')) {
                                        while (have_rows('jorney_section_image_&_year')) {
                                            the_row(); ?>
                                            <button class="nav-link item <?php if ($counts == 1) {echo "active";} ?> " id="v-pills-<?php the_sub_field('jorney_section_year');?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php the_sub_field('jorney_section_year');?>" type="button" role="tab" aria-controls="v-pills-<?php the_sub_field('jorney_section_year');?>" aria-selected="<?php if ($counts == 1) { echo "true";} else{echo "false";} ?>">
                                                <img src="<?php the_sub_field('jorney_section_image'); ?>" alt="<?php the_sub_field('jorney_section_year');?>" width="80" height="80" />
                                                <span><?php the_sub_field('jorney_section_year');?></span>
                                            </button>
                                        <?php $counts++; }
                                    }
                                ?>
                                <!-- <button class="nav-link item active" id="v-pills-1993-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1993" type="button" role="tab" aria-controls="v-pills-1993" aria-selected="true">
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
                                </button> -->
                           
                        </div>
                    </div>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- module-5 our mission section  -->
    <div class="health-section default-section cnt-sec">
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
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="stats-desc">
                            <div class="h2-white">
                                <h2 class="text-noeffect"><?php echo the_field('state_section_title');?></h2>
                            </div>
                            <p><?php echo the_field('states_description');?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="counter-main">
                            <?php 
                                if (have_rows('states_counts')) {
                                    while (have_rows('states_counts')) {
                                        the_row(); ?>
                                        <div class="count-box">
                                            <div class="counter" data-count="<?php echo the_sub_field('state_count_number');?>"></div><span>+</span>
                                            <div class="count-name"><?php echo the_sub_field('states_count_name') ?></div>
                                        </div>
                                    <?php }
                                }
                            ?>
                            <!-- <div class="count-box">
                                <div class="counter" data-count="2000"></div><span>+</span>
                                <div class="count-name">Cans Produce</div>
                            </div>
                            <div class="count-box">
                                <div class="counter" data-count="2000"></div><span>+</span>
                                <div class="count-name">Cans Produce</div>
                            </div>
                            <div class="count-box">
                                <div class="counter" data-count="2000"></div><span>+</span>
                                <div class="count-name">Cans Produce</div>
                            </div>
                            <div class="count-box">
                                <div class="counter" data-count="2000"></div><span>+</span>
                                <div class="count-name">Cans Produce</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-6 change for health  -->
    <div class="vimal-journey default-section blue-bg" id="vimal-cfh">
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
            <div class="gen-sec">
                <div class="h2-blue">
                    <h2 class="text-noeffect"><?php echo the_field('change_for_health_section_title');?></h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="http://localhost/vimal-oil-wordpress/wp-content/uploads/2023/06/oil-heart.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p><?php the_field('change_for_health_section_description1');?></p>
                        <p><?php the_field('change_for_health_section_description2');?></p>
                    </div>
                </div>
                <div class="submit-button text-center">
                    <a href="<?php the_field(('change_for_health_section_link')) ?>" class="btn-effect" type="submit"><?php the_field(('change_for_health_section_button_name')) ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- module-7 nrt section  -->
    <div class="nrt-sec footer-before default-section">
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
                <p><?php echo the_field('nrt_description1'); ?></p>
                <p><?php echo the_field('nrt_description2'); ?></p>
            </div>
            <div class="nr-det">
                <ul>
                    <?php 
                        if (have_rows('process')) {
                            while (have_rows('process')) {
                                the_row(); ?>
                                <li>
                                    <img src="<?php echo the_sub_field('process_image');?>" alt="temperature"/>
                                    <h4><?php echo the_sub_field('process_name');?><span><?php echo the_sub_field('process_description');?> </span></h4>
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
                <a href="<?php echo the_field('nrt_button_link');?>" class="btn-effect blue-back" type="submit"><?php echo the_field('nrt_button_name');?></a>
            </div>
        </div>
    </div>
    
<?php 
    echo get_footer();