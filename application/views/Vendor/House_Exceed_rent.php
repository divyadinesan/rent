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
<h2 align="center"><b>Update House Rent</b> </h2>
<br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th data-breakpoints="xs">Sl.No</th>
            <th>Vendor Name</th>
            <th>Category</th>
            
            <th>House Address</th>
            <th>Property size</th>
            <th>House Image</th>
            <th>Built Year</th>
            
            
            <th>Rent</th>
            <th>Rent status</th>
            <th>Update Rent</th>
    </tr>
    <?php
         $i=1;
         foreach($house as $fetch)
         {
          if($fetch->h_verify_rent!='Approved')
          {
         ?> 
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $fetch->vndr_name?></td>
            <td><?php echo $fetch->category_name?></td>
             <td><?php echo $fetch->h_Address?></td>
              <td><?php echo $fetch->h_Property_Size?></td>
              <td><img src="<?php echo base_url('Asset/Vendor/house/'.$fetch->h_image)?>" style="height: 100px;width: 100px"></td>
               <td><?php echo $fetch->h_Year_Build?></td>
                
                <td>₹<b style="color: black"><?php echo $fetch->h_rent?></b></td>
                <td><b><?php echo $fetch->h_verify_rent?></b></td>
               
              <td><a href="<?php echo base_url('index.php/Vendorcontroller/house_edit/'.$fetch->house_id)?>"><button style="background-color: grey;color: white">Update house Rent</button></a>


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
