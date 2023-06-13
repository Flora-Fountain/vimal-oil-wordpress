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
    wp_enqueue_script('tweenmax-min-js','https://cdn.jsdelivr.net/gsap/1.19.1/TweenMax.min.js', true);
    wp_enqueue_script('scroll-min-js','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js', true);
    wp_enqueue_script('jquery-min-js','https://code.jquery.com/jquery-3.6.4.min.js', true);
    wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js', true);
    wp_enqueue_script('owl-carousel-min-js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', true);
    wp_enqueue_script('greenshock-custom-js',get_template_directory_uri().'/assets/js/greenshock-custom.js', true);
}
add_action('wp_enqueue_scripts','AllScript');

// Share post/blog on social media  
function social_share_links()
{
	global $post;
	// if(is_singular()) {

	// Get current page's URL 
	$sl_url = urlencode(get_permalink());
	// Get current page title - replace space by %20
	$sl_title = str_replace(' ', '%20', get_the_title());
        
    
	// Construct social sharing URLs
	$twitterURL = 'https://twitter.com/intent/tweet?text=' . $sl_title . '&url=' . $sl_url;
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $sl_url;
	// $redditURL = 'https://www.reddit.com/submit?url='.$sl_url.'&title='.$sl_title;
	$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $sl_url . '&title=' . $sl_title;


	$content = '<div class="template-demo">';
	$content .= '<a class="btn btn-social-icon" href="' . $facebookURL . '" target="_blank">';
	$content .= 'facebook';
	$content .= '</a>';
	$content .= '<a class="btn btn-social-icon" href="' . $linkedInURL . '" target="_blank">';
	$content .= 'linkedin';
	$content .= '</a>';
	$content .= '<a class="btn btn-social-icon" href="' . $twitterURL . '" target="_blank">';
	$content .= 'twitter';
	$content .= '</a>';

	$content .= '</div>';
    
	return $content;
}
// This will create a wordpress shortcode [social_share_links].

add_shortcode('social_share_links', 'social_share_links');