<?php
$this->load->view('User/Layout/user_header');
?>


<div class="featured-section" id="projects">
  <div class="container">
		<h3 class="tittle">Cate<span>gories</span> </h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">	

						 <?php
                  foreach($category as $row)
                     {
                        ?>
                  <li>
                     <?php
                     if($row->category_type=='vehicle')
                     {


                     ?>
							<div class="project-fur">
								<a href="<?php echo base_url('index.php/Usercontroller/user_veh_product/'.$row->category_id)?>"><img class="img-responsive" src="<?php echo base_url('Asset/Vendor/category/'.$row->category_image)?>" style="height: 200px;width: 300px" alt="" />	</a>
									<div class="fur">
										
			                            <div class="fur2">
			                               	<span><?php echo $row->category_name?></span>
			                             </div>
									</div>	
																		
							</div>
							 <?php
                  }
                  else
                     {
                        ?>


<div class="project-fur">
								<a href="<?php echo base_url('index.php/Usercontroller/user_hse_product/'.$row->category_id)?>"><img class="img-responsive" src="<?php echo base_url('Asset/Vendor/category/'.$row->category_image)?>" style="height: 200px;width: 300px" alt="" />	</a>
									<div class="fur">
										
			                            <div class="fur2">
			                               	<span><?php echo $row->category_name?></span>
			                             </div>
									</div>	
																	
							</div>

						<?php
                  }
                  ?>
                  </li>
                  <?php
               }
               ?>
							
							
					</ul>

		</div>
	
</div>
<br><br>
<div class="gallery agile" id="gallery">
		<div class="container">
			<h3 class="tittle"> Our <span>Gallery</span></h3>
			<div class="">
				<ul class="clearfix demo">

					<?php 
                     foreach ($vehicle as $veh) {
                       
                     ?>
					<li>
						

									<div class="project-fur">
								<a href="<?php echo base_url('index.php/Usercontroller/vehicle_single/'.$veh->vehicle_id)?>">	<img class="img-responsive" src="<?php echo base_url('Asset/Vendor/vehicle/'.$veh->v_image)?>" style="height: 200px;width: 300px" alt="" />	</a>
									<div class="fur">
										
			                            <div class="fur2">
			                               	<span><?php echo $veh->v_name?></span><br>
			                               	<span>Rent : <?php echo $veh->v_rent?>/day</span>
			                               
			                             </div>
			                             <span class="five"><?php echo $veh->v_status?></span>
									</div>	
																		
							</div>
					</li>
					<?php
                  }
                  ?>
                    
					
				</ul>
			
			</div>
		</div>
	</div>

	<?php
$this->load->view('User/Layout/user_footer');
?>