<?php
$review_details = get_post_meta($post->ID, 'review_details',true);
 
$review_rating = get_post_meta($post->ID, 'review_rating',true);
$review_desc=$review_details['description'];
//print_r($review_rating); 

$review_table="";
if($review_rating){
    $review_table='<div class="col3" style="width:290px;padding-top:15px;"><ul class="rating">'; 
    //$review_table.="<tr><td><strong>Feature Name</strong></td><td><strong>Rating</strong></td></tr>";
    for($i=0;$i<count($review_rating['rating']);$i++){
        $rating="";
        $rating=rating_star($review_rating['rating'][$i]);
        $review_table.="<li><span>".$review_rating['concept'][$i].'</span><div class="rat">'.$rating.'</div><div style="clear:both"></div></li>';
    }                     
}
$review_table.="</ul></div>";  
 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 //echo $large_image_url[0];
$data = ' 
    <div class="row clearfix">
    <div style="float:left;width:300px;">
    <div class="rev_title">'.$review_details['title'].'</div>
    <div class="col1">
            <div class="base"><img src="'.plugins_url('/wereviews/').'images/base.png"></div> <img src="'.plugins_url('/wereviews/').'timthumb.php?src='.$large_image_url[0].'&w=290">
        </div>'.$review_table.'
        <div style="clear:both"></div><div class="rev_desc">
        '.$review_desc.' <br/>
        <i><b>Price: '.$review_details['price'].'</b></i>
        </div>
        <div style="clear:both"></div>        
        <div class="btn2">
                <a href="'.$review_details['affiliate_link'].'">CHECK IT OUT</a>
    </div>
        </div>
 
    <div class="rev_con" style="float:right;width:250px">
    '.$content.'
    
    
    
    
    </div></div>';
?>