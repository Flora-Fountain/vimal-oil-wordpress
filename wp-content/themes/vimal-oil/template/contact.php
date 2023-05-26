<?php  
/* 
    Template Name: contact Template 
*/

echo get_header();
?>
    
     <!--module-2 hero banner html code  -->
    <div class="common-banner default-section blue-bg-banner">
        <div class="cb-content">
            <div class="h1-title">
                <h1 class="text-noeffect">Reach out to us!</h1>
            </div>
            <div class="banner-para  text-center">
                <p class="text-noeffect">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                </p>
            </div>
            <div class="submit-button text-center">
                <button class="btn-effect" type="submit">
                    Know More
                </button>
            </div>
        </div>
    </div>

    <!-- module-3 form map section section -->
    <div class="contact-map default-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-part">
                <div class="h2-white">
                    <h2 class="text-noeffect">
                        Have Question? Ask Away
                    </h2>
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
                    <div class="submit-button text-center">
                            <button class="btn-effect" type="submit">
                                Share
                            </button>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="map-part">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29256.186645355134!2d72.35055517253537!3d23.56760554288374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c41a2155d3e6b%3A0xe6f63b06e01d4af8!2sVimal%20Oil%20%26%20Foods%20Ltd.!5e0!3m2!1sen!2sin!4v1685008779027!5m2!1sen!2sin" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- module-4 contact details  -->
    <div class="contact-details default-section footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">
                    We'd love to here from you
                </h2>
            </div>
            <div class="contact-para text-center">
                <p>Chat with our team</p>
            </div>
            <div class="row text-center align-item-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact">
                        <div class="contact-icon">
                            <span>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg" alt="email">
                            </span>
                        </div>
                        <div class="para-title">
                            <p>Chat to sales</p>
                        </div>
                        <div class="contact-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="info">
                            <a href="#">mail@vimaloil.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact">
                        <div class="contact-icon">
                            <span>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-pin.svg" alt="email">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="email">
                            </span>
                        </div>
                        <div class="para-title">
                            <p>Call us</p>
                        </div>
                        <div class="contact-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="info">
                            <a href="#">(+91)xxxxx-xxxxx</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
<?php 
    echo get_footer();
?>