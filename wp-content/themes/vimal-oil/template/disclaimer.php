<?php  
/* 
    Template Name: Disclaimer Template 
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
                                <h1 class="text-noeffect"><?php echo the_field('benner_section_title');?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-bnr-img">
                    <img src="<?php echo the_field('benner_section_image'); ?>" alt="privacy policy kiara image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="privacy-policy default-section footer-before">
        <div class="container">
            <?php 
                if (have_rows('disclaimer_section')) {
                    while (have_rows('disclaimer_section')) {
                        the_row(); ?>
                        <div class="h2-white">
                            <h2 class="text-noeffect">
                                <?php echo the_sub_field('disclaimer_title');?>
                            </h2>
                        </div>
                        <div class="pp-para">
                            <?php 
                                if (have_rows('disclaimer_description')) {
                                    while (have_rows('disclaimer_description')) {
                                        the_row(); ?>
                                        <p><?php echo the_sub_field('disclaimer_descriptions');?></p>
                                    <?php }
                                }
                            ?>
                        </div>
                    <?php }
                }
            ?>
        </div>
    </div>

<?php 
    echo get_footer();
?>