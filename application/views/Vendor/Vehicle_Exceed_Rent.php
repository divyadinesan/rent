<?php
$this->load->view('vendor/Layout/header');
?>	




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
<br><br><br><br><br><br>
<h2 align="center"><b>Update Vehicle Rent</b> </h2>
<br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th data-breakpoints="xs">Sl.No</th>
            <th>Vendor Name</th>
            <th>Category</th>
            <th>Vehicle Name</th>
            <th>Vehicle Number</th>
            <th>Vehicle Image</th>
            <th>Fuel</th>
            <th>Milage</th>
            <th>Rent</th>
            <th>Rent status</th>
            <th>Update Rent</th>
    </tr>
    <?php
         $i=1;
         foreach($vehicle as $fetch)
         {
          if($fetch->v_verify_rent!='Approved')
          {
         ?> 
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $fetch->vndr_name?></td>
            <td><?php echo $fetch->category_name?></td>
             <td><?php echo $fetch->v_name?></td>
              <td><?php echo $fetch->v_number?></td>
              <td><img src="<?php echo base_url('Asset/Vendor/vehicle/'.$fetch->v_image)?>" style="height: 100px;width: 100px"></td>
               <td><?php echo $fetch->v_fuel?></td>
                <td><?php echo $fetch->v_Mileage?></td>
                <td>₹<b style="color: black"><?php echo $fetch->v_rent?></b></td>
                <td><b><?php echo $fetch->v_verify_rent?></b></td>
               
              <td><a href="<?php echo base_url('index.php/Vendorcontroller/vehicle_edit/'.$fetch->vehicle_id)?>"><button style="background-color: grey;color: white">Update Vehicle Rent</button></a>


              </td>

               
               
            </tr>
      <?php
         $i++;
       }
       }
       ?>
    
      </table>
</div>

</body>
</html>

<br><br><br><br><br><br>





<?php
$this->load->view('vendor/Layout/footer');
?>	
