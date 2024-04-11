<?php
$this->load->view('Admin/Layout/admin_header');
?>

<?php
foreach ($vendor as $vndr) 
?>
<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Vendor
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal " method="POST" action="<?php echo base_url('index.php/Admincontroller/vendor_update')?>" enctype="multipart/form-data">
                            	<div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Name</label>
                                    <div class="col-lg-6">
                                        <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="text" placeholder="Enter the name" name="Name" id="email2" class="form-control" value="<?php echo $vndr->vndr_name?>">
                                         <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="hidden" placeholder="Enter the name" name="vendor_id" id="email2" class="form-control" value="<?php echo $vndr->vendor_id?>">

                                    </div>
                                </div>
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="email" placeholder="Enter the address" name="Email" id="email2" class="form-control" value="<?php echo $vndr->vndr_email?>">

                                    </div>
                                </div>
                               
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the address" name="Phone" id="email2" class="form-control" value="<?php echo $vndr->vndr_phone?>">

                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-6">
                                       <input  type="text" placeholder="Enter the name" name="Password" id="email2" class="form-control" value="<?php echo $vndr->vndr_password?>">

                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Occupation</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the weight" name="Occupation"  id="email2" class="form-control" value="<?php echo $vndr->vndr_occupation?>">

                                    </div>
                                </div>
                               
                                
                               
                               
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label"> Address</label>
                                    <div class="col-lg-6">
                                        <input required="required"  type="text" placeholder="Enter the email" name="Address" id="email2" class="form-control" value="<?php echo $vndr->vndr_address?>">

                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="submit">Update Vendor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

<?php
$this->load->view('Admin/Layout/admin_footer');
?>