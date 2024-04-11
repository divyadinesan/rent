		<?php
$this->load->view('User/Layout/user_header');
?>
      <?php
      foreach ($vehicle as $row) 
     
      ?>
  	
		
			
			  <div class="price-section">
     <div class="container" align="center">
         <div class="col-md-13 price" align="center" >

				<h3><span ><?php echo $row->vb_name?></h3>
				 <img src="<?php echo base_url('Asset/Vendor/vehicle/'.$row->v_image)?>" alt="" class="image-fluid" style="height: 200px;width: 500px">
				 <div class="rent-bottom">
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
									<br>
									  <h6 class="area"></h6>
									 
									  <div class="clearfix"></div>
									</div>





									<div class="col-md-12 agitsworkw3ls-grid ">
      
				<!-- Tabs -->
				<div class="tabs">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Description</span></li>
								
								
								<div class="clearfix"></div>
							</ul>

							<div class="resp-tabs-container">
								<h3 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h3><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<p><?php echo $row->v_description?></p>
									
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

