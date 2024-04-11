<?php
$this->load->view('vendor/Layout/header');
?>	<br><br></br>

 <section class="" id="contact" style="background-color: grey;">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">My Profile</h3>
        <div class="row">
         <?php
         foreach ($profile as $prfl) 
         ?>
          <div class="col-md-9 contact-form">
           <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_profile_updation/'.$prfl->vendor_id)?>" method="post" enctype="multipart/form-data">
               
               <div class="form-group contact-forms">
                <label><b style="color: white">Name</b></label>
                <input type="text" class="form-control" placeholder=" Name" required=""  name="name" style="width: 1000px" value="<?php echo $prfl->vndr_name?>">
              </div><br>
                <div class="form-group contact-forms">
                  <label><b style="color: white">Email</b></label>
                 <input type="text" class="form-control" placeholder="Email" required=""  name="email" style="width: 1000px" value="<?php echo $prfl->vndr_email?>" readonly>
              </div><br>
               <div class="form-group contact-forms">
                <label><b style="color: white">Phone Number</b></label>
                 <input type="text" class="form-control" placeholder="Phone Number" required=""  name="phone" style="width: 1000px" value="<?php echo $prfl->vndr_phone?>">
              </div><br>
                <div class="form-group contact-forms">
                  <label><b style="color: white">Password</b></label>
                 <input type="text" class="form-control" placeholder="Password" required=""  name="password" style="width: 1000px" value="<?php echo $prfl->vndr_password?>">
              </div><br>
               <div class="form-group contact-forms">
                <label><b style="color: white">Address</b></label>
                 <input type="text" class="form-control" placeholder="Address" required=""  name="address" style="width: 1000px" value="<?php echo $prfl->vndr_address?>">
              </div><br>
               <div class="form-group contact-forms">
                <label><b style="color: white">Occupation</b></label>
                 <input type="text" class="form-control" placeholder="Occupation" required=""  name="occupation" style="width: 1000px" value="<?php echo $prfl->vndr_occupation ?>">
              </div><br>
              



             

              
             
              <div class="sent-butnn text-center">
                 <button type="submit" class="" data-blast="" style="width: 1000px;background-color: white;color: black">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<br><br><br>

<?php
$this->load->view('vendor/Layout/footer');
?>  
