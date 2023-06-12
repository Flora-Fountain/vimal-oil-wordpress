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
    <?php echo get_the_title(); ?>
</div>

<!-- module-3 health section -->
<div class="health-section default-section">
    <?php the_content(); ?>
</div>

<!-- module-4 social-icon section  -->
<div class="product-section default-section">
    social icon 
</div>

<!-- module-5 search section  -->
<div class="default-section nrt-ills">
    search section
</div>

<!-- module-6 recent blog  -->
<div class="vimal-journey default-section">
    recent blog
</div>
<?php 
    echo get_footer();
?>