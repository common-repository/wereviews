 
<?php
global $post;
$data="";
 
//$review_list=get_posts("post_type=reviews");
//print_r($review_list); 

 
        $meta_details="";$review_rating="";
        $meta_details=get_post_meta(get_the_ID(), 'review_details',true);
        $review_rating=get_post_meta(get_the_ID(), 'review_rating',true);
        
        //review rating table
       
      //$thumb = get_the_post_thumbnail(get_the_ID(), array(150,150));    
      $listtable.='<div style="float:left;margin-bottom:10px">
            '.$thumb.'  
            '.rating_star($meta_details['rating']).' / '.$meta_details['title'].' / <a href="'.get_permalink().'">Full Review &#187;</a> / <a href="'.$meta_details['affiliate_link'].'">Visit Website &#187;</a>'; 
       
         
 
$listtable.='</div>';
$adata=$listtable;
?>