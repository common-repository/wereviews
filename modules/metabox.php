<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'wprv_add_custom_box' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'myplugin_add_custom_box', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'wprv_save_review_details_ratings' );

/* Adds a box to the main column on the Post and Page edit screens */
function wprv_add_custom_box() {
    //metabox for review details
    add_meta_box( 'reviews-details', __( 'Review Details <a href="http://wpeden.com/product-category/review-themes/" style="background:#008000;color:#fff;text-shadow:none;padding:4px;font-size:11pt;text-decoration:none;">Get the review themes specially build for this plugin >></a>', 'wprv' ), 'wprv_review_details', 'reviews', 'normal','core' );
    //metabox for the rating box
    add_meta_box( 'reviews-rating', __( 'Individual Feature Ratings', 'wprv' ), 'wprv_review_rating', 'reviews', 'normal','core' );
    add_meta_box( 'individual-reviews', __( 'Secondary Image', 'wprv' ), 'wprv_thumb_image', 'reviews', 'side','core' );
    
}

//review details function 
function wprv_review_details( $post ) {
    global $reviews_plugin;     
    include($reviews_plugin->plugin_dir."/tpls/review-details.php");
}


//rating box function 
function wprv_review_rating( $post ) { 
    global $reviews_plugin;
    $templates = get_option('_wprv_templates');     
    include($reviews_plugin->plugin_dir."/tpls/rating_box.php");
    
}


function wprv_thumb_image( $post ) {
    global $reviews_plugin;     
    include($reviews_plugin->plugin_dir."/tpls/secondary-image.php");
}

 
function wprv_save_review_details_ratings( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( !current_user_can( 'edit_post', $post_id ) ) return;
    
    if($_POST['review_details']){
    update_post_meta($post_id,'review_details',$_POST['review_details']);
    update_post_meta($post_id,'editor_rating',$_POST['review_details']['rating']);    
    }
    if($_POST['review_rating']){
    update_post_meta($post_id,'review_rating',$_POST['review_rating']);
    }else{
        update_post_meta($post_id,'review_rating',"");
    }
    
    
}

 
add_action('wp_ajax_wprv_save_details','wprv_save_details'); 
 