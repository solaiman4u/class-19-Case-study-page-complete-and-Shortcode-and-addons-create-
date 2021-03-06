<?php

/*
Plugin Name: Industry Toolkit
Plugin URI: http://wordpress.org/plugins/industry/
Description: This is not just a plugin, This plugin for industry  theme.
Author: Solaiman
Version: 1.0
Author URI: http://rrf.com/
*/

function industry_toolkit_include_files() {
    wp_enqueue_style('owl-carousel', plugins_url( '/assets/css/owl.carousel.min.css', __FILE__ ) ); 
    wp_enqueue_style('industry_toolkit', plugins_url( '/assets/css/industry-toolkit.css', __FILE__ ) );

    wp_enqueue_script('owl-carousel', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), array('jquery'), '2.2.1', 'true' );
}
add_action( 'wp_enqueue_scripts','industry_toolkit_include_files');

//Our ShortCode
/*function industry_demo_query($atts){
    extract( shortcode_atts( array(
        'count' => 2,
    ), $atts) );


    $arg = array(
    	'post_type' => 'page',
    	'posts_per_page' => $count,
    );


    $get_post = new WP_Query($arg);

    $plist_markup = '<div class="row">';
    	while($get_post->have_posts()) : $get_post->the_post();
    		$post_id = get_the_ID();
    		$plist_markup .= '<div class="col-md-4"><li>'.get_the_title($post_id).'</li></div>';
    	endwhile;
    $plist_markup .= '</div>'; 

    wp_reset_query();

    return $plist_markup;
   
}
add_shortcode('p_list', 'industry_demo_query');  */





//Slider register function
function industry_theme_custom_post(){
register_post_type('industry-slide', array(
    'label' => 'slides',
    'labels' => array(
        'name' => 'Slides',
        'singular_name' => 'slide',
    ),
    'public' => false,
    'menu_icon' => 'dashicons-images-alt',
    'show_ui' => true,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt'),


));

}
add_action('init', 'industry_theme_custom_post');

include_once ('industry-theme-shortcodes.php');
include_once ('industry-toolkit-kc-addons.php');