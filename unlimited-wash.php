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
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
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
							<a href="index.php">
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
								<li class="nav-item active"><a class="nav-link" href="unlimited-wash.php">Unlimited Wash Club</a></li>
								<li class="nav-item"><a class="nav-link" href="testimonial.php">testimonials</a></li>
								<li class="nav-item">
									<a class="nav-link" href="gallery.php">Gallery</a>
									
								</li>								
								<li class="nav-item">
									<a class="nav-link" href="blog.php">Blog</a>									
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
		<!-- main -->
		<main> 
			<!-- brdCrmbHolder -->
			<nav class="brdCrmbHolder py-3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- breadcrumb -->
							<nav aria-label="breadcrumb" class="d-flex justify-content-start">
								<ol class="breadcrumb mb-0 p-0 text-capitalize">
									<li class="breadcrumb-item"><a href="homepage.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">unlimited wash club</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</nav>
			<!-- unLimitPlanSec -->
			<section class="unLimitPlanSec py-10 py-sm-12 pb-lg-15 pt-lg-15 pb-xl-20">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-10 offset-xl-1">
							<header class="header ltrSpce text-center mb-10 mb-md-12 mb-lg-14 mb-xl-15">
								<h1 class="h2 fwEbold mb-2">VIP UNLIMITED PASS </h1>
								<p>Unlimited Washes is for you!  Wash whenever you want and enjoy the ease of auto monthly billing.  Best of all, there’s no contract so you can cancel any time at least 24 hours before your monthly billing date by contacting our Customer Support Team.</p>
							</header>
						</div>
					</div>
					<div class="row justify-content-center mb-sm-3">
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<article class="planList text-center rounded position-relative w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h2 class="headingXI text-capitalize px-3 mb-0">Unlimited 'WORKS' Car Wash</h2>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">80</span>
											<!-- <sup class="font-weight-light">10%</sup> -->
										</div>
										<span>Per month (Include tax)</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
									<li>Quick Wash</li>
									<li>Hand Dry</li>
									<li>Vacuum</li>
									<li>Dash Wipe and Clean</li>
									<li>Wheels Clean</li>
									<li>Tire Shine</li>
									<li>Dash and Door Panel Dressing</li>
									<li>Cup Holders Clean</li>
									<li>Bugs Prep</li>
									<li>Triple Conditioner</li>
									<li>Hot Wax and Shine</li>
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Book now</a>
								</span>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<!-- planList -->
							<article class="planList text-center rounded position-relative w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h2 class="headingXI text-capitalize  px-3 mb-0 ">Unlimited 'GOOD' Car Wash</h2>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">50</span>
											<!-- <sup class="font-weight-light">99</sup> -->
										</div>
										<span>Per month (Include tax)</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
									<li>Vacuum</li>
									<li>windows</li>
									<li>hand dry</li>
									<li>wheels clean</li>
									<li>tire shine</li>
									<li>sealer wax</li>
									<li>hot wax & shine</li>
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Book now</a>
								</span>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 d-flex">
							<!-- planList -->
							<article class="planList text-center position-relative rounded w-100 mb-6 mb-8 mb-lg-11">
								<header>
									<h2 class="headingXI text-capitalize  px-3 mb-0 ">NEW! Unlimited 'Exterior - Wash & Go’ </h2>
									<!-- priceHolder -->
									<div class="priceHolder px-3 pt-4 pb-5">
										<div class="wrap mb-1">
											<sup class="font-weight-light">$</sup>
											<span class="price font-weight-light">20</span>
											<!-- <sup class="font-weight-light">99</sup> -->
										</div>
										<span>Per month (Include tax)</span>
									</div>
								</header>
								<!-- typeList -->
								<ul class="list-unstyled pt-8 pb-23 typeList text-secondary mb-0 px-5 text-left">
									<li>Quick Wash</li>
									<li>Hand Dry</li>									
								</ul>
								<span class="btnHolder d-block position-absolute">
									<a href="contact.php" class="btn btn-outline-primary text-uppercase fwEbold py-3">Book now</a>
								</span>
							</article>
						</div>
						
					</div>
					<div class="row">
						<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 text-center">							
							<!-- managAccountWrap -->
							<div class="managAccountWrap text-left d-flex align-items-center justify-content-center">
								<div class="alignLeft position-relative">
									<h3 class="mb-0">
										<strong class="d-block text-left">Fleet WORKS Wash Program </strong> <br>
										
									</h3>									
								</div>
								
							</div>
							<span class="d-block text-left">Here at Riverchase Car Wash & Detail, we strive to help businesses of all sizes keep their vehicles looking great. We offer discounted rates for companies and dealerships in/near the Hoover area.</span><br>
							<ul class="text-left">
								<li>We offer WORKS WASH as part of our fleet program - perfect for businesses that need to keep their vehicles looking clean and shiny longer.</li>
								<li>There is no contract to sign or long-term obligation</li>
								<li>Our Fleet Program delivers great value via bulk discounted pricing</li>
							</ul>
							<span class="busnPlanTxt d-block text-left">Contact us today by filling out the form below or e-mail at riverchasecarwash786@gmail.com</span>
						</div>
					</div>
				</div>
			</section>
			<aside class="bg-primary pt-8 pt-sm-12 pb-2 pb-sm-5">
				<div class="container">
					<div class="row hitListWrap justify-content-center">
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- hiTList -->
							<article class="hiTList text-center px-md-2 px-xl-4 overflow-hidden mb-3 mb-md-4">
								<h3 class="headingVIII text-capitalize text-white mb-2">Become Member</h3>
								<p>Purchase &amp; register plan (using any major credit card) at any participating location.</p>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- hiTList -->
							<article class="hiTList text-center px-md-2 px-xl-4 overflow-hidden mb-3 mb-md-4">
								<h3 class="headingVIII text-capitalize text-white mb-2">Easy in, Easy out</h3>
								<p>We put a small RFID tag on your windshield and scan it every time you come.</p>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- hiTList -->
							<article class="hiTList text-center px-md-2 px-xl-4 overflow-hidden mb-3 mb-md-4">
								<h3 class="headingVIII text-capitalize text-white mb-2">Auto Renewal</h3>
								<p>We’ll automatically bill the card on the same day you signed up each month until you cancel.</p>
							</article>
						</div>
					</div>
				</div>
			</aside>
			<!-- EachVisitSec -->
			<aside class="EachVisitSec pt-10 pt-lg-12 pt-xl-14 pb-4 pb-lg-0 pb-xl-6">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-10 offset-xl-1">
							<header class="header ltrSpce text-center mb-8 mb-md-10 mb-xl-12">
								<h4 class="h3 fwEbold mb-2">Each Visits Include</h4>
							</header>
						</div>
					</div>
					<div class="row customColDivisionLgIV justify-content-center text-center">
						<div class="col col-md-4 col-sm-6 col-12">
							<!-- eachWList -->
							<article class="eachWList mb-6">
								<span class="d-block icoHolder rounded-circle mx-auto mb-3 mb-sm-4 d-flex justify-content-center align-items-center">
									<img src="images/ico43.svg" alt="icon" class="img-fluid" width="67" height="59">
								</span>
								<h4 class="headingX">
									<strong class="d-block font-weight-normal">Complete Interior</strong>
									<strong class="d-block font-weight-normal">Vacuum</strong>
								</h4>
							</article>
						</div>
						<div class="col col-md-4 col-sm-6 col-12">
							<!-- eachWList -->
							<article class="eachWList mb-6">
								<span class="d-block icoHolder rounded-circle mx-auto mb-3 mb-sm-4 d-flex justify-content-center align-items-center">
									<img src="images/ico44.svg" alt="icon" class="img-fluid" width="67" height="59">
								</span>
								<h4 class="headingX">
									<strong class="d-block font-weight-normal">Bumper to Bumper</strong>
									<strong class="d-block font-weight-normal">Gentle Wash</strong>
								</h4>
							</article>
						</div>
						<div class="col col-md-4 col-sm-6 col-12">
							<!-- eachWList -->
							<article class="eachWList mb-6">
								<span class="d-block icoHolder rounded-circle mx-auto mb-3 mb-sm-4 d-flex justify-content-center align-items-center">
									<img src="images/ico45.svg" alt="icon" class="img-fluid" width="67" height="59">
								</span>
								<h4 class="headingX">
									<strong class="d-block font-weight-normal">All Windows Cleaned</strong>
									<strong class="d-block font-weight-normal">Inside and Out</strong>
								</h4>
							</article>
						</div>
						<div class="col col-md-4 col-sm-6 col-12">
							<!-- eachWList -->
							<article class="eachWList mb-6">
								<span class="d-block icoHolder rounded-circle mx-auto mb-3 mb-sm-4 d-flex justify-content-center align-items-center">
									<img src="images/ico46.svg" alt="icon" class="img-fluid" width="67" height="59">
								</span>
								<h4 class="headingX">
									<strong class="d-block font-weight-normal">Soft Towel</strong>
									<strong class="d-block font-weight-normal">Drying</strong>
								</h4>
							</article>
						</div>
						<div class="col col-md-4 col-sm-6 col-12">
							<!-- eachWList -->
							<article class="eachWList mb-6">
								<span class="d-block icoHolder rounded-circle mx-auto mb-3 mb-sm-4 d-flex justify-content-center align-items-center">
									<img src="images/ico47.svg" alt="icon" class="img-fluid" width="67" height="59">
								</span>
								<h4 class="headingX">
									<strong class="d-block font-weight-normal">Discounts on</strong>
									<strong class="d-block font-weight-normal">Additional Services</strong>
								</h4>
							</article>
						</div>
					</div>
				</div>
			</aside>
			<!-- faqSec -->
			<!-- <section class="faqSec pt-lg-6 pt-xl-11 pb-14 pb-lg-18 pb-xl-20">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header class="header ltrSpce text-center mb-6 mb-md-9 mb-xl-11">
								<h5 class="h3 fwEbold mb-2">Frequently Asked Question</h5>
							</header>
						</div>
						<div class="col-12 col-lg-10 offset-lg-1">
							
							<div class="accordion accordWrap mx-xl-10" id="accordionExample">
								
							  	<div class="card">
									<div class="card-header p-0 border-0" id="headingOne">
							      		<h5 class="mb-0">
								        	<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How do I sign up for Unlimited Wash Club?</button>
							      		</h5>
							    	</div>
							    	<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
							      		<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
									</div>
								</div>
								
								<div class="card">
							    	<div class="card-header p-0 border-0" id="headingTwo">
							      		<h5 class="mb-0">
							        		<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How do I pay for my unlimited wash club plan?</button>
							      		</h5>
							    	</div>
							    	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							    		<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
							    	</div>
								</div>
								
								<div class="card">
								    <div class="card-header p-0 border-0" id="headingThree">
								    	<h5 class="mb-0">
								        	<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How often can I wash my vehicle?</button>
								      	</h5>
								    </div>
								    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								      	<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
								    </div>
								</div>
								
								<div class="card">
							    	<div class="card-header p-0 border-0" id="headingFour">
							      		<h5 class="mb-0">
							        		<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I use my membership at any location?</button>
							      		</h5>
							    	</div>
							    	<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							    		<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
							    	</div>
								</div>
								
								<div class="card">
								    <div class="card-header p-0 border-0" id="headingFive">
								    	<h5 class="mb-0">
								        	<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Can I wash multiple vehicles under the same membership?</button>
								      	</h5>
								    </div>
								    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								      	<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
								    </div>
								</div>
								
								<div class="card">
							    	<div class="card-header p-0 border-0" id="headingSix">
							      		<h5 class="mb-0">
							        		<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">How do i discontinue my unlimited wash club plan?</button>
							      		</h5>
							    	</div>
							    	<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
							    		<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
							    	</div>
								</div>
								
								<div class="card">
								    <div class="card-header p-0 border-0" id="headingSeven">
								    	<h5 class="mb-0">
								        	<button class="btn position-relative btn-link py-3 pl-7 pr-4 px-md-11 w-100 text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What if i get a new credit card?</button>
								      	</h5>
								    </div>
								    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
								      	<div class="card-body pl-7 pr-4 px-md-11 pb-6 mt-n1 pt-0">Monocle ipsum dolor sit amet lovely Shinkansen tote bag pintxos sharp Baggu Moritz Beams Ettingersoft power lovely. We bring you the most accurate and fair-price service. carwash service nation whether contract. it is freight </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
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
									<li><a href="express.php">EXTERIOR WASH</a></li>
									<li><a href="full-service.php">FULL-SERVICE WASH</a></li>
									<li><a href="hand-wash.php">HAND WASH</a></li>
									<li><a href="wax-service.php">WAX SERVICES</a></li>
									<li><a href="details.php">DETAILS</a></li>
									<li><a href="add-ons.php">ADD-ONS</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 d-md-flex mb-8 mb-sm-4 mb-lg-0">
							<div class="w-100 pl-lg-3">
								<h5 class="h6 text-capitalize fwEbold text-white mb-4 mb-lg-6">Useful Links</h5>
								<!-- fLink -->
								<ul class="fLink list-unstyled text-capitalize">
									<li><a href="index.php">Home</a></li>
									<li><a href="express.php">Services &amp; Pricing</a></li>
									<li><a href="unlimited-wash.php">Unlimited Wash Club</a></li>
									<li><a href="about-us.php">About</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="blog.php">Blog</a></li>
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
	<!-- include jQuery library -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- include popup library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustome.js"></script>
</body>
</html>