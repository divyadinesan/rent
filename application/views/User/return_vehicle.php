<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-7 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div align="center">
                   <h1 style="color: black"><b>Thank you for visiting</b> </h1>
                </div>
                
            </div><br><br>
             <?php
                              foreach ($veh_return_view as $row) 
                                
                              ?>
            <div class="row">
                <div align="center">
                   <img src="<?php echo base_url('Asset/Vendor/vehicle/'.$row->v_image)?>" alt=" " class="img-responsive" style="height: 150px;width:190px" >
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Start Date</th>
                            <th class="text-center">Start Location</th>
                            <th class="text-center">Destination</th>
                             <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td class="col-md-9"><em><?php echo $row->v_name?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $row->v_number?> </td>
                            <td class="col-md-1 text-center"><?php echo $row->vb_start_date?></td>
                            <td class="col-md-1 text-center"><?php echo $row->vb_start_location?></td>
                            <td class="col-md-9"><em><?php echo $row->vb_destination?></em>
                               <td class="text-center text-danger"><h4 style="font-size: 150%"><strong>₹<?php echo $row->vb_amount?></strong></h4></td>
                        </tr><br><br>
                       
                       
                       
                       
                    </tbody>
                </table><br><br>
                <a href="<?php echo base_url('index.php/Usercontroller/veh_return/'.$row->vb_vehicleid)?>"><button style="background-color: grey;color: white;width: 320px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Return</b></button></a>
                <a href="<?php echo base_url('index.php/Usercontroller/veh_review/'.$row->vb_vehicleid)?>"><button style="background-color: grey;color: white;width: 320px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Review</b></button></a><br><br>
                 <a href="<?php echo base_url('index.php/Usercontroller/user_home')?>"><button style="background-color: grey;color: white;width: 650px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Back</b></button></a><br><br>
                
                </td>
            </div>
        </div>
    </div>