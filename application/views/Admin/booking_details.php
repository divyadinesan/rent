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
   Vehicle Booking Details
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
            <th>Customer Name</th>
             <th>Vehicle Name</th>
            <th>Vehicle Image</th>
            <th>Vehicle Number</th>
            <th>Start Location</th>
            <th>Destination</th>
            <th>Vehicle Status</th>
            <th>Booking Date</th>
            <th>Start Date</th>
            <th>Return Date</th>
            <th>Amount</th>
            <th>Booking Status</th>
            <th>Payment Status</th>
             <th>Customer Driving Licence</th>
           
            
           
        </tr>
        </thead>
        <tbody>
       <?php
       $i=1;
       foreach ($vehicle as $veh) {
       
       ?>
          <tr data-expanded="true">
             <td><?php echo $i?></td>
            <td><?php echo $veh->vndr_name?></td>
             <td><?php echo $veh->user_name?></td>
           <td><?php echo $veh->vb_name?></td>
            <td><img src="<?php echo base_url('Asset/Vendor/vehicle/'.$veh->v_image)?>" style="height: 100px;width: 100px"></td>
             <td><?php echo $veh->vb_number?></td>
             <td><?php echo $veh->vb_start_location?></td>
            <td><?php echo $veh->vb_destination?></td>
            <td><b><?php echo $veh->v_status?></b></td>
             <td><?php echo $veh->booking_date?></td>
             <td><?php echo $veh->vb_start_date?></td>
             <td><?php echo $veh->return_date?></td>
           
             <td><?php echo $veh->vb_amount?></td>
              <td><?php echo $veh->vb_status?></td>
              <td><?php echo $veh->payment?></td>
              
 <td><img src="<?php echo base_url('Asset/User/licence/'.$veh->licence)?>" style="height: 100px;width: 100px"></td>
               
            </tr>
          <?php
          $i++;
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
<br><br> <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 200%;
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
   House Booking Details
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
            <th>Customer Name</th>
              <th>House Image</th>
             <th>House Address</th>
            
            <th>Booking Date</th>
            <th>Amount</th>
            <th>House Status</th>
            <th>Booking Status</th>
            <th>Payment Status</th>
            <th>House Aggreement</th>
           
           
            
           
        </tr>
        </thead>
        <tbody>
         <?php
         $i=1;
         foreach ($house as $fetch) {
         
         ?>
        
          <tr data-expanded="true">
             <td><?php echo $i?></td>
            <td><?php echo $fetch->vndr_name?></td>
           <td><?php echo $fetch->user_name?></td>
            <td><img src="<?php echo base_url('Asset/Vendor/house/'.$fetch->h_image)?>" style="height: 100px;width: 100px"></td>
             <td><?php echo $fetch->h_Address?></td>
             
            <td><?php echo $fetch->hb_bking_date?></td>
             
              <td><?php echo $fetch->hb_amount?></td>
              <td><b><?php echo $fetch->h_status?></b></td>
               <td><?php echo $fetch->hb_status?></td>
             >
             
              <td><?php echo $fetch->hb_payment?></td>

              <td style="width: 500px"><object data="<?php echo base_url('Asset/Vendor/aggrement/'.$fetch->h_aggrement)?>"  width="500px" height="200px" type="application/pdf"></object></td>


               
            </tr>
          
        <?php
        $i++;
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