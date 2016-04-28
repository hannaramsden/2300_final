<?php
	require_once "config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (mysqli_connect_error($mysqli)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$profiles_query = "SELECT * FROM team_profiles";
	$profiles_result = $mysqli->query($profiles_query);

	while ($row = $profiles_result->fetch_assoc()){
		echo "<div class='subtitle2'>".$row['name']."</div>";
		echo "<img src = ".$row['image_path']." alt = 'profile'/><br><br>";
		echo "<div class='subtitle3'><a href = 'mailto:".$row['email']."?Subject=Robotics%20Lab%20Contact' target = '_top'>Send email</a></div>";
		echo "<div class='subtitle3'>".$row['location']." ";
		echo "| ".$row['phone']."</div>";
		echo "<div class='content'>".$row['profile']."</div>";
	}


	echo "<div id = 'add_member' onclick = \"showTeamForm('team_form', 'add_member')\">Add a New Profile</div><br><br>";
	echo "<div id = 'team_form'>";
		echo "<form method='post' enctype='multipart/form-data'>";
			echo "<div class='subtitle2'>Add a New Profile</div>"; 
			echo "<div class='subtitle3'>Select Image:</div>";
			echo "<input type='file' name='image' required/><br><br>";
			echo "<div class='subtitle3'>Name:</div>";
			echo "<input type='text' name='name' required/><br><br>";
			echo "<div class='subtitle3'>Email:</div>";
			echo "<input type = 'email' name = 'email' required/><br><br>";
			echo "<div class='subtitle3'>Profile:</div>";
			echo "<textarea name = 'profile' rows='6' cols='100' required></textarea><br><br>";
			echo "<div class='subtitle3'>Office location (optional):</div>";
			echo "<input type = 'text' name = 'location'/><br><br>";
			echo "<div class='subtitle3'>Phone number (optional):</div>";
			echo "<input type = 'text' name = 'phone'/><br><br>";
			echo "<input type='submit' name = 'add_profile' value='Add Profile'/>";
		echo "</form>";
	echo "</div><br><br>";

					
	if (isset($_POST['add_profile'])) {
		
		$name = htmlentities($_POST["name"]);
		$profile = htmlentities($_POST["profile"]);
		$email = htmlentities($_POST["email"]);
		$location = htmlentities($_POST["location"]);
		$phone = htmlentities($_POST["phone"]);
		$image = $_FILES['image'];
		$valid_input = true;

		if(!preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$name) || !preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$location)
			|| strlen($name) > 50 || strlen($location) > 50) {
			echo "<br>Member names and office locations can only include characters, numbers, and certain symbols and be under fifty characters each.";
			$valid_input = false;
		}

		if (strlen($profile) > 1000) {
			echo "<br>Member profiles must be less than 1000 characters.";
			$valid_input = false;
		}

		if (!preg_match("/^[0-9-]*$/", $phone) || strlen($phone)>10) {
			echo "<br>Phone numbers may only include digits and be ten charactes long.";
			$valid_input = false;
		}

		else if ($valid_input === TRUE) {
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
					

?>