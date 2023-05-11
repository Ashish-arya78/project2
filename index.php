<!doctype html>
<html lang="en" class="js-focus-visible">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Style -->
	<link rel="stylesheet" href="style.css">
	<link href="css/skin-default.css" rel="stylesheet">
	
	<!-- Font Awesome-5.11.2 -->
	<link href="css/fontawesome-5.11.2/css/fontawesome.min.css" rel="stylesheet">
	<link href="css/fontawesome-5.11.2/css/all.css" rel="stylesheet">
	<!-- Google Fonts Library -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- Owl Slider Css -->
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/animate.css">
	

</head>

<body>
		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-01002e6d-6ba7-47a8-bced-de0a0133e04f"></div>

			<!--Navbar-->
			<div class="navigation-wrap start-header start-style">
				<div class="container">
					<div class="row"><!--Logo-->
						<div class="col-md-3"></div>
						<div class="col-md-6 text-center"><a  class="navbar-brand" href="#" target="_blank"><img src="img/kisspng-jeep-car-sport-utility-vehicle-tire-logo-cartoon-jeep-5a715ca4ae7754.3607179715173787247146.png" alt="" style="padding-top: 20px; height: 100px; width: 100px;"></a></div>
						<div class="col-md-3 text-right"></div>
					</div>
					<div class="row text-center">
						<div class="col-lg-12">
							<header id="header-2" class="header">
								<nav class="navbar navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="menu navbar-nav nav m-right-auto sm-collapsible">
											<li class="nav-item  active">
												<a class="nav-link" href="index.php">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="about.php">About</a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link " href="pricing.php">Vehicles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact.php">Contact</a>
											</li>
										</ul>
									</div>
								</nav>
							</header>
						</div>
					</div>
				</div>
			</div>
			<!--/End Navbar-->
			
			<div class="clearfix"></div>
			
			
			<!-- Slider Section -->	
			<section class="main-slider">
				<div id="owl-main" class="owl-carousel owl-theme">
					<div class="item home-section home-full-height" style="background-image:url(img/slider/slide1.webp);">
						<div class="container slider-caption">
							<figcaption class="caption-content text-center">
								<h1 class="title">FIND YOUR PERFECT BIKE</h1>
								<div class="more-btn mt-5">
									<a href="#" data-toggle="modal" data-target="#myModal" class="btn-large btn-skin btn-animation">Book Now</a>
								</div>	
							</figcaption>
						</div>
					</div>
					<div class="item home-section home-full-height" style="background-image:url(img/slider/slide2.jpg);">
						<div class="container slider-caption">
							<figcaption class="caption-content text-center">
								<h1 class="title">FIND YOUR PERFECT CAR</h1>
								<div class="more-btn mt-5">
									<a href="#" data-toggle="modal" data-target="#myModal" class="btn-large btn-skin btn-animation">Book Now</a>
								</div>	
							</figcaption>
						</div>
					</div>
				</div>
				
				<!-- Booking Rental Form -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Booking Your Bike Rental</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
						<div class="modal-body center">
							<div class="row">
								<div class="booking-form">
									<form method="post">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<span class="form-label">Name</span>
													<input class="form-control" type="text" name="name" placeholder="Enter your name" required>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group" style="margin-bottom:15px">
													<span class="form-label">Email</span>
													<input class="form-control" type="email" name="email" placeholder="Enter your email" required>
												</div>
											</div>
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<span class="form-label">Phone</span>
											<input class="form-control" type="tel"  name="phone" placeholder="Enter your phone number" required>
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<option class="form-label" value="">Select Vehicle</option>
											<select class="form-control" name="select_vehicle" required>
												<option value=""> Select Vehicle</option>
												<option value="ktm duke 200">KTM Duke 200</option>
												<option value="hundai i20">Hundai I20</option>
												<option value="Baleno">Baleno</option>
												<option value="royal enfield classic 350">royal enfield classic 350</option>
												<option value="Activa">Activa</option>
												<option value="Apache rtr">Apache rtr</option>
												<option value="brezza">brezza</option>
												<option value="hyundai Creta">hyundai Creta</option>
												<option value="Avenger">Avenger</option>
												<option value="fascino">fascino</option>
												<option value="hornet">hornet</option>
												<option value="celerio">celerio</option>
												<option value="grand i10">grand i10</option>
												<option value="Marazzo">Marazzo</option>
												<option value="Yammaha fz">Yammaha fz</option>
												<option value="TVS jupiter">TVS jupiter</option>
												<option value="Honda shine">Honda shine</option>
												<option value="MahindraXUV300">MahindraXUV300</option>
												<option value="hyundai VERNA">hyundai VERNA</option>
												<option value="Mahindra scorpio">Mahindra scorpio</option>
												<option value="Pulser NS">Pulser NS</option>
												<option value="Yamaha MT15">Yamaha MT15</option>
												<option value="Hero I-smart">Hero I-smart</option>
										  </select>
										</div>
										
										<div class="form-group" style="margin-bottom: 15px">
											<span class="form-label">Pickup Location</span>
											<input class="form-control" type="text" name="pickup_location" placeholder="Enter ZIP/Location" required>
										</div>
										
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<span class="form-label">Pickup Date</span>
													<input class="form-control" name="pickup_date" type="date" required>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group" style="margin-bottom: 15px">
													<span class="form-label">Return Date</span>
													<input class="form-control" name="return_date" type="date" required>
												</div>
											</div>
											
										</div>
										<div class="row"style="margin-bottom: 15px">
											<div class="col-sm-12">
												 <input type="checkbox" id="insurance_vehicle" name="insurance_vehicle" value="yes">
												 <label for="insurance_vehicle">I Want Insurance [2Lac]</label>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-3">
												<label>Accept All Payment Method</label>
											</div>
											<div class="col-sm-9" id="payment-system">
												<ul>
												  <li>
													<input type="checkbox" id="myCheckbox1" name="payment_type" value="UPI" >
													<label for="myCheckbox1"><img src="img/payment-one.jpg"/>UPI Payment Accept </label>
												  </li>
												  <li>

													<input type="checkbox" id="myCheckbox2" name="payment_type" value="Debit & Credit Card" >
													<label for="myCheckbox2"><img src="img/payment-second.jpg"/> Debit & Credit Card</label>
												  </li>
												  <li>

													<input type="checkbox" id="myCheckbox3" name="payment_type" value="Net Banking" >
													<label for="myCheckbox3"><img src="img/payment-third.png" /> Net Banking</label>
												  </li>
												</ul>
											</div>
										</div>
										
										<div class="more-btn mt-5" style="text-align:center">
											<button type="submit" id="bookingform" name="bookingform" class="booking-button  btn-large btn-skin">Book Now</button>
										</div>
									</form>
									<?php
									if(isset($_POST['bookingform'])) {
										//print_r($_POST);
										$name = $_POST['name'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];
										$select_vehicle = $_POST['select_vehicle'];
										$pickup_location = $_POST['pickup_location'];
										$pickup_date = $_POST['pickup_date'];
										$return_date = $_POST['return_date'];
										$insurance_vehicle = $_POST['insurance_vehicle'];
										$payment_type = $_POST['payment_type'];
										
										include('database-connection.php');
										

										$sql = "INSERT INTO vehicle_booking (name, email, phone, select_vehicle, pickup_location, pickup_date, return_date, insurance_vehicle, payment_type)
											VALUES ('$name', '$email', '$phone', '$select_vehicle', '$pickup_location', '$pickup_date', '$return_date', '$insurance_vehicle', '$payment_type')";

									$insert_user_result = $conn->query($sql);
										if ($insert_user_result) {
											//send email
											require 'send.php';
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Features-->
			<div class="features-section">
				<div class="container">
					<div class="row features">
						<div class="col-md-4 p-0 feature">
							<div class="feature-inner">
								<div class="feature-icon">
									<i class="fa fa-map-marker-alt"></i>
								</div>
								<h4>Fast Secure Payments</h4>
							</div>
						</div>
						<div class="col-md-4 p-0 feature">
							<div class="feature-inner">
								<div class="feature-icon">
									<i class="fa fa-user"></i>
								</div>
								<h4>Verified Dealers</h4>
							</div>
						</div>
						<div class="col-md-4 p-0 feature">
							<div class="feature-inner">
								<div class="feature-icon">
									<i class="fa fa-motorcycle"></i>
								</div>
								<h4>No Riding Limits</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!-- /Slider Section -->	
			
		<div class="clearfix"></div>
			
		<!-- Service Section -->	
		<section id="section" class="service theme-light">	
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<h1 class="section-title">Why We?</h1>
							<p class="section-subtitle">We simplified bike rentals, so you can focus on what's important to you.</p>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div><img class="img-fluid mb-3" src="img/services/1.webp" alt="..." style=" display: block;margin-left: auto;  margin-right: auto; width: 30%;" /></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#">Safe Rides</a></h4></div>
								<div class="inner-content"><p>Your safety is our priority. From sanitizing all bikes before every use, to extensive on-ground safety measures, your rides with ONN will always be safe and reliable. We also offer helmets on-demand.</p>
							
								</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div><img class="img-fluid mb-3" src="img/services/2.svg" alt="..." style=" display: block;margin-left: auto;  margin-right: auto; width: 30%;" /></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#">Flexible Ownership</a></h4></div>
								<div class="inner-content"><p>Enjoy the freedom of owning a two-wheeler without the hefty down-payments, EMIs and paperwork. Now choose from rent-to-own, monthly/quarterly bookings, and even daily plans.</p>
								
								</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div><img class="img-fluid mb-3" src="img/services/3.png" alt="..." style=" display: block;margin-left: auto;  margin-right: auto; width: 30%;" /></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#">Stations</a></h4></div>
								<div class="inner-content"><p>our local Station is here to make ensure your two-wheeler experience is flawless. At your neighborhood station, you get to pick any bike, get maintenance, sanitized, and a lot more. you can choose any bike, make instant payments.</p>
								
								</div>
						</article>
					</div>
					
				</div>
			</div>
		</section>	
	<!-- End of Service Section -->	
		<div class="clearfix"></div>

	<!-- vehicle section -->	
	<section id="section" class=" theme-light-grey">	
		<div class="container">
			<div class="row">
			
				<div class="col-lg-12 text-center">
					<div class="section-header">
						
						<h1 class="section-title">Some Vehicle</h1>
						<div class="divider-main"></div>
					</div>
				</div>
				
			</div>
			
			<div class="row">
				<div id="owl-portfolio" class="owl-carousel owl-theme col-lg-12">
					<div class="item">
						<article class="post shadow">
							<figure class="pricing-box">
								<div class="pricing-thumbnail">
									<img src="img/vehicle/r15.webp" alt="sample83" style="height: 280px;"/>
									
								</div>
								<figcaption style="text-align: center; padding-top: 50px; padding-bottom: 30px;">
									<h5 class="inner-title"><a href="#">Yamaha R15</a></h5>
									 <p class="card-text mb-0"><h6>1079rs/daily(24hrs)</h6><h6>4449rs/weekly(mon-fri)</h6><h6>16199rs/monthly(30days)</h6></p>
								</figcaption>
								
							</figure>	
						</article>
					</div>
					<div class="item">
						<article class="post shadow">
							<figure class="pricing-box">
								<div class="pricing-thumbnail">
									<img src="img/vehicle/swift.png" alt="sample57" style="height: 280px;" />
									
								</div>
								<figcaption style="text-align: center; padding-top: 50px; padding-bottom: 30px;">
									<h5 class="inner-title"><a href="#">swift</a></h5>
									 <p class="card-text mb-0"><h6>1079rs/daily(24hrs)</h6><h6>4449rs/weekly(mon-fri)</h6><h6>16199rs/monthly(30days)</h6></p>
								</figcaption>
							</figure>	
						</article>
					</div>
					<div class="item">
						<article class="post shadow">
							<figure class="pricing-box">
								<div class="pricing-thumbnail">
									<img src="img/vehicle/ktm.jpg" alt="sample38" style="height: 280px;" />
									
								</div>
								<figcaption style="text-align: center; padding-top: 50px; padding-bottom: 30px;">									
									<h5 class="inner-title"><a href="#">KTM RC200</a></h5>
									 <p class="card-text mb-0"><h6>1079rs/daily(24hrs)</h6><h6>4449rs/weekly(mon-fri)</h6><h6>16199rs/monthly(30days)</h6></p>
								</figcaption>
							</figure>
						</article>
					</div>
					<div class="item">
						<article class="post shadow">
							<figure class="pricing-box">
								<div class="pricing-thumbnail">
									<img src="img/vehicle/baleno.png" alt="sample38" style="height: 280px;"/>
									
								</div>
								<figcaption style="text-align: center; padding-top: 50px; padding-bottom: 30px;">
									<h5 class="inner-title"><a href="#">Baleno</a></h5>
									 <p class="card-text mb-0"><h6>1079rs/daily(24hrs)</h6><h6>4449rs/weekly(mon-fri)</h6><h6>16199rs/monthly(30days)</h6></p>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
		     	 <div class="more-btn mt-5">
					<a href="pricing.php"  class="btn-large btn-skin btn-animation">view more</a>
				</div>	
			</div>		
		</div>
	</section>	
	<!-- End of vehicle Section -->	
		<div class="clearfix"></div>

			<!-- Funfact Section ---->
			<div class="funfact-wraper">
				<section id="section" class="funfact">
					<div class="container" Style="position: relative;">
						<div class="row ">
							<div class="col-lg-3 col-md-3 col-sm-6">	
								<div class="funfact-inner text-center">
									<i class="fa fa-smile funfact-icon"></i>
									<h3 class="funfact-title">7935</h3>
									<p class="description">Happy Customer</p>
									
								</div>  
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">		
								<div class="funfact-inner text-center">
									<i class="fas fa-car funfact-icon"></i>						
									<h3 class="funfact-title">100</h3>
									<p class="description">Vehicles</p>
								</div>  
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6">			
								<div class="funfact-inner text-center">
									<i class="fas fa-calendar-alt funfact-icon"></i>
									<h3 class="funfact-title">50</h3>
									<p class="description">Reservation Anytime</p>
								</div>  
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">		
								<div class="funfact-inner text-center">
									<i class="fas fa-truck funfact-icon"></i>
									<h3 class="funfact-title">450</h3>
									<p class="description">Working Days</p>
								</div>  
							</div>
						</div>	 
					</div>
				</section>
			</div>
			<!-- /End of Funfact Section ---->	
			<div class="clearfix"></div>

			<!-- Shop Section -->
			<section id="section" class="shop theme-light-grey">	
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 text-center">
							<div class="section-header">
								<p class="section-subtitle">Shop</p>
								<h1 class="section-title">Accessories</h1>
								<h6 style="color: gray;">You Can Also Purchase These Items</h6>
								<div class="divider-main"></div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div id="owl-product" class="owl-carousel owl-theme col-lg-12">
							<div class="item">
								<article class="post shadow">
								<div class="product">
									<figure class="product-thumbnail">
										<a href="#"><img src="img/shop/jacket.png" alt="img" style="height: 290px;"></a>
										<span class="add-to-cart"><a href="#" class="btn-large btn-skin btn-animation">Add To Cart</a></span>
									</figure>
									<div class="card-body text-center">
										<div class="inner-header"><h4 class="inner-title mt-4"><a href="#">Biker jacket</a></h4></div>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="inner-content"><p>1500rs</p></div>
										
									</div>
								</div>
								</article>
							</div>
							<div class="item">
								<article class="post shadow">
									<div class="product">
										<figure class="product-thumbnail">
											<a href="#"><img src="img/shop/gloves.png" alt="img" style="height: 290px;"></a>
											<span class="add-to-cart"><a href="#" class="btn-large btn-skin btn-animation">Sold</a></span>
										</figure>
										<div class="card-body text-center"> 
											<div class="inner-header"><h4 class="inner-title mt-4"><a href="#">Biker Gloves</a></h4></div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="inner-content"><p>1000rs</p></div>
										</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="post shadow">
									<div class="product">
										<figure class="product-thumbnail">
											<a href="#"><img src="img/shop/knee-elbow guard.png" alt="img" style="height: 290px;"></a>
											<span class="add-to-cart"><a href="#" class="btn-large btn-skin btn-animation">Add To Cart</a></span>
										</figure>
										<div class="card-body text-center"> 
											<div class="inner-header"><h4 class="inner-title mt-4"><a href="#">knee-elbow guard</a></h4></div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="inner-content"><p>1300rs</p></div>
										</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="post shadow">
									<div class="product">
										<figure class="product-thumbnail">
											<a href="#"><img src="img/shop/boots.png" alt="img" style="height: 290px;"></a>
											<span class="add-to-cart"><a href="#" class="btn-large btn-skin btn-animation">Add To Cart</a></span>
										</figure>
										<div class="card-body text-center"> 
											<div class="inner-header"><h4 class="inner-title mt-4"><a href="#">Biker boots</a></h4></div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="inner-content"><p>1600rs</p></div>
										</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="post shadow">
									<div class="product">
										<figure class="product-thumbnail">
											<a href="#"><img src="img/shop/shopping.png" alt="img" style="height: 290px;"></a>
											<span class="add-to-cart"><a href="#" class="btn-large btn-skin btn-animation">Add To Cart</a></span>
										</figure>
										<div class="card-body text-center"> 
											<div class="inner-header"><h4 class="inner-title mt-4"><a href="#">Biker halmet</a></h4></div>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="inner-content"><p>1900rs</p></div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>	
			
			<!-- End of Shop Section -->	
			<div class="clearfix"></div>

			<!-- Testimonial Section -->
			<div class="testimonial-wraper">
				<section id="section" class="testimonial">	
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="section-header">
									<h1 class="section-title">What our Client Say?</h1>
									<div class="divider-main"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div id="owl-testimonial" class="owl-carousel owl-theme col-lg-12">
								<div class="item">
									<article class="post">
										<figure>
											<img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="img/client/c1.jpg" />
										</figure>

										<div>
											<p>
												It has been an awesome experience for me when I got to roam places.Before I started the journey I wasn't sure I would get chance to visit and all beautiful places....yeah they truly are..... Coz i wasn't acquainted there and I wasn't having the confidence to even think of visiting these many places.It was so affordable and friendly that no one can even imagine unless gives a shot to RenTrip. Once again I recommend to all my dear bike lovers to go for this bike rental service.
											</p>
											<h6>
												Senior Teacher, Bhopal
											</h6>
											<h1>
												Jeetu Dongre
											</h1>								

										</div>
									</article>
								</div>
								<div class="item">
									<article class="post">
										<figure>
											<img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="img/client/c2.jpg" />
										</figure>

										<div>
											<p>
												Road trips would not have been exciting if there were no Rentrip bike rental company. One of the leading motorbike rental service providers in India, Rentrip offers a diversified range of two-wheelers for short and long rides on an hourly and daily basis. You can rent bikes for road trips from Delhi to Manali, Bangalore to Goa, Mumbai to Pune, Mumbai to Goa, Delhi to Udaipur, Delhi to Rishikesh, Udaipur to Jaisalmer and likes.
											</p>
											<h6>
												TripAdvisor
											</h6>								
											<h1>
												Mandy Varshaney
											</h1>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</section>	
			</div>
			<!-- End of Blog Section -->	
			
			<div class="clearfix"></div>
			
			<!-- Client Section -->
			
			<section id="section" class="client theme-light-grey">	
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 text-center">
							<div class="section-header">
								<p class="section-subtitle">Client</p>
								<h1 class="section-title">Our Client</h1>
								<div class="divider-main"></div>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div id="owl-client" class="owl-carousel owl-theme col-lg-12">
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										
										<a href="#"><img src="img/sponser/Suzuki-logo1.png" alt="img"></a>
										
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										
										<a href="#"><img src="img/sponser/tata1.png" alt="img"></a>
										
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										
										<a href="#"><img src="img/sponser/toyota1.jpg" alt="img"></a>
										
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										
										<a href="#"><img src="img/sponser/Hyundai-1.png" alt="img"></a>
										
									</figure>
								</article>
							</div>
							<div class="item">
								<article class="post card border-0 shadow rounded-xs">
									<figure class="product-thumbnail">
										
										<a href="#"><img src="img/sponser/ktm.png" alt="img"></a>
										
									</figure>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>	
			
			<!-- End of Shop Section -->	
			
			<!-- Footer Copyrights -->
			<footer class="footer-copyrights">
				<div class="container">	
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="site-info">
							<p>Copyright © GPCK GROUP 2022. Created By <a href="#"><b>Hanif-Ashish-Sakshi-Bhawesh</b></a></p>
						</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer Copyrights -->
					
			<div class="clearfix"></div>
			
			<!-- Scroll To Top -->
			<a href="#" class="page-scroll-up" style="display: inline;"><i class="fas fa-arrow-up"></i></a>
			<!-- /Scroll To Top -->
			
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			
			<script src="js/main.js"></script>
			<script src="js/owl.carousel.min.js"></script>
						
	</body>
</html>