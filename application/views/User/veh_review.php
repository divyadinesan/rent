<?php
$this->load->view('User/Layout/user_header');
?>


		    <?php
foreach($user as $usr)
?>
<?php
foreach ($vehicle as $vhcle) 
?>
			
			  <div class="price-section"align="center">
     <div class="container" align="center">
         <div class="col-md-8 price" align="center" style="margin:150px">
				<h3><span class="one">E</span>nter Your<span class="one">R</span>eview  </h3>
					  <form method="post" action="<?php echo base_url('index.php/Usercontroller/vehicle_review')?>" style="margin:80px">

						<div class="col-md-4 col-sm-4 news-img" align="center">
							 <h4 align="center" style="font-size: 20px"><?php echo $usr->user_name?> 
                                    </h4>
                                    <img src="<?php echo base_url('Asset/User/images/icon.jpg')?>" alt="" class="image-fluid" style="height:90px;width: 90px">
                                   
                                    
                                 </div>

				<div class="reservation" align="center">
					<div class="section_room">
						
						
					
						
					
					
					<div class="col-md-4 col-sm-4 news-img" align="center">
                                 
                                    <img src="<?php echo base_url('Asset/Vendor/vehicle/'.$vhcle->v_image)?>" alt="" class="image-fluid" style="height: 200px;width: 400px" ><br><br><br><br>
                                    <p class="mt-3"> 
                                    </div>
                                  
                       
                        <input type="hidden" name="userid" value="<?php echo $usr->user_id?>" placeholder="username" >
                        <input type="hidden" name="username" value="<?php echo $usr->user_name?>" placeholder="userid" >
                        <input type="hidden" name="mail" value="<?php echo $usr->user_email?>" placeholder="email" >
                        <input type="hidden" name="veh_id" value="<?php echo  $vhcle->vehicle_id?>" >
                        <input type="text" name="review" value="<?php echo $vhcle->v_name?>" style="background-color: black;color: white;height: 50px;width:600px" ><br><br>
                        <input type="text" name="review" placeholder="Enter your review" style="background-color: black;color: white;height: 50px;width:600px" ><br><br>
                        
                        <select name="v_rating" style="background-color: black;height: 50px;width:600px">
                           <option value="☆☆☆☆☆">🌟🌟🌟🌟🌟</option>
                           <option value="☆☆☆☆">🌟🌟🌟🌟✩</option>
                           <option value="☆☆☆">🌟🌟🌟✩✩</option>
                           <option value="☆☆">🌟🌟✩✩✩</option>
                           <option value="☆">🌟✰✩✩✩</option>

                           
                           
                        </select><br>
                        <br>
                        
                       

 
                                    </p>
                                 </div>
                              </div>
					
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
		</div>	
		
	<div class="clearfix"> </div>
	</div>	
</div>






<?php
$this->load->view('User/Layout/user_footer');
?>
