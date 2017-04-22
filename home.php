<?php
include_once('header.php');

?>

<!-- banner -->
	<div class="banner">
			<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<img src="images/banner1.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Human</h4>
							  <p>The power of mind</p>
							<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/banner2.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
						 
							<h4>Creatures</h4>
							   <p>The big boys</p>
					<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/banner3.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Mage</h4>
						   <p>Powerful and unstoppable</p>
						<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>


				</ul>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
	</div>
<!-- //banner -->
<!-- Modal1 -->
						<!--<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							Modal content
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Contracts</h4>
										<img src="images/ab.jpg" alt=" " class="img-responsive">
										<h5>World of magic</h5>
										<p>World of magic is a new fun fantasy game and it is expected to make big debut at the market soon! Sounds crazy?</p>
									</div>
								</div>
							</div>
						</div>-
						//Modal1 -->

<!-- about -->
	<div class="about">
		<div class="container">
			<div class="col-md-4 agileits_about_left">
				<h3 class="w3l_head">About</h3>
				<p class="w3ls_head_para">THE GAME:</p>
			</div>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<h4>WORLD OF MAGIC</h4>
					<p><i>World of magic is a new fun fantasy game and it is expected to make big debut at the market soon! Sounds crazy?</i>Customize your own comic book hero and conquer the top slot of the Hall of Fame! It’s not an easy task! Accept quests, complete exciting adventures, level up, collect gold, obtain honor, be "overpowered" and become a living legend!</p>
				</div>
				<div class="col-md-6 agileits_banner_bottom_grid_r">
					<div class="agileits_banner_btm_grid_r">
						<img src="images/ab.jpg" alt=" " class="img-responsive">
						<div class="agileits_banner_btm_grid_r_pos">
							<img src="images/ab1.jpg" alt=" " class="img-responsive">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- services -->
<div class="services" id="services">
		 <h3 class="w3l_head w3l_head1">How to do</h3>
			         <p class="w3ls_head_para w3ls_head_para1">Read slowly</p>
		<div class="services-agile-w3l">
			<?php
			if(!isset($_SESSION['username']))
			{
			?>
			<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="Register.php" class="hi-icon"><img src="images/s1.png" alt=" " /></a>
				</div>
				<h4>Register</h4>
			</div>
			<?php
			}
			else
			{
				?>
				<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s1.png" alt=" " /></a>
				</div>
					<h4>You are in! :)</h4>
				</div>
				<?php
			}
			?>
		</div>

       <div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="Login.php" class="hi-icon"><img src="images/s2.png" alt=" " /></a>
			</div>
			<h4>Login</h4>
		</div>
		<div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/s3.png" alt=" " /></a>
			</div>
			<h4>Create character</h4>
		</div>
		<div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="Arena.php" class="hi-icon"><img src="images/s4.png" alt=" " /></a>
			</div>
			<h4>Play and fight</h4>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //services -->
<!-- projects -->
	<div class="projects" id="projects">
		<div class="container">
			<div class="port-head">
					 <h3 class="w3l_head w3l_head1">Our classes</h3>
			         <p class="w3ls_head_para w3ls_head_para1">More...coming soon</p>
			</div>
		</div>
		<div class="projects-grids">
				<div class="sreen-gallery-cursual">

			<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-knight.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
							<h4>Knight</h4>
							<p>from the past</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-programmer.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
									<h4>Programmer</h4>
									<p>from the future</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-orc.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
								<h4>Orc</h4>
								<p>from nowhere</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-goblin.jpg" alt="" />
							<div class="projects-grid-caption"> 
							
								<h4>Goblin</h4>
								<p>form the center of the earth</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-fire.jpg" alt="" />
							<div class="projects-grid-caption"> 
							
									<h4>Fire mage</h4>
								<p>The master of fire</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-frost.jpg" alt="" />
							<div class="projects-grid-caption"> 
									<h4>Frost mage</h4>
								<p>The master of frost</p>
							</div>
						</div>	
					</div>
			</div>
		</div>
	</div>
	</div>
	<!-- //projects -->
<?php
include_once('footer.php')
?>