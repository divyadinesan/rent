<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Rent Management System</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ClassWork Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="<?php echo base_url('Asset/Vendor/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="<?php echo base_url('Asset/Vendor/css/fontawesome-all.min.css')?>" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <link href="<?php echo base_url('Asset/Vendor/css/blast.min.css')?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/Vendor/css/style10.css')?>" />
    <!--stylesheets-->
    <link href="<?php echo base_url('Asset/Vendor/css/style.css')?>" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="<?php echo base_url('Asset/Vendor///fonts.googleapis.com/css?family=Montserrat:300,400,500')?>" rel="stylesheet">
    <link href="<?php echo base_url('Asset/Vendor///fonts.googleapis.com/css?family=Merriweather:300,400,700,900')?>" rel="stylesheet">
  </head>
  <body>
    <div class="blast-box">
      <div class="blast-icon"><span class="fas fa-tint"></span></div>
      <div class="blast-frame">
        <p>change colors</p>
        <div class="blast-colors">
          <div class="blast-color">#86bc42</div>
          <div class="blast-color">#8373ce</div>
          <div class="blast-color">#14d4f4</div>
          <div class="blast-color">#72284b</div>
        </div>
        <p class="blast-custom-colors">Custom colors</p>
        <input type="color" name="blastCustomColor" value="#cf2626">
      </div>
    </div>
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
      <div align="right" style="padding-right: 50px;padding-top: 30px">
          <a href="<?php echo base_url('index.php/Vendorcontroller/vendor_logout')?>"><img src="<?php echo base_url('Asset/User/images/logout.jpg')?>" style="height: 40px;width: 40px"></a>
       </div>
        <nav class="navbar navbar-expand-lg navbar-light">
 
          <div class="hedder-up">
            <h1 ><a href="" class="navbar-brand" data-blast="color">Rent Management System</a></h1>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="headdser-nav-color" data-blast="bgColor">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
              
                <li class="nav-item">
                  <a href="<?php echo base_url('index.php/vendorcontroller/vendor_add_category')?>"  >Category</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                
                <!-- <li class="nav-item">
                  <a href="#team" class="nav-link scroll">Team</a>
                </li>
                <li class="nav-item">
                  <a href="#stats" class="nav-link scroll">Stats</a>
                </li> -->
                <li class="nav-item">
                  <a href="<?php echo base_url('index.php/vendorcontroller/vendor_add_house')?>"  >House</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                <li class="nav-item">
                   <a href="<?php echo base_url('index.php/vendorcontroller/vendor_add_vehicle')?>"  >Vehicle</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                 <li class="nav-item">
                   <a href="<?php echo base_url('index.php/vendorcontroller/Vehicle_Exceed_Rent')?>"  >Vehicle Exceed Rent</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                 <li class="nav-item">
                   <a href="<?php echo base_url('index.php/vendorcontroller/House_Exceed_rent')?>"  >House Exceed Rent</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                <li class="nav-item">
                  <a href="<?php echo base_url('index.php/vendorcontroller/vendor_house_userrequest')?>"  >User Request-House</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                 <li class="nav-item">
                  <a href="<?php echo base_url('index.php/vendorcontroller/vendor_vehicle_userrequest')?>"  >User Request- Vehicle</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                 <li class="nav-item">
                  <a href="<?php echo base_url('index.php/vendorcontroller/vendor_profile')?>"  >My Profile</a>
                </li>&nbsp&nbsp&nbsp&nbsp
              </ul>
            </div>
          </div>
        </nav>
        <!--//navigation section -->
        <div class="clearfix"> </div>
      </div>
      <!--banner -->
      <!-- Slideshow 4 -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li>
              <div class="" style="height: 160px;" >
                <div class="container">
                  <div class="slider-info text-left">
                    <h4 >Hard Work</h4>
                    <h5>Lorem ipsum dolor</h5>
                    <p>velit sagittis vehicula
                    </p>
                    <div class="outs_more-buttn" >
                      <a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="bgColor">More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
           
          </ul>
        </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
          <li>Example 4 callback events</li>
          </ul>-->
        <div class="clearfix"></div>
      </div>
    </div>
    
  
    
 
   