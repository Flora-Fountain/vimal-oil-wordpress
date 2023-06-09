<?php  
/* 
    Template Name: contact Template 
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
                                <h1 class="text-noeffect">Reach out to us!</h1>
                            </div>
                        </div>
                        <div class="head-para">
                            <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit amet consectetur adipisicing elit</p>
                        </div>
                        <div class="submit-button text-center">
                            <a href="#" class="btn-effect">Let's Connect</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-banner-image.png" alt="contact us">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-3 form map section section -->
    <div class="contact-map default-section">
        <div class="container">
            <div class="row align-items-center">
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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="map-part">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29256.186645355134!2d72.35055517253537!3d23.56760554288374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c41a2155d3e6b%3A0xe6f63b06e01d4af8!2sVimal%20Oil%20%26%20Foods%20Ltd.!5e0!3m2!1sen!2sin!4v1685008779027!5m2!1sen!2sin" width="800" height="595" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 contact details  -->
    <div class="default-section contact-details footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">
                    We'd love to here from you
                </h2>
            </div>
            <div class="h3-title">
                <h3 class="text-noeffect">Chat with our team</h3>
            </div>
            <div class="row text-center align-item-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact">
                        <div class="contact-icon">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path id="envelope" class="cls-1" d="M18,5H6A2.652,2.652,0,0,0,3,8v9a2.652,2.652,0,0,0,3,3H18a2.652,2.652,0,0,0,3-3V8A2.652,2.652,0,0,0,18,5Zm-.059,4.606-4.912,3.573a1.748,1.748,0,0,1-2.058,0L6.059,9.606a.749.749,0,1,1,.882-1.212l4.913,3.572a.248.248,0,0,0,.292,0l4.913-3.572a.749.749,0,0,1,.882,1.212Z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="para-title">
                            <p>Chat to sales</p>
                        </div>
                        <div class="contact-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="info">
                            <a href="mailto:mail@vimaloil.com">mail@vimaloil.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact">
                        <div class="contact-icon">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path id="location-pin" class="cls-1" d="M12,2.5A8.51,8.51,0,0,0,3.5,11c0,4.983,4.629,8.041,7.692,10.064l.531.352a.5.5,0,0,0,.554,0l.531-.352C15.871,19.041,20.5,15.983,20.5,11A8.51,8.51,0,0,0,12,2.5Zm0,11A2.5,2.5,0,1,1,14.5,11,2.5,2.5,0,0,1,12,13.5Z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="para-title">
                            <p>Visit us</p>
                        </div>
                        <div class="contact-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact">
                        <div class="contact-icon">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer" viewBox="0 0 24 24"><defs><style>.cls-1{fill:#ffffff;}</style></defs><path id="phone" class="cls-1" d="M17.625,14.174l2.642,1.576a1.5,1.5,0,0,1,.7,1.583h0a4.526,4.526,0,0,1-5.6,3.508A17.44,17.44,0,0,1,3.159,8.635a4.526,4.526,0,0,1,3.507-5.6l.016,0a1.5,1.5,0,0,1,1.587.707l1.564,2.64A2.051,2.051,0,0,1,9.2,9.128L7.543,10.233a11.6,11.6,0,0,0,6.211,6.226l1.115-1.665A2.052,2.052,0,0,1,17.625,14.174Z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="para-title">
                            <p>Call us</p>
                        </div>
                        <div class="contact-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="info">
                            <a href="tel:+91xxxxx-xxxxx">(+91)xxxxx-xxxxx</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
<?php 
    echo get_footer();
?>