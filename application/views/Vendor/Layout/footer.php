  <section class="footer py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      
      </div>
    </section>
   
    <footer class="py-3">
      <div class="container">
        <div class="copy-agile-right text-center">
         
          <p>@2022 | CodeIgniter web framework |PHP Trainer : DIVYA M.D |  <a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a></p>
        </div>
      </div>
    </footer>
    <!--//footer-->
    <!--model-->
    <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">ClassWork</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="images/b2.jpg" alt="" class="img-fluid">
            <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
              eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!--//model-->
    <!--js working-->
    <script src='<?php echo base_url('Asset/Vendor/js/jquery-2.2.3.min.js')?>'></script>
    <!--//js working--> 
    <!--blast colors change-->
    <script src="<?php echo base_url('Asset/Vendor/js/blast.min.js')?>"></script>
    <!--//blast colors change-->
    <!--responsiveslides banner-->
    <script src="<?php echo base_url('Asset/Vendor/js/responsiveslides.min.js')?>"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function () {
      	// Slideshow 4
      	$("#slider4").responsiveSlides({
      		auto: true,
      		pager:false,
      		nav:true ,
      		speed: 900,
      		namespace: "callbacks",
      		before: function () {
      			$('.events').append("<li>before event fired.</li>");
      		},
      		after: function () {
      			$('.events').append("<li>after event fired.</li>");
      		}
      	});
      
      });
    </script>
    <!--// responsiveslides banner-->		  
    <!--responsive tabs-->	 
    <script src="<?php echo base_url('Asset/Vendor/js/easy-responsive-tabs.js')?>"></script>
    <script>
      $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion           
      width: 'auto', //auto or any width like 600px
      fit: true,   // 100% fit in a container
      closed: 'accordion', // Start closed if in accordion view
      activate: function(event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
      }
      });
      });
       
    </script>
    <!--// responsive tabs-->	
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="<?php echo base_url('Asset/Vendor/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('Asset/Vendor/js/jquery.countup.js')?>"></script>
    <script>
      $('.counter').countUp();
    </script>
    <!-- //OnScroll-Number-Increase-JavaScript -->	  
    <!-- start-smoth-scrolling -->
    <script src="<?php echo base_url('Asset/Vendor/js/move-top.js')?>"></script>
    <script src="<?php echo base_url('Asset/Vendor/js/easing.js')?>"></script>
    <script>
      jQuery(document).ready(function ($) {
      	$(".scroll").click(function (event) {
      		event.preventDefault();
      		$('html,body').animate({
      			scrollTop: $(this.hash).offset().top
      		}, 900);
      	});
      });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
      $(document).ready(function () {
      
      	var defaults = {
      		containerID: 'toTop', // fading element id
      		containerHoverID: 'toTopHover', // fading element hover id
      		scrollSpeed: 1200,
      		easingType: 'linear'
      	};
      
      
      	$().UItoTop({
      		easingType: 'easeOutQuart'
      	});
      
      });
    </script>
    <!-- //here ends scrolling icon -->
    <!--bootstrap working-->
    <script src="<?php echo base_url('Asset/Vendor/js/bootstrap.min.js')?>"></script>
    <!-- //bootstrap working-->
  </body>
</html>