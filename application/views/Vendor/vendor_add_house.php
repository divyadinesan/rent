<?php
$this->load->view('vendor/Layout/header');
?>	
<br><br>
 <section class="" id="contact" style="background-color: grey">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Add House</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
         <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_house_insrt')?>" method="post" enctype="multipart/form-data">
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
                <input type="text" class="form-control" placeholder="Address" required=""  name="Address" style="width: 1000px">
              </div>

              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Property_Size" required=""  name="Property_Size"style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Total_Rooms" required=""  name="Total_Rooms" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Bedrooms" required=""  name="Bedrooms" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Bathrooms" required=""  name="Bathrooms" style="width: 1000px">
              </div><div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Year_Build" required=""  name="Year_Build" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="rent" required=""  name="rent" style="width: 1000px">
              </div>

<div class="form-group contact-forms">
                 <textarea name="description" value="Enter description " placeholder="Description" style="width: 1000px"></textarea>
              </div>
<label style="color: white">House Image</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="image" style="width: 1000px">
              </div>
              <label style="color: white">Room 1</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="room1" style="width: 1000px">
              </div>
              <label style="color: white">Room 2</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="room2" style="width: 1000px">
              </div>
<label style="color: white">Rent Aggrement</label>
              <div class="form-group contact-forms">
                <input type="file" class="form-control"  required="" name="aggrement" style="width: 1000px">
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

<h2 align="center">Manage House</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
     <tr>
                          <th >Sl.No</th>
                          <th>Category Name</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th >Property Size</th>
                          <th>Total Rooms</th>
                          <th>Bed Rooms</th>
                          <th >Bathrooms</th>
                          <th >Year Bulid</th>
                          <th>Description</th>
                          <th>Rent</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
    <?php
    $i=1;
            foreach($house as $hse)
              {
                ?>        
          <tr >
            
            <td><?php echo $i?></td>
            <td><?php echo $hse->category_name?></td>
            <td><img src="<?php echo base_url('Asset/Vendor/house/'.$hse->h_image)?>" style="height: 150px;width:150px;"></td>
             <td><img src="<?php echo base_url('Asset/Vendor/room1/'.$hse->h_room1)?>" style="height: 150px;width:150px;"></td>
              <td><img src="<?php echo base_url('Asset/Vendor/room2/'.$hse->h_room2)?>" style="height: 150px;width:150px;"></td>
            <td><?php echo $hse->h_Address?></td>
            <td><?php echo $hse->h_Property_Size?></td> 
             <td><?php echo $hse->h_Total_Rooms?></td>
            <td><?php echo $hse->h_Bedrooms?></td>
            <td><?php echo $hse->h_Bathrooms?></td>
                 <td><?php echo $hse->h_Year_Build?></td>
            <td><?php echo $hse->h_description?></td>
                   <td><?php echo $hse->h_rent?></td>
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/house_edit/'.$hse->house_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/edit.png')?>" style="height: 30px;width:30px;"></a></td>
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/house_delete/'.$hse->house_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/del.png')?>" style="height: 30px;width:30px;"></a></td>
             
           
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


