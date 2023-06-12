<?php  
/* 
    Template Name: Privacy Policy Template 
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
                                <h1 class="text-noeffect"><?php echo the_field('privacy_policy_benner_title');?></h1>
                            </div>
                        </div>
                        <div class="submit-button text-center">
                            <a href="<?php echo the_field('privacy_policy_benner_button_link') ?>" class="btn-effect"><?php the_field('privacy_policy_benner_button_name');?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                        <img src="<?php echo the_field('privacy_policy_benner_image'); ?>" alt="privacy policy kiara image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="default-section privacy-policy footer-before ">
        <div class="container">

        <?php 
            if (have_rows('privacy_policy_section')) {
                while (have_rows('privacy_policy_section')) {
                    the_row(); ?>
                    <div class="h2-white">
                        <h2 class="text-noeffect">
                            <?php echo the_sub_field('privacy_policy_section_title');?>
                        </h2>
                    </div>
                    <div class="pp-para">
                        <p><?php echo the_sub_field('privacy_policy_section_description');?></p>
                    </div>
                <?php }
            }
        ?>
            <!-- <div class="h2-white">
                <h2 class="text-noeffect">
                    Privacy policy
                </h2>
            </div>
            <div class="pp-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>

            <div class="h2-white">
                <h2 class="text-noeffect">
                    Privacy assurance
                </h2>
            </div>
            <div class="pp-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>

            <div class="h2-white">
                <h2 class="text-noeffect">
                    Grievance redressal
                </h2>
            </div>
            <div class="pp-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div> -->
        </div>
    </div>  
<?php 
    echo get_footer();
?>