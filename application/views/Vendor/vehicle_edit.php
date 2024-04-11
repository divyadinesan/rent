<?php
$this->load->view('vendor/Layout/header');
?>	
<br><br><br><br>
 <section class="" id="contact" style="background-color: grey">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Update Vehicle</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
         <form action="<?php echo base_url('index.php/Vendorcontroller/veh_update')?>" method="post" enctype="multipart/form-data">
              
              <?php
            foreach($vehicle as $vcle)
              
                ?>
              <label style="color: white"><b>Vehicle Name : </b></label>
             <input type="hidden" class="form-control" placeholder="Name" required=""  name="vehicle_id" style="width: 1000px" value="<?php echo $vcle->vehicle_id?>">
               <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name"   name="name" style="width: 1000px" value="<?php echo $vcle->v_name?>">
              </div>
 <label style="color: white"><b>Vehicle Number : </b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="number"   name="number"style="width: 1000px" value="<?php echo $vcle->v_number?>">
              </div>
               <label style="color: white"><b>Vehicle Fuel : </b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="fuel"   name="fuel" style="width: 1000px" value="<?php echo $vcle->v_fuel?>">
              </div>
               <label style="color: white"><b>Vehicle Mileage : </b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="mileage"   name="mileage" style="width: 1000px" value="<?php echo $vcle->v_Mileage?>">
              </div>
               <label style="color: white"><b>Vehicle Rent/Day : </b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="rent"   name="rent" style="width: 1000px" value="<?php echo $vcle->v_rent?>">
              </div>
               <label style="color: white"><b>Vehicle Description: </b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="rent"   name="description" style="width: 1000px" value="<?php echo $vcle->v_description?>">
              </div>
              

<div class="form-group contact-forms">
                 
              </div>
<img src="<?php echo base_url('Asset/vendor/vehicle/'.$vcle->v_image)?>" style="height: 150px;width: 150px"><br><br>
 <label style="color: white"><b>Upload New Image : </b></label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"   name="image" style="width: 1000px">
              </div>

              
             
              <div class="sent-butnn text-center">
                 <button type="submit" class="" data-blast="" style="width: 1000px;background-color: white;color: black">Submit</button>
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