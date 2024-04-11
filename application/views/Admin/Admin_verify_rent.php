<?php
$this->load->view('Admin/Layout/admin_header');
?>

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
<div class="panel panel-default">
    <div class="panel-heading">
   Verify Vehicle Rent
    </div>
    <div>
        <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
       <thead>
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
            <th>Verify Rent</th>
            
            
           
        </tr>
        </thead>
        <tbody>
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
                <td><?php echo $fetch->v_verify_rent?></td>
               
              <td><a href="<?php echo base_url('index.php/Admincontroller/rent_exceed/'.$fetch->vehicle_id)?>"><button style="background-color:red;color: white;border-radius:10px">Exceed Rent Limit</button></a><br><br>
<a href="<?php echo base_url('index.php/Admincontroller/rent_approved/'.$fetch->vehicle_id)?>"><button style="background-color:green;color: white;border-radius:10px;width: 140px">Approved</button></a>
              </td>

               
               
            </tr>
      <?php
         $i++;
       }
       }
       ?>
        </tbody>
      </table>
  </div>
    </div>
  </div>
    <!-- </div> -->
        <br>

 
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    

<script>
function Check(me) {
    me.value = me.value.replace(/[0-9]/g, "");
}
</script>


<br><br><br>


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
<div class="panel panel-default">
    <div class="panel-heading">
   Verify House Rent
    </div>
    <div>
        <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
       <thead>
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
           <th>Verify Rent</th> 
            
            
           
        </tr>
        </thead>
        <tbody>
    <?php
         $i=1;
         foreach($house as $fetch1)
         {
          if($fetch1->h_verify_rent!='Approved')
          {
         ?> 
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $fetch1->vndr_name?></td>
            <td><?php echo $fetch1->category_name?></td>
             <td><?php echo $fetch1->h_Address?></td>
              <td><?php echo $fetch1->h_Property_Size?></td>
              <td><img src="<?php echo base_url('Asset/Vendor/house/'.$fetch1->h_image)?>" style="height: 100px;width: 100px"></td>
               <td><?php echo $fetch1->h_Year_Build?></td>
                
                <td>₹<b style="color: black"><?php echo $fetch1->h_rent?></b></td>
                <td><b><?php echo $fetch1->h_verify_rent?></b></td>
               
             <td><a href="<?php echo base_url('index.php/Admincontroller/house_rent_exceed/'.$fetch1->house_id)?>"><button style="background-color:red;color: white;border-radius:10px">Exceed Rent Limit</button></a><br><br>
<a href="<?php echo base_url('index.php/Admincontroller/house_rent_approved/'.$fetch1->house_id)?>"><button style="background-color:green;color: white;border-radius:10px;width: 140px">Approved</button></a>
              </td>

               
               
            </tr>
      <?php
         $i++;
       }
       }
       ?> 
        </tbody>
      </table>
  </div>
    </div>
  </div>
    <!-- </div> -->
        <br>

 
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    

<script>
function Check(me) {
    me.value = me.value.replace(/[0-9]/g, "");
}
</script>
<?php
$this->load->view('Admin/Layout/admin_footer');
?>