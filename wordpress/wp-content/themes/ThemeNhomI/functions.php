<?php
function wpb_imagelink_setup() {

    $image_set = get_option( 'image_default_link_type' );

     

   if ($image_set !== 'none') {

        update_option('image_default_link_type', 'none');

    }

}

add_action('admin_init', 'wpb_imagelink_setup', 10);
function test()
{
	add_theme_support( 'menus' );
		register_nav_menus(
	        array(
	                'main-nav' => 'Menu chính'
	        )
	);
		add_custom_background();
}

add_action( 'after_setup_theme', 'test' );

  function demo_styles()
{
    wp_register_style('bootstrapmin', get_template_directory_uri() . '/assets/css/bootstrap.min.css', 'all');
    wp_enqueue_style('bootstrapmin');
  
   	wp_register_style('bootstrapmin1', get_template_directory_uri() . '/assets/css/bootstrap.min_1.css', 'all');
    wp_enqueue_style('bootstrapmin1');
        wp_register_style('bootstrapmin2', get_template_directory_uri() . '/assets/css/mediaelementplayer.min.css', 'all');
    wp_enqueue_style('bootstrapmin2');
 
    wp_register_script('jque-style0', get_template_directory_uri() . '/assets/js/jquery.min.js', 'all');
    wp_enqueue_script('jque-style0');
    wp_register_script('jque-style', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', 'all');
    wp_enqueue_script('jque-style');


    wp_register_script('jque-style1', get_template_directory_uri() . '/assets/js/mediaelement-and-player.min.js', 'all');
    wp_enqueue_script('jque-style1');

    wp_register_style('bootstrapminjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'all');
    wp_enqueue_style('bootstrapminjs');

    wp_register_style('swipercss-style', get_template_directory_uri() .'/assets/css/swiper.min.css', 'all');
    wp_enqueue_style('swipercss-style');

    wp_register_script('swiperjs-style', get_template_directory_uri() .'/assets/js/swiper.min.js', 'all');
    wp_enqueue_script('swiperjs-style');

 
    wp_register_style('woocommerce-style', get_template_directory_uri() . '/style.css', 'all');
    wp_enqueue_style('woocommerce-style');

   

    wp_register_script('5js-style', get_template_directory_uri() .'/assets/js/5.js', 'all');
    wp_enqueue_script('5js-style');
    wp_register_script('11js-style', get_template_directory_uri() .'/assets/js/11.js', 'all');
    wp_enqueue_script('11js-style');
      wp_register_script('14js-style', get_template_directory_uri() .'/assets/js/14.js', 'all');
    wp_enqueue_script('14js-style');
    // wp_register_script('3js-style', get_template_directory_uri() .'/assets/js/3.js', 'all');
    // wp_enqueue_script('3js-style');
    

    // wp_register_style('stylemain-style', get_template_directory_uri() . '/css/woocomstyle/css/woocommerce.css', 'all');
    // wp_enqueue_style('stylemain-style');

 
    // wp_register_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css', 'all');
    // wp_enqueue_style('reset-style');
    // wp_register_script('script-style', get_template_directory_uri() . '/assets/sitescripts.js', 'all');
    wp_enqueue_script('script-style');
}
add_action('wp_enqueue_scripts', 'demo_styles');
