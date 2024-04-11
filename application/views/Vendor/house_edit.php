<?php
$this->load->view('vendor/Layout/header');
?> <br><br><br> 

 <section class="" id="contact" style="background-color: grey;">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Add House</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
         <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_house_edit')?>" method="post" enctype="multipart/form-data">
              
              <?php
            foreach($house as $hse)
              
                ?>
              
              <input  type="hidden" value="<?php echo $hse->house_id?>"  name="house_id" >
               <div class="form-group contact-forms">
                <label style="color:white"><b>Address</b></label>
                <input type="text" class="form-control" placeholder="Address"   name="Address" style="width: 1000px" value="<?php echo $hse->h_Address?>">
              </div>

              <div class="form-group contact-forms">
                <label style="color:white"><b>Property Size</b></label>
                <input type="text" class="form-control" placeholder="Property_Size"  name="Property_Size"style="width: 1000px" value="<?php echo $hse->h_Property_Size?>">
              </div>
              <div class="form-group contact-forms">
                <label style="color:white"><b>Total Rooms</b></label>
                <input type="text" class="form-control" placeholder="Total_Rooms"   name="Total_Rooms" style="width: 1000px" value="<?php echo $hse->h_Total_Rooms?>" >
              </div>
              <div class="form-group contact-forms">
                <label style="color:white"><b>Bedrooms</b></label>
                <input type="text" class="form-control" placeholder="Bedrooms"   name="Bedrooms" style="width: 1000px"  value="<?php echo $hse->h_Bedrooms?>">
              </div>
              <div class="form-group contact-forms">
                <label style="color:white"><b>Bathrooms</b></label>
                <input type="text" class="form-control" placeholder="Bathrooms"  name="Bathrooms" style="width: 1000px"  value="<?php echo $hse->h_Bathrooms?>">
              </div><div class="form-group contact-forms">
                <label style="color:white"><b>Year Built</b></label>
                <input type="text" class="form-control" placeholder="Year_Build"  name="Year_Build" style="width: 1000px" value="<?php echo $hse->h_Year_Build ?>">
              </div>
              <div class="form-group contact-forms">
                <label style="color:white"><b>Rent</b></label>
                <input type="text" class="form-control" placeholder="rent"   name="rent" style="width: 1000px" value="<?php echo $hse->h_rent ?>">
              </div>
               <div class="form-group contact-forms">
                <label style="color:white"><b>Description</b></label>
                <input type="text" class="form-control" placeholder="rent"   name="Description" style="width: 1000px" value="<?php echo $hse->h_description ?>">
              </div>
<img src="<?php echo base_url('Asset/vendor/house/'.$hse->h_image)?>" style="height: 150px;width: 150px">
              <div class="form-group contact-forms">
              <div class="form-group contact-forms">
                <input type="file" class="form-control" placeholder="PHONE NUMBER"  name="image" style="width: 1000px">
              </div>

              
             
              <div class="sent-butnn text-center">
                <button type="submit" class="" data-blast="" style="width: 1000px;color: black;background-color: white">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<br><br><br>
<br><br><br>

<?php
$this->load->view('vendor/Layout/footer');
?>  