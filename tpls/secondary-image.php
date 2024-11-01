<?php
    $review_details = get_post_meta($post->ID, 'review_details',true);  
    //print_r($review_rating);  
    $counter=0;//time();
?>
  
   <a title="Set secondary image" href="#" id="simg" onclick="return _meidaupload(this.id);">
   <?php 
        if(is_array($review_details) && $review_details['simage']!='') 
            echo "<img src='{$review_details['simage']}' /><input type='hidden' name='review_details[simage]' value='{$review_details['simage']}' /></a><a href='#' id='rsi'>Remove Thumbnail";
        else
            echo 'Select Review Thumbnail';
   ?>
   
   
   </a>
<style type="text/css">
#simg img{
    max-width: 100%;
    height: auto;
}
</style>   
<script language="JavaScript">
 
  function _meidaupload(id){
      var id = '#'+id;
      tb_show('Upload Image','media-upload.php?TB_iframe=1&width=640&height=624');
      window.send_to_editor = function(html) {           
              var imgurl = jQuery('img',"<p>"+html+"</p>").attr('src');                                    
              jQuery(id).html(html+"<input type='hidden' name='review_details[simage]' value='"+imgurl+"' /></a><a href='#' id='rsi'>Remove Thumbnail");
              tb_remove();
              }
              
   return false;                   
      
  }
  
  jQuery('#rsi').live('click',function(){
      if(!confirm('Are you sure?')) return false;
      jQuery('#simg').html('Select Review Thumbnail');
      jQuery(this).remove();
      return false;
  });
 
</script>   
