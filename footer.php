<!-- footer -->
<div class="contact" id="contact">
  <div class="container">
	<div class="padding-contact">
			
		<div class="col-md-4 address">
		  <h3>Address</h3>
			<address>
				Lorem Ipsum<br>
				HTML5 Buildings,<br>
				Doctorville,<br>
				Great Britain<br>
				(123) 456-7890<br>
				<span>Phone : +123 4567 8900</span>
			</address>
		</div>
			
		<div class="col-md-4 social-icons">
		  <h3>Follow Us</h3>
			<ul class="social">
				<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
				<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
				<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
				<li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
				<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
			</ul>
		</div>
			
		<div class="col-md-4 newsletter">
		  <h3>Newsletter</h3>
			<form>
				<input type="text" value="Enter Your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your email';}">
				<input type="submit" value="Subscribe">
			</form>
		</div>
	  <div class="clearfix"></div>
	</div>
			
		<div class="footer">
			<p>© 2016 Combat Game. All Rights Reserved | Design by  <a href="https://w3layouts.com/" target="_blank"> w3layouts </a></p>
		</div>
  </div>
</div>

<!-- endoffooter -->

<!--banner Slider starts Here-->
<script src="js/jquery-2.2.3.min.js"></script> 
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
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
							 <!-- js -->
<!-- start-smoth-scrolling -->
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>

<script src="js/owl.carousel.js"></script> 
<link href="css/owl.theme.css" rel="stylesheet">
 <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- //js -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
</body>
</html>