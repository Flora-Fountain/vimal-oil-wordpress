<?php
    /**
     * The template for displaying all single posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Vimal Oil
     */

    get_header();
    global $post;

    $post_slug = $post->post_name; 
?>

<!--module-2 hero banner html code  -->
    <div class="blog-detail-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
        <div class="h1-title">
            <h1 class="text-noeffect"> <?php echo get_the_title();?></h1>
         </div>
    </div> 

          
<!-- module-3 health section -->
<div class="default-section blog-detail footer-before">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="blog-content">
                    <div class="blog-desc"><?php the_content(); ?></div>
                    <div class="blog-detail-bottom">
                        <div class="prev-next-btn">
                            <div class="submit-button">
                                <?php $previous_post = get_adjacent_post(false, '', false);
                                    if (!empty($previous_post)) {
                                        echo '<a class="btn-effect blue-back" href="' . get_permalink($previous_post->ID) . '" title="' . $previous_post->post_title . '">Previous</a>';
                                    }
                                ?>
                            </div>
                            <div class="submit-button">
                                <?php $next_post = get_adjacent_post(false, '', true);
                                        if (!empty($next_post)) {
                                            echo '<a class="btn-effect blue-back" href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">Next</a>';
                                } ?>
                            </div>

                        </div>
                        <div class="connect-part">
                            <h3>Follow on</h3>
                            <?php echo do_shortcode('[social_share_links]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blog-sidebar">
                    <!-- module-5 search section  -->
                    <span class="search-txt">Search</span>
                    <form action="<?php echo home_url(); ?>" method="get">
                            <div class="blog-search">
                                <span class="blog-search-icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                                <input class="blog-search-txt" type="text" name="s" placeholder="Type here">
                                <button type="submit" class="blog-search-btn">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M27 24.57l-5.647-5.648a8.895 8.895 0 0 0 1.522-4.984C22.875 9.01 18.867 5 13.938 5 9.01 5 5 9.01 5 13.938c0 4.929 4.01 8.938 8.938 8.938a8.887 8.887 0 0 0 4.984-1.522L24.568 27 27 24.57zm-13.062-4.445a6.194 6.194 0 0 1-6.188-6.188 6.195 6.195 0 0 1 6.188-6.188 6.195 6.195 0 0 1 6.188 6.188 6.195 6.195 0 0 1-6.188 6.188z"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                    </form>
                    <h3 class="h3-title">Related Blogs</h3>
                  
                    <?php
                        $post_id = get_the_ID();
                        $cat_ids = array();
                        $categories = get_the_category( $post_id );

                        if(!empty($categories) && !is_wp_error($categories)):
                            foreach ($categories as $category):
                                array_push($cat_ids, $category->term_id);
                            endforeach;
                        endif;

                        $current_post_type = get_post_type($post_id);

                        $query_args = array( 
                            'category__in'   => $cat_ids,
                            'post_type'      => $current_post_type,
                            'post__not_in'    => array($post_id),
                            'posts_per_page'  => '3',
                        );

                        $related_cats_post = new WP_Query( $query_args );

                        if($related_cats_post->have_posts()):
                            while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                                <div class="related-blog">
                                    
                                    <div class="related-img"><?php echo get_the_post_thumbnail();?></div>
                                    <div class="h4-title"><h4 class=""> <?php echo get_the_title();?></h4></div>
                                    <div class="blog-desc"><?php the_content(); ?></div>
                                    <div class="submit-button">
                                        <a class="btn-effect blue-back" href="<?php echo get_permalink()?>">Know more</a>
                                    </div>
                                </div>
                        <?php endwhile;

                        // Restore original Post Data
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>  
    </div>
</div>



<?php 
    echo get_footer();
?>