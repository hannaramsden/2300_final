<?php
	if (isset($_POST['contact']))  {
		$name = htmlentities($_POST["name"]);
		$email = htmlentities($_POST["email"]);
		$message = htmlentities($_POST["message"]);

		$validFields = true;

		if(!preg_match("/^[a-zA-Z .\-]*$/",$name) || strlen($name) > 50) {
			echo "<br>Please only enter numerical characters for name field under fifty characters.";
			$validFields = false;
		}

		if(strlen($message) > 1000) {
			echo "<br>Please limit message body to 1000 characters.";
			$validFields = false;
		}

		else if ($validFields === TRUE) {
			require_once "config.php";
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if (mysqli_connect_error($mysqli)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$insert_query = "INSERT INTO `messages` (`name`, `email`, `message`) 
			VALUES ('" . $name . "', '" . $email . "', '" . $message . "')";

				if ($mysqli->query($insert_query) === TRUE) {
				echo "<h3>Your message has been received.</h3>";
			}
			else {
				echo "Error: ".$insert_query."<br>". $mysqli->error;
			}
		}
	}
?>