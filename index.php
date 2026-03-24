

<?php
	include "database.php";
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>



<title>School Registration system</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<!--//fonts-->
<style>
    body {
        background-image: url('img/backroundimage.jpg'); /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire screen */
        background-position: center; /* Centers the image */
        background-repeat: no-repeat; /* Prevents the image from repeating */
    }
</style>
</head>

<body>
<!-- header -->
<div class="banner-top">
			
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">YATTA (<span>TECHNICAL-SRMS)</span><p class="logo_w3l_agile_caption"></p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Academics</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Views</a></li>
							<li class="menu__item"><a href="home.php" > Sign-in </a></li>
							
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							
						</ul>
						

					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
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
								<h4>COLLEGE</h4>
									
										<p>Welcome to our College</p>
									<div class="agileits_w3layouts_more menu__item">
				
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>COLLEGE</h4>
									
									<div class="agileits_w3layouts_more menu__item">
			
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>COLLEGE</h4>
								
									<div class="agileits_w3layouts_more menu__item">
											
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
<!--//Header-->
<!-- //Modal1 -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>My  <span>School</span></h4>
										<img src="img/11.jpg" alt=" " class="img-responsive">
										
										<p>Eduction is about academic excellence and cultural diversity.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Don't talk, ACT.</span> Don't say, SHOW.<span>Don't Promise, PROVE.</span></h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">When in doubt go to LIBRARY</h4>
							<span class="cbp-ig-category">COLLEGE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">CAFEETERIA</h4>
							<span class="cbp-ig-category">COLLEGE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI ZONE</h4>
							<span class="cbp-ig-category">YTI</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About Our College</h3> 
						   <p class="about-para-w3ls">Education is the key to unlocking the world, a passport to freedom.</p>
						   <img src="img/about.jpg" class="img-responsive" alt="Hair Salon">
										<div class="w3l-slider-img">
											
										</div>
                                       <div class="w3ls-info-about">
										    <h4>Learn as much as you can while you are young, since life becomes too busy later.</h4>
											<p>Happy Studies. </p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Less Fee Structure! </h4>
			 		<p> All kind of facilities are available here.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Well furnished Classrooms</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Computer labs</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Internet Surfing</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>World Class Education</h4>
			 		<p> All kind of facilities are available here.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Best Certified Teachers</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Online/Offline Classes</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Study materials</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Teachers</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="img/teams1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/teams2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/teams3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="img/teams4.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>MR.ALEX MUSEMBI</h4>
							<span>School Principal</span>
							<p>Go down deep enough into anything and know About the School.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="https://www.facebook.com/share/16YZSGvQse/" class="fa fa-facebook icon-border facebook"> </a></li>
								
								
								
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Austine</h4>
							<span>Computer teacher</span>
							<p>Be <strong>BOLD</strong>  or <i>ITALICS</i>   never REGULAR</p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="https://www.facebook.com/share/16YZSGvQse/" class="fa fa-facebook icon-border facebook"> </a></li>
								
								
								
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Alex Musembi</h4>
							<span>Sports head</span>
							<p>Physical education is the only subject that makes your heart race.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="https://www.facebook.com/share/16YZSGvQse/" class="fa fa-facebook icon-border facebook"> </a></li>
								
								
								
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Alex Musembi</h4>
							<span>Programmer</span>
							<p>Nothing is pleasanter than exploring a <strong>Programming</strong>.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="https://www.facebook.com/share/16YZSGvQse/" class="fa fa-facebook icon-border facebook"> </a></li>
								
								
								
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div>
<!-- //team -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Some Views of our Institution</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g1.jpg" class="swipebox"><img src="img/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SCHOOL</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g2.jpg" class="swipebox"><img src="img/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>STUDENTS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g3.jpg" class="swipebox"><img src="img/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>PLAYGROUND</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g4.jpg" class="swipebox"><img src="img/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>CORRIDOR</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g5.jpg" class="swipebox"><img src="img/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>COMPUTER</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g6.jpg" class="swipebox"><img src="img/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>MUSIC</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g8.jpg" class="swipebox"><img src="img/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>LIBRARY</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g9.jpg" class="swipebox"><img src="img/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>TEACHERS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g10.jpg" class="swipebox"><img src="img/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>ADMINISTRATION BLOCK</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="img/g4.jpg" class="swipebox"><img src="img/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>CLASSROOMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->

 
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Enquiry form</h4>
				<p class="contact-agile2">for more details</p>
				<form  method="post"  action="<?php echo $_SERVER["PHP_SELF"];?>" >


				<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into contact(conname,conpno,conemail) values('{$_POST["conname"]}','{$_POST["conpno"]}','{$_POST["conemail"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>


					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="conname" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="conpno" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="conemail" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <button type="submit" class="btn-btn-primary" name="submit">Send now</button>	
				</form>
				
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+254 768687244</p>
			<p class="contact-agile1"><strong>Email :</strong>musembialex403@gmail.com<a href="mailto:ustineodhiambo52@gmail.com"></a></p>
			<p class="contact-agile1"><strong>Address :</strong> Yatta, Machakos, Kenya</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/place/THIKA+TECHNICAL+TRAINING+INSTITUTE/@-1.0425817,37.0777366,17z/data=!3m1!4b1!4m6!3m5!1s0x182f4f8ce25a05df:0x30943508fed621a7!8m2!3d-1.0425871!4d37.0803115!16s%2Fm%2F0cr592l?entry=ttu&g_ep=EgoyMDI1MDQyNy4xIKXMDSoASAFQAw%3D%3D" ></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2025 College . All Rights Reserved | Design by <a href="home.php">Alex the Guru</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
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
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
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
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
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
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
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
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


