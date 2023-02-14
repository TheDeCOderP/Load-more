<?php
include('dnd_admin/includes/config.php');
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 2;
  $query = "SELECT * FROM tbl_company ORDER BY id desc LIMIT ".$start.",".$limit;	
  $result = mysqli_query($con,$query);
  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-lg-12 col-md-12" >
            <div class="utf_listing_item-container list-layout"> <a href="company_detail.php?companyid=<?php echo $row['id'];?>" class="utf_listing_item">
              <div class="utf_listing_item-image"> 
				  <img src="images/<?php echo $row['postimage'];?>" alt=""> 
				  <span class="like-icon"></span> 
				  <div class="utf_listing_prige_block utf_half_list">
					<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
				  </div>
			  </div>
		 
              <div class="utf_listing_item_content">
                <div class="utf_listing_item-inner">
                  <h3><?php echo $row['company_name'];?></h3>
                  <span><i class="fa fa-map-marker"></i> <?php echo $row['company_address'];?></span>
				  <span><i class="fa fa-phone"></i> (+91) <?php echo $row['company_contact'];?></span>
                  <div class="utf_star_rating_section" data-rating="4.5">
                    <div class="utf_counter_star_rating">(4.5)</div>
                  </div>
                  <p><?php echo substr_replace($row['company_details'], "...", 80) ?></p>
                </div>
              </div>
              </a> 
			</div>
          </div>
    <?php }  
  }	
}
?>
