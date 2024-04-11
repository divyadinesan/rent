<?php
$this->load->view('vendor/Layout/header');
?>	
<br><br><br>
 <section class="" id="contact" style="background-color: grey">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Add Category</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
           <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_category_insrt')?>" method="post" enctype="multipart/form-data">
               <div class="form-group contact-forms">
               <select name="category_type" class="form-control" style="width: 1000px">
								<option>Choose Category Type</option>
								
								<option value="vehicle">vehicle</option>
								<option value="home">home</option>
								
								
							</select> 
              </div>
               <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Category Name" required=""  name="category" style="width: 1000px">
              </div>
              <div class="form-group contact-forms">
                <input type="file" class="form-control" placeholder="PHONE NUMBER" required="" name="image" style="width: 1000px">
              </div>

              
             
              <div class="sent-butnn text-center">
                <button type="submit"  style="width: 1000px;background-color: white;color: black">Submit</button>
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

<h2 align="center">Manage Category</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
         <th >Sl.No</th>
         <th>Category Name</th>
         <th>Image</th>
         <th >Edit</th>
         <th >Delete</th>
     </tr>
    <?php
    $i=1;
          	foreach($category as $cat)
          		{
          			?>					
          <tr >
          	
            <td><?php echo $i?></td>
            <td><?php echo $cat->category_name?></td>
            <td><img src="<?php echo base_url('Asset/Vendor/category/'.$cat->category_image)?>" style="height: 100px; width: 200px;"></td>
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/vendor_edit_category/'.$cat->category_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/edit.png')?>" style="height: 30px;width:30px;"></a></td>
             <td><a href="<?php echo base_url('index.php/Vendorcontroller/vendor_delete_category/'.$cat->category_id)?>"><img src="<?php echo base_url('Asset/Vendor/images/del.png')?>" style="height: 30px;width:30px;"></a></td>
             
           
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


