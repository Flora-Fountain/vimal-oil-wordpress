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
    <div class="inner-banner default-section">
        <div class="container">
            <div class="align-items-center">
                <div class="text-aside">
                     <div class="head-para">
                        <p class="text-center mt-3 max-wd">Blog</p>
                    </div>
                    <div class="banner-right">
                        <div class="h1-title">
                            <h1 class="text-noeffect">Best Healthy <br/>Cooking Oils in <br/>India</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- module-3 health section -->
<div class="default-section blog-detail">
    <div class="container">
        <div class="blog-desc">
            <?php the_content(); ?>
        </div>

        
       
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
                    <span>Follow on</span>
                    <div class="socials">
                        <?php echo do_shortcode('[social_share_links]'); ?>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- module-4 social-icon section  -->
<div class="default-section">
    <div class="container">
       
    </div>
</div>

<div class="default-section">
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
                <ul>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <?php the_content(); ?>
                    </li>
                </ul>
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
    endif; ?>
</div>
<!-- module-6 recent blog  -->

<?php 
    echo get_footer();
?>