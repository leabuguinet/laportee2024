<?php
include_once( get_stylesheet_directory() .'/fonctions/utils.php');


function theme_supports () {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_supports');



function theme_register_assets() {
    // IMPORTATION DU CSS
    wp_enqueue_style('app', get_stylesheet_directory_uri(). '/dist/css/app.min.css',[] );
	wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',[] );

    // IMPORTATION DU JS 
    wp_enqueue_script('app', get_stylesheet_directory_uri(). '/dist/js/app.min.js', null , 1.1, true);
	//wp_enqueue_script('countup', 'https://cdn.jsdelivr.net/npm/countup.js@2.4.2/dist/countUp.min.js', [], null, false );
    wp_enqueue_script('gsap-js', 'https://unpkg.com/gsap@latest/dist/gsap.min.js', [], null, true );
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js', [], null, true );
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], null, false );


}


add_filter('script_loader_tag','add_type_to_script', 10, 3);
function add_type_to_script($tag, $handle, $source){
    if ('countup' === $handle) {
        $tag = '<script type="module" src="'. $source .'"></script>';
    } 
    return $tag;
}


add_action( 'wp_enqueue_scripts', 'theme_register_assets', 20 );


function register_my_menu() {
    register_nav_menu( 'main-menu','Menu principal', 'text-domain');
}
add_action( 'after_setup_theme', 'register_my_menu' );


// FOOTER MENU
function add_footer_menu() {
	register_nav_menu('menu_navigation', 'Menu de navigation');
	register_nav_menu('menu_footer', 'Menu de footer');
}
add_action('after_setup_theme', 'add_footer_menu');


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/* ADD CUSTOM LOGO */
function theme_name_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height' => 120,
        'width' => 150,
        'flex-width' => true,
        'header-text' => array('site-title','site-description' )
    ) );
 
}
add_action( 'after_setup_theme', 'theme_name_logo_setup' );


//Add custom logo in header menu
/* add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
function add_new_menu_item( $nav, $args ) {
    $newmenuitem = "<li class='home-link'>" . get_custom_logo() . "</li>";
    $nav = $newmenuitem.$nav;
    return $nav;
}; */
