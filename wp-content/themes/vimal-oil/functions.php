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
    wp_enqueue_script('hammer-min-js','https://hammerjs.github.io/dist/hammer.min.js', true);
    wp_enqueue_script('swiper-js',get_template_directory_uri().'/assets/js/swiper.js', true);
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
    
    $content = '<div class="socials">
    <ul>
        <li><a href="' . $facebookURL . '" target="_blank"><span>
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 12C22 6.47714 17.5229 1.99999 12 1.99999C6.47715 1.99999 2 6.47714 2 12C2 16.9913 5.65686 21.1283 10.4375 21.8785V14.8906H7.89844V12H10.4375V9.79687C10.4375 7.29062 11.9304 5.90624 14.2146 5.90624C15.3087 5.90624 16.4531 6.10155 16.4531 6.10155V8.56249H15.1921C13.9499 8.56249 13.5625 9.33333 13.5625 10.1242V12H16.3359L15.8926 14.8906H13.5625V21.8785C18.3431 21.1283 22 16.9913 22 12Z" stroke-linejoin="round"></path></svg>
        </span></a></li>
        <!-- <li><a href="#"><span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="m21.436,8.26c-.058-1.225-.293-2.797-1.599-4.099-1.302-1.301-2.874-1.539-4.096-1.6-1.503-.086-5.979-.086-7.478,0-1.222.058-2.792.292-4.1,1.596-1.301,1.296-1.538,2.872-1.6,4.097-.086,1.503-.086,5.979,0,7.479.058,1.225.292,2.799,1.6,4.102,1.306,1.301,2.876,1.538,4.095,1.599.752.043,2.248.064,3.744.064s2.984-.021,3.733-.064c1.225-.058,2.798-.292,4.101-1.6,1.301-1.301,1.537-2.875,1.599-4.097.086-1.502.086-5.973,0-7.477Zm-.998,7.424c-.079,1.575-.471,2.605-1.309,3.443-.839.842-1.867,1.233-3.444,1.308-1.481.083-5.889.084-7.372,0-1.571-.079-2.601-.47-3.443-1.309-.841-.839-1.231-1.868-1.307-3.446-.085-1.481-.085-5.889,0-7.373.079-1.579.471-2.608,1.307-3.442.844-.84,1.873-1.23,3.446-1.305.74-.042,2.211-.063,3.683-.063s2.947.021,3.689.063c1.574.079,2.604.47,3.443,1.309.841.839,1.231,1.868,1.307,3.441v.005c.084,1.48.084,5.886,0,7.369ZM12,7.5c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5,4.5-2.019,4.5-4.5-2.019-4.5-4.5-4.5Zm0,8c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5,3.5,1.57,3.5,3.5-1.57,3.5-3.5,3.5Zm6.27-9c0,.414-.335.75-.75.75s-.755-.336-.755-.75.331-.75.745-.75h.01c.415,0,.75.336.75.75Z"></path></g></svg>
        </span></a></li> -->
        <li><a href="' . $twitterURL . '" target="_blank"><span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m22.389,5.585c-.142-.173-.378-.233-.584-.146-.156.066-.312.127-.469.183.249-.357.445-.75.581-1.168.064-.198,0-.415-.162-.545-.164-.13-.388-.146-.567-.041-.669.394-1.42.689-2.187.862-.848-.785-1.981-1.231-3.156-1.231-2.536,0-4.599,2.036-4.599,4.538,0,.124.005.25.016.377-2.926-.309-5.626-1.744-7.48-3.996-.104-.125-.251-.193-.425-.181-.162.013-.309.104-.392.244-.416.705-.627,1.476-.627,2.292,0,.864.247,1.692.694,2.401-.15-.071-.329-.043-.475.043-.151.09-.245.278-.245.455,0,1.425.68,2.728,1.759,3.569-.079.029-.15.079-.207.146-.111.132-.147.313-.094.478.459,1.411,1.581,2.483,2.969,2.925-1.415.771-3.086,1.078-4.683.898-.236-.03-.45.111-.528.33-.077.22.007.464.204.589,1.951,1.236,4.221,1.89,6.562,1.89,7.613,0,12.162-6.095,12.162-11.987,0-.094,0-.188-.002-.282.751-.574,1.408-1.261,1.955-2.045.127-.183.118-.428-.021-.601Zm-2.736,1.996c-.141.102-.22.269-.207.442.012.163.012.326.012.489,0,5.401-4.175,10.987-11.162,10.987-1.474,0-2.916-.281-4.254-.823,1.586-.184,3.071-.786,4.344-1.768.168-.13.235-.351.169-.552-.066-.202-.252-.339-.464-.344-1.274-.026-2.416-.7-3.041-1.738.392-.002.786-.054,1.174-.153.226-.058.382-.264.376-.498-.007-.233-.173-.432-.402-.477-1.407-.281-2.49-1.362-2.797-2.729.403.128.824.203,1.247.219.223.025.428-.134.495-.347.068-.214-.015-.447-.202-.57-1.003-.658-1.602-1.759-1.602-2.945,0-.393.062-.772.188-1.134,2.14,2.276,5.121,3.657,8.297,3.821.15.009.305-.057.405-.175.102-.118.142-.276.109-.428-.061-.284-.091-.561-.091-.821,0-1.951,1.614-3.538,3.599-3.538.997,0,1.957.408,2.633,1.119.116.124.287.178.455.147.436-.082.87-.2,1.292-.351-.24.264-.522.493-.838.678-.203.12-.296.364-.222.588.074.223.294.369.527.34.262-.028.525-.069.788-.123-.26.245-.536.473-.828.682Z"></path></svg>
        </span></a></li>
        <li><a href="' . $linkedInURL . '" target="_blank"><span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m22.065,7.061c-.276-1.034-1.089-1.849-2.122-2.125-1.605-.431-7.686-.436-7.943-.436s-6.338.005-7.942.436c-1.033.276-1.846,1.091-2.123,2.125-.43,1.608-.435,4.817-.435,4.953s.005,3.345.435,4.953c.276,1.031,1.069,1.815,2.122,2.097,1.605.431,7.686.436,7.943.436s6.338-.005,7.942-.436c1.039-.278,1.853-1.082,2.123-2.097.43-1.608.435-4.817.435-4.953s-.005-3.345-.435-4.953Zm-.967,9.648c-.181.681-.71,1.2-1.415,1.389-1.227.33-5.962.402-7.684.402s-6.457-.072-7.685-.402c-.703-.188-1.232-.708-1.414-1.39-.396-1.481-.401-4.663-.401-4.694s.005-3.213.401-4.695c.185-.69.727-1.233,1.415-1.417,1.227-.33,5.962-.402,7.684-.402s6.457.072,7.685.402c.688.185,1.23.728,1.414,1.417h0c.396,1.482.401,4.664.401,4.695s-.005,3.213-.401,4.695Zm-11.099-7.709l5,3-5,3v-6Z"></path></svg>
        </span></a></li>
    </ul>
