
	<?php
$this->load->view('User/Layout/user_header');
?>

	<div class="container" >
			
			   <div class="price-section">
     <div class="container" align="center">
         <div class="col-md-13 price" align="center" >
         	<?php
               	foreach($prof as $row) 
               	?>
				<h3><span class="one">M</span>y <span class="one">  P</span>ROFILE</h3>
					<form action="<?php echo base_url('index.php/Usercontroller/user_prof_update')?>" method="post">
				<div class="reservation" align="center">
					<div class="section_room">
						
						
					
						
					
					
					<div class="keywords">
					<input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row->user_name?>" style="background-color: white;color: black"><br>
							
							 <input type="email" class="form-control" readonly name="email"placeholder="Enter" value="<?php echo $row->user_email?>" style="background-color: white;color: black"><br>
							 <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $row->user_phn?>" style="background-color: white;color: black"><br>
							 <input type="text" class="form-control" placeholder="password" name="password" value="<?php echo $row->user_password?>" style="background-color: white;color: black"><br>
							<input type="submit" value="Update">
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

