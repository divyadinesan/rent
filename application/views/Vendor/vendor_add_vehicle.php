<?php
$this->load->view('vendor/Layout/header');
?>	
<br><br>
 <section class="" id="contact" style="background-color: grey">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Add  Vehicle</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
         <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_vehicle_insrt')?>" method="post" enctype="multipart/form-data">
               <div class="form-group contact-forms">
              <select name="cat_id"class="form-control" style="width: 1000px">
                <option>Choose Category</option>
                <?php
            foreach($category as $cat)
              {
                ?>
                <option value="<?php echo $cat->category_id?>"><?php echo $cat->category_name?></option>
                <?php
              }
              ?>
              </select>
              </div>
              <?php
            foreach($vendor as $ven)
              
                ?>
              <input  type="hidden" value="<?php echo $ven->vendor_id?>"  name="vendor_id" >
              <input  type="hidden" value="<?php echo $ven->vndr_email?>"  name="vendor_email" >
               <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name" required=""  name="name" style="width: 1000px">
              </div>

              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="number" required=""  name="number"style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="fuel" required=""  name="fuel" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="mileage" required=""  name="mileage" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="rent" required=""  name="rent" style="width: 1000px">
              </div>
              

<div class="form-group contact-forms">
                 <textarea name="description" value="Enter description " placeholder="Description"></textarea>
              </div>
<label style="color: white">Vehicle Image</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="image" style="width: 1000px">
              </div>
<label style="color: white">Vehicle Image1</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="veh1" style="width: 1000px">
              </div>
           <label style="color: white">Vehicle Image2</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="veh2" style="width: 1000px">
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center">Manage Vehicle</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
   
                   <tr>
                          <th >Sl.No</th>
                          <th>Category Name</th>
                          <th>Image</th>
                          <th>Image 1</th>
                          <th>Image 2</th>
                          <th>Name</th>
                          <th >Vehicle Number</th>
                          <th>Fuel</th>
                          <th>Milage</th>
                          <th >Rent</th>
                          <th >Description</th>
                          
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
    <?php
    $i=1;
          	foreach($vehicle as $vcle)
          		{
          			?> 				
          <tr >
          	
            <td><?php echo $i?></td>
            <td><?php echo $vcle->category_name?></td>
            <td><img src="<?php echo base_url('Asset/Vendor/vehicle/'.$vcle->v_image)?>" style="height: 160px;width: 160px"></td>
            <td><img src="<?php echo base_url('Asset/Vendor/vehicle1/'.$vcle->v_image1)?>" style="height: 160px;width: 160px"></td>
            <td><img src="<?php echo base_url('Asset/Vendor/vehicle2/'.$vcle->v_image2)?>" style="height: 160px;width: 160px"></td>
            <td><?php echo $vcle->v_name?></td>
            <td><?php echo $vcle->v_number?></td> 
             <td><?php echo $vcle->v_fuel?></td>
            <td><?php echo $vcle->v_Mileage?></td>
            <td>₹<?php echo $vcle->v_rent?></td>
                 <td ><?php echo $vcle->v_description?></td>
            
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/vehicle_edit/'.$vcle->vehicle_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/edit.png')?>" style="height: 30px;width:30px;"></a></td>
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/vehicle_delete/'.$vcle->vehicle_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/del.png')?>" style="height: 30px;width:30px;"></a></td>
             
           
        </tr>
          <?php
          $i++;
         }
         ?>
  
  
  </table>
</div>

</body>
</html>
<br><br><br><br>





<?php
$this->load->view('vendor/Layout/footer');
?>	


