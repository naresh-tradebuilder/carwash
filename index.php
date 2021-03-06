<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Carwash Autowash & Detailing template!</title>
	<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- include google roboto font cdn link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<?php
        if($_SERVER['HTTP_HOST'] == 'localhost:8080' || $_SERVER['HTTP_HOST'] == 'localhost')
           {
                $APIURL = 'https://prod.imkloud.com';
                 $user = "ibXA8boNwqLrDgpPt";
                $org = "wc4m4GQdDd9Hd29DA";
            } else if($_SERVER['HTTP_HOST'] == '104.197.167.156')
           {
                $APIURL = 'https://prod.imkloud.com';
                $user = "ibXA8boNwqLrDgpPt";
                $org = "wc4m4GQdDd9Hd29DA";
            } else {
                $APIURL = 'https://prod.imkloud.com';
                $user = "ibXA8boNwqLrDgpPt";
                $org = "wc4m4GQdDd9Hd29DA";
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
								<a href="index.php">
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
										<li><strong><time class=" d-none d-lg-block" datetime="2019-07-15">Mon-Sun: 9:00am-7:00pm</time></strong></li>
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
							<a href="index.php">
								<img src="images/logo2.png" alt="Auto &amp; Detailing template" class="img-fluid logoWhite">
								<img src="images/logo.png" alt="Auto &amp; Detailing template" class="img-fluid logoBlack">
							</a>
						</div>
						
						<button class="navbar-toggler toggleBar position-relative" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse navCollapse text-uppercase fwBlack" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="index.php" id="navbarDropdown">Home </a>
									
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Services &amp; Pricing</a>
									<div class="dropdown-menu border-0 rounded-0 text-capitalize" aria-labelledby="navbarDropdown">
										<ul class="list-unstyled dropMenu">
											<li><a class="dropdown-item" href="express.php">EXTERIOR WASH</a></li>
											<li><a class="dropdown-item" href="full-service.php">FULL-SERVICE WASH (IN & OUT)</a></li>
											<li><a class="dropdown-item" href="hand-wash.php">HAND WASH</a></li>
											<li><a class="dropdown-item" href="wax-service.php">WAX SERVICES</a></li>
											<li><a class="dropdown-item" href="details.php">DETAILS</a></li>
											<li><a class="dropdown-item" href="add-ons.php">ADD-ONS</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about-us.php">About<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item"><a class="nav-link" href="unlimited-wash.php">Unlimited Wash Club</a></li>
					<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Resources</a>
									<div class="dropdown-menu border-0 rounded-0 text-capitalize" aria-labelledby="navbarDropdown">
										<ul class="list-unstyled dropMenu">
											<li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
											<li><a class="dropdown-item" href="testimonial.php">testimonials</a></li>
											<li><a class="dropdown-item" href="blog.php">Blog</a></li>
										
										</ul>
									</div>
								</li>				
								<li class="nav-item">
									<a class="nav-link" href="fleet-work.php">Fleet Work Wash</a>									
								</li>
								<li class="nav-item">
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
		<main>
			<!-- bannerSec -->
			<section class="bannerSec bannerSlide">
					<div>
					<div class="bsSlide bgCover overlay position-relative d-flex align-items-center text-center" style="background-image: url('./images/banner2.png')">
						<div class="alignCenter d-flex w-100 align-items-center">
							<div class="container pt-6 pt-sm-10 pb-22 pt-md-12 pb-md-25 pt-lg-15 pb-lg-35">
								<div class="caption text-white position-relative mb">
									<h1 class="w-100 mb-9 text-white">
										<strong class="fwEbold d-block  mb-md-2 mb-xl-0">Business Membership Program</strong>
										
										<strong class="d-block font-weight-bold headingVI">A great deal for you and your employees</strong>
									</h1>
									<a href="about-us.php" class="btn btnTheme text-uppercase fwEbold py-3 px-4 py-lg-4 px-lg-6">About us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="bsSlide bgCover overlay text-center position-relative d-flex" style="background-image: url('./images/banner.png')">
						<div class="alignCenter w-100 d-flex align-items-center">
							<div class="container pt-6 pt-sm-10 pb-22 pt-md-12 pb-md-25 pt-lg-15 pb-lg-35">
								<div class="caption text-white position-relative">
									<h1 class="w-100 mb-6 mb-md-9 text-white">
										<strong class="fwEbold d-block mb-md-2 mb-xl-0">It’s time to</strong>
										<strong class="fwEbold d-block mb-3 mt-md-n4 mb-md-2">Come Clean your Car</strong>
										<strong class="fwEbold d-block font-weight-bold headingVI">Life is Dirty... Drive Clean!</strong>
									</h1>
									<a href="contact.php" class="btn btnTheme text-uppercase fwEbold py-3 px-4 py-md-4 px-md-6">Book Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="bsSlide bgCover overlay position-relative d-flex" style="background-image: url('./images/banner1.png')">
						<div class="alignCenter d-flex w-100 align-items-center">
							<div class="container pt-6 pt-sm-10 pb-22 pt-md-12 pb-md-25 pt-lg-15 pb-lg-35">
								<div class="caption text-white position-relative text-center text-xxl-left">
									<h1 class="heading w-100 mb-7 mb-md-10 text-white">
										<strong class="d-block fwEbold  mb-md-2 mb-xl-0">Keep your</strong>
										<strong class="d-block fwEbold mb-4">Car Clean Always!</strong>
										<strong class="d-block fwSemibold headingXII">Keeping Satisfied Customers Since 1998!</strong>
									</h1>
									<a href="express.php" class="btn btnTheme text-uppercase fwEbold py-3 px-4 py-lg-4 px-lg-5">Services &amp; Pricing</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</section>
			<!-- hlpSec -->
			<aside class="hlpSec mt-n16 pb-12 pb-md-16">
				<div class="container">
					<!-- helpBlockList -->
					<div class="row helpBlockList no-gutters">
						<!-- hlpBlockList -->
						<div class="col-12 d-flex flex-wrap hlpBlockList">
							<!-- hlpBlock -->
							<article class="hlpBlock col-12 col-lg-4 w-100 text-center p-7 p-lg-5 p-xl-8" data-background="primary">
								<span class="icoHolder mb-5 d-block mx-auto">
									<img src="./images/Membership.png">
								</span>
								<h2 class="headingIX mb-2 ">Business Membership</h2>
								<p>Offer all your employees a great deal in keeping up with the services related to Car Wash & Detail</p>
								<a href="contact.php" class="btn btn-light text-uppercase fwEbold py-3 mb-2">Learn More <span class="fas fa-chevron-right icn"></span></a>
							</article>
							<!-- hlpBlock -->
							<article class="hlpBlock col-12 col-lg-4 w-100 text-center p-7 p-lg-5 p-xl-8" data-background="bgTheme" id="blue-bg">
								<span class="icoHolder mb-5 d-block mx-auto">
									<img src="./images/was-club.png">
								</span>
								<h2 class="headingIX mb-2">Unlimited wash Club</h2>
								<p>Save big on your next car wash and detail services with our Unlimited wash club membership!!</p>
								<a href="contact.php" class="btn btn-light text-uppercase fwEbold py-3 mb-2">join wash club <span class="fas fa-chevron-right icn"></span></a>
							</article>
							<!-- hlpBlock -->
							<article class="hlpBlock col-12 col-lg-4 w-100 text-center p-7 p-lg-5 p-xl-8" data-background="warning" id="dark-red">
								<span class="icoHolder mb-5 d-block mx-auto">
									<img src="./images/gift-card.png">
								</span>
								<h2 class="headingIX mb-2 text-white">Shop gift Cards</h2>
								<p class="text-white">Give the gift of an unlimited car wash plan. Purchase gift cards from our online store.</p>
								<a href="contact.php" class="btn btn-light text-uppercase fwEbold py-3 mb-2">go to store <span class="fas fa-chevron-right icn"></span></a>
							</article>
						</div>
					</div>
				</div>
			</aside>
			<!-- abtSec -->
			<section class="abtSec py-12 pt-md-15 pb-md-17">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6 pr-xl-10 mb-3">
							<div class="row">
								<div class="col-12">
									<div class="imgHolder mb-4">
										<img src="./images/about23.png" alt="image description" class="img-fluid">
									</div>
								</div>
								<div class="col-12">
									<div class="d-flex flex-wrap imgBlockIIWrap">
										<div class="col-12 col-sm-6">
											<div class="imgHolder mb-4 mb-lg-0">
												<img src="./images/about1.jpg" alt="image description" class="img-fluid">
											</div>
										</div>
										<div class="col-12 col-sm-6">
											<div class="imgHolder mb-4 mb-lg-0">
												<img src="./images/about2.jpg" alt="image description" class="img-fluid">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6 ml-xl-n3">
							<div class="txtHolder pt-1 mb-6">
								<h3 class="headingVI font-weight-bold mb-3">RIVERCHASE CAR WASH & DETAIL HAS BEEN IN THE HOOVER COMMUNITY FOR 27 YEARS!</h3>
								<p><strong>Our Specialties:</strong></p>					
							</div>
							<!-- checkList -->
							<ul class="list-unstyled mb-7 checkList">
								<li class="position-relative"><span class="ico position-absolute icon-check"></span>Full service car wash (in &amp; out)</li>
								<li class="position-relative"><span class="ico position-absolute icon-check"></span> Interior Detail</li>
								<li class="position-relative"><span class="ico position-absolute icon-check"></span>Hand Wash and Wax</li>
								<li class="position-relative"><span class="ico position-absolute icon-check"></span>Headlight Restoration</li>
								<li class="position-relative"><span class="ico position-absolute icon-check"></span>Ozone and Disinfectant Services</li>
								<li class="position-relative"><span class="ico position-absolute icon-check"></span>Scratch and Windshield Repair</li>
							</ul>
							<a href="about-us.php" class="btn btn-outline-primary fwEbold text-uppercase px-6">Know more</a>
						</div>
					</div>
				</div>
			</section>
			<!-- olneBook -->
			<aside class="olneBook bgTheme py-7">
				<div class="container">
					<div class="d-md-flex align-items-center justify-content-center text-center text-md-left">
						<h3 class="h4 text-white fwSemibold mb-4 mb-md-0">Easy Online Carwash Booking System</h3>
						<a href="contact.php" class="btn btn-primary fwEbold text-uppercase py-3 py-lg-4 ml-md-4 ml-lg-6">bOOK aPPOINTMENT</a>
					</div>
				</div>
			</aside>
			<!-- wsiSec -->
			<section class="wsiSec py-10 pt-md-14 pb-md-12">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header class="header text-center ltrSpce mb-8 mb-md-11">
								<h2 class="h2 fwEbold mb-3">We Specialize In</h2>
								<p>Our goal is provides convenient and consistent car washing services.</p>
							</header>
						</div>
					</div>
					<div class="row d-block">
						<!-- SpecializedSlider -->
						<div class="SpecializedSlider">
							<div>
								<div class="col-12">
									<!-- sBlock -->
									<article class="sBlock text-center mb-1 mb-sm-4 mb-lg-8">
										<div class="imgHolder overflow-hidden rounded mb-5 overlayI w-100 position-relative mx-auto">
											<img src="./images/express.jpg" alt="image description" class="img-fluid">
											<div class="btnHolder position-absolute">
												<a href="express.php" class="btn btn-light py-2 text-uppercase font-weight-bold">view detail</a>
											</div>
										</div>
										<h3 class="headingIX mb-2"><a href="express.php">EXTERIOR WASH</a></h3>
										<p>In a hurry and need a car wash?</p>
									</article>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- sBlock -->
									<article class="sBlock text-center mb-1 mb-sm-4 mb-lg-8">
										<div class="imgHolder overflow-hidden rounded mb-5 overlayI w-100 position-relative mx-auto">
											<img src="./images/hand-wash.jpg" alt="image description" class="img-fluid">
											<div class="btnHolder position-absolute">
												<a href="hand-wash.php" class="btn btn-light py-2 text-uppercase font-weight-bold">view detail</a>
											</div>
										</div>
										<h3 class="headingIX mb-2"><a href="hand-wash.php">HAND WASH</a></h3>
										<p>Keep your car like Showroom model</p>
									</article>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- sBlock -->
									<article class="sBlock text-center mb-1 mb-sm-4 mb-lg-8">
										<div class="imgHolder overflow-hidden rounded mb-5 overlayI w-100 position-relative mx-auto">
											<img src="./images/wash.jpg" alt="image description" class="img-fluid">
											<div class="btnHolder position-absolute">
												<a href="wax-service.php" class="btn btn-light py-2 text-uppercase font-weight-bold">view detail</a>
											</div>
										</div>
										<h3 class="headingIX mb-2"><a href="wax-service.php">WAX SERVICES</a></h3>
										<p>Clean on both the inside &amp; outside.</p>
									</article>
								</div>
							</div>
							<div>
								<div class="col-12">
									<!-- sBlock -->
									<article class="sBlock text-center mb-1 mb-sm-4 mb-lg-8">
										<div class="imgHolder overflow-hidden rounded mb-5 overlayI w-100 position-relative mx-auto">
											<img src="./images/deatils.jpg" alt="image description" class="img-fluid">
											<div class="btnHolder position-absolute">
												<a href="details.php" class="btn btn-light py-2 text-uppercase font-weight-bold">view detail</a>
											</div>
										</div>
										<h3 class="headingIX mb-2"><a href="details.php">DETAILS</a></h3>
										<p>Keep your car like Showroom model</p>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- dscntclb -->
			<aside class="dscntclb bg-primary pt-6 pb-7">
				<div class="container">
					<div class="d-flex align-items-center text-white justify-content-center">
						<span class="icoHolder mr-3">
							<img src="images/ico14.svg" alt="image description" width="40" height="43">
						</span>
						<h3 class="h5 mb-0 font-weight-normal text-white fIStyle">Join our car wash club and Get <strong class="font-weight-bold">20% Discount</strong> &amp; Unlimited Wash Scheme!</h3>
					</div>
				</div>
			</aside>
			<!-- plnSec -->
			<section class="plnSec py-10 py-md-14">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header class="header text-center ltrSpce font-weight-light">
								<h3 class="h2 fwEbold mb-2">VIP UNLIMITED PASS</h3>
								<p>"Yearly Membership available" & "Additional charges may apply in case of SUV, Trucks and Crossover.</p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<!-- planList -->
							<article class="planList text-center rounded position-relative w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h4 class="headingXI text-capitalize px-3 mb-0">Unlimited 'WORKS'  <br> "In & Out" Car Wash</h4>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">80</span>											
										</div>
										<span>Per month</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
									<li>Quick Wash</li>
									<li>Hot Wax and Shine</li>
									<li>Soft cloth wipe</li>
									<li>Hand Dry</li>
									<li>Vacuum</li>
									<li>Window</li>										
									<li>Wheels Clean</li>
									<li>Rims Clean</li>
									<li>Tire Shine</li>
									<li>Dash Wipe and Clean</li>
									<li>Cup Holders Clean</li>
									<li>Dash and Door Panel Dressing</li>
									
									<li>Bugs Prep</li>				
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Register Now</a>
								</span>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<!-- planList -->
							<article class="planList text-center rounded position-relative w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h4 class="headingXI text-capitalize px-3 mb-0">Unlimited 'GOOD' <br> "In & Out" Car Wash</h4>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">50</span>
											
										</div>
										<span>Per month</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
										<li>Quick Wash</li>
									<li>Hot Wax and Shine</li>
									<li>Soft cloth wipe</li>
									<li>Hand Dry</li>
									<li>Vacuum</li>
									<li>Window</li>										
									<li>Wheels Clean</li>
									<li>Rims Clean</li>
									<li>Tire Shine</li>
									<li>Dash Wipe and Clean</li>
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Register Now</a>
								</span>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<!-- planList -->
							<article class="planList text-center position-relative rounded w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h4 class="headingXI text-capitalize px-3 mb-0">Unlimited Exterior <br>Quick Wash </h4>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">20</span>
											
										</div>
										<span>Per month</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
											<li>Quick Wash</li>
									<li>Hot Wax and Shine</li>
									<li>Soft cloth wipe</li>
									<li>Hand Dry</li>										
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Register Now</a>
								</span>
							</article>
						</div>
						
					</div>
			
				</div>
			</section>
			<!-- coseSec -->
			<section class="coseSec bgwSmoke coseSec py-8 py-md-10 pt-lg-15 pb-lg-13">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header class="header text-center ltrSpce font-weight-light mb-10 mb-lg-12">
								<h2 class="fwEbold mb-2">Why Choose Us?</h2>
								<p>Here’s Why our product beats all other competitors in market.</p>
							</header>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<!-- cBlock -->
							<article class="cBlock boxSdw d-flex bg-white py-5 py-sm-7 px-2 px-sm-5 px-lg-2 px-xl-4 rounded mb-4">
								<span class="icoHolder mr-2 mr-xl-3 mt-1">
									<img src="images/ico04.svg" alt="image description" class="img-fluid" width="56" height="55">
								</span>
								<div class="txtHolder">
									<h3 class="headingIX bdrBtm position-relative text-capitalize font-weight-normal pb-4 mb-3">Trusted Services</h3>
									<p>Leave your car with us and less than 5 hours later we’ll have your showroom model Super vehicles.</p>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<!-- cBlock -->
							<article class="cBlock boxSdw d-flex bg-white py-5 py-sm-7 px-2 px-sm-5 px-lg-2 px-xl-4 rounded mb-4">
								<span class="icoHolder mr-2 mr-xl-3 mt-1">
									<img src="images/ico05.svg" alt="image description" class="img-fluid" width="56" height="55">
								</span>
								<div class="txtHolder">
									<h3 class="headingIX bdrBtm position-relative text-capitalize font-weight-normal pb-4 mb-3">Organic Products</h3>
									<p>These services compliment your regular oil change service to ensure that your vehicle properly.</p>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<!-- cBlock -->
							<article class="cBlock boxSdw d-flex bg-white py-5 py-sm-7 px-2 px-sm-5 px-lg-2 px-xl-4 rounded mb-4">
								<span class="icoHolder mr-2 mr-xl-3 mt-1">
									<img src="images/ico06.svg" alt="image description" class="img-fluid" width="56" height="55">
								</span>
								<div class="txtHolder">
									<h3 class="headingIX bdrBtm position-relative text-capitalize font-weight-normal pb-4 mb-3">Talented Workers</h3>
									<p>We bring you the most accurate &amp; fair-price service carwash detailing service nation wide.</p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- dscntcSec -->
			<!-- <aside class="dscntcSec position-relative d-flex bgCover overlay" style="background-image: url(http://placehold.it/1920x490)">
				<div class="alignCenter w-100 d-flex align-items-center">
					<div class="container py-12 py-18 d-flex justify-content-end">
						<div class="discountOverClub text-center bg-white rounded py-6 px-4 p-sm-6 p-lg-10 pb-lg-11 position-relative">
							<h4 class="headingIV text-capitalize font-weight-bold mb-3">Special Discounts Club</h4>
							<p>Our car wash has a variety of premium quality services, that your car will love!</p>
							<a href="#" class="btn btn-primary text-uppercase px-8 py-3 fwEbold">join now</a>
						</div>
					</div>
				</div>
			</aside> -->
			<!-- cntrHolder -->
			<aside class="cntrHolder bgTheme pt-8 pt-md-10 pb-4">
				<div class="container">
					<!-- counterList -->
					<ul class="list-unstyled d-flex flex-wrap counterList text-center  text-lg-left justify-content-center mb-0">
						<li class="d-lg-flex flex-wrap justify-content-center align-items-center mb-7">
							<span class="icoHolder flex-shrink-0 d-block d-lg-flex align-items-center justify-content-center mx-auto ml-lg-0 mr-lg-3 mb-2 mb-lg-0">
								<img src="images/ico08.svg" alt="image description" class="img-fluid" width="61" height="61">
							</span>
							<div class="wrap font-weight-light text-white">
								<strong class="counter d-block font-weight-normal mb-1">8650+</strong>
								<p>Total Cars washed</p>
							</div>
						</li>
						<li class="d-lg-flex flex-wrap justify-content-center align-items-center mb-7">
							<span class="icoHolder flex-shrink-0 d-block d-lg-flex align-items-cente justify-content-centerr mx-auto ml-lg-0 mr-lg-3 mb-2 mb-lg-0">
								<img src="images/ico09.svg" alt="image description" class="img-fluid" width="61" height="61">
							</span>
							<div class="wrap font-weight-light text-white">
								<strong class="counter d-block font-weight-normal mb-1">5289+</strong>
								<p>Cars Serviced</p>
							</div>
						</li>
						<li class="d-lg-flex flex-wrap justify-content-center align-items-center mb-7">
							<span class="icoHolder flex-shrink-0 d-block d-lg-flex align-items-center justify-content-center mx-auto ml-lg-0 mr-lg-3 mb-2 mb-lg-0">
								<img src="images/ico10.svg" alt="image description" class="img-fluid" width="61" height="61">
							</span>
							<div class="wrap font-weight-light text-white">
								<strong class="counter d-block font-weight-normal mb-1">12000+</strong>
								<p>Satisfied customers</p>
							</div>
						</li>
					</ul>
				</div>
			</aside>
			<!-- customerSec -->
			<aside class="customerSec pt-10 pt-lg-12">
				<div class="container">
					<header class="header text-center ltrSpce font-weight-light mb-14">
						<h3 class="fwEbold h2 text-capitalize mb-4">customers feedback</h3>
					</header>
				</div>
				<!-- cutomerFeedback -->
				<div class="cutomerFeedback position-relative bgCover" style="background-image: url('./images/testimonials-background.jpg')">
					<div class="container">
						<div class="row">
							<!-- feedbackSlide -->
							<div class="col-12 col-lg-10 offset-lg-1 feedbackSlide">
								<div>
									<div class="col-12">
										<blockquote class="blockquote text-center px-lg-15 px-xl-28 pb-10">
											<div class="icoHolder rounded-circle d-flex justify-content-center align-items-center mx-auto mt-n8 mb-8">
												<img src="images/ico15.svg" alt="image description" width="36" height="28" class="img-fluid">
											</div>
											<q class="d-block mb-7">This is the third time I am getting my car wash done at Riverchase Car Wash & Detail. Great people, customer friendly, I will continue to use them. Great Job Guys Keep it up.</q>
											<cite class="d-block">
												<strong class="customer d-block mb-1">
													<a href="#" class="fwSemibold">Jessie P.</a>
													<em>- Customer</em>
												</strong>
											</cite>
											<span class="imgHolder mx-auto d-block">
												<img src="images/rating.png" class="img-fluid" alt="rating">
											</span>
										</blockquote>
									</div>
								</div>
								<div>
									<div class="col-12">
										<blockquote class="blockquote text-center px-lg-15 px-xl-28  pb-10">
											<div class="icoHolder rounded-circle d-flex justify-content-center align-items-center mx-auto mt-n8 mb-8">
												<img src="images/ico15.svg" alt="image description" width="36" height="28" class="img-fluid">
											</div>
											<q class="d-block mb-7">This place does much better job compare to the other place down the street. They even found $300 CASH in between my seats and BROUGHT IT TO ME! Honest staff. 10 stars!!!</q>
											<cite class="d-block">
												<strong class="customer d-block mb-1">
													<a href="#" class="fwSemibold">Kristina T. </a>
													<em>- Customer</em>
												</strong>
											</cite>
											<span class="imgHolder mx-auto d-block">
												<img src="images/rating.png" class="img-fluid" alt="rating">
											</span>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
				
			<!-- awrdSec -->
			<!-- <aside class="awrdSec py-12 pt-lg-15 pb-lg-19">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header class="header text-center font-weight-light mb-7">
								<h4 class="headingVII fwEbold mb-2 text-capitalize">Our Certification &amp; Awards</h4>
								<p>Press &amp; Recongnition</p>
							</header>
						</div>
					</div>
					<div class="row d-block">
						<div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
							
							<div class="awardSlider text-center">
								<div>
									<div class="col-12">
										
										<article class="awardBlock">
											<div class="imgHolder overflow-hidden mx-auto mb-2 align-items-center d-flex">
												<a href="#"><img src="images/img14.jpg" alt="certificate" class="img-fluid"></a>
											</div>
											<h5 class="headingXIII mb-0">
												<strong class="d-block font-weight-normal">Best of Fastest Growing</strong>
												<strong class="d-block font-weight-normal">Companies 2017</strong>
											</h5>
										</article>
									</div>
								</div>
								<div>
									<div class="col-12">
										
										<article class="awardBlock">
											<div class="imgHolder overflow-hidden mx-auto mb-2 align-items-center d-flex">
												<a href="#"><img src="images/img15.jpg" alt="certificate" class="img-fluid"></a>
											</div>
											<h5 class="headingXIII mb-0">
												<strong class="d-block font-weight-normal">Mr.Trash wheel’s hero of the</strong>
												<strong class="d-block font-weight-normal">harbor award 2016</strong>
											</h5>
										</article>
									</div>
								</div>
								<div>
									<div class="col-12">
										
										<article class="awardBlock">
											<div class="imgHolder overflow-hidden mx-auto mb-2 align-items-center d-flex">
												<a href="#"><img src="images/img16.jpg" alt="certificate" class="img-fluid"></a>
											</div>
											<h5 class="headingXIII mb-0">
												<strong class="d-block font-weight-normal">Baltimore Sun Best of the</strong>
												<strong class="d-block font-weight-normal">Baltimore 2011</strong>
											</h5>
										</article>
									</div>
								</div>
								<div>
									<div class="col-12">
										
										<article class="awardBlock">
											<div class="imgHolder overflow-hidden mx-auto mb-2 align-items-center d-flex">
												<a href="#"><img src="images/img17.jpg" alt="certificate" class="img-fluid"></a>
											</div>
											<h5 class="headingXIII mb-0">
												<strong class="d-block font-weight-normal">Mr.Trash wheel’s hero of the</strong>
												<strong class="d-block font-weight-normal">harbor award 2016</strong>
											</h5>
										</article>
									</div>
								</div>
								<div>
									<div class="col-12">
										
										<article class="awardBlock">
											<div class="imgHolder overflow-hidden mx-auto mb-2 align-items-center d-flex">
												<a href="#"><img src="images/img18.jpg" alt="certificate" class="img-fluid"></a>
											</div>
											<h5 class="headingXIII mb-0">
												<strong class="d-block font-weight-normal">Best of Baltimore Magnet</strong>
												<strong class="d-block font-weight-normal">winner 2010</strong>
											</h5>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside> -->
			<!-- rqstSrvic -->
			<section class="rqstSrvic py-14 bg-greyBlue">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-6 text-white text-center px-xl-13 mb-10 mb-md-2 txtHolder">
							<h4 class="h4 pb-4 mb-5 position-relative text-white">Request a Call back for Your Next Carwash Service</h4>
							<p>We inspire clients to make their most challenging business decisions with confidence. Send us a message, or call us</p>
							<strong class="d-block headingIV mb-9">Call: <a href="tel:2059879308">205-987-9308</a></strong>
							<a href="contact.php" class="btn btnTheme fwEbold text-uppercase py-3 py-lg-4 px-5 px-lg-6">contact us now</a>
						</div>
						<div class="col-12 col-md-6">
							<!-- requestForm -->
							<form id="locations" name="locations" class="requestForm bg-white rounded p-5 py-lg-7 px-lg-8">								<div class="alert hidden" id="location-message"></div>
								<div class="form-group">
									<label class="text-gray" for="nameFormControl">Email</label>
									<input class="form-control" type="email" name="emailId"data-validation="email" required="required">
								</div>
								<div class="form-group mb-4">
									<label class="text-gray" for="phoneFormControl">Phone Number</label>
									<input class="form-control" type="text" id="contactNumber" name="contactNumber"data-force-validation-if-hidden="true"
                                       data-validation="custom"  required="required"> 
								</div>
								<div class="form-group mb-1">
									<button type="submit" class="btn btn-primary text-uppercase fwEbold px-5">send request</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- mapHolder -->
			<aside class="mapHolder w-100">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.009681140761!2d-86.79945664480522!3d33.38047029011998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8889226c05490431%3A0x6c9f60969359efe7!2sRiverchase%20Car%20Wash%20%26%20Detail!5e0!3m2!1sen!2sin!4v1601440041353!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</aside>
			<!-- lctnSec -->
			<!-- <aside class="lctnSec py-11">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 col-xl-3 txtHolder text-center text-lg-left mb-5">
							<h5 class="h4 mb-3">See all Carwash Locations</h5>
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
								
								<div class="locationSlider">
									<div>
										<div class="col-12">
											
											<article class="wlBlock text-center rounded mb-8">
												<header class="header text-uppercase py-4">
													<h6 class="headingX mb-0">Allisonville Road</h6>
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
													<h6 class="headingX mb-0">Allisonville Road</h6>
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
													<h6 class="headingX mb-0">Allisonville Road</h6>
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
													<h6 class="headingX mb-0">Allisonville Road</h6>
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
													<h6 class="headingX mb-0">Allisonville Road</h6>
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
			</aside> -->
			<!-- footerAside -->
			<aside class="footerAside position-relative text-white bgCover" style="background-image: url('./images/footer-bg.jpg')">
				<div class="contactHolder pt-6 pb-3 py-md-6">
					<div class="container">
						<address class="mb-0">
							<!-- contList -->
							<ul class="contList list-unstyled mb-0 d-flex flex-wrap justify-content-center">
								<li class="d-flex align-items-center mb-md-0">
									<div class="ico mr-1">
										<img src="images/ico16.svg" alt="images description" width="25" height="39" class="img-fluid">
									</div>
									<ul class="list-unstyled mb-0 wrap">
										<li class="mb-lg-1">Call us now:</li>
										<li>
											<a href="tel:18001234567" class="tell">205-987-9308</a>
										</li>
									</ul>
								</li>
								<li class="d-flex align-items-center mb-md-0">
									<div class="ico mr-1">
										<img src="images/ico17.svg" alt="images description" width="25" height="36" class="img-fluid">
									</div>
									<ul class="list-unstyled mb-0">
										<li class="mb-lg-1">Riverchase Car Wash</li>
										<li>Hoover, AL 35216</li>
									</ul>
								</li>
								<li class="d-flex align-items-center mb-md-0">
									<div class="ico mr-2">
										<img src="images/ico18.svg" alt="images description" width="39" height="39" class="img-fluid">
									</div>
									<ul class="list-unstyled mb-0 ftimeList">
										<li><time datetime="2019-07-15">Mon-Sat: 9:00am-7:00pm</time></li>
										<li><time datetime="2019-07-15">Sun: 9:00am-7:00pm</time></li>
									</ul>
								</li>
							</ul>
						</address>
					</div>
				</div>
				<div class="container pt-10 pb-8 pt-lg-13 pb-lg-16">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="txtHolder w-100">
								<h6 class="h6 text-capitalize fwEbold text-white mb-4 mb-sm-5 mb-lg-6">about us</h6>
								<p>RIVERCHASE CAR WASH & DETAIL HAS BEEN IN THE HOOVER COMMUNITY FOR 27 YEARS!</p>
								<a href="about.php" class="btn btn-outline-light text-uppercase fwEbold py-lg-3">know more</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="w-100">
								<h6 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">Useful Links</h6>
								<!-- fLink -->
							<ul class="fLink list-unstyled text-capitalize">
									<li><a href="index.php">Home</a></li>
									<li><a href="express.php">Services &amp; Pricing</a></li>
									<li><a href="Unlimited Wash Club.php">Unlimited Wash Club</a></li>
									<li><a href="about-us.php">About</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="blog.php">Blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="w-100">
								<h6 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">Our Services</h6>
								<!-- fLink -->
							<ul class="fLink list-unstyled text-capitalize">
									<li><a href="express.php">EXTERIOR WASH</a></li>
									<li><a href="full-service.php">FULL-SERVICE WASH</a></li>
									<li><a href="hand-wash.php">HAND WASH</a></li>
									<li><a href="wax-service.php">WAX SERVICES</a></li>
									<li><a href="details.php">DETAILS</a></li>
									<li><a href="add-ons.php">ADD-ONS</a></li>
								</ul>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-sm-4 mb-lg-0">
							<div class="wrapHolder w-100">
								<h6 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">newsletter</h6>
								<p>Signup today for know about specials offers, coupons &amp; news.</p>
								<!-- emailForm1 -->
								<form class="emailForm1 mb-6">
									<div class="input-group">
										<input type="email" class="form-control px-4" placeholder="Email Address">
										<div class="input-group-prepend mr-0">
											<button type="submit" class="btn btnTheme rounded-right fas fa-paper-plane"></button>
										</div>
									</div>
								</form>
								<!-- socialFNetwork -->
								<ul class="socialFNetwork d-flex mb-0 pt-4 list-unstyled bdrTop justify-content-center justify-content-sm-start">
									<li><a href="https://www.facebook.com/RiverchaseCarWash/" class="fab fa-facebook-square" target="_blank"></a></li>
								<li><a href="https://twitter.com/riverchasewash?lang=en" class="fab fa-twitter-square" target="_blank"></a></li>		
								<li><a href="https://www.instagram.com/riverchasecarwash/" class="fas fa-rss-square" target="_blank"></a></li>
								</ul>
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
		<div class="modal pr-0 fade" id="exampleModal">
			<!-- appointPopup -->
			<div class="modal-dialog appointPopup" role="document">
				<div class="modal-content">
					<div class="modal-header py-3 py-sm-4 py-md-5 px-7 px-sm-12 px-md-14 text-center position-relative">
						<h5 class="modal-title headingVII text-capitalize w-100" id="exampleModalLabel">make an appointment</h5>
						<button type="button" class="close rounded-circle position-absolute m-0" data-dismiss="modal" aria-label="Close">
				        </button>
					</div>
					<!-- appointForm -->
					<form class="appointForm">
						<div class="modal-body p-0">
							<div class="formGroup px-2 py-4 p-sm-6 p-md-8 pt-lg-10 px-lg-10">
								<h3 class="headingVIII mb-1 text-capitalize">select location</h3>
								<label>Select your nearest location here</label>
								<select class="custom-select" id="contactSubject">
									<option>Bridgeport, CT1205 North Ave., Bridgeport, CT 06604 </option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<!-- vehicleWrap -->
							<div class="formGroup vehicleWrap px-2 py-4 p-sm-6 p-md-8 px-lg-10">
								<h3 class="headingVIII mb-1 text-capitalize">vehicle type</h3>
								<label>Select your vehicle type</label>
								<div class="d-sm-flex vehicleWrapCheck flex-wrap">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
										<label class="form-check-label" for="defaultCheck1">
										SUV
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
										<label class="form-check-label" for="defaultCheck2">
										Sedon
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
										<label class="form-check-label" for="defaultCheck3">
										Small SUV
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
										<label class="form-check-label" for="defaultCheck4">
										Mini Van
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
										<label class="form-check-label" for="defaultCheck5">
										Pickup Truck
										</label>
									</div>
								</div>
							</div>
							<!-- pkgWrap -->
							<div class="formGroup pkgWrap py-4 px-2 p-sm-6 pb-sm-2 pt-md-7 pb-md-4 px-lg-8 px-lg-10">
								<h3 class="headingVIII mb-1 mb-lg-2 text-capitalize">wash packages</h3>
								<label>Choose the best wash package for your vehicle</label>
								<select class="custom-select mb-6" id="contactSubject">
									<option>- Select Service Types -</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<!-- radioCheckList -->
								<ul class="list-unstyled radioCheckList mb-0">
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="popupCheck1">
											<label class="form-check-label mb-0" for="popupCheck1">
												<h4 class="headingX fwSemibold text-capitalize">
													<strong class="fwSemibold">full fivestar detail</strong>
													<strong class="font-weight-normal"> - 13.00</strong>
												</h4>
												<span class="timeLimit d-block">5 Hours</span>
												<a href="#" class="info text-capitalize">more info...</a>
											</label>
										</div>
									</li>
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="popupCheck2">
											<label class="form-check-label mb-0" for="popupCheck2">
												<h4 class="headingX fwSemibold text-capitalize">
													<strong class="fwSemibold">Interior Fivestar Detail</strong>
													<strong class="font-weight-normal"> - 25.99</strong>
												</h4>
												<span class="timeLimit d-block">5 Hours</span>
												<a href="#" class="info text-capitalize">more info...</a>
											</label>
										</div>
									</li>
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="popupCheck3">
											<label class="form-check-label mb-0" for="popupCheck3">
												<h4 class="headingX fwSemibold text-capitalize">
													<strong class="fwSemibold">Simoniz Diamond Plate Ceramic Paint Coating</strong>
													<strong class="font-weight-normal"> - 39.99</strong>
												</h4>
												<span class="timeLimit d-block">5 Hours</span>
												<a href="#" class="info text-capitalize">more info...</a>
											</label>
										</div>
									</li>
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="popupCheck4">
											<label class="form-check-label mb-0" for="popupCheck4">
												<h4 class="headingX fwSemibold text-capitalize">
													<strong class="fwSemibold">Scratch Repair</strong>
													<strong class="font-weight-normal"> - 24.00</strong>
												</h4>
												<span class="timeLimit d-block">5 Hours</span>
												<a href="#" class="info text-capitalize">more info...</a>
											</label>
										</div>
									</li>
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="popupCheck5">
											<label class="form-check-label mb-0" for="popupCheck5">
												<h4 class="headingX fwSemibold text-capitalize">
													<strong class="fwSemibold">Headlight Restoration</strong>
													<strong class="font-weight-normal"> - 18.59</strong>
												</h4>
												<span class="timeLimit d-block">5 Hours</span>
												<a href="#" class="info text-capitalize">more info...</a>
											</label>
										</div>
									</li>
								</ul>
							</div>
							<div class="formGroup appointDetail py-4 px-2 p-sm-6 pb-sm-3 px-md-8 pt-md-8 pb-md-6 pb-lg-6 px-lg-10">
								<h3 class="headingVIII text-capitalize">Appointment Details</h3>
								<label>When would you like us to come? </label>
								<div class="row formRow">
									<div class="col-12 col-md-6">
										<input class="form-control" type="date" >
									</div>
									<div class="col-12 col-md-6">
										<input class="form-control" type="time" >
									</div>
								</div>
							</div>
							<div class="formGroup appointDetail py-4 px-2 p-sm-6 p-md-8 px-lg-10">
								<h3 class="headingVIII text-capitalize">Booking Summary</h3>
								<label>See duration and price Estimate here</label>
								<div class="row summaryRow">
									<div class="col-12 col-md-6">
										<!-- smyBlock -->
										<article class="smyBlock mb-3 mb-md-0 align-items-center bg-primary d-flex p-4 p-lg-5">
											<span class="icoHolder">
												<img src="images/ico59.svg" class="img-fluid" alt="image description">
											</span>
											<div class="textWrap pr-lg-1 text-right flex-grow-1">
												<h3 class="fwSemibold headingIX text-white"> 0 Hour 0 Mins</h3>
												<h4 class="clrTheme headingXIII mb-0 text-uppercase">duration</h4>
											</div>
										</article>
									</div>
									<div class="col-12 col-md-6">
										<!-- smyBlock -->
										<article class="smyBlock mb-3 mb-md-0 align-items-center bg-primary d-flex p-4 p-lg-5 px-xl-6">
											<span class="icoHolder">
												<img src="images/ico60.svg" class="img-fluid" alt="image description">
											</span>
											<div class="textWrap text-right flex-grow-1">
												<h3 class="fwSemibold headingIX text-white"> $25.99</h3>
												<h4 class="clrTheme headingXIII mb-0 text-uppercase">total price</h4>
											</div>
										</article>
									</div>
								</div>
							</div>
							<!-- enterDetail -->
							<div class="formGroup border-0 enterDetail py-4 px-2 p-sm-6 p-md-8 px-lg-10">
								<h3 class="headingVIII text-capitalize mb-2"> Enter Your Details </h3>
								<label>This information will be used to contact you about your service.</label>
								<div class="row formRow">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="First Name">
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Last Name">
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<input class="form-control" type="tel" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<input class="form-control" type="Email" placeholder="Email Address">
										</div>
									</div>
								</div>
								<div class="row formIIRow justify-content-center">
									<div class="col-12 col-md-6 col-lg-4">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Make">
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Model">
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<div class="form-group">
											<input class="form-control" type="tel" placeholder="Year">
										</div>
									</div>
								</div>
								<textarea class="form-control" placeholder="Additional Requirements"></textarea>
							</div>
						</div>
						<div class="modal-footer text-center px-2  px-sm-6 px-md-10 px-lg-24 mt-n1 pt-0 pb-8 pb-sm-10 pb-md-13 pb-lg-17 d-block border-0">
							<p>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</p>
							<button type="submit" class="btn btnTheme text-uppercase fwEbold text-uppercase m-0">Confirm Booking</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/three-dots.svg" width="60" alt="loader"></div>
		</div>
	</div>
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" ></script>
	<!-- include bootstrap JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustome.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="./js/index.js?ver=0.1" ></script>
</body>
</html>