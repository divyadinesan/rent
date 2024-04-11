		<?php
$this->load->view('User/Layout/user_header');
?>

      <?php
      foreach ($house as $row) 
     
      ?>
  	
		<div class="price-section">
     <div class="container">
         <div class="col-md-6 price">
				<h3><span><?php echo $row->h_Address?></span></h3>
				<div class="reservation">
					
					<form action="<?php echo base_url('index.php/Usercontroller/house_booking_insrt')?>" method="post">
					<div class="section_room">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						
					</div>	
					<div class="section_room">
						
					</div>
					
					
					<div class="keywords">
						
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
							<?php
			foreach($user as $usr)
			?>

			<input type="hidden" value="<?php echo $usr->user_id?>" name="user_id">
			<input type="hidden" value="<?php echo $usr->user_email?>" name="user_email">
			
            <input type="hidden" value="<?php echo $row->house_id?>" name="house_id"  required=""/>
            <input type="hidden" value="<?php echo $row->h_vendor_id?>" name="vendor_id"  required=""/>
            <input type="hidden" value="<?php echo $row->h_vendor_email?>" name="vendor_email"  required=""/>
             <input type="hidden" value="<?php echo $row->h_rent?>" name="house_rent"  required=""/>

            <input type="text" value="<?php echo $row->h_Address?>" name="h_Address"  required=""/>
             Vendor Name
            <input type="text" value="<?php echo $row->vndr_name?>"  readonly>
            Customer Name
            <input type="text" value="<?php echo $usr->user_name?>"  readonly>
			<label>Booking Date</label>
			 <input type="text" value="<?php echo date('y-m-d')?>" name="booking_date"  required=""/ readonly>

			 <label>Stay Date:</label><br>
			
			
			 <input type="date"  id="hb_stay_date" required="Required" class="form-control" name="hb_stay_date" placeholder="Select suitable date" / ><br>
			  <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("hb_stay_date")[0].setAttribute('min', today);
			 </script>
			  <label>Return Date:</label><br>

			  <input type="date"  id="hb_return_date" required="Required" class="form-control" name="hb_return_date" placeholder="Select suitable date" / ><br>
			  <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("hb_return_date")[0].setAttribute('min', today);
			 </script>
			 <!--  <label>Return Date:</label><br> -->
			 <!-- <input type="date"   style="width: 500px" name="hb_return_date" value="<?php echo date("Y-m-d") ?>"> -->
  <label>Total Month:</label><br>
					<div class="section_room">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required" name="month">
							
					<option value="6">6 Month  ₹<?php echo $row->h_rent*6?> </option>
					<option value="12">1 year  ₹<?php echo $row->h_rent*12?> </option>
					<option value="24">2 year  ₹<?php echo $row->h_rent*24?> </option>
					
					
						</select>
					</div><br>
					
					<label>Token Amount</label>
					<!-- <input placeholder=""  type="text" value="<?php echo ceil($row->h_rent/4)?>"  required="" name="token_amount"> -->
					 <input placeholder=""  type="text" value="<?php echo $row->h_rent?>"  required="" name="token_amount"> 
					
							<br>
							<input type="submit" value="Book Now">
						 </form>
						
					</div>
				</div>
		</div>	
		<div class="col-md-6 plat">
		<div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel1" data-slide-to="1"></li>
				<li data-target="#myCarousel1" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->	
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="serv-w3ls1">
						
							<img src="<?php echo base_url('Asset/Vendor/house/'.$row->h_image)?>" alt="w3ls" class="img-responsive"  style="height:700px;width:670px">
						    <span class="four">₹<?php echo $row->h_rent?></span>
						    <table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Property Size</th>
    <th style="text-align: center;height: 80px;width: 140px">Total Rooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bedrooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bathrooms</th>
     <th style="text-align: center;height: 80px;width: 140px">Year_Build</th>
      <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Property_Size?></td>
    <td style="text-align: center;height: 80px;width: 140px">  <?php echo $row->h_Total_Rooms?></td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bedrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bathrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Year_Build?></td>
      <?php
                  if($row->h_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->h_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->h_status?></td>
                      <?php
                     }

                     ?>
  </tr>
  
 </table>
							
						
					</div>
				</div>
				<div class="item">
				<div class="serv-w3ls1">
						
							<img src="<?php echo base_url('Asset/Vendor/room1/'.$row->h_room1)?>" alt="w3ls" class="img-responsive" style="height:700px;width:670px">
						    <span class="four">₹<?php echo $row->h_rent?></span>
						    <table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Property Size</th>
    <th style="text-align: center;height: 80px;width: 140px">Total Rooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bedrooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bathrooms</th>
     <th style="text-align: center;height: 80px;width: 140px">Year_Build</th>
      <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Property_Size?></td>
    <td style="text-align: center;height: 80px;width: 140px">  <?php echo $row->h_Total_Rooms?></td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bedrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bathrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Year_Build?></td>
      <?php
                  if($row->h_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->h_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->h_status?></td>
                      <?php
                     }

                     ?>
  </tr>
  
 </table>
							
						
					</div>
				</div> 
				<div class="item">
					<div class="serv-w3ls1">
						    <img src="<?php echo base_url('Asset/Vendor/room2/'.$row->h_room2)?>" alt="w3ls" class="img-responsive" style="height:700px;width:670px">
						    <span class="four">₹<?php echo $row->h_rent?></span>
						    <table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Property Size</th>
    <th style="text-align: center;height: 80px;width: 140px">Total Rooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bedrooms</th>
    <th style="text-align: center;height: 80px;width: 140px">Bathrooms</th>
     <th style="text-align: center;height: 80px;width: 140px">Year_Build</th>
      <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Property_Size?></td>
    <td style="text-align: center;height: 80px;width: 140px">  <?php echo $row->h_Total_Rooms?></td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bedrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Bathrooms?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->h_Year_Build?></td>
      <?php
                  if($row->h_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->h_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->h_status?></td>
                      <?php
                     }

                     ?>
  </tr>
  
 </table>
							
					</div>
				</div>
				
			</div>
		</div>
			
	</div>
		

									  <h6 class="area"></h6>
									 
									  <div class="clearfix"></div>
									</div>
							</div>
						
					</div>
				</div>
				
				
				
			</div>
		</div> 
			<div class="col-md-12 agitsworkw3ls-grid ">
       <h3 class="tittle two"><?php echo $row->h_Address?></h3>
				<!-- Tabs -->
				<div class="tabs">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Description & Aggrement</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>review</span></li>
								

								
								<div class="clearfix"></div>
							</ul>

							<div class="resp-tabs-container">
								<h3 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h3><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<p><?php echo $row->h_description?></p><br>
									<label style="color: white">Aggrement Form </label><br>
									 <td><br><object data="<?php echo base_url('Asset/Vendor/aggrement/'.$row->h_aggrement)?>"  width="100%" height="300px" type="application/pdf"></object></td>
									
									
								</div>
								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>review</h3><div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							 <?php
foreach ($review as $rev) {
   
?>
                      <div class="d-flex flex-row user-info"><img class="rounded-circle" src="<?php echo base_url('Asset/User/images/icon.jpg')?>" style="height: 40px;width: 40px;">
                      	<span style="color: white"><?php echo $rev->user_name?></apan>
                       <div class=""><?php echo $rev->rating?></div>
                         <div class=""><?php echo  $rev->review?></div>
                    </div>
                    <?php
                 }
                 ?> 
									
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
	
	</div>	
</div>
		
	
	</div>	
</div>

	<?php
$this->load->view('User/Layout/user_footer');
?>