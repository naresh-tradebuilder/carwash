<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Carwash Autowash & Detailing template!</title>
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- include google roboto font cdn link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
		      <?php
        if($_SERVER['HTTP_HOST'] == 'localhost:8080' || $_SERVER['HTTP_HOST'] == 'localhost')
           {
                $APIURL = 'http://imk.dev2.imkloud.com';
                 $user = "ibXA8boNwqLrDgpPt";
                $org = "wc4m4GQdDd9Hd29DA";
            } else if($_SERVER['HTTP_HOST'] == '104.197.167.156')
           {
                $APIURL = 'http://imk.dev2.imkloud.com';
                $user = "";
                $org = "";
            } else {
                $APIURL = 'https://prod.imkloud.com';
                $user = "d4bKwE7yL9bRy67kD";
                $org = "9PRph7fxoQgAXLqKh";
            }
            ?>
            <script>
         window['SERVER_URL'] = '<?php echo $APIURL ?>';
         window['user_id'] = '<?php echo $user ?>';
         window['group'] = '<?php echo $org ?>';

</script>

	
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<header id="header" class="bg-white">
			<!-- MidBar -->
			<div class="midBar pt-4 pt-lg-6 pb-lg-6 pt-xl-8 pb-xl-7">
				<div class="container">
					<div class="row">
						<div class="col-6 col-md-4">
							<!-- Logo -->
							<div class="logo position-relative">
								<a href="index.html">
									<img src="images/logo.png" alt="Auto &amp; Detailing template" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="col-6 col-md-8 d-flex align-items-center justify-content-end position-static">
							<!-- ContactList -->
							<ul class=" list-unstyled contactList d-flex mb-0 position-relative mr-17 mr-sm-19 mr-md-23 mr-lg-4 mr-xl-0">
								<li class="d-lg-flex flex-wrap d-none">
									<span class="time rounded-sm d-block mr-lg-2 pt-lg-2">
										<span class="far fa-clock p-lg-0 icn"></span>
									</span>
									<ul class="list-unstyled mb-0 timeList">
										<li><time class=" d-none d-lg-block" datetime="2019-07-15">Mon-Sat: 9:00am-7:00pm</time></li>
										<li><time class=" d-none d-lg-block" datetime="2019-07-15">(Open all 7 Days)</time></li>
									</ul>
									
								</li>
								<li class="d-flex flex-wrap">
									<span class="ico d-block mr-lg-2 pt-lg-2">
										<a href="tel:1-800-123-4567" class="fas fa-phone rounded-sm p-lg-0 icn"></a>
									</span>
									<div class="wrap d-none d-lg-block">
										<span class="text d-block">Have any Question?</span>
										<a class="tell fwSemibold" href="tel:18001234567">205-987-9308</a>
									</div>
								</li>
							</ul>
							<div class="btnHolder ml-xl-8 d-none d-md-block">
								<a href="contact.php" class="btn btn-warning py-xl-4 text-uppercase fwEbold">book appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MenuHolder -->
			<!-- MenuHolder -->
			<div class="menuHolder">
				<div class="container position-relative">
					<!-- Navbar -->
					<nav class="navbar navHolder d-flex navbar-expand-lg navbar-dark p-0 mt-lg-0 mr-lg-0 position-static">
						<!-- MenuLogo -->
						<div class="menuLogo">
							<a href="index.html">
								<img src="images/logo2.png" alt="Auto &amp; Detailing template" class="img-fluid logoWhite">
								<img src="images/logo.png" alt="Auto &amp; Detailing template" class="img-fluid logoBlack">
							</a>
						</div>
						<a href="#" class="search position-relative order-lg-2 fas fa-search" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
						<button class="navbar-toggler toggleBar position-relative" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navCollapse text-uppercase fwBlack" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="index.html" id="navbarDropdown">Home </a>
									
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Services &amp; Pricing</a>
									<div class="dropdown-menu border-0 rounded-0 text-capitalize" aria-labelledby="navbarDropdown">
										<ul class="list-unstyled dropMenu">
											<li><a class="dropdown-item" href="express.html">EXTERIOR WASH</a></li>
											<li><a class="dropdown-item" href="full-service.html">FULL-SERVICE WASH (IN & OUT)</a></li>
											<li><a class="dropdown-item" href="hand-wash.html">HAND WASH</a></li>
											<li><a class="dropdown-item" href="wax-service.html">WAX SERVICES</a></li>
											<li><a class="dropdown-item" href="details.html">DETAILS</a></li>
											<li><a class="dropdown-item" href="add-ons.html">ADD-ONS</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="about-us.html">About<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item"><a class="nav-link" href="Unlimited Wash Club.html">Unlimited Wash Club</a></li>
								<li class="nav-item"><a class="nav-link" href="testimonial.html">testimonials</a></li>
								<li class="nav-item">
									<a class="nav-link" href="gallery.html">Gallery</a>
									
								</li>								
								<li class="nav-item dropdown">
									<a class="nav-link" href="blog.html">Blog</a>									
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" href="contact.php">CONTACT</a>
									
								</li>
							</ul>
						</div>
						<div id="collapseExample" class="collapse searchFormCollapse position-absolute">
							<!-- SForm -->
							<form class="sForm rounded-sm overflow-hidden input-group position-relative">
								<input type="text" class="form-control form-control-sm pr-2" placeholder="Find Freelancers">
								<div class="input-group-prepend mr-0">
									<button type="submit" class="btn buttonReset text-white fas fa-search"></button>
								</div>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- main -->
		<main>
			<!-- brdCrmbHolder -->
			<nav class="brdCrmbHolder py-3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- breadcrumb -->
							<nav aria-label="breadcrumb" class="d-flex">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="homepage.html">Home</a></li>
									<li class="breadcrumb-item"><a href="#">contact</a></li>
									<li class="breadcrumb-item active" aria-current="page">contact multi location</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</nav>
			<!-- contactSec -->
			<section class="contactSec py-10 py-sm-12 py-lg-14">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-10 offset-xl-1">
							<header class="header ltrSpce text-center mb-6 mb-md-8 mb-lg-12 mb-xl-14">
								<h1 class="fwEbold h2 text-capitalize mb-2">contact us</h1>
								<p>if you would like to contact any of the Customer Services. please fill out the form below</p>
							</header>
						</div>
					</div>
					<div class="row flex-row-reverse">
						<div class="col-12 col-md-8 mb-6 mb-md-0">
							<!-- contactForm -->
							<form id="locations" name="locations" class="contactForm">
          						<div class="alert hidden" id="location-message"></div>
								<div class="formRoW d-flex flex-Wrap">
									<div class="formCol form-group">
										<label class="text-capitalize" for="contactName">your Name</label>
										<input class="form-control" type="text" placeholder="Name *"  name="firstName"  data-validation="required,custom" data-validation-regexp="^[a-zA-z ]{1,}$" required="required" placeholder="Name*">
									</div>
									<div class="formCol form-group">
										<label class="text-capitalize" for="contactPhone">phone number</label>
										<input class="form-control" type="text" id="contactNumber" name="contactNumber" placeholder="Phone *" data-force-validation-if-hidden="true"
                         data-validation="custom"  required="required"> 
									</div>
								</div>
								<div class="form-group">
									<label class="text-capitalize" for="contactEmailAddress">email address</label>
									<input class="form-control" type="email" name="emailId" placeholder="Email *" data-validation="email" required="required" placeholder="Email*">
								</div>
								<div class="form-group">
									<label class="text-capitalize" for="contactSubject">subject</label>
									<select class="custom-select" data-validation="required" required="required" name="Calltime">
										<option>Select</option>
										<option>EXTERIOR Wash</option>
										<option>FULL-SERVICE WASH</option>
										<option>HAND WASH</option>
										<option>WAX SERVICES</option>
										<option>DETAILS</option>
										<option>ADD-ONS</option>
									</select>
								</div>
								<div class="form-group">
									<label class="text-capitalize" for="contactMessage">message</label>
									<textarea class="form-control" id="contactMessage"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="submit btn btnTheme text-uppercase fwEbold">send message</button>
								</div>
							</form>
						</div>
						<div class="col-12 col-md-4 alignRight">
							<!-- contSideList -->
							<ul class="contSideList list-unstyled mb-8 mb-lg-11 pt-md-1">
								<li class="d-flex">
									<span class="ico d-block mr-2 mr-lg-3 mt-1">
										<img src="images/ico16.svg" alt="images description" width="37" height="37">
									</span>
									<ul class="list-unstyled mb-0 wrap text-capitalize fwSemibold">
										<li class="mb-lg-2">Call us anytime:</li>
										<li>
											<a href="tel:18001234567" class="tell">(205) 987-9308</a>
										</li>
									</ul>
								</li>
								<li class="d-flex">
									<div class="ico mr-2 mr-lg-3 mt-1">
										<img src="images/ico17.svg" alt="images description" width="39" height="39">
									</div>
									<div class="addressWrap">
										<h2 class="headingXI text-capitalize fwSemibold mb-2">address</h2>
										<ul class="list-unstyled mb-0">
											<li class="mb-1">Riverchase Car Wash,</li>
											<li>Hoover, AL 35216</li>
										</ul>
									</div>
								</li>
								<li class="d-flex mb-md-0">
									<div class="ico mr-2 mr-lg-3 mt-1">
										<img src="images/ico18.svg" alt="images description" width="39" height="39">
									</div>
									<div class="tmeWrap">
										<h2 class="headingXI text-capitalize fwSemibold mb-2">working hours:</h2>
										<ul class="list-unstyled tmeList mb-0">
											<li class="mb-1">Monday - Sunday (Open all 7 Days)</li>
											<li>9am–7pm</li>
										</ul>
									</div>
								</li>
							</ul>
							<h3 class="headingIX mb-3">Have any questions?</h3>
							<!-- MailList -->
							<ul class="list-unstyled MailList mb-7">
								<li class="mb-1"><a href="#">riverchasecarwash786@gmail.com</a></li>
								<li><a href="#">www.carwash.com</a></li>
							</ul>
							<!-- socialSNetwork -->
							<ul class="socialSNetwork list-unstyled d-flex mb-0">
								<li><a href="#" class="fab fa-facebook-square"></a></li>
								<li><a href="#" class="fab fa-twitter-square"></a></li>
								<li><a href="#" class="fab fa-linkedin"></a></li>
								<li><a href="#" class="fas fa-rss-square"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- mapHolder -->
			<aside class="mapHolder w-100">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106544.07386977402!2d-86.86450747532587!3d33.436217524441005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888918f466a812b7%3A0xe1ef22962a6dc92e!2sMountain%20Brook%2C%20AL%2035216%2C%20USA!5e0!3m2!1sen!2sin!4v1600877753701!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</aside>
			<!-- lctnSec 
			<aside class="lctnSec py-11">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 col-xl-3 txtHolder text-center text-lg-left mb-5">
							<h4 class="h4 mb-3">See all Carwash Locations</h4>
							<p>These are our network location over the world specific foreign charitable organization.</p>
							<div class="slideBtn d-flex justify-content-center justify-content-lg-start">
								<a href="#" class="btnHolder buttonLeft rounded d-flex justify-content-center align-items-center mr-2 lsBtnPrev">
									<i class="arrow fas fa-chevron-left"></i>
								</a>
								<a href="#" class="btnHolder buttonRight rounded d-flex justify-content-center align-items-center mr-2 lsBtnNext">
									<i class="arrow arrowNext fas fa-chevron-right"></i>
								</a>
							</div>
						</div>
						<div class="col-12 col-lg-8 col-xl-9 pt-1">
							<div class="row d-block">
								 locationSlider 
								<div class="locationSlider">
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h3 class="headingX mb-0">Allisonville Road</h3>
												</header>
												<div class="clList px-6 py-5">
													<p>8252 Kelly Lane Indianapolis, IN 46250</p>
													<p>Call: <a href="tel:6604567890" class="tell">(660) 456-7890</a></p>
													<p><time datetime="2019-07-18">Mon-Sat: 8 am - 8 pm Sunday: 9 am - 6 pm</time></p>
													<p><a href="#" class="btn btnTheme d-block mt-7 mb-n2 py-3 text-uppercase fwEbold">store details</a></p>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h3 class="headingX mb-0">Allisonville Road</h3>
												</header>
												<div class="clList px-6 py-5">
													<p>10580 N Michigan Road Carmel, IN 46032 </p>
													<p>Call: <a href="tel:6604567890" class="tell">(660) 456-7890</a></p>
													<p><time datetime="2019-07-18">Mon-Sat: 8 am - 8 pm Sunday: 9 am - 6 pm</time></p>
													<p><a href="#" class="btn btnTheme d-block mt-7 mb-n2 py-3 text-uppercase fwEbold">store details</a></p>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h3 class="headingX mb-0">Allisonville Road</h3>
												</header>
												<div class="clList px-6 py-5">
													<p>14837 Thatcher Lane Carmel, IN 46032 </p>
													<p>Call: <a href="tel:660-456-7890" class="tell">(660) 456-7890</a></p>
													<p><time datetime="2019-07-18">Mon-Sat: 8 am - 8 pm Sunday: 9 am - 6 pm</time></p>
													<p><a href="#" class="btn btnTheme d-block mt-7 mb-n2 py-3 text-uppercase fwEbold">store details</a></p>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h3 class="headingX mb-0">Allisonville Road</h3>
												</header>
												<div class="clList px-6 py-5">
													<p>10580 N Michigan Road Carmel, IN 46032 </p>
													<p>Call: <a href="tel:6604567890" class="tell">(660) 456-7890</a></p>
													<p><time datetime="2019-07-18">Mon-Sat: 8 am - 8 pm Sunday: 9 am - 6 pm</time></p>
													<p><a href="#" class="btn btnTheme d-block mt-7 mb-n2 py-3 text-uppercase fwEbold">store details</a></p>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h3 class="headingX mb-0">Allisonville Road</h3>
												</header>
												<div class="clList px-6 py-5">
													<p>14837 Thatcher Lane Carmel, IN 46032 </p>
													<p>Call: <a href="tel:660-456-7890" class="tell">(660) 456-7890</a></p>
													<p><time datetime="2019-07-18">Mon-Sat: 8 am - 8 pm Sunday: 9 am - 6 pm</time></p>
													<p><a href="#" class="btn btnTheme d-block mt-7 mb-n2 py-3 text-uppercase fwEbold">store details</a></p>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- footerAside -->
			<aside class="footerAside text-white bgCover" style="background-image: url('./images/footer-bg.jpg')">
				<div class="container pt-10 pb-8 pt-lg-13 pb-lg-14">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="txtHolder w-100">
								<h5 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">about us</h5>
								<p>RIVERCHASE CAR WASH & DETAIL HAS BEEN IN THE HOOVER COMMUNITY FOR 27 YEARS!</p>
								<!-- socialFNetwork -->
								<ul class="socialFNetwork d-flex mb-0 list-unstyled justify-content-center justify-content-sm-start">
									<li><a href="#" class="fab fa-facebook-square"></a></li>
									<li><a href="#" class="fab fa-twitter-square"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
									<li><a href="#" class="fas fa-rss-square"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="w-100 pl-lg-3">
								<h5 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">Our Services</h5>
								<!-- fLink -->
								<ul class="fLink list-unstyled text-capitalize">
									<li><a href="express.html">EXTERIOR WASH</a></li>
									<li><a href="full-service.html">FULL-SERVICE WASH</a></li>
									<li><a href="hand-wash.html">HAND WASH</a></li>
									<li><a href="wax-service.html">WAX SERVICES</a></li>
									<li><a href="details.html">DETAILS</a></li>
									<li><a href="add-ons.html">ADD-ONS</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="w-100 pl-lg-3">
								<h5 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">Useful Links</h5>
								<!-- fLink -->
								<ul class="fLink list-unstyled text-capitalize">
									<li><a href="index.html">Home</a></li>
									<li><a href="express.html">Services &amp; Pricing</a></li>
									<li><a href="Unlimited Wash Club.html">Unlimited Wash Club</a></li>
									<li><a href="about-us.html">About</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="blog.html">Blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-sm-4 mb-lg-0">
							<div class="wrapHolder w-100">
								<h5 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">contact info</h5>
								<!-- address -->
								<address class="mb-0">
									<!-- contList2 -->
									<ul class="contList2 list-unstyled mb-0 justify-content-center">
										<li class="d-flex mb-6">
											<div class="ico pr-3 flex-shrink-0 d-flex align-items-center">
												<img src="images/ico23.svg" alt="images description" width="35" height="39" class="img-fluid">
											</div>
											<div class="wrap">
												<span class="d-block mb-lg-1">Call us now:</span>
												<a href="tel:2059879308" class="tell">205-987-9308</a>
											</div>
										</li>
										<li class="d-flex mb-6">
											<div class="ico pr-3 flex-shrink-0 d-flex align-items-center">
												<img src="images/ico24.svg" alt="images description" width="35" height="39" class="img-fluid">
											</div>
											<ul class="list-unstyled mb-0">
												<li class="mb-lg-1">Riverchase Car Wash,</li>
												<li>Hoover, AL 35216</li>
											</ul>
										</li>
										<li class="d-flex mb-6">
											<div class="ico pr-3 flex-shrink-0 d-flex align-items-center">
												<img src="images/ico25.svg" alt="images description" width="35" height="39" class="img-fluid">
											</div>
											<!-- ftimeList -->
											<ul class="list-unstyled mb-0 ftimeList">
												<li><time datetime="2019-07-15">Mon-Sat: 9:00am-7:00pm</time></li>
												<li><time datetime="2019-07-15">Sun: 9:00am-7:00pm</time></li>
											</ul>
										</li>
									</ul>
								</address>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</main>
		<!-- footer -->
		<!-- <footer id="footer" class="py-5 py-md-6">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<span class="txt d-block text-center text-md-left mb-4 mb-md-0">©2018 <a href="homepage.html">Carwash template</a> . All Rights Reserved</span>
					</div>
					<div class="col-12 col-md-6">
						
						<ul class="list-unstyled footerLink d-flex mb-0 justify-content-center justify-content-md-end flex-wrap">
							<li><a href="#">Site Map</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer> -->
		<!-- modal -->
		
		
	</div>

	
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" ></script>
    <script src="./js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="./js/index.js?ver=0.1" ></script>
</body>
</html>