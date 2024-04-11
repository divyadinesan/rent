

<style type="text/css">
    body{
    }
</style>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
            <?php
            foreach ($hse_invoice as $row) {
                # code...
            }
            ?>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-6">
                    <address>
                        <strong style="font-size: 130%"><?php echo $row->user_name?></strong>
                        <br><br>
                     <em> Email Id :<?php echo $row->user_email?></em>
                        <br>
                      <em> Phone Number : <?php echo $row->user_phn?></em>
                        <br>
                        
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em><br><br>
                        <em>Payment Date: <?php echo $row->pay_date?></em>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1><br><br>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Address</th>
                            <th>Booking Date</th>
                             <th>Stay Date</th>
                              <th>Return Date</th>
                            <th>Total Month</th>
                            <th class="text-center">Rent Amount/month</th>
                            <th class="text-center">Token Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row->h_Address?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $row->hb_bking_date?> </td>
                             <td class="col-md-1 text-center"><?php echo $row->hb_total_month?></td>
                            <td class="col-md-1 text-center">₹<?php echo $row->hb_rent?></td>


                            <td class="col-md-1 text-center"><?php echo $row->hb_stay_date?></td>
                            <td class="col-md-1 text-center">₹<?php echo $row->hb_return_date?></td>
                            <td class="col-md-9"><em>₹<?php echo $row->hb_token_amount?></em>
                        </tr>
                       
                       
                       
                        <tr>
                            <td></td>
                            <td>   </td>
                            <td>   </td>
                            <td></td>
                            <td>   </td>
                            
                            <td class="text-right"><h4><strong style="font-size: 90%">Amount Paid: </strong></h4></td>
                            <td class="text-center text-danger"><h4 style="font-size: 150%"><strong>₹<?php echo $row->hb_token_amount?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?php echo base_url('index.php/Usercontroller/myhouse_booking')?>">
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Thank You!!   
                </button>
                </a>

            </td>
            </div>
        </div>
    </div>

