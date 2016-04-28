<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" type = "text/css" href="css/stylesheet.css">
		<title>Cornell Organizational Robotics Lab</title>
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
			<!-- add content + style me please! -->
			The Robot and Social Dynamics Lab was founded to better understand the relationship between robotics and human communication. 
			For our experiments, we test the interpersonal relationships of several diverse groups across varying communicative levels. 
			We facilitate these tests through interactions with robots, hopefully increasing the chances of reducing verbal disagreement, 
			improving conflict resolution skills, and furthering our evaluation on interactional dynamics. 
			Visit our <a href = "#research">research</a> page to learn a bit more about what we're currently working on.
		</div>
		<hr>
		<div id = "news">
			News content here.
		</div>
		<hr>
		<div id = "research">
			<h1>What we do</h1>
			<?php
				require_once "config.php";
				$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				if (mysqli_connect_error($mysqli)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$first_research_query = "SELECT * FROM research WHERE id = 1";
				$first_research_result = $mysqli->query($first_research_query);

				while ($row = $first_research_result->fetch_assoc()){
					echo "<h2>".$row['title']."</h2>";
					echo "<h4>".$row['body']."</h4>";
				}

				$remaining_research_query = "SELECT * FROM research WHERE id <> 1";
				$remaining_research_result = $mysqli->query($remaining_research_query);

				echo "<div id = 'click' onclick = 'showMore('moreResearch', 'click')'>Read more about our projects.</div>";
				echo "<div id = 'moreResearch'>";
				while ($row = $remaining_research_result->fetch_assoc()){
					echo "<h2>".$row['title']."</h2>";
					echo "<h4>".$row['body']."</h4>";
				}
				echo "</div>";
			?>

			<!-- add post if admin - must be logged in -->
<!-- 			<?php
				//if (isset($_SESSION['logged_user'])) {
					//$logged_user = $_SESSION['logged_user'];
			?> -->
			<br><br>
				<div id = "add_post" onclick = "showNewsForm('news_form', 'add_post')">Add a new post.</div>
				<div id = "news_form">
					<form method="post" enctype="multipart/form-data">
						<h2>Add new post</h2> 
						<h3>Title:</h3>
						<input type="text" name="title" required/>
						<h3>Body:</h3>
						<input type = "text" name = "body" required/><br><br>
						<input type="submit" name = "add" value="Add post"/>
					</form>

					<?php
						if (isset($_POST['add'])) {
							
							$title = htmlentities($_POST["title"]);
							$body = htmlentities($_POST["body"]);

							if(!preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$title) || !preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$body)) {
								echo "<br>Post titles and bodies can only include characters, numbers, and certain symbols.";
							}

							// else {
							// 	require_once "config.php";
							// 	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

							// 	if (mysqli_connect_error($mysqli)) {
							// 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
							// 	}

				 		// 		$insert_query = "INSERT INTO `albums` (`albumID`, `albumTitle`, `albumDesc`, `albumCreated`, `albumMod`) 
				 		// 		VALUES (NULL, '".$albumTitle."', '".$albumDesc."', CURRENT_DATE(), CURRENT_DATE())";

							// 	if ($mysqli->query($insert_query) === TRUE) {
							// 		echo "<h3>New album created.</h3>";
							// 	}
							// 	else {
							// 		echo "Error: ".$insert_query."<br>". $mysqli->error;
							// 	}
							// }
						}
					//}
				?>
			</div>
		</div>
		<hr>
		<div id = "team">
			<h1>Meet our team</h1>
			<?php
				require_once "config.php";
				$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				if (mysqli_connect_error($mysqli)) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$profiles_query = "SELECT * FROM team_profiles";
				$profiles_result = $mysqli->query($profiles_query);

				while ($row = $profiles_result->fetch_assoc()){
					echo "<h2>".$row['name']."</h2>";
					echo "<img src = ".$row['image_path']." alt = 'profile'/><br>";
					echo "<h3><a href = 'mailto:".$row['email']."?Subject=Robotics%20Lab%20Contact' target = '_top'>Send email</a></h3>";
					echo "<h3>".$row['location']."</h3>";
					echo "<h3>".$row['phone']."</h3>";
					echo "<h4>".$row['profile']."</h4>";
				}

			?>
			<!-- add team member if admin - must be logged in -->
