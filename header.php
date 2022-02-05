<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Minex Apartments</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>


	<?php
	///////////  style index/others
		if (basename($_SERVER['PHP_SELF']) == 'index.php')  {
			echo'<body>
			 <!-- Header -->
				<header id="header" class="alt">
					<div class="logo"><a href="index.php">Minex Apartmetns<span></span></a></div>
					<a href="#menu">Menu</a>
				</header>
			';
		} else {
			echo'	<body class="subpage">
			 <!-- Header -->
				 <header id="header">
					 <div class="logo"><a href="index.php"><span>Minex Apartments</span></a></div>
					 <a href="#menu">Menu</a>
				 </header>
			';
		}
	?>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<!-- <li><a href="generic.html">Generic</a></li> -->
					<!-- <li><a href="elements.html">Elements</a></li> -->
					<!-- <li><a href="index.html">Apartments</a></li> -->
					<!-- <li><a href="location.php">Locations</a></li> -->
					<!-- <li><a href="food.php">Food and Beverages</a></li> -->
					<li><a href="facilities.php">Facilities</a></li>
					<!-- <li><a href="apartments.php">How to find us</a></li> -->
					<li><a href="prices.php">Prices</a></li>
					<li><a href="location.php">How to find us</a></li>
					<li>
						<!-- Break -->
						<!-- <div class="12u$">
							<div class="select-wrapper">
								<select name="category" id="category">
									<a><option value="">- Category -</option></a>
									<option value="1">Manufacturing</option>
									<option value="1">Shipping</option>
									<option value="1">Administration</option>
									<option value="1">Human Resources</option>
								</select>
							</div>
						</div> -->
					</li>
				</ul>
			</nav>
