<?php  
/* 
    Template Name: Blog Landing Template 
*/

echo get_header();
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
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="recipes-tab" data-bs-toggle="tab" data-bs-target="#recipes-tab-pane" type="button" role="tab" aria-controls="recipes-tab-pane" aria-selected="false">Recipes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane" aria-selected="false">Health</button>
                    </li>
                </ul>
                <div class="tab-content accordion" id="myTabContent">
                    <div class="tab-pane fade show active accordion-item" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                                        <a class="btn-effect blue-back" href="http://localhost/vimal-oil-wordpress/test-1/" title="Test 2">Read More</a>                           
                                    </div>
                                </div>   
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade accordion-item" id="recipes-tab-pane" role="tabpanel" aria-labelledby="recipes-tab" tabindex="0">
                        <!-- <h2 class="accordion-header d-lg-none" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                        </h2> -->
                        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade accordion-item" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                        <!-- <h2 class="accordion-header d-lg-none" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                        </h2> -->
                        <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
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
                $result = new WP_Query( $args );
                // print_r($result);
                // die;
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php echo get_the_post_thumbnail()."<br>";?>
                <?php //echo get_the_category()."<br>";?>
                <?php the_title(); ?><br>
                <?php endwhile; ?>  
                <?php endif; wp_reset_postdata(); 
        ?>
        
    </div>

    <!-- module-4 subscribe blog  -->
  
<?php 
    echo get_footer();
?>