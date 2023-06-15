<?php  
/* 
    Template Name: Terms And Conditions Template 
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
                                <h1 class="text-noeffect"><?php echo the_field('banner_section_title');?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                    <img src="<?php echo the_field('banner_image')?>" alt="privacy policy kiara image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="default-section privacy-policy footer-before">
        <div class="container">
            <?php 
                if (have_rows('terms_and_conditions_section')) {
                    while (have_rows('terms_and_conditions_section')) {
                        the_row(); ?>
                            <div class="h2-white">
                                <h2 class="text-noeffect">
                                    <?php echo the_sub_field('terms_and_conditions_section_title');?>
                                </h2>
                            </div>
                            <div class="pp-para">
                                <?php 
                                    if (have_rows('terms_and_conditions_section_description')) {
                                        while (have_rows('terms_and_conditions_section_description')) {
                                            the_row(); ?>
                                            <p><?php echo the_sub_field('terms_and_conditions_section_descriptions') ?></p>           
                                        <?php }
                                    }
                                ?>
                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> -->
                            </div>
                    <?php }
                }
            ?>
            

            <!-- <div class="h2-white">
                <h2 class="text-noeffect">
                    Caution notice
                </h2>
            </div>
            <div class="pp-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="h2-white">
                <h2 class="text-noeffect">
                    User obligations
                </h2>
            </div>
            <div class="pp-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div> -->
        </div>
    </div>

<?php 
    echo get_footer();
?>