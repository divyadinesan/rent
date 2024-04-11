<?php
$this->load->view('User/Layout/user_header');
?>

					
<div class="team" id="team" >
		     <div class="container" >
			
        <?php
                      foreach ($house as $row) 
                      {
                      
                      ?>
			  <div class="price-section">
     <div class="container" align="center">
         <div class="col-md-8 price" align="center" >

				<h3><span ><?php echo $row->hb_hse_address?></h3>
				 <img src="<?php echo base_url('Asset/Vendor/house/'.$row->h_image)?>" alt="" class="image-fluid" style="height: 200px;width: 500px">
					<form action="" method="post">
				<div class="reservation" >
					<div class="section_room">
						
						
					
						
					 <?php
                                    if($row->hb_status=='Not Confirmed')
                                    {
                                    ?>
                                    <br>
                                   <button style="background-color: red;color: white"><?php echo $row->hb_status?></button>
                                   <?php
                               }
                               else
                                {
                                  ?>
                                  <button style="background-color: green;color: white;margin: 40px"><?php echo $row->hb_status?></button>
                                  <?php
                                }
                                ?>
                                <button><i class="fa fa-home" aria-hidden="true">property <?php echo $row->h_Property_Size?></i></button>

                                <button>₹<?php echo $row->h_rent?>/month</button>
                                <button>Token Amount : ₹<?php echo $row->hb_token_amount?>
                                 
                                 </div><br>
                                    <button>Total Amount : ₹<?php echo $row->hb_amount?></button>

                              </div>
                              <br>
                          <?php
                          if($row->hb_payment!="Paid")
                          {

                          ?>
                                  <button ><a href="<?php echo base_url('index.php/Usercontroller/hse_book_cancel/'.$row->hb_house_id)?>" style="color: black">Cancel</a></button>
                                  <?php
                                }
                                ?>
                                  <?php
                                    if($row->hb_status=='Confirmed' and $row->hb_payment!="Paid")
                                    {
                                    ?>
                                    <button><?php echo $row->hb_payment?></button>
                                    <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/house_payment')?>">Pay Now</a></button>
                                    <?php
                                  }
                                  elseif($row->hb_status=='Confirmed' and $row->hb_payment=="Paid")
                                  {
                                  ?>
                                  
                                  <button><?php echo $row->hb_payment?></button>
                                
                                <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/house_invoice/'.$row->hb_house_id)?>">Invoice</a></button>
                                <!--    <?php
                                  for ($i=1; $i <=$row->hb_total_month ; $i++) { 
                                   ?>

                                  <button>Month <?php echo $i?></button>
                                
                                <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/house_invoice/'.$row->hb_house_id)?>">Invoice</a></button>
                                   <?php

                                  }
                                  ?> -->
                                   <button>
                                      <a href="<?php echo base_url('index.php/Usercontroller/hse_review/'.$row->hb_house_id)?>">Review</a></button>
                                  <button style="background-color:white;color: black">
                                      <a href="<?php echo base_url('index.php/Usercontroller/hse_return/'.$row->hb_house_id)?>">Return</a></button>
                                     



                                    <?php
                                  }
                                  ?>
                                  
					
					<div class="keywords">
					
						
							
						</form>
					</div>
				</div>
		</div>	
		<?php
}
?>
	<div class="clearfix"> </div>
	</div>	
</div>

<?php
$this->load->view('User/Layout/user_footer');
?>
