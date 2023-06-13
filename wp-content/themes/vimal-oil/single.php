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
       <?php the_content(); ?>
    </div>
</div>

<!-- module-4 social-icon section  -->
<div class="default-section">
    <span>Follow on</span><?php echo do_shortcode('[social_share_links]'); ?>
</div>

<!-- module-6 recent blog  -->
<div class="vimal-journey default-section">
    recent blog
    <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'post_status' => 'publish'), ARRAY_A);
        if ($recent_posts) {
             foreach ($recent_posts as $recent) {
                $image = get_the_post_thumbnail_url($recent['ID']); ?>
                <img src="<?php echo $image; ?>" alt=""/><br>
                <a href="<?php echo get_permalink($recent['ID']); ?>">
                    <?php echo $recent['post_title']; ?>
                </a><br>
                <span>
                    <?php echo date("d M, Y", strtotime($recent['post_date'])); ?>
                </span><br>
            <?php }
        }
        ?>
</div>
<?php 
    echo get_footer();
?>