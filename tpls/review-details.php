<?php
    $review_details = get_post_meta($post->ID, 'review_details',true);  
   
?>
<style type="text/css">
.wespace{
padding-bottom: 10px;
display: block;
}
#reviews-details label{
    font-weight: bold;
}
</style>
  
    
    <label>Review Title</label>
    <input name="review_details[title]" value="<?php if(isset($review_details['title'])) { echo $review_details['title']; } ?>" style="padding:3px 10px;width:100%;" type="text">
    <div class="wespace"></div>
    <label>Review Description</label>
    <textarea style="padding:3px 10px;width:100%;" rows="3" name="review_details[description]"><?php if(isset($review_details['description'])) { echo $review_details['description']; } ?>
    </textarea>
    <div class="wespace"></div>
    <label>Affiliat Link</label>
    <input name="review_details[affiliate_link]" value="<?php if(isset($review_details['affiliate_link'])) { echo $review_details['affiliate_link']; } ?>" style="padding:3px 10px;width:100%;" type="text">
    <div class="wespace"></div>
    <label>Editor Rating </label>
   <select name="review_details[rating]">
        <option <?php if(isset($review_details['rating']) && $review_details['rating']=="5")echo "selected='selected'";?> value="5">5 stars</option>
        <option <?php if(isset($review_details['rating']) && $review_details['rating']=="4_5")echo "selected='selected'";?> value="4_5">4.5 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="4")echo "selected='selected'";?> value="4">4 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="3_5")echo "selected='selected'";?> value="3_5">3.5 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="3")echo "selected='selected'";?> value="3">3 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="2_5")echo "selected='selected'";?> value="2_5">2.5 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="2")echo "selected='selected'";?> value="2">2 stars</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="1_5")echo "selected='selected'";?> value="1_5">1.5 stars</option>
        <option   <?php if(isset($review_details['rating']) && $review_details['rating']=="1")echo "selected='selected'";?> value="1">1 star</option>
        <option  <?php if(isset($review_details['rating']) && $review_details['rating']=="0_5")echo "selected='selected'";?> value="0_5">0.5 stars</option>
        <option   <?php if(isset($review_details['rating']) && $review_details['rating']=="0")echo "selected='selected'";?> value="0">0 stars</option>
    </select> 
    <label>Price</label>
    <input name="review_details[price]" value="<?php if(isset($review_details['price'])) {echo $review_details['price']; } ?>" style="padding:3px 10px;width:100px;" type="text">
    
    <label>Ribbon </label>
   <select name="review_details[ribbon]">
        <option value="">No Ribbon</option>
        <option  <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="recommended")echo "selected='selected'";?> value="recommended">Recommended</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="popular")echo "selected='selected'";?> value="popular">Popular</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="bestoption")echo "selected='selected'";?> value="bestoption">Best Option</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="toprated")echo "selected='selected'";?> value="toprated">Top Rated</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="offer")echo "selected='selected'";?> value="offer">Special Offer</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="bigopportunity")echo "selected='selected'";?> value="bigopportunity">Big Opportunity</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="average")echo "selected='selected'";?> value="average">Average</option>
        <option <?php if(isset($review_details['ribbon']) && $review_details['ribbon']=="notrecommended")echo "selected='selected'";?> value="notrecommended">Not Recommended</option>
    </select> <br>
   <div class="wespace"></div>  
    
    
    
    
    
   