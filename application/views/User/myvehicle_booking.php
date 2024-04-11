<?php
$this->load->view('User/Layout/user_header');
?>

						<?php
                      foreach ($mybooking as $row) 
                      {
                      
                      ?>
<div class="team" id="team" >
		     <div class="container" >
			
			  <div class="price-section">
     <div class="container" align="center">
         <div class="col-md-8 price" align="center" >

				<h3><span ><?php echo $row->vb_name?></h3>
				 <img src="<?php echo base_url('Asset/Vendor/vehicle/'.$row->v_image)?>" alt="" class="image-fluid" style="height: 200px;width: 500px">
					<form action="" method="post">
				<div class="reservation" >
					<div class="section_room">
						
						
					
						
					 <?php
                                    if($row->vb_status=='Not Confirmed')
                                    {
                                    ?>
                                    <br>
                                   <button style="background-color: red;color: white"><?php echo $row->vb_status?></button>
                                   <?php
                               }
                               else
                                {
                                  ?>
                                  <button style="background-color: green;color: white;margin: 40px"><?php echo $row->vb_status?></button>
                                  <?php
                                }
                                ?>
                                <button><i class="fa fa-car" aria-hidden="true"><?php echo $row->vb_number?></i></button>

                                <button>₹<?php echo $row->vb_amount?></button>
                                  <button ><a href="<?php echo base_url('index.php/Usercontroller/veh_book_details/'.$row->vb_id)?>" style="color: black">More Details</a></button>
                                 </div>
                                   
                              </div>
                              <br>
                          <?php
                          if($row->payment!="Paid")
                          {

                          ?>
                                  <button ><a href="<?php echo base_url('index.php/Usercontroller/veh_book_cancel/'.$row->vb_id)?>" style="color: black">Cancel</a></button>
                                  <?php
                                }
                                ?>
                                  <?php
                                    if($row->vb_status=='Confirmed' and $row->payment!="Paid")
                                    {
                                    ?>
                                    <button><?php echo $row->payment?></button>
                                    <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/vehicle_payment')?>">Pay Now</a></button>
                                    <?php
                                  }
                                  elseif($row->vb_status=='Confirmed' and $row->payment=="Paid")
                                  {
                                  ?>
                                  
                                  <button><?php echo $row->payment?></button>
                                
                                <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/vehicle_invoice/'.$row->vb_vehicleid)?>">Invoice</a></button>
                                       <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/veh_return/'.$row->vb_vehicleid)?>">Return</a></button>
                                      <button>
                                      <a href="<?php echo base_url('index.php/Usercontroller/veh_review/'.$row->vb_vehicleid)?>">Review</a></button>
                                   
                                   
                                    <?php
                                  }
                                  ?>
					
					<div class="keywords">
					
							
							<!-- <input type="text" name="Password" placeholder="Enter Your Password" required=" " ><br><br> -->
							
						</form>
					</div>
				</div>
		</div>	
		
	<div class="clearfix"> </div>
	</div>	
</div>
<?php
}
?>
<?php
$this->load->view('User/Layout/user_footer');
?>
