<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" type = "text/css" href="css/stylesheet.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<title>Cornell Robot and Social Dynamics Lab</title>
		<script src = "javascript/helper_functions.js"></script>
	</head>

	<body>
		<!-- Inspiration for single-page design from https://codeplanet.io/how-to-make-a-single-page-website/ -->
		<div id = "nav">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#news">News</a></li>
				<li><a href = "#research">Research</a></li>	
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
				<!-- <li><a href="#login">Login</a></li> -->
			</ul>
		</div>

		<div id = "home">
			<div class = "banner">
				<div class = "title">
					Cornell Robot and Social Dynamics Lab
				</div>
			</div>
			<div class = "subtitle">
				About Us
			</div>
			<!-- add content + style me please! -->
			The Robot and Social Dynamics Lab was founded to better understand the relationship between robotics and human communication. 
			For our experiments, we test the interpersonal relationships of several diverse groups across varying communicative levels. 
			We facilitate these tests through interactions with robots, hopefully increasing the chances of reducing verbal disagreement, 
			improving conflict resolution skills, and furthering our evaluation on interactional dynamics. 
			Visit our <a href = "#research">research</a> page to learn a bit more about what we're currently working on.
		</div>
		
		<hr>

		<div id = "news">
			<div class = "subtitle">
				News
			</div>
<!-- add post if admin - must be logged in -->
<!-- 			<?php
				//if (isset($_SESSION['logged_user'])) {
					//$logged_user = $_SESSION['logged_user'];
			?> -->
			<br><br>
		<?php include('php/news.php') ?>
		
		</div>
		<hr>

		<div id = "research">
			<div class = "subtitle">What We Do</div>
			

			<!-- add post if admin - must be logged in -->
<!-- 			<?php
				//if (isset($_SESSION['logged_user'])) {
					//$logged_user = $_SESSION['logged_user'];
			?> -->
			<br><br>
			<?php include ('php/research.php') ?>
		</div>

		<hr>

		<div id = "team">
			<div class = "subtitle">Meet Our Team</div>
			
			<!-- add team member if admin - must be logged in -->
<!-- 			<?php
				//if (isset($_SESSION['logged_user'])) {
					//$logged_user = $_SESSION['logged_user'];
			?> -->
			<br><br>
			<?php include ('php/team.php') ?>
		</div>

		<hr>

		<div id = "contact">
			<div class = "subtitle">Contact the Lab</div>
			<form method="post" action = "#contact" enctype="multipart/form-data">
				<h3>Your name:</h3>
				<input type="text" name="name" required/>
				<h3>Your email:</h3>
				<input type = "email" name = "email" required/>
				<h3>Your message:</h3>
				<input type = "text" name = "message" required textarea rows = "4" cols = "50"/><br><br>
				<input type="submit" name = "contact" value="Send message"/>
			</form>
					
			<?php include('php/contact.php') ?>
		</div>

		<hr>
	</body>
</html>