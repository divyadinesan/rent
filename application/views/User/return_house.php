<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div align="center">
                   <h1 style="color: black"><b>Thank you for visiting</b> </h1>
                </div>
                
            </div><br><br>
             <?php
                              foreach ($hse_return_view as $row) 
                                
                              ?>
            <div class="row">
                <div align="center">
                   <img src="<?php echo base_url('Asset/Vendor/house/'.$row->h_image)?>" alt=" " class="img-responsive" style="height: 150px;width:190px" ><br><br>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Address</th>
                            <th>Booking Date</th>
                            <th>Rent / Month</th>
                            <th class="text-center">Token Amount</th>
                            <th class="text-center">Month</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td class="col-md-9"><em><?php echo $row->hb_hse_address?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $row->hb_bking_date?> </td>
                            <td class="col-md-1 text-center"><?php echo $row->hb_rent?></td>
                            <td class="col-md-1 text-center"><?php echo $row->hb_token_amount?></td>
                            <td class="col-md-9"><em><?php echo $row->hb_total_month?></em>
                        </tr>
                       
                       
                       
                        
                    </tbody>
                </table>
                <a href="<?php echo base_url('index.php/Usercontroller/hse_return/'.$row->hb_house_id)?>"><button style="background-color: grey;color: white;width: 270px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Return</b></button></a>

                <a href=""><button style="background-color: grey;color: white;width: 270px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Review</b></button></a><br><br>
                                  <a href="<?php echo base_url('index.php/Usercontroller/user_home')?>"><button style="background-color: grey;color: white;width: 550px;height: 40px;border-radius: 12px;"><b style="font-size: 130%">Back</b></button></a><br><br>
<br><br>
                
                </td>
            </div>
        </div>
    </div>