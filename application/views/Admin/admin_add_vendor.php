<?php
$this->load->view('Admin/Layout/admin_header');
?>



<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Vendor
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal " method="POST" action="<?php echo base_url('index.php/Admincontroller/admin_vendor_insrt')?>" enctype="multipart/form-data">
                            	<div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Name</label>
                                    <div class="col-lg-6">
                                        <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="text" placeholder="Enter the name" name="Name" id="email2" class="form-control">

                                    </div>
                                </div>
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="email" placeholder="Enter the address" name="Email" id="email2" class="form-control">

                                    </div>
                                </div>
                               
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the address" name="Phone" id="email2" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-6">
                                       <input  type="text" placeholder="Enter the name" name="Password" id="email2" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Occupation</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the weight" name="Occupation"  id="email2" class="form-control">

                                    </div>
                                </div>
                               
                                
                               
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label"> Address</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the email" name="Address" id="email2" class="form-control">

                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="submit">Add Vendor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        <!-- </div> -->
     


        <br>

 <div class="panel panel-default">
    <div class="panel-heading">
    Manage Vendor
    </div>
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
            <th data-breakpoints="xs">Edit</th>
            <th>Delete</th>
            
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
                <td><a href="<?php echo base_url('index.php/Admincontroller/vendor_edit/'.$row->vendor_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
                 <td><a href="<?php echo base_url('index.php/Admincontroller/vendor_delete/'.$row->vendor_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>" style="height: 40px;width: 40px"></a></td>













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
