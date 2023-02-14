<?php include('includes/header.php'); ?>

<?php include('signin.php'); ?>
 
 <div class="clearfix"></div>


  <?php include('slider.php');?>
  

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h3 class="headline_part centered margin-bottom-35 margin-top-70">Most Popular company <span>Discover best things to do restaurants, shopping, hotels, cafes and places<br>around the world by categories.</span></h3>

      </div>

	  

        <?php



		$querymlm=mysqli_query($con,"SELECT * FROM tbl_company");



		$rowcountmlm=mysqli_num_rows($querymlm);



		if($rowcountmlm==0)



		{



		?>



		 <h3 style="color:red">No record found</h3> 



		<?php 



		} else {



		while($rowmlm=mysqli_fetch_array($querymlm))



		{



        $ddate = $rowmlm['date']; 



        $fdaet = date('"F d Y"', strtotime($ddate));

 
		?>		  

	  

	  

      <div class="col-md-4 col-sm-6 col-xs-12"> 

         <a href="company_detail.php?companyid=<?php echo $rowmlm['id'];?>" class="img-box" data-background-image="images/<?php echo $rowmlm['postimage'];?>">

			<div class="utf_img_content_box visible">

			  <h4><?php echo $rowmlm['company_name'];?></h4>

			  <span>(+91) <?php echo $rowmlm['company_contact'];?></span> 

			</div>

         </a> 

	  </div>

 

		<?php } } ?>

	  <div class="col-md-12 centered_content"> <a href="mlm_list.php" class="button border margin-top-20">View More Companies</a> </div>

    </div>

  </div>

  <section class="fullwidth_block padding-bottom-75">

    <div class="container">

    <div class="row">

      <div class="col-md-8 col-md-offset-2">

      <h2 class="headline_part centered margin-top-80">How It Works? <span class="margin-top-10">Discover & connect with great local businesses</span> </h2>

      </div>

    </div>

    <div class="row container_icon"> 

      <div class="col-md-4 col-sm-4 col-xs-12">

      <div class="box_icon_two box_icon_with_line"> <i class="im im-icon-Map-Marker2"></i>

        <h3>Ease Of Filing Complaint</h3>

        <p>The complaint can be filed from any state, city or district.</p>

      </div>

      </div>

      

      <div class="col-md-4 col-sm-4 col-xs-12">

      <div class="box_icon_two box_icon_with_line"> <i class="im im-icon-Mail-Add"></i>

        <h3>Track Filed Complaint</h3>

        <p>At any time, you can track the status of your registered consumer complaint.</p>

      </div>

      </div>

      

      <div class="col-md-4 col-sm-4 col-xs-12">

      <div class="box_icon_two"> <i class="im im-icon-Administrator"></i>

        <h3>Legal Professional Advice</h3>

        <p>Coordinate with dedicated legal advisors to achieve all your legal services.</p>

      </div>

      </div>

    </div>

    </div>

  </section>

  <a href="#" class="flip-banner parallax" data-background="images/coming_soon_bg.jpg" data-color="#000" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">

	  <div class="flip-banner-content">

		<h2 class="flip-visible">Browse Listed MLM Company</h2>    

	  </div>

  </a>

  

  <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75"> 

    <div class="container">

      <div class="row">

        <div class="col-md-8 col-md-offset-2">

          <h3 class="headline_part centered">What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span> </h3>

        </div>

      </div>

    </div>

    <div class="fullwidth_carousel_container_block margin-top-20">

      <div class="utf_testimonial_carousel testimonials"> 

		 <?php
		 $querytestimonials=mysqli_query($con,"select *  from tbl_testimonials limit 4");	 
		 while($rowtestimonials=mysqli_fetch_array($querytestimonials))
		 {
		 ?>	
        <div class="utf_carousel_review_part">

          <div class="utf_testimonial_box">

            <div class="testimonial"><?php echo $rowtestimonials['testimonials']?></div>

          </div>

          <div class="utf_testimonial_author"> <img src="testimonials/<?php echo $rowtestimonials['PostImage']?>">

            <h4><?php echo $rowtestimonials['tiitle']?></h4>

          </div>

        </div>
		 <?php } ?>

 

 

      </div>

    </div>

  </section>   



 

  

  <section class="fullwidth_block margin-bottom-0 padding-top-50 padding-bottom-50" style="background: linear-gradient(rgb(255 255 255) 0%, rgb(255, 255, 255));">

	<div class="container">

		<div class="row">

      <div class="col-md-12">

        <h3 class="headline_part centered margin-bottom-40 margin-top-30">Our Partner Logos</h3>

      </div>

			<div class="col-md-12">

				<div class="companie-logo-slick-carousel utf_dots_nav">
					 <?php
					 $querypartners=mysqli_query($con,"select *  from tbl_partners limit 8");

					 while($rowpartners=mysqli_fetch_array($querypartners))
					 {
							 
					 ?>
					<div class="item">

						<img src="partners/<?php echo $rowpartners['PostImage'];?>" alt="">

					</div>
					 <?php } ?>
 				

				</div>

			</div>

		</div>

	</div>

  </section>

  

 <style>

#change {



}

#change.bg {

  display:none;

}

 



.popupinnerpart{





  margin: 70px auto;

  padding: 20px;

  background: #fff;

  border-radius: 5px;

  width: 30%;

  position: relative;

  transition: all 5s ease-in-out;

  z-index:9999;

}

 

 

.popup{

   

  top: 0;

  bottom: 0;

  left: 0;

  right: 0;  

  position: fixed;

  z-index: 9999;

  background: rgba(0, 0, 0, 0.7);

   

}

 

.popup .close {

 

 /* position: absolute;*/

  top: 20px;

  right: 30px;

  transition: all 200ms;

  font-size: 30px;

  font-weight: bold;

  text-decoration: none;

  color: #000;

}

.popup .close:hover {

  color: #000;

}

.popup .content {

  max-height: 30%;

  overflow: auto;

}





@media screen and (max-width: 700px){

 

  .popupinnerpart{

    width: 70%;

  }

}

 

</style>


 <?php
 $querypopup=mysqli_query($con,"select *  from tbl_popup order by id limit 1");
 while($rowpopup=mysqli_fetch_array($querypopup))
 {
 ?>
<div id="change" class='popup'>

 <div class="popupinnerpart">

 <a class="close" id="button" href="#">&times;</a>

 <img src="slider/<?php echo $rowpopup['PostImage']; ?>" style="width:100%">
 
 
 
 </div>

</div>
<?php } ?>


<script>

document.getElementById('button').addEventListener('click',function() {

  document.getElementById('change').classList.add('bg');

})

</script> 

  

  <!-- Footer -->

 <?php include('includes/footer.php'); ?>

  <div id="bottom_backto_top"><a href="#"></a></div>

</div>



<!-- Scripts --> 



<script src="scripts/chosen.min.js"></script> 

<script src="scripts/slick.min.js"></script> 

<script src="scripts/rangeslider.min.js"></script> 

<script src="scripts/magnific-popup.min.js"></script> 

<script src="scripts/jquery-ui.min.js"></script> 

<script src="scripts/bootstrap-select.min.js"></script> 

<script src="scripts/mmenu.js"></script>

<script src="scripts/tooltips.min.js"></script> 

<script src="scripts/color_switcher.js"></script>

<script src="scripts/jquery_custom.js"></script>

<script src="scripts/typed.js"></script>

 
</body>

</html>