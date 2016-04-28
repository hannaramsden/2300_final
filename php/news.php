<?php
	echo "<div id = 'add_news' onclick = \"showNewsForm('news_form', 'add_news')\">Add a new post.</div>";
	echo "<div id = 'news_form'>";
		echo "<form method='post' enctype='multipart/form-data'>";
			echo "<div class='subtitle2'>Publish news</div>";
			echo "<div class='subtitle3'>Title:</div>";
			echo "<input type='text' name='title' size ='60' required/><br><br>";
			echo "<div class='subtitle3'>Body:</div>";
			echo "<textarea name = 'body' cols='60' rows='10' required></textarea><br><br>";
			echo "<input type='submit' name = 'add_news' value='Publish news'/><br><br>";
		echo "</form>";
	echo "</div>";


	if (isset($_POST['add_news'])) {
		
		$title = htmlentities($_POST["title"]);
		$body = htmlentities($_POST["body"]);
		$valid_check = true;

		if(!preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$title) || strlen($title) > 50) {
			echo "<br>Post titles can only include characters, numbers, and certain symbols and be under fifty characters.";
			$valid_check = false;
		}

		if(strlen($body)>1000) {
			echo "<br>News entries must be 1000 characters or less.";
			$valid_check = false;
		}
		
		else if ($valid_check === TRUE) {
			require_once "config.php";
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if (mysqli_connect_error($mysqli)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

				$news_query = "INSERT INTO `news` (`title`, `body`, `publish_date`) 
				VALUES ('".$title."', '".$body."', CURRENT_DATE())";

			if ($mysqli->query($news_query) === TRUE) {
				echo "<h3>New album created.</h3>";
			}
			else {
				echo "Error: ".$news_query."<br>". $mysqli->error;
			}
		}
	}
?>