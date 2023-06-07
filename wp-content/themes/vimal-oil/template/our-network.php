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
                                <h1 class="text-noeffect"><span>Far and Wide</span> Network</h1>
                            </div>
                        </div>
                        <div class="submit-button text-center">
                            <a href="#" class="btn-effect">Let's Connect</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/network-banner.png" alt="network-banner"/>
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
                    <h2 class="text-noeffect">Our Network</h2>
                </div>
                <div class="text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survi</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 countdown section  -->
    <div class="default-section blue-bg net-cnt">
        <div class="container">
            <div class="counter-main">
                <div class="count-box">
                    <div class="counter" data-count="21"></div><span>+</span>
                    <div class="count-name">STATES</div>
                </div>
                <div class="count-box">
                    <div class="counter" data-count="50"></div><span>+</span>
                    <div class="count-name">DEPOTS</div>
                </div>
                <div class="count-box">
                    <div class="counter" data-count="1500"></div><span>+</span>
                    <div class="count-name">DISTRIBUTORS</div>
                </div>
                <div class="count-box">
                    <div class="counter" data-count="15000"></div><span>+</span>
                    <div class="count-name">STORES</div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-5 our location  -->
    <div class="footer-before net-sec default-section">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">Our locations</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="loc-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-map.png" alt="location-map"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-part">
                        <div class="form-inner net-form form-part">
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
                                    <button class="btn-effect" type="submit">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    echo get_footer();
?>