

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
        <div class="well col-xs-10 col-sm-10 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
            <?php
            foreach ($veh_invoice as $row) {
                # code...
            }
            ?>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong style="font-size: 130%">Name : <?php echo $row->user_name?></strong><br>
                        <br>
                     <em style="font-size: 100%">Email Id: <?php echo $row->user_email?></em>
                        <br>
                      <em style="font-size: 100%">Phone No:  <?php echo $row->user_phn?></em>
                        <br>
                        
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        
                    </p>
                    <p>
                       <!--  <em>Receipt #: 34522677W</em><br> -->
                        <b><em>Payment Date: <?php echo $row->payment_date?></em></b>
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
                            <th>Name</th>
                            <th>Number</th>
                            <th>Booking Date</th>
                            <th>Start Date</th>
                            <th>Return Date</th>
                            <th class="text-center">Start Location</th>
                            <th class="text-center">Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-7"><em><?php echo $row->v_name?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $row->v_number?> </td>
                            <td class="col-md-9 text-center"><?php echo $row->booking_date?></td>
                            <td class="col-md-9 text-center"><?php echo $row->vb_start_date?></td>
                            <td class="col-md-9 text-center"><?php echo $row->return_date?></td>
                            <td class="col-md-1 text-center"><?php echo $row->vb_start_location?></td>
                            <td class="col-md-9"><em><?php echo $row->vb_destination?></em>
                        </tr>
                       
                       
                       
                        <tr>
                            <td></td>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong style="font-size: 150%">Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4 style="font-size: 150%"><strong>₹<?php echo $row->vb_amount?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?php echo base_url('index.php/Usercontroller/myvehicle_booking')?>">
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Thank You!!   
                </button>
                </a>

            </td>
            </div>
        </div>
    </div>

