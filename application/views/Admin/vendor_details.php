<?php
$this->load->view('Admin/Layout/admin_header');
?>


<div class="panel panel-default">
    <div class="panel-heading">
   Vendor Details
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
           
        </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
            foreach ($vendor as $row) {

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