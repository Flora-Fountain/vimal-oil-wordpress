<?php  
/* 
    Template Name: Blog Landing Template 
*/

echo get_header();

// global $wp_query;
?>
<!--module-2 hero banner html code  -->
    <div class="default-section inner-banner blog-land-banner">
        <div class="container-fuid">
            <div class="align-items-center">
                <div class="text-aside">
                    <div class="banner-right">
                        <div class="h1-title">
                            <h1 class="text-noeffect">Our Blogs</h1>
                        </div>
                    </div>
                    <div class="head-para">
                        <p class="text-center mt-2">simply dummy text of the printing<br> and typesetting industry. Lorem<br> Ipsum simply dummy text of the </p>
                    </div>
                    <div class="submit-button text-center">
                        <a href="#" class="btn-effect">Say hi</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php 
    $terms = get_terms([
        'taxonomy' => 'category',
        'hide_empty' => true,
    ]);
    ?>
    <!-- module-3 all blog list -->
    <div class="default-section blog-landing footer-before">
        <div class="container">
            <div class="h2-white">
                <h2 class="text-noeffect">Explore our series</h2>
            </div>
            <div class="cont-para text-center">
                <p>simply dummy text of the printing and typesetting industry. Lorem</p>
            </div>
            <div class="blog-tab">
                <ul class="nav nav-tabs  d-lg-flex" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="<?php echo site_url();?>/blog-landing" class="nav-link active">All</a>
                    </li>
                    <?php
                        $count = 0; 
                        foreach ($terms as $term) { ?>
                            <li class="nav-item" role="presentation">
                                <!-- <a class="nav-link active" id="<?php echo $term->name;?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $term->name;?>-tab-pane" type="button" role="tab" aria-controls="<?php echo $term->name;?>-tab-pane" aria-selected="true"><?php echo $term->name;?></a> -->
                                <a href="<?php echo get_term_link($term->term_id); ?>" class="nav-link"><?php echo $term->name;?></a>
                            </li>   
                            <!-- echo $term->name;-->
                        <?php }
                    ?>
                </ul>
                <?php 
                    // $cat_obj = get_queried_object();
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type'=> 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1 // this will retrive all the post that is published
                        // 'post_type' => 'post',
                        // 'post_status' => 'publish',
                        // 'tax_query' => [
                        //     [ 
                        //         'taxonomy' => 'category',
                        //         // 'terms' => $cat_obj->cat_ID,
                        //         // 'include_children' => false // Remove if you need posts from term 7 child terms
                        //     ],
                        // ],
                
                    ];

                    $blogs = new WP_Query($args);
                ?>
                <div class="tab-content accordion" id="myTabContent">
                    <div class="tab-pane fade show active accordion-item" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="row">
                            <?php 
                                if ($blogs->have_posts()) {
                                    while ($blogs->have_posts()) {
                                        $blogs->the_post(); ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="blog-pane">
                                                <div class="blog-img">
                                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blur-leaf">
                                                </div>
                                                <div>
                                                    <span><?php the_category();?></span>
                                                    <span><?php the_date();?></span>
                                                </div>
                                                <h4><?php the_title();?></h4>
                                                <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                                    <div class="accordion-body">
                                                        <p class="mb-0"><?php echo wp_trim_words( get_the_content(), 17, '...' );?></p>
                                                    </div>
                                                </div>
                                                <div class="submit-button">
                                                    <a class="btn-effect blue-back" href="<?php the_permalink();?>" title="Test 2">Read More</a>
                                                </div>
                                            </div>   
                                        </div>
                                    <?php }
                                }
                            ?>
                            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-pane">
                                    <div class="blog-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpeg" alt="blur-leaf">
                                    </div>
                                    <h4>Best Healthy Cooking Oils in India</h4>
                                    <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                        <div class="accordion-body">
                                            <p class="mb-0">It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance</p>
                                        </div>
                                    </div>
                                    <div class="submit-button">
                                        <a class="btn-effect blue-back" href="<?php site_url();?>test-2/" title="Test 2">Read More</a>
                                    </div>
                                </div>   
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-subscribe">
                <div class="h3-title">
                    <h3 class="text-noeffect">Subscribe Today</h3>
                </div>
                <div class="form">
                    <div class="email-input-field">
                        <input type="email" name="email" placeholder="Enter Email" required="">
                    </div>
                    <div class="submit-button">
                        <a class="btn-effect blue-back" href="http://localhost/vimal-oil-wordpress/test-1/" title="Test 2">Send</a>                           
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
            $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                // $result = new WP_Query( $args );
                // // print_r($result);
                // // die;
                // if ( $result-> have_posts() ) : ?>
                <?php //while ( $result->have_posts() ) : $result->the_post(); ?> 
                <?php //echo get_the_post_thumbnail()."<br>";?>
                <?php //echo get_the_category()."<br>";?>
                <?php //the_title(); ?><br>
                <?php //endwhile; ?>  
                <?php //endif; wp_reset_postdata(); 
        ?>
        
    </div>

    <!-- module-4 subscribe blog  -->
  
<?php 
    echo get_footer();
?>