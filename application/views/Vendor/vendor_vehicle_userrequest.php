<?php
$this->load->view('vendor/Layout/header');
?>  


 <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">User Request </h3>
       <?php
						foreach ($userbooking_veh as $ubv) {
							
						?>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="<?php echo base_url('Asset/Vendor/vehicle/'.$ubv->v_image)?>" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Name : <?php echo $ubv->user_name?> </a></h4>
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Start location : <?php echo $ubv->vb_start_location?> </a></h4>
                
                  
                    <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Destination : <?php echo $ubv->vb_destination?> </a></h4>
                    <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Rent : ₹ <?php echo $ubv->vb_amount?> </a></h4>


                     <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Vehicle Status:  <?php echo $ubv->vb_status?></a></h4>
                      <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color"><b style="">Payment Status: <?php echo $ubv->payment?> </a></h4><br><br>
                  
<img src="<?php echo base_url('Asset/User/licence/'.$ubv->licence)?>" style="height: 200px;width: 300px"><br><br>
                <div class="outs_more-buttn" >
                   <?php
                      // if($ubv->vb_status=='Rejected' ||$ubv->vb_status=='Not Confirmed')
                   if($ubv->vb_status=='Not Confirmed')
                      {
                      ?>
                  <a href="<?php echo base_url('index.php/Vendorcontroller/veh_bking_cnfrmtion/'.$ubv->vb_vehicleid)?>" >Confirm</a>
                  <?php
                }
                  ?>
                   <?php
                      // if($ubv->vb_status=='Confirmed' ||$ubv->vb_status=='Not Confirmed')
                   if($ubv->vb_status=='Not Confirmed')
                      {
                      ?>
                   <a href="<?php echo base_url('index.php/Vendorcontroller/veh_bking_rejection/'.$ubv->vb_vehicleid)?>" >Reject</a>
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