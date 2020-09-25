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
								<li class="nav-item active">
									<a class="nav-link" href="fleet-work.php">Fleet Work Wash</a>									
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.php">CONTACT</a>						</li>
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
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Fleet WORKS Wash Program</a></li>									
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</nav>
			<!-- serviceDetail -->
			<section class="serviceDetail py-10 py-sm-12 py-md-14 pt-lg-16 pb-lg-16 pb-xl-20">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
							<header class="header text-center ltrSpce font-weight-light mb-4 px-lg-5 px-xl-10">
								<h1 class="headingI text-capitalize mb-3 fwEbold">Fleet WORKS Wash Program</h1>
								
							</header>
						</div>
						<div class="col-12">
							<!-- imgWRoundWrap -->
							<div class="imgWRoundWrap mb-12 mb-md-18 mt-md-n2">
								<span class="icoRound rounded-circle mx-auto d-flex align-items-center justify-content-center overflow-hidden position-relative">
									<span class="icon-ico37 ico"></span>
								</span>
								<hr class="bdrIcnLine m-0">
							</div>
						</div>
						<div class="col-6">
							<div class="txtHolder text-center px-lg-3 px-xl-10 text-sm-left mb-7 mb-md-10 mb-lg-12 mb-xl-15">
								<p>Here at Riverchase Car Wash & Detail, we strive to help businesses of all sizes keep their vehicles looking great. We offer discounted rates for companies and dealerships in/near the Hoover area.</p>
								<ul>
									<li>
										We offer WORKS WASH as part of our fleet program - perfect for businesses that need to keep their vehicles looking clean and shiny longer.
									</li>
									<li>
										There is no contract to sign or long-term obligation
									</li>
									<li>
										Our Fleet Program delivers great value via bulk discounted pricing
									</li>
								</ul>
								<p>Contact us today by filling out the form below or e-mail at riverchasecarwash786@gmail.com</p>
								
							</div>
						</div>
						<div class="col-6">
							<div class="txtHolder text-center px-lg-3 px-xl-10 text-sm-left mb-7 mb-md-10 mb-lg-12 mb-xl-15">
								<form id="locations" name="locations" class="contactForm">
          						<div class="alert hidden" id="location-message"></div>
								<div class="formRoW d-flex flex-Wrap">
									<div class="formCol form-group">
										<label class="text-capitalize" for="contactName">your Name</label>
										<input class="form-control" type="text" name="firstName"  data-validation="required,custom" data-validation-regexp="^[a-zA-z ]{1,}$" required="required">
									</div>

									<div class="formCol form-group">
										<label class="text-capitalize" for="contactPhone">phone number</label>
										<input class="form-control" type="text" id="contactNumber" name="contactNumber"data-force-validation-if-hidden="true"
                                       data-validation="custom"  required="required"> 
									</div>
								</div>
								<div class="form-group">
									<label class="text-capitalize" for="contactEmailAddress">email address</label>
									<input class="form-control" type="email" name="emailId"data-validation="email" required="required">
								</div>
									<div class="form-group">
										<label class="text-capitalize" for="company">Company</label>
										<input class="form-control" type="text" name="company"  required="required">
									</div>
								<div class="form-group">
									<label class="text-capitalize" for="contactSubject">subject</label>
									<select class="custom-select" data-validation="required" required="required" name="Calltime">
										<option>Number of Vehicles</option>
										<option>5 to 10</option>
										<option>11 to 25</option>
										<option>26 to 50</option>
										<option>51+</option>
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
						</div>
					</div>
				</div>
			</section>
			<!-- dscntclb -->
			<aside class="dscntclb bgTheme pt-6 pb-7">
				<div class="container">
					<div class="d-flex align-items-center text-white justify-content-center">
						<span class="icoHolder mr-3">
							<img src="images/ico27.svg" alt="image description" width="40" height="43">
						</span>
						<h3 class="h5 mb-0 text-white font-weight-normal fIStyle">Join our car wash club and Get <strong class="font-weight-bold">20% Discount</strong> &amp; Unlimited Wash Scheme!</h3>
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
	</div>

	
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="./js/index.js?ver=0.1" ></script>
    <script src="js/jqueryCustome.js"></script>
</body>
</html>