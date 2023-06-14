<?php  
/* 
    Template Name: Blog Landing Template 
*/

echo get_header();
?>
<!--module-2 hero banner html code  -->
<div class="hero-banner default-section">
        blog banner
    </div>

    <!-- module-3 all blog list -->
    <div class="health-section default-section">
        all blog list are here:<br>

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
                <?php endif; wp_reset_postdata(); ?>
        
    </div>

    <!-- module-4 subscribe blog  -->
    <div class="product-section default-section">
        email section
    </div>
<?php 
    echo get_footer();
?>