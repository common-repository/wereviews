<?php 
/*
Plugin Name: Review Site Builder
Plugin URI: http://wpeden.com/
Description: WordPress Review Site Builder Plugin
Author: Shaon
Version: 1.3.0
Author URI: http://www.wpeden.com/
*/
 
include(dirname(__FILE__)."/libs/class.plugin.php");
global $reviews_plugin;
$reviews_plugin = new ahm_plugin('wereviews');


$plugindir = str_replace('\\','/',dirname(__FILE__));
 

define('PLUGINDIR',$plugindir);  
define('MX_PLUGINDIR',$plugindir);  

function wprv_install(){          
    wprv_custom_init();
    flush_rewrite_rules();
    add_option('wpp_redirect', true); 
}


function wprv_custom_init() 
{
  $labels = array(
    'name' => _x('Reviews', 'post type general name'),
    'singular_name' => _x('Review', 'post type singular name'),
    'add_new' => _x('Add New', 'review'),    
    'add_new_item' => __('Add New Review'),
    'edit_item' => __('Edit Review'),
    'new_item' => __('New Review'),
    'all_items' => __('All Reviews'),
    'view_item' => __('View Review'),
    'search_items' => __('Search Review'),
    'not_found' =>  __('No Reviews found'),
    'not_found_in_trash' => __('No Reviews found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Reviews'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'menu_position' =>5,
    'menu_icon' => plugins_url('wereviews/images/review.png'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','comments','custom-fields'),
    'taxonomies' => array('post_tag')
  ); 
  register_post_type('reviews',$args);
  
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );     

  register_taxonomy('genre',array('reviews'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'review-category' ),
  ));
    
}

 

function wprv_full_review($content){
    global $post;  
    if(is_single()&&$post->post_type=='reviews') {
      include("tpls/full_review_default.php");
      return $data;
    }
    else if((is_category()||is_archive())&&$post->post_type=='reviews'){
       include("tpls/review_list.php");
      return $adata; 
    }
     else 
      return $content;
}
function wprv_review(){
    include_once("tpls/review_list.php");
}

 
function wprv_review_short_code($param){
      include("tpls/all_review_short_code.php");
      return $data;
}

function rating_star($val){
    $rating="";     ;
    for($k=0;$k<$val;$k++){
        $rating .='<img src="'.plugins_url("wereviews/images/star.png").'" >';
    }
    for($k=0;$k<5-$val;$k++){
        $rating .='<img src="'.plugins_url("wereviews/images/star_gray.png").'" >';
    }
    return $rating;
}

function wprv_enqueue_scripts(){
    global $reviews_plugin;
    wp_enqueue_script("jquery");
    $reviews_plugin->load_scripts(); 
    $reviews_plugin->load_styles(); 
}

function wprv_admin_scripts(){
    global $reviews_plugin;
    wp_enqueue_script("jquery");
    wp_enqueue_script("jquery-form");
    $reviews_plugin->load_scripts(); 
    $reviews_plugin->load_styles(); 
}

add_filter('the_content','wprv_full_review'); 
add_filter('the_excerpt','wprv_full_review');
add_action('admin_enqueue_scripts','wprv_admin_scripts');
add_action('wp_enqueue_scripts','wprv_enqueue_scripts');

if(is_admin()){
    add_action('wp_ajax_wprv_save_notice','wprv_save_notice');
    add_action('wp_ajax_wprv_save_notice_settings','wprv_save_notice_settings');
}

$reviews_plugin->load_modules(); 

register_activation_hook(__FILE__,'wprv_install');


function wprv_all_reviews($params){
    include("tpls/catalog.php");
}


add_action('init', 'wprv_custom_init');  
add_action('wp_ajax_delete_template', 'wprv_delete_template'); 
add_shortcode('wp_review','wprv_review_short_code');
add_shortcode('all_reviews','wprv_all_reviews');