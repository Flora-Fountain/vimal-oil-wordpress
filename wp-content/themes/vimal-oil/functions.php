<?php 

function AllScript()
{
    wp_enqueue_style('bootstrap-min','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('owl-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_script('bootstrap.bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0');
    wp_enqueue_script('bootstrap-min-js','https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js', true);
    wp_enqueue_script('gsap-min-js','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', true);
    wp_enqueue_script('gsap-min-js','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', true);
    wp_enqueue_script('jquery-min-js','https://code.jquery.com/jquery-3.6.4.min.js', true);
    wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js', true);
    wp_enqueue_script('owl-carousel-min-js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', true);
    wp_enqueue_script('greenshock-custom-js',get_template_directory_uri().'/assets/js/greenshock-custom.js', true);
}
add_action('wp_enqueue_scripts','AllScript');