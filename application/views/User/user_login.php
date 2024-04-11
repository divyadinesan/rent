
<!DOCTYPE html>
<html>
<head>
<title>Rent Management System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fetch Villa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('Asset/User/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/User/css/zoomslider.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/User/css/style.css')?>" />
<link href="<?php echo base_url('Asset/User/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url('Asset/User/js/modernizr-2.6.2.min.js')?>"></script>
<!--/web-fonts-->
<link href='<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Tangerine:400,700')?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Lato:400,300,300italic,700')?>' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Montserrat:400,700')?>' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>

<div class="team" id="team" align="center">
		     <div class="container" align="center">
			
			  <div class="price-section"align="center">
     <div class="container" align="center">
         <div class="col-md-8 price" align="center" style="margin-top: -30px;margin-left: 150px">
				<h3><span class="one">L</span>OGIN <span class="one">  N</span>ow</h3>
					<form action="<?php echo base_url('index.php/Usercontroller/user_login_insr')?>" method="post">
				<div class="reservation" align="center">
					<div class="section_room">
						
						
					
						
					
					
					<div class="keywords">
					<input type="text"  placeholder="Enter Your Email" required=" " name="Email">
							
							<input type="text" name="Password" placeholder="Enter Your Password" required=" " ><br><br>
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
		</div>	<br><br>
		<h4>Free Registration..<a href="<?php echo base_url('index.php/Usercontroller/user_registration')?>">Register Here..!</a></h4><br>
		 <center>
               <a href="<?php echo base_url('index.php/Indexcontroller/index')?>">
            <img src="<?php echo base_url('Asset/Vendor/images/home.png')?>" style="height: 50px;width: 50px"></a>
            </center>
		
	<div class="clearfix"> </div>
	</div>	
</div>
			</div>
	     </div>


</div>

		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="<?php echo base_url('Asset/User/js/jquery-1.11.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Asset/User/js/jquery.zoomslider.min.js')?>"></script>
		<!-- search-jQuery -->
				<script src="<?php echo base_url('Asset/User/js/main.js')?>"></script>
			<!-- //search-jQuery -->
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems:3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 2
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="<?php echo base_url('Asset/User/js/jquery.flexisel.js')?>"></script>

	<!-- Horizontal-Tabs-JavaScript -->
				<script src="<?php echo base_url('Asset/User/js/easyResponsiveTabs.js')?>" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',
							width: 'auto',
							fit: true,
						});
					});
				</script>
			<!-- Horizontal-Tabs-JavaScript -->
			<script src="<?php echo base_url('Asset/User/js/jquery.picEyes.js')?>"></script>
				<script>
					$(function(){
						//picturesEyes($('.demo li'));
						$('.demo li').picEyes();
					});
				</script>
				<!--start-smooth-scrolling-->
<!--/script-->
<script type="text/javascript" src="<?php echo base_url('Asset/User/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Asset/User/js/easing.js')?>"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<script src="<?php echo base_url('Asset/User/js/bootstrap.min.js')?>"></script>
 

</body>
</html>