</div>';
        
	// $content = '<div class="template-demo">';
	// $content .= '<a class="btn btn-social-icon" href="' . $facebookURL . '" target="_blank">';
	// $content .= 'facebook';
	// $content .= '</a>';
	// $content .= '<a class="btn btn-social-icon" href="' . $linkedInURL . '" target="_blank">';
	// $content .= 'linkedin';
	// $content .= '</a>';
	// $content .= '<a class="btn btn-social-icon" href="' . $twitterURL . '" target="_blank">';
	// $content .= 'twitter';
	// $content .= '</a>';

	// $content .= '</div>';
    
	return $content;
}
// This will create a wordpress shortcode [social_share_links].

add_shortcode('social_share_links', 'social_share_links');

function header_custom_menu() {
    register_nav_menu('header-custom-menu',__( 'Header Custom Left Menu' ));
    register_nav_menu('header-custom-right-menu',__( 'Header Custom Right Menu' ));
}
add_action( 'init', 'header_custom_menu' );

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

// Footer Link
function footer_custom_menu() {
    register_nav_menu('footer-custom-menu',__( 'Footer Custom Left Menu' ));
    register_nav_menu('footer-custom-right-menu',__( 'Footer Custom Right Menu' ));
}
add_action( 'init', 'footer_custom_menu' );
function add_banner_image_after_job_single_content() {
        
    $job_types = get_the_terms( get_the_ID(), 'job-type' );
if ( ! empty( $job_types ) ) {
    $job_type = array_shift( $job_types );

    echo'<div class="inner-banner default-section center-cont">
            <div class="container">
                <div class="align-items-center">
                    <div class="text-aside">
                        <div class="banner-right">
                            <div class="h1-title">
                                <h1 class="text-noeffect">'.get_the_title().'<span>'.$job_type->name.'</span></h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>'; // Output the banner image HTML
}
}
add_action( 'before_awsm_jobs_main_content', 'add_banner_image_after_job_single_content',3);


add_filter( 'submit_job_form_fields', 'custom_submit_job_form_fields_dm' );
 
function custom_submit_job_form_fields_dm( $fields ) {
    // in this example, we remove the job_tags field
    unset($fields['form']['cover_letter']);
 
    // And return the modified fields
    return $fields;
}
