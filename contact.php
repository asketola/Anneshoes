<!doctype html>
<!--
	Learn HTML & CSS from Scratch
	4.2: Final Code
-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<script src="https://raw.github.com/Wilto/iOS-Orientationchange-Fix/master/ios-orientationchange-fix.js"></script>
		<meta name="keywords" content="shoes, sandels, slippers, clogs, heels, sneakers, foot, wear, footwear, socks, leather, canvas, suede, laces, warehouse, wholesale">
		<meta name="description" content="Your stop for the best deals on todays sharpest footwear!">
		<title>Anne's Shoes - Bargin Footwear Wholesales - Contact</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/device_styles.css">
		<script src="js/modernizr.custom.min.js"></script>
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/ie.css" />
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<script src="js/placeholders.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<!--/////////// Social Bar //////////-->
		<div id="social">
			<a class="fbook" href="#" target="_blank" title="facebook">Facebook</a>
			<a class="twitt" href="#" target="_blank" title="twitter">Twitter</a>
			<a class="gplus" href="#" target="_blank" title="google plus">Google Plus</a>
		</div>
		<!--/////////// Ends Social Bar //////////-->

		<!--/////////// Header //////////-->
		<header>

			<!--/////////// Logo Panel //////////-->
			<div id="logo" class="shadow">
				<div class="wrapper">
					<hgroup>
						<h1>Anne's</h1>
						<h2>Shoes</h2>
					</hgroup>
				</div><!-- .wrapper -->
			</div>
			<!--/////////// Ends Logo Panel //////////-->

			<!--/////////// Nav Bar //////////-->
			<div id="nav_bar">
				<div class="wrapper">
					<nav>
						<a href="index.html">About</a><a href="sale.html">On Sale</a><a href="catalog.html">Catalog</a><a href="pricing.html">Pricing</a><a class="selected" href="contact.php">Contact</a>
					</nav>
				</div><!-- .wrapper -->
			</div>
			<!--/////////// Ends Nav Bar //////////-->

		</header>
		<!--/////////// Ends Header //////////-->

		<div id="wood" class="clearfix"><!-- start wood texture -->

			<div class="wrapper">

				<!--/////////// Map //////////-->
				<section class="col1_right shadow">
					<!-- google maps - iframe code start -->
					<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hoboken,+NJ&amp;aq=0&amp;oq=hoboken&amp;sll=40.676472,-73.979187&amp;sspn=0.867566,1.638336&amp;ie=UTF8&amp;hq=&amp;hnear=Hoboken,+Hudson,+New+Jersey&amp;t=p&amp;ll=40.744006,-74.032402&amp;spn=0.02276,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Hoboken,+NJ&amp;aq=0&amp;oq=hoboken&amp;sll=40.676472,-73.979187&amp;sspn=0.867566,1.638336&amp;ie=UTF8&amp;hq=&amp;hnear=Hoboken,+Hudson,+New+Jersey&amp;t=p&amp;ll=40.744006,-74.032402&amp;spn=0.02276,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					<!-- ends google maps - iframe code -->
				</section>
				<!--/////////// End Map //////////-->

				<!--/////////// Contact Form //////////-->
				<section class="col2_left contact_form shadow">
					<form method="post" action="mailer.php">
						<input type="text" name="name" placeholder="your name" required>
						<input type="email" name="email" placeholder="your email" required>
						<input type="tel" name="phone" placeholder="your phone (optional)">
						<textarea rows="10" name="message" placeholder=" your message"></textarea>
						<input type="text" name="verify" class="verif_box" placeholder="verify you're human" required> 
						<img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
						<input type="submit" value="send">
					</form>
				</section>
				<!--/////////// Ends Contact Form //////////-->

			</div><!-- .wrapper -->

		</div><!-- #wood -->

		<!--/////////// Details //////////-->
		<section id="details" class="clearfix">

			<div class="wrapper">

				<div class="col1_left border_right">
					<h3>Contact</h3>
					<p>email: <a href="mailto:info@Anneshoes.com">info@Anneshoes.com</a><br>
					phone: +1 504 555 5555</p>
					<h3>Correspondence</h3>
					<address>Anne's Shoes<br>
					P.O. Box 5555<br>
					Seattle, WA 91555, USA</address>
				</div>

				<div class="col1_mid border_right">
					<h3>Links</h3>
					<p><a href="#" target="_blank">Shoe Repair & Restoration</a><br>
					<a href="#" target="_blank">Fashion Editors Assoc.</a><br>
					<a href="#" target="_blank">NYC Deals</a><br>
					<a href="#" target="_blank">M-Train Shoe Stories</a><br>
					<a href="#" target="_blank">Leather Factory Shoe Conditioners</a><br>
					<a href="#" target="_blank">Diesel Payment Gateway</a><br>
					<a href="#" target="_blank">Consumer Affairs</a><br>
					<a href="#" target="_blank">Spearhead Artist Mgmt.</a></p>
				</div>

				<div class="col1_right">
					<h3>Follow</h3>
					<p><a href="#" target="_blank">Youtube</a><br>
					<a href="#" target="_blank">Facebook</a><br>
					<a href="#" target="_blank">Twitter</a><br>
					<a href="#" target="_blank">Flickr</a><br>
					<a href="#" target="_blank">Foursquare</a><br>
					<a href="#" target="_blank">Google Plus</a></p>
				</div>

			</div><!-- .wrapper -->

		</section>
		<!--/////////// End Details //////////-->

		<!--/////////// Footer //////////-->
		<footer>
			&copy; Anne's class project for HTML5 and CSS in a month - 2013 Professor Jonathan Grover. All Rights Reserved. | Design by <a href="http://edu.jonathangrover.com" target="_blank">edu.jonathangrover.com</a>
		</footer>
		<!--/////////// End Footer //////////-->

	</body>
</html><!-- code examples copyright Jonathan Grover 2012 -->