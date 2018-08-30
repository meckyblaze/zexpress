<?php
// Start the session
session_start();
?>
<?php

if ($_SERVER['HTTP_HOST'] == "zexpresscouriers.com")
{
   $url = "https://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header("Location: $url");
} 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<?php


    // If the values are posted, insert them into the database.
    
if (isset($_POST['Email'])){
        
$name = $_POST['Name'];

	$email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];
    $address = $_POST['address'];
$to = "info@zexpresscouriers.com";
$subject = "CUSTOMER";
$from= "....";
$headers = "From:mec@mectechnologies.com" . $from;
$data = "\r\nMyemail: $email Myname: $name Myphone: $phone \r\nMymessage: $message  \r\n\r\n\r\n";
mail($to,$subject,$data,$headers);
$smsg = "Message received...you will get an email response shortly. ";
if (isset($_POST['Email'])){
}else{
$xmsg = "Error sending mail. ";
}
    
}
    
?>
<html lang="en">
<head>
<title>Zoom Express Deliveries</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rent appartment, rent 2 bedroom flat, rent 2 bedroom flat portharcourt, rent 2 bedroom flat lagos, 
rent 2 bedroom flat warri, rent 2 bedroom flat Oweri, rent 2 bedroom flat Abuja, rent 2 bedroom flat Calabar, rent 2 bedroom flat benin, rent self con portharcourt,buy land, buy house, rent shop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/main-gallery.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,400i,600,600i,700" rel="stylesheet">
<!-- //web-fonts -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
<div id="myModal" class="modal fade">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">Zoom Express Deliveries</h4>

            </div>

            <div class="modal-body">

                

                <form action=track.php method=post>

                    <div class="form-group">
<p>Track Your Package.</p>
                       <input name=trackingid type=password size=25 placeholder="Enter Tracking Id">

                    </div>

                    <div class="form-group">

                    </div>

                    <button type="submit" class="btn btn-primary">Track</button>

                </form>

            </div>

        </div>

    </div>

</div>
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
							    
								<div class="agileits-banner-info">
								    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> 
<?php echo $smsg; ?> </div><?php } ?><?php if(isset($xmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $xmsg; ?> </div><?php } ?>
									<h3><span>Delivery Made </span><span>Easy</span></h3>
											<p>NEXT MEETUP  |  24/7  |  All time</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal" style="color: #fff;">Track Now</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
							    
								<div class="agileits-banner-info">
								    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> 
<?php echo $smsg; ?> </div><?php } ?><?php if(isset($xmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $xmsg; ?> </div><?php } ?>
									<h3>Connecting <span>Businesses</span></h3>
										<p>NEXT MEETUP  |  24/7  |  All time</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal" style="color: #101;">Track now</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
							    
								<div class="agileits-banner-info">
								    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> 
<?php echo $smsg; ?> </div><?php } ?><?php if(isset($xmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $xmsg; ?> </div><?php } ?>
									<h3>Small, Medium and Heavy <span>Deliveries</span></h3>
									<p>NEXT MEETUP  |  24/7  |  All time</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal" style="color: #fff;">Track now</a>
										</div>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
 
	</div>	
	<!-- //banner --> 
			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Zoom Express Deliverires</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><span>Zoom</span>Express<a class="navbar-brand" href="index.php"><font size=1><span>Deliveires</span></font></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a class="page-scroll scroll" href="#work">Works</a></li>
						<li><a class="page-scroll scroll" href="#"  data-toggle="modal" data-target="#myModal1">Track Package</a></li>
							
							<li><a class="page-scroll scroll" href="#show">Stats.</a></li>
							<li><a class="page-scroll scroll" href="#contact">Contact Us</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
<!-- about -->
<div class="about" id="about">
 <div class="col-md-6 ab-w3-agile-img">
	     
	  </div>
      <div class="col-md-6 ab-w3-agile-info">
	   <div class="ab-w3-agile-info-text">
	   <p class="sub-text one">Who We Are</p>
	     <h2 class="title-w3">About Us</h2>
		 
		 <p>International express deliveries; global freight forwarding by air, sea, road and rail; warehousing solutions from packaging, to repairs, to storage; mail deliveries worldwide; and other customized logistic services – with everything Door To Door Deliveries does, we help connect people and improve their lives.

With a global network in over 220 countries and territories across the globe, Door To Door Deliveries is the most international company in the world and can offer solutions for an almost infinite number of logistics needs</p>
			<div class="agileits_w3layouts_more menu__item one">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Track now</a>
			</div>
		  </div>
		  <div class="ab-w3-agile-inner">
	       <div class="col-md-6 ab-w3-agile-part">
				<h4>Awesome Services</h4>
		     <p>We offer express delivery on request .</p>
	       </div>
			 <div class="col-md-6 ab-w3-agile-part two">
				<h4>Awesome Delivery</h4>
		     <p>Package gets to its precised detination...We simply Deliver.</p>
	       </div>
			<div class="clearfix"></div>		   
	  </div>	
   </div>	 	  
	 
 
		<div class="clearfix"></div>
</div>
	<!-- //about -->
											<!-- Modal1 -->
													<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<img src="images/2.jpg" alt=" " class="img-responsive">
																	<h5>Donec lobortis pharetra dolor</h5>
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->

		<!-- /classes-->

   <!-- //classes-->
   
				<!-- Modal2-->
    });
								<div class="pop-up"> 
			<div id="small-dialog" class="mfp-hide book-form">
				<h4>Sign Up Form </h4>
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Your Name" required=""/>
					<input type="text" name="Email" class="email" placeholder="Email" required=""/>
					<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
					<div class="check-box">
						<input name="chekbox" type="checkbox" id="brand" value="">
						<label for="brand"><span></span>Remember Me.</label>
					</div>
					<input type="submit" value="Sign Up">
				</form>
			</div>
		</div>>
						<!-- //Modal2 -->		
	<!-- instructors -->
		<!--/featured-projects-->
