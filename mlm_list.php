
<?php include('includes/header.php'); ?>

<?php include('advertisement.php'); ?>

  <div class="clearfix"></div>
   <div id="titlebar" class="gradient" style="background-image: url(images/about.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>MLM Listing</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>MLM Listing</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="row">
		<div class="postList">
      <?php
      $count_query = "SELECT count(*) as allcount FROM tbl_company";
      $count_result = mysqli_query($con,$count_query);
      $count_fetch = mysqli_fetch_array($count_result);
      $postCount = $count_fetch['allcount'];
      $limit = 2;

      $query = "SELECT * FROM tbl_company	  ORDER BY id desc LIMIT 0,".$limit;	
      $result = mysqli_query($con,$query);
      if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)){ 
          ?>
          <div class="col-lg-12 col-md-12 post">
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
      } ?>	
    </div>
		</div>
		  
        
        <div class="row">
		
          <div class="col-md-12">
       <div class="loadmore">
      <input type="button" id="loadBtn" value="Load More">
      <input type="hidden" id="row" value="0">
      <input type="hidden" id="postCount" value="<?php echo $postCount; ?>">
    </div>
          </div>
        </div>
      </div>
	  
      
      <!-- Sidebar -->
      <div class="col-lg-4 col-md-4">
        <div class="sidebar">
          <form action="search_list.php">
		  <div class="utf_box_widget margin-bottom-35">
            <h3><i class="sl sl-icon-direction"></i> Filters</h3>			
            <div class="row with-forms">
              <div class="col-md-12">
                <input type="text" name="company_name" placeholder="What are you looking for?" value=""/>
              </div>
            </div>            
            <div class="row with-forms">
              <div class="col-md-12">
 
				  <select name="state">
				  
				  <?php
				  
				  $querystate=mysqli_query($con,"SELECT * FROM tbl_state");
				  while($rowsate=mysqli_fetch_array($querystate))                     {                   
				  ?>
				  
				  <option value="<?php echo $rowsate['id'];?>"><?php echo $rowsate['state'];?></option>
				  
				  <?php } ?>
				  
				  </select>				  				  			 
              </div>
            </div> 
            <button type="submit" class="button fullwidth_block margin-top-5">Search</button>
          </div>
		  </form>
 
        </div>
	    <div class="opening-hours margin-top-35">



			<div class="utf_coupon_widget" style="background-image: url(images/coupon-bg-1.jpg);">

            <img src="<?php echo $listads; ?>">


			</div>



		</div>
      </div>
    </div>
  </div>



  
 
  
  <!-- Footer -->
 <?php include('includes/footer.php'); ?>
  <div id="bottom_backto_top"><a href="#"></a></div>
</div>

<!-- Scripts --> 
<script src="scripts/jquery-3.4.1.min.js"></script> 
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/slick.min.js"></script> 
<script src="scripts/rangeslider.min.js"></script> 
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/jquery-ui.min.js"></script> 
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
      $(document).on('click', '#loadBtn', function () {
        var row = Number($('#row').val());
        var count = Number($('#postCount').val());
        var limit = 2;
        row = row + limit;
        $('#row').val(row);
        $("#loadBtn").val('Loading...');

        $.ajax({
          type: 'POST',
          url: 'loadmore-data.php',
          data: 'row=' + row,
          success: function (data) {
            var rowCount = row + limit;
            $('.postList').append(data);
            if (rowCount >= count) {
              $('#loadBtn').css("display", "none");
            } else {
              $("#loadBtn").val('Load More');
            }
          }
        });
      });
    });		
  </script>
  

</body>
</html>