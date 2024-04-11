<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <?php
                            foreach ($hse_pay as $hp) 
                             
                            ?>

                            <form class="form" role="form" autocomplete="off" method="post" action="<?php echo base_url('index.php/Usercontroller/hse_pay_insrt')?>">
                                <input type="hidden" name="user_id" value="<?php echo $hp->hb_user_id?>">
                                <input type="hidden" name="house_id" value="<?php echo $hp->hb_house_id?>">
                                <input type="hidden" name="user_email" value="<?php echo $hp->hb_user_email?>">
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required" value="<?php echo $hp->user_name ?>" name="chn">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="" value="16 digits" name="pay_card_number">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                     <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" required="" placeholder="mm/yy" name="pay_crd_exp_date">
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC" name="pay_cvc">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Token Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount" value="<?php echo $hp->hb_token_amount ?>" name="pay_amout">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                       
                                        <button type="reset" class="btn btn-default btn-lg btn-block"> <a href="<?php echo base_url('index.php/Usercontroller/myhouse_booking')?>">Cancel</a></button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
                
                