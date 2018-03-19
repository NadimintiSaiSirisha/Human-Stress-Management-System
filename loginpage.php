
<?php
session_start();
$name=$_SESSION["username"];

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>HUMAN STRESS MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" href="css1/font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="css1/fonts/stylesheet.css" />
	<link rel="stylesheet" href="css1/fonts/fonts.css" />
	<link rel="stylesheet" href="css1/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="css1/animat/animate.min.css" />
	<link rel="stylesheet" href="css1/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css1/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="css1/themes/default/default.css" />
	<link rel="stylesheet" href="css1/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="css1/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="css1/owl-carousel/owl.transitions.css">
	
	<link rel="stylesheet" href="css1/style.css" />
	<link rel="stylesheet" href="css1/responsive.css" />
<style>
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }
</style>
	
	
	</head>
<body>

	<div class='preloader'><div class='loaded'>&nbsp;</div></div>
	
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">
							<div class="logo">
								<img src="images/bgess_burned.png" alt="" height="100" />
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#abouts">Solutions</a></li>
							<li><a href="#team">Experts</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="signin.html">Log Out</a></li>
							<?php echo"<li>".$_SESSION["username"]."'s Page</li>";
							?>
							
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	
	
	
	<section id="banner" class="banner">
		<div class="container">
			<div class="row">
				<div class="main_banner_area text-center">
					<div class="col-md-12 col-sm-12">
						<div class="single_banner_text wow zoomIn" data-wow-duration="1s">
							
							
							<?php echo"<h2>HELLO ".$_SESSION["username"]."!<br><br>STOP STRESSING START LIVING";
							?>
							<h5>Manage your stress in easy ways</h5>		
							
							
							
							
			
							
							<div class="separetor"></div>
						</div>
					</div>
					
					
					<div class="scrolldown">
						<a href="#abouts" class="scroll_btn"></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</section><!-- End of Banner Section -->
	
	
	<section id="abouts" class="abouts">
		<div class="container">
			<div class="row">
				<div class="main_abouts_content">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInLeft" data-wow-duration="1s">
							<h2>THIS MIGHT HELP YOU</h2>
							<div class="separetor2"></div>
							<p> <b> TAKE A WALK </b> <br> <br><a href="https://www.outsideonline.com/1801051/run-park-relieve-stress">Find amazing parks here</a>  <br> <br> <b> WATCH VIDEOS </b> <br> <br> <a href="https://www.youtube.com/watch?v=fAjdI7J4Gvo"> Streaming here</a> <br> <br> <b> STIMULATING YOGA </b> <a href="https://www.doyouyoga.com/5-yoga-poses-to-help-reduce-stress-and-tension/"> <br> <br>Know More </a> <br> <br> <b> RELAXING MUSIC</b> <a href="https://www.youtube.com/watch?v=xDwtH_RwPNU"> <br> <br> Listen here </a> </p>
							
								</div>
					</div>
					
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInRight" data-wow-duration="1s">
							<img src="images/types.jpg" alt=""/>
						</div>
					<br> <br>
			<form id='stress_level' method="post" action='stresslevel.php'>
	        

    	<input type="text" name="bt" placeholder="Enter body temperature" required="required" />
<br>	<br> 
<input type="text" name="bp" placeholder="Enter blood pressure" required="required" />
<br> 
	<button type="submit" class="btn btn-primary btn-block btn-large"/>SUBMIT </button>
