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
<div class="default-section blog-detail">
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
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="blog-sidebar">
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
                                    <h3 class="h3-title">Related Blogs</h3>
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