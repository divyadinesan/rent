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
   Verify Vendor
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
            <th data-breakpoints="xs">Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Vendor Status</th>
            <th>Vendor Type</th>
            <th>Approved</th>
            <th>Rejected</th>
            
           
        </tr>
        </thead>
        <tbody>
         <?php
         $i=1;
         foreach($u_vendor as $row)
         {
         ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $row->vndr_name?></td>
            <td><?php echo $row->vndr_email?></td>
             <td><?php echo $row->vndr_phone?></td>
              <td><?php echo $row->vndr_password?></td>
               <td><?php echo $row->vndr_occupation?></td>
                <td><?php echo $row->vndr_address?></td>
                <td><?php echo $row->vndr_status?></td>
                <td><?php echo $row->vndr_type?></td>
                <td><a href="<?php echo base_url('index.php/Admincontroller/vendor_approve/'.$row->vendor_id)?>"><img src="<?php echo base_url('Asset/Admin/images/approve.jpg')?> " style="height: 80px;width:80px"></a></td>
                <td><a href="<?php echo base_url('index.php/Admincontroller/vendor_reject/'.$row->vendor_id)?>"><img src="<?php echo base_url('Asset/Admin/images/reject.jpg')?> " style="height: 70px;width:70px"></a></td>
               
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