<br>
                
 		
		<!--<button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>-->
   
				
				</form>
				
				
				
				
				
				
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section id="wedo">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>WHAT WE DO</h2>
					<div class="separetor"></div>
					<p>Our aim is to reduce your stress levels by giving you psychologically-tested solutions. This will surely increase the quality of your life. </p>
				</div>
				<div class="wedo_content_area">
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_wedo wow fadeIn" data-wow-duration="1s">
							<div class="single_left_icon">
								<a href=""><i class="fa fa-star"></i></a>
							</div>
							
							<div class="single_right_text">
								<h4>CALL EXPERT</h4>
								<div class="separetor2"></div>
								<p>Phn : 22222222</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_wedo wow fadeIn" data-wow-duration="1s">
							<div class="single_left_icon">
								<a href=""><i class="fa fa-star"></i></a>
							</div>
							
							<div class="single_right_text">
								<h4>MEDITATION INSTRUCTIONS</h4>
								<div class="separetor2"></div>
								<p>Take the course of 30 minutes.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_wedo wow fadeIn" data-wow-duration="1s">
							<div class="single_left_icon">
								<a href=""><i class="fa fa-star"></i></a>
							</div>
							
							<div class="single_right_text">
								<h4>CALM MUSIC</h4>
								<div class="separetor2"></div>
								<p>Listen to music that is sure to decrease your anxiety.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_wedo wow fadeIn" data-wow-duration="1s">
							<div class="single_left_icon">
								<a href=""><i class="fa fa-star"></i></a>
							</div>
							
							<div class="single_right_text">
								<h4><a href= "parks.html">Find a park nearby</a></h4>
								<div class="separetor2"></div>
								<p>Search for a park near me using Google Maps</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section id="steps" class="steps">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>THREE SIMPLE STEPS</h2>
					<div class="separetor"></div>
					<p>Simple steps to use our application for your benefit</p>
				</div>
				<div class="main_steps_content text-center">
					<div class="col-md-4">
						<div class="single_steps wow fadeIn" data-wow-duration="1s">
							<a href=""><i class="fa fa-mobile"></i></a>
							<h4>Login to the application</h4>
							<p>If you are a new user, register yourself.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single_steps wow fadeIn" data-wow-duration="1.8s">
							<a href=""><i class="fa fa-bar-chart"></i></a>
							<h4>Wear the patch</h4>
							<p>Wear the patch provided to you on your wrist and press ON button</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single_steps wow fadeIn" data-wow-duration="2.8s">
							<a href=""><i class="fa fa-bar-chart"></i></a>
							<h4>Wait for the result</h4>
							<p>While you are waiting, take deep breaths</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
					<h2>HAVE DOUBTS? HERE ARE OUR EXPERTS</h2>
					<div class="separetor"></div>
					<p>Always there for you.</p>
				</div>
				
				<div class="main_team_content text-center">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_team wow fadeIn" data-wow-duration="1.5s">
							<div class="single_team_img">
								<img class="img-circle" src="images/me.jpg" alt="" />
								<div class="single_team_overlay text-center">
									<p>Hi ! I am Sai Sirisha.I am a Professional graphic designer.</p>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="single_team_name">
								<h4>SAI SIRISHA</h4>
								<p>PSYCHOLOGY</p>
								<form id='expert_level' method="post" action='expert1.php'>
								<button type="submit" class="btn btn-primary btn-block btn-large" id="1" name="1"/>CHOOSE ME </button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_team wow fadeIn" data-wow-duration="2s">
							<div class="single_team_img">
								<img class="img-circle" src="images/neha.jpg" alt="" />
								<div class="single_team_overlay text-center">
									<p>Hi ! I am Neha Prabhavalkar. I am the lead of design.</p>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="single_team_name">
								<h4>NEHA PRABHAVALKAR</h4>
								<p>NEUROSCIENCE</p>
								<form id='expert_level' method="post" action='expert2.php'>
								<button type="submit" class="btn btn-primary btn-block btn-large" id="2"/>CHOOSE ME </button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_team wow fadeIn" data-wow-duration="2.5s">
							<div class="single_team_img">
								<img class="img-circle" src="images/gru.jpg" alt="" />
								<div class="single_team_overlay text-center">
									<p>Hi ! I am Gurpreet Singh.I am a Professional Developer.</p>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="single_team_name">
								<h4>GURPREET SINGH</h4>
								<p>SUICIDE</p>
								<form id='expert_level' method="post" action='expert3.php'>
								<button type="submit" class="btn btn-primary btn-block btn-large" id="3"/>CHOOSE ME </button>
								</form>
							</div>
						</div>
					</div>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single_team wow fadeIn" data-wow-duration="2s">
							<div class="single_team_img">
								<img class="img-circle" src="images/mark.jpg" alt=""  />
								<div class="single_team_overlay text-center">
									<p>Hi ! I am Mark Zuckerberg. I am the guide.</p>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="single_team_name">
								<h4>MARK ZUCKERBERG</h4>
								<p>DEPRESSION</p>
								<form id='expert_level' method="post" action='expert4.php'>
								<button type="submit" class="btn btn-primary btn-block btn-large" id="4"/>CHOOSE ME </button>
								</form> 
							</div>
						</div>
					</div>
					
					
					
			</div>
		</div>
	</section>
	
	
	

	
		<!-- Contact form -->
		<section id="contact" class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
							<h2>Get In Touch With Us</h2>
							<div class="separetor"></div>
							<p>We are here to help. Want to learn more about our services? Please get in touch, we'd love to hear from you!</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="messsage_contant">
						<div class="col-md-7 col-sm-7">
							<div class="single_message_left wow fadeIn" data-wow-duration="1s">
								<form action="query.php" id="formid" method="post">
										<!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
										  
										 <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="first name" required="">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email" required="">
												</div>
											</div>
										 </div>
										
										  

										  <div class="form-group">
											<textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
										  </div>

										  <div class="center-content">
											<input type="submit" value="SUBMIT NOW" class="btn btn-lg">
										  </div>
										<!--</div>--> 
								</form>
							</div>
						</div>
						
						<div class="col-md-5 col-sm-5">
							<div class="single_message_right wow fadeIn" data-wow-duration="1s">
								
								<p>
									<i class="fa fa-map-marker"></i> 
									Vivekanand Institute of Technology 
									<span>Chembur, India</span>
								</p>
								<p><i class="fa fa-envelope-o"></i>info@nostress.com</p>
								<p><i class="fa fa-phone"></i>022 28748945</p>
								
							</div>
						</div>
					</div> <!-- End of messsage contant-->
				</div>
			</div>
		</section>	
	
	
	<iframe src="//www.google.com/maps/embed/v1/place?q=vivekanand%20education%20society's%20institute%20of%20technology
      &zoom=17
      &key=AIzaSyDrfyJCv723MI0of2_K1W_3W4j6fDViets" width="100%" height= "300px">
  </iframe>
						

	<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="main_footer text-center wow zoomIn" data-wow-duration="1s">
						<p>Made with <i class="fa fa-heart"></i> by Fobs and Bobs Ltd. 2016. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	
	
	
	

	<script type="text/javascript" src="js1/jquery/jquery.js"></script>
	
	<script type="text/javascript" src="js1/script.js"></script>
	
	<script type="text/javascript" src="js1/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js1/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="js1/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="js1/owl-carousel/owl.carousel.min.js"></script>
	
	
	
	
	
	<script type="text/javascript" src="js1/jquery-easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js1/wow/wow.min.js"></script>
	<!--<script type="text/javascript" src="js1/counterup/counterup.min.js"></script>-->
	
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
	<!--<script type="text/javascript" src="js1/counterup/jquery.counterup.min.js"></script>-->
	
	
	<script type="text/javascript" src="js1/isotop/isotope.min.js"></script>
	<script type="text/javascript" src="js1/isotop/isotop.function.js"></script>
	
	<script type="text/javascript" src="js1/masonry/masonry.min.js"></script>
	
	<script type="text/javascript" src="js1/mixitup/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js1/masonry/masonry.pkgd.min.js"></script>
</body>
</html>