<!-- 			<?php
				//if (isset($_SESSION['logged_user'])) {
					//$logged_user = $_SESSION['logged_user'];
			?> -->
			<br><br>
				<div id = "add_member" onclick = "showTeamForm('team_form', 'add_member')">Add a new profile.</div>
				<div id = "team_form">
					<form method="post" enctype="multipart/form-data">
						<h2>Add a new profile</h2> 
						<h3>Select Image:</h3>
						<input type="file" name="image" required/><br>
						<h3>Name:</h3>
						<input type="text" name="name" required/>
						<h3>Profile:</h3>
						<input type = "text" name = "profile" required/>
						<h3>Email:</h3>
						<input type = "email" name = "email" required/>
						<h3>Office location (optional):</h3>
						<input type = "text" name = "location"/><br><br>
						<input type="submit" name = "add_profile" value="Add profile"/>
					</form>

					<?php
						if (isset($_POST['add_profile'])) {
							
							$name = htmlentities($_POST["name"]);
							$profile = htmlentities($_POST["profile"]);
							$email = htmlentities($_POST["email"]);
							$location = htmlentities($_POST["location"]);
							$image = $_FILES['image'];

							if(!preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$title) || !preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$profile)
								|| !preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$location)) {
								echo "<br>Member names, profiles, and office locations can only include characters, numbers, and certain symbols.";
							}

							else {
								require_once "config.php";
								$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

								if (mysqli_connect_error($mysqli)) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$orig_name = $image['name'];
								$temp_name = $image['tmp_name'];
								move_uploaded_file($temp_name, "images/".$orig_name);
								$imagePath = "images/".$orig_name;

				 				$insert_query = "INSERT INTO `team_profiles` (`name`, `profile`, `email`, `phone`, `location`, `date_added`, `image_path`) 
				 				VALUES (" .$name.", ".$profile.", ".$email.", ".$phone.", ".$location.", CURRENT_DATE(), ". $imagePath.")";

								if ($mysqli->query($insert_query) === TRUE) {
									echo "<h3>New entry created.</h3>";
								}
								else {
									echo "Error: ".$insert_query."<br>". $mysqli->error;
								}
							}
						}
					//}
				?>
		</div>
		<hr>
		<div id = "contact">
			<h2>Contact the lab</h2>
			<form method="post" action = "#contact" enctype="multipart/form-data">
				<h3>Your name:</h3>
				<input type="text" name="name" required/>
				<h3>Your email:</h3>
				<input type = "email" name = "email" required/>
				<h3>Your message:</h3>
				<input type = "text" name = "message" required textarea rows = "4" cols = "50"/><br><br>
				<input type="submit" name = "contact" value="Send message"/>
			</form>
					
			<?php
				if (isset($_POST['contact']))  {
					$name = htmlentities($_POST["name"]);
					$email = htmlentities($_POST["email"]);
					$message = htmlentities($_POST["message"]);

					$validFields = true;

					if(!preg_match("/^[a-zA-Z .\-]*$/",$name)) {
						echo "<br>Please only enter numerical characters for name field.";
						$validFields = false;
					}
					// add all dis into DB!!!!!!

					// else if ($validFields === TRUE)) {
					// 	require_once "config.php";
					// 	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

					// 	if (mysqli_connect_error($mysqli)) {
					// 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
					// 	}

					// 	$insert_query = "INSERT INTO `messages` (`name`, `email`, `message`) 
					// 	VALUES ('" . $name . "', '" . $email . "', '" . $message . "')";

		 		// 		if ($mysqli->query($insert_query) === TRUE) {
					// 		echo "<h3>Your message has been received.</h3>";
					// 	}
					// 	else {
					// 		echo "Error: ".$insert_query."<br>". $mysqli->error;
					// 	}
					// }
				}
			?>
		</div>
		<hr>
	</body>
</html>