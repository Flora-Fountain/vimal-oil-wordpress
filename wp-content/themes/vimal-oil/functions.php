<?php 

function AllScript()
{
    wp_enqueue_style('fonts-googleapis', 'https://fonts.googleapis.com', array());
    wp_enqueue_style('fonts.gstatic', 'https://fonts.gstatic.com', array());
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap', array());
    wp_enqueue_style('googleapis-fonts-Quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700& family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap', array());
    wp_enqueue_style('googleapis-fonts-swap', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700;800;900&display=swap', array());
    wp_enqueue_style('googleapis-Raleway','https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Raleway:wght@300;400;500;600;700;800;900&display=swap',array());
    wp_enqueue_style('bootstrap-min','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('owl-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_script('bootstrap.bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0');
    wp_enqueue_script('gsap-min-js','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', true);
    wp_enqueue_script('jquery-min-js','https://code.jquery.com/jquery-3.6.4.min.js', true);
    wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js', true);
    wp_enqueue_script('owl-carousel-min-js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', true);
    wp_enqueue_script('greenshock-custom-js',get_template_directory_uri().'/assets/js/greenshock-custom.js', true);
}
add_action('wp_enqueue_scripts','AllScript');

