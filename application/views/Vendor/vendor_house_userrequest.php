<?php
$this->load->view('vendor/Layout/header');
?>  


   <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">User Request </h3>
        <?php
						foreach ($userbooking_hse as $hse) {
							
						?>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/ab3.j" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><?php echo $hse->user_name?> </a></h4>
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><?php echo $hse->hb_user_email?> </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li class="mr-3"><b>Booking Date :</b> <span class="far fa-calendar-check"></span><a href="#" data-toggle="modal" data-target="#exampleModalLive"><?php echo $hse->hb_bking_date?></a></li>
                 
                  </ul><br>
                  <ul>
                    <li class="mr-3"><b>Stay Date :</b> <span class="far fa-calendar-check"></span><a href="#" data-toggle="modal" data-target="#exampleModalLive"><?php echo $hse->hb_stay_date?></a></li>
                 
                  </ul><br>
                   <ul>
                    <li class="mr-3"><b>Return Date :</b> <span class="far fa-calendar-check"></span><a href="#" data-toggle="modal" data-target="#exampleModalLive"><?php echo $hse->hb_return_date?></a></li>
                 
                  </ul>
                </div>
                   <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Total Month : </b><?php echo $hse->hb_total_month?> Month</a></h4>
                    <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Rent : </b>₹<?php echo $hse->h_rent?> /Month</a></h4>
                    <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Token Amount : </b>₹<?php echo $hse->hb_token_amount?> </a></h4>
                     <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Address : </b><?php echo $hse->h_Address?> </a></h4>
                      <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Booking Status : </b><?php echo $hse->hb_status?> </a></h4>
                       <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Payment Status : </b><?php echo $hse->hb_payment?> </a></h4>
                <div class="outs_more-buttn" >
                   <?php
                      // if($ubv->vb_status=='Rejected' ||$ubv->vb_status=='Not Confirmed')
                   if($hse->hb_status=='Not Confirmed')
                      {
                      ?>
                  <a href="<?php echo base_url('index.php/Vendorcontroller/hse_bking_cnfrmtion/'.$hse->hb_house_id)?>" >Confirm</a>
                   <a href="<?php echo base_url('index.php/Vendorcontroller/hse_bking_rejection/'.$hse->hb_house_id)?>" >Reject</a>
                   <?php
                 }
                 ?>
                </div>
                  <div class="outs_more-buttn" >
                 
                </div>
                <div class="outs_more-buttn" >
                  <!-- <a href="<?php echo base_url('index.php/Vendorcontroller/veh_bking_cnfrmtion/'.$ubv->vb_vehicleid)?>" data-toggle="modal" data-target="#exampleModalLive" data-blast="bgColor">Reject</a> -->
                </div>
                
								
              </div>
            </div>
          </div>
         
        
         
         
        
        </div>
        <?php
    }
    ?>
      </div>
    </section>



     <?php
$this->load->view('vendor/Layout/footer');
?>  