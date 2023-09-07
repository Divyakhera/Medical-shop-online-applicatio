<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/release/v5.7.2/css/all.css" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="swiper.min.css">
	<link rel="stylesheet" type="text/css" href="about1.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="logo">
			</div>
			</div>
			<div class="col-md-4 col-12 text-center">
				<h2 class="my-md-3 site-title text-white">Online Medical Store</h2>
			</div>
			<div class="col-md-4 col-12 text-right">
				<p class="my-md-4 header-links">
					<a class="px-0 text-white"><?php
						session_start();
						$name = $_SESSION['NAME'];
						echo "$name";
					?></a>
					<a href="logout1.php" class="px-1"><i class="fa fa-sign-out"></i></a>
				</p>
			</div>
		</div>
	</div>
	
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
		<div class="collapse navbar-collapse text-center" id="collapsenavbar">
		<ul class="navbar-nav" id="nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link text-white">About</a>
			</li>
			<li class="nav-item">
				<a href="category.php" class="nav-link text-white">Categories</a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link text-white">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="feedback.php" class="nav-link text-white">Feedback</a>
			</li>
			
		</ul>
		<ul class="navbar-nav ml-auto" id="nav">
			<li class="nav-item">
				<a href="cart.php" class="nav-link text-white">
					<h5 class="px-0 cart">
					<i class="fa fa-cart-plus"></i> Cart
					<?php

					if(isset($_SESSION['cart'])){
						$count = count($_SESSION['cart']);
						echo "<span id=\"cart_count\"class=\"text-warning bg-light\">$count</span>";
					}else{
						echo "<span id=\"cart_count\"class=\"text-warning bg-light\">0</span>";
					}
					?>
				</h5></a>
			</li>
		</ul>
</div>
</div>
</nav>
</header>


<div class="banner">
	<h1>We make healthcare<br>Understandable, Accessible and Affordable.</h1>
	</div>
	<div class="container">
	<h1>ABOUT US</h1>
	<br>
	<p><strong>Online Medical Store.com It is a Online Pharmacy, ayurvedic store,Health Store - Its a one stop shop that offers effective Medical products, healthcare solutions to all those individuals who are health enthusiasts. Providing over 20,000 health &nbsp;and ayurvedic herbal medicines online at the lowest guaranteed price - with the highest pharmaceutical standards.&nbsp;</strong></p>
<p><strong>We offer premium and the&nbsp;largest range&nbsp;of original&nbsp;health and fitness products&nbsp;across various categories and leading brands. We dedicate this portal to all those people who are keen to&nbsp;purchase healthcare products online.</strong></p>
<p><strong>The aim is to supply cheaper products to everybody who has access to the internet and deliver those products to their door. Through harnessing the power of the internet and supplying you directly, this website will save up to 75% off the cost of many well known products found in your local Medical Shop.</strong></p>
<p><strong>We aim at covering various healthcare categories comprehensively which include &ndash;Diabetes,Nutrition,Sports and fitness,Body Building, Beauty care and Personel Care Produts,Mother and Baby Care&nbsp;and <a class="crosslink" href="file:///C:/Users/himan/Desktop/My%20Project/care.php" target="_self" alt="Wide range of health devices online" title="Wide range of health devices online">Health Devices</a>. We enjoy comprehensive understanding of the shopper&rsquo;s needs and make our best efforts to cater them with an extensive choice of both Indian and globalbrands</strong></p>
<p><strong>Offering a superior buying experience, we endow our esteemed customers with the&nbsp;best prices in market.&nbsp;we strive to achieve the highest level of customer satisfaction. Equipped with a well-informed team, using state of the art E-commerce platform, and prompt customer support system, we aim to offer our customers with unparalleled services.</strong></p>
<p><strong>We proudly manage our own warehousing operations that facilitate&nbsp;us&nbsp;to meet the daily orders of our customers and attain fastest shipping. We believe in adding new selections for our customers and making things easier to compare, find and discover varied products via our services.</strong></p>
<p><strong>online medical store offers a variety of key services includingayurvedic herbal &nbsp;pharmacy and over-the-counter medicines, vitamins and <a class="crosslink" href="file:///C:/Users/himan/Desktop/My%20Project/vit.php" target="_self" alt="Wide range of health supplements online" title="Wide range of health supplements online">health supplements</a>, family planning , ayurvedic herbal beauty cosmetic products, &nbsp;ayurvedic herbal medicine ,toiletries, electrical&nbsp;items and baby care products.</strong><br><br><strong>The service is supervised by fully qualified pharmacists who are available to discuss symptoms and issues about medical problems in a confidential environment through email and oversee all medicinal purchases.</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>So, make a move and Happy Shopping !!!!</strong></p>
</div>

<section class="ourteam">
	<div class="container text-center">
		<h1>Our Amazing Team</h1>

		<div class="row teamsetting">
			<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="kp sir.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>K P Sir</h4>
						<p class="figure-caption">Project Supervisor</p>
					</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="himu3.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>Himanshu(Sanu)</h4>
						<p class="figure-caption">Project Admin</p>
					</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="durgesh sir.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>Durgesh Sir</h4>
						<p class="figure-caption">Teacher</p>
					</figcaption>
				</figure>
			</div>

		</div>
	
	
</section>
<div class="footer-wrapper">
		<div class="container-fluid">
			<div class="footer-social-icons">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
				</ul>
			</div>

			<div class="footer-mid-part">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-one">
							<div class="footer-heading"><h2>Contact Us</h2></div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
							<div class="footer-contact-text">
								<p>Address: Room No.3 Navpurush Chhatrawas Ravindrapuri, Ghazipur</p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
							<div class="footer-contact-text">
								<p><a href="tel: +91 7238981464">+91 7238981464</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
							<div class="footer-contact-text">
								<p><a href="fax: +91 7238981464">+91 7238981464</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
							<div class="footer-contact-text">
								<p><a href="mailto: himanshubaranwak01@gmail.com">himanshubaranwal01@gmail.com</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
							<div class="footer-contact-text">
								<p><a href="http://Online_Medical_Store.com">http://Online_Medical_Store.com</a></p>
							</div>
							<div class="clr"></div>
						</div>
						</div>
					
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-two">
							<div class="footer-heading"><h2>Quick Links</h2></div>
							<div class="footer-link">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="category.php">Categories</a></li>
									
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="feedback.php">Feedback</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-two">
							<div class="footer-heading"><h2>Sources</h2></div>
							<div class="footer-link">
								<ul>
									<li><a href="#">Netmeds</a></li>
									<li><a href="#">Medlife</a></li>
									<li><a href="#">MedlinePlus</a></li>
									<li><a href="#">Mayo Clinic</a></li>
									<li><a href="#">WebMd</a></li>
									<li><a href="#">E-Patients</a></li>
								</ul>
						</div>
					</div>
				</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-three">
							<div class="footer-heading"><h2>Get in touch</h2></div>
							<div class="footer-form">
								<form method="post" action="#">
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Name">
									</div>
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Email">
									</div>
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Phone No.">
									</div>
									<div class="footer-form-box">
										<input type="submit" class="footer-form-submit-style" value="SUBMIT">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<p>
								Copyright © 2020 Online Medical Store All Rights Reserved
							</p>
						</div>
					</div>
				</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>