<div class="featured-section" id="work">
  <div class="container">
		 <p class="sub-text">Work Details</p>
		       <h3 class="title-w3">How We Work</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						   <li>
						     <div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal" ><img class="img-responsive" src="images/p1.jpg"  width="350" height="80%" alt="" />	</a>
									<div class="fur">
										<h4>Good Support</h4>
			                            
									</div>	
																	
							 </div>
							</li>
							<li>
						    <div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal" ><img class="img-responsive" src="images/p2.jpg" width="420" height="420" alt="" />	</a>
									<div class="fur">
										<h4>Xpress Delivery</h4>
			                            
									</div>	
																	
							 </div>
							</li>
							
						    <li>
						      <div class="project-fur">
								<a href="#" data-toggle="modal" data-target="#myModal" ><img class="img-responsive" src="images/p3.jpg" width="420" height="50%" alt="" />	</a>
									<div class="fur">
										<h4>Quick Response</h4>
			                            
									</div>	
																	
							 </div>
							</li>
							 <li>
						      <div class="project-fur">
								
			                            
									</div>	
																	
							 </div>
							</li>
					</ul>

		</div>
	</div>
</div>
<!--//featured-projects-->
<!-- counter -->
	<div class="services-bottom stats services" id="show">
		<div class="container">
		  <div class="wthree-agile-counter">
			<div class="col-md-3 w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">190874</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Likes</h4>
			</div>
			<div class="col-md-3 w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">178000</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Happy Clients</h4>
			</div>
			<div class="col-md-3 w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">17986340</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>People Loved</h4>
			</div>
			<div class="col-md-3 w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="fa fa-trophy" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">2430894</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Delivering</h4>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //counter -->
	
   <!--/price -->
    	
	<!--//prices -->
	  <!--/price -->

     
	<!-- Modal1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header book-form">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Track Your Package</h4>
										<form action="track.php" method="post">
												<input type="password" name="trackingid" placeholder="Tracking ID" required=""/>
													
												<div class="check-box">
													
												</div>
												<input type="submit" value="Track">
											</form>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->

		</div>	
	  </div>	
	<!--//prices -->
				<!-- gallery -->
	
	<!-- //gallery -->
	 <!-- //classes-->
   <div class="testmonials" id="monials">
		<div id="particles-js1"></div>
		   <div class="client-top">
		    <p class="sub-text">Our Clients</p>
		  <h3 class="title-w3 three">People Say</h3>
		      
		    <div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								 <div class="agileits-clients">
									
									<div class=" client_agile_info">
									   
											<div class="c-img"><i class="fa fa-quote-right"></i> </div>
											<p>With Door To Door I send Packages home even when am on a military mission.</p>
											<h4><img src="images/m1.jpg" alt="">Sergent John Mitchell</h4>
										 
									</div>
									
								</div>
							</li>
							<li>
							<div class="agileits-clients">
								
								<div class="client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i> </div>
										<p>With Door To Door giver My business is assured..</p>
										<h4><img src="images/m2.jpg" alt=""> Matt Brody</h4>
									 
								</div>
								<div class="clearfix"></div>
								</div>
							</li>
							<li>
							<div class="agileits-clients">
							     <div class=" client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i> </div>
										<p>I have never been disappointed by their delivery service.</p>
										<h4><img src="images/m3.jpg" alt="">MARTIN NIXON</h4>
									 
								</div>
								
								</div>
							</li>
						</ul>
					</div>
				</div>

				</div>
	</div>	
	<!--//prices -->

	<!-- Contact -->
	<div class="agile-contact">

		<div class="col-md-6 contact-map-right">
			<div id="map"></div>
		</div>
		<div class="col-md-6 left-contact">
	
		<div class="con-bot">
			<div class="left-bw3">
				<h5><i class="fa fa-map-marker" aria-hidden="true"></i>Address</h5>
				<p>10302 NY,</p>
				<p>7 North Street,</p>
				<p>Staten Island</p>
			</div>
			<div class="right-bw3">
				<h5><i class="fa fa-phone" aria-hidden="true"></i>Phone</h5>
				<p>Telephone : +1 (631) 973-9527</p>
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="cont-top">
			<h5><i class="fa fa-envelope-o" aria-hidden="true"></i>Email</h5>
			<a href="mailto:info@zexpresscouriers.com">info@zexpresscouriers.com</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

	<div class="contact" id="contact">
	<div id="particles-js2"></div>
		<div class="contact-top">
		<p class="sub-text">Choose Your Style</p>

			<h3 class="title-w3 con">Contact Us</h3>
			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> 
<?php echo $smsg; ?> </div><?php } ?><?php if(isset($xmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $xmsg; ?> </div><?php } ?>
			

			<form action="#" method="post" class="contact_form slideanim">

				<div class="message">
					<div class="col-md-6 col-sm-6 grid_6 c1">
						<input type="text" class="margin-right" Name="Name" placeholder="Name" required="">
						<input type="email" Name="Email" placeholder="Email" required="">
						<input type="text" class="margin-right" Name="Phone" placeholder="Phone Number" required="">
					</div>

					<div class="col-md-6 col-sm-6 grid_6 c1">
						<textarea name="Message" placeholder="Message" required=""></textarea>
					</div>
					<div class="clearfix"></div>
				</div>

				<input type="submit" value="SEND MESSAGE">
			</form>
				<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							
							
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>
		</div>
	</div>
	<!-- //Contact -->
<!-- footer-top -->	
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>What We DO</h3>
			
				<p>We simply deliver goods around the globe according to clients specifications.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>Head Office: 7 North Street Staten Island, NY 10302.</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>+1 (631) 973-9527</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="mailto:info@zexpresscouriers.com">info@zexpresscouriers.com</a></p>
						</div>
						<div class="clearfix"></div>

			</div>
			<div class="col-md-3 foot-left">
				<h3>Latest Works</h3>
				<ul>
				<li><a href="#"><img src="images/a1.jpg" alt="" class="img-responsive"></a></li>
				<li><a href="#"><img src="images/a2.jpg" alt="" class="img-responsive"></a></li>
				<li><a href="#"><img src="images/a2.jpg" alt="" class="img-responsive"></a></li>
				<li><a href="#"><img src="images/a1.jpg" alt="" class="img-responsive"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 foot-left">
			<h3>Subscribe</h3>
			<p>subscribe below to get free updates on our services </p>
			<form action="#" method="post">	
					<input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe">
			</form>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<p>&copy; 2018 Zoom Express All rights reserved... Designed by MECky |  <a href="">+2348062786699</a></p>
			</div>
			
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->

						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
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
	<script src="js/main.js"></script>
<!-- search-jQuery -->
<!-- pop-up-box -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});														
				});
			</script>

		<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
			<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- //Map-JavaScript -->
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>

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
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
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