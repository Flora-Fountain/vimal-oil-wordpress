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
<div class="hero-banner default-section">
    <?php echo get_the_post_thumbnail()."<br>";?>
    <?php echo get_the_title(); ?>
</div>

<!-- module-3 health section -->
<div class="health-section default-section">
    Description:<?php the_content(); ?>
</div>

<!-- module-4 social-icon section  -->
<div class="product-section default-section">
    social icon : <?php echo do_shortcode('[social_share_links]'); ?>
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