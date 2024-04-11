<?php
$this->load->view('Admin/Layout/admin_header');
?>

<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Change Password
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal " method="POST" action="<?php echo base_url('index.php/Admincontroller/admin_update_password')?>" enctype="multipart/form-data">
                            	
                               <?php
                               foreach($admin as $rows)
                               	?>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input required="required" onkeydown="Check(this);" onkeyup="Check(this);" type="email" placeholder="Enter the address" name="Email" id="email2" class="form-control" value="<?php echo $rows->admin_email?>" readonly>

                                    </div>
                                </div>
                               
                               
                                
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-6">
                                       <input  type="text" placeholder="Enter the name" name="Password" id="email2" class="form-control" value="<?php echo $rows->admin_password?>" readonly>

                                    </div>
                                </div>
                                 <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">New Password</label>
                                    <div class="col-lg-6">
                                       <input  type="text" placeholder="Enter the name" name="newpassword" id="email2" class="form-control" required="">

                                    </div>
                                </div>
                                
                                
                               
                               
                                
                                

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
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