<div class="contact-w3ls" id="contact">
		
			
			
			
			
					
				<div class="w3agile_footer_copy">
				    <p>@2022 | CodeIgniter web framework |PHP Trainer : DIVYA M.D |  <a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a></p>
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