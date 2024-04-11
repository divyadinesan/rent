		<?php
$this->load->view('User/Layout/user_header');
?>
      <?php
      foreach ($vehicle as $row) 
     
      ?>
  	
		<div class="price-section">
     <div class="container">
         <div class="col-md-6 price">
				<h3><span><?php echo $row->v_name?></span></h3>
				<div class="reservation">
					<form action="<?php echo base_url('index.php/Usercontroller/veh_booking_insrt')?>" method="post" enctype="multipart/form-data">
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
			<input type="hidden" value="<?php echo $usr->user_email?>" name="email">
			
            <input type="hidden" value="<?php echo $row->vehicle_id?>" name="vehicle_id"  required=""/>
            <input type="hidden" value="<?php echo $row->v_vendor_id?>" name="vendor_id"  required=""/>
            <input type="hidden" value="<?php echo $row->vndr_email?>" name="vendor_email"  required=""/>

            <input type="hidden" value="<?php echo $row->v_name?>" name="name"  required=""/>
			<input type="text" value="<?php echo $row->v_number?>" name="number" required=""/>
			<input type="text" placeholder="Pick up Location" name="location"  required=""/>
			<input type="text" placeholder="Destination" name="destination"  required=""/>
			<label>Booking Date</label>
			<input  type="text" value="<?php echo date("Y-m-d") ?>" name="booking_date" style="width: 502px" readonly><br>
			<label>Start Date</label><br>
			 <input type="date"  id="start_date" required="Required" class="form-control" name="start_date" placeholder="Select suitable date" / ><br>
			  <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("start_date")[0].setAttribute('min', today);
			 </script>
			
			<label>Return Date</label><br>
			<input type="date"  id="return_date" required="Required" class="form-control" name="return_date" placeholder="Select suitable date" / ><br>
			  <script type="text/javascript">
			 	
			 	var today = new Date().toISOString().split('T')[0];
document.getElementsByName("return_date")[0].setAttribute('min', today);
			 </script>
			<!-- <input type="date"  value="<?php echo date("Y-m-d") ?>" name="return_date" style="width: 502px"> -->
			<label>Upload Driving Licence</label><br>
			<input type="file"   name="licence" ><br><br>
			<label>Total Days :</label><br>
					<div class="section_room">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required" name="amount">
							
					<option value="<?php echo $row->v_rent*1?>">1 Day  ₹<?php echo $row->v_rent*1?> </option>
					<option value="<?php echo $row->v_rent*2?>">2 Days  ₹<?php echo $row->v_rent*2?> </option>
					<option value="<?php echo $row->v_rent*3?>">3 Days  ₹<?php echo $row->v_rent*3?> </option>
					<option value="<?php echo $row->v_rent*4?>">4 Days  ₹<?php echo $row->v_rent*4?></option>
					<option value="<?php echo $row->v_rent*5?>">5 Days  ₹<?php echo $row->v_rent*5?></option>
					<option value="<?php echo $row->v_rent*6?>">6 Days  ₹<?php echo $row->v_rent*6?></option>
						</select>
					</div>
					
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
						<img src="<?php echo base_url('Asset/Vendor/vehicle/'.$row->v_image)?>" alt="w3ls" class="img-responsive" style="height:500px;width:570px">
						    <span class="four"> ₹<?php echo $row->v_rent?></span>
						   <table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Fuel</th>
    <th style="text-align: center;height: 80px;width: 140px">Rent</th>
    <th style="text-align: center;height: 80px;width: 140px">Number Plate</th>
    <th style="text-align: center;height: 80px;width: 140px">Mileage</th>
     <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_fuel?></td>
    <td style="text-align: center;height: 80px;width: 140px"> ₹ <?php echo $row->v_rent?>/day</td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_number?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_Mileage?></td>
      <?php
                  if($row->v_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->v_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->v_status?></td>
                      <?php
                     }

                     ?>
  </tr>
  
</table>
							
						
					</div>
				</div>
				<div class="item">
				<div class="serv-w3ls1">
						
							<img src="<?php echo base_url('Asset/Vendor/vehicle1/'.$row->v_image1)?>" alt="w3ls" class="img-responsive" style="height:500px;width:570px">
						    <span class="four"> ₹<?php echo $row->v_rent?></span>
						    <table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Fuel</th>
    <th style="text-align: center;height: 80px;width: 140px">Rent</th>
    <th style="text-align: center;height: 80px;width: 140px">Number Plate</th>
    <th style="text-align: center;height: 80px;width: 140px">Mileage</th>
     <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_fuel?></td>
    <td style="text-align: center;height: 80px;width: 140px"> ₹ <?php echo $row->v_rent?>/day</td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_number?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_Mileage?></td>
      <?php
                  if($row->v_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->v_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->v_status?></td>
                      <?php
                     }

                     ?>
  </tr>
  
</table>
							
						
					</div>
				</div> 
				<div class="item">
					<div class="serv-w3ls1">
						    <img src="<?php echo base_url('Asset/Vendor/vehicle2/'.$row->v_image2)?>" alt="w3ls" class="img-responsive" style="height:500px;width:570px">
						    <span class="four"> ₹<?php echo $row->v_rent?></span>
					<table border="1px solid" align="center">
  <tr>
    <th style="text-align: center;height: 80px;width: 140px">Fuel</th>
    <th style="text-align: center;height: 80px;width: 140px">Rent</th>
    <th style="text-align: center;height: 80px;width: 140px">Number Plate</th>
    <th style="text-align: center;height: 80px;width: 140px">Mileage</th>
     <th style="text-align: center;height: 80px;width: 140px">Status</th>
  </tr>
  <tr>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_fuel?></td>
    <td style="text-align: center;height: 80px;width: 140px"> ₹ <?php echo $row->v_rent?>/day</td>
    <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_number?></td>
     <td style="text-align: center;height: 80px;width: 140px"><?php echo $row->v_Mileage?></td>
      <?php
                  if($row->v_status=='Available')
                  {
                  ?>
     <td style="text-align: center;height: 50px;color: green"><?php echo $row->v_status?></td>
     <?php 
                  }
                   else
                     {
                     ?>
                      <td style="text-align: center;height: 50px;color: red"><?php echo $row->v_status?></td>
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
       <h3 class="tittle two"><?php echo $row->v_name?></h3>
				<!-- Tabs -->
				<div class="tabs">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Description</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>review</span></li>
								
								<div class="clearfix"></div>
							</ul>

							<div class="resp-tabs-container">
								<h3 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h3><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<p><?php echo $row->v_description?></p>
									
								</div>
								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>review</h3><div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
									<?php
foreach ($review as $rev) {
   
?>
                      <div class="d-flex flex-row user-info"><img class="rounded-circle" src="<?php echo base_url('Asset/User/images/icon.jpg')?>" style="height: 40px;width: 40px;">
                      	<span style="color: white"><?php echo $rev->veh_rev_user_name?></apan>
                       <div class=""><?php echo $rev->veh_rev_rating?></div>
                         <div class=""><?php echo  $rev->veh_rev_reviiew?></div>
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