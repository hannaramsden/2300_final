<?php
	require_once "config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (mysqli_connect_error($mysqli)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$first_research_query = "SELECT * FROM research WHERE id = 1";
	$first_research_result = $mysqli->query($first_research_query);

	while ($row = $first_research_result->fetch_assoc()){
		echo "<div class = 'subtitle2'>".$row['title']."</div>";
		echo "<div class = 'content'>".$row['body']."</div>";
	}

	$remaining_research_query = "SELECT * FROM research WHERE id <> 1";
	$remaining_research_result = $mysqli->query($remaining_research_query);

	echo "<div id = 'click' onclick = \"showMore('moreResearch', 'click')\">Read more about our projects.</div>";
	echo "<div id = 'moreResearch'>";
	while ($row = $remaining_research_result->fetch_assoc()){
		echo "<div class = 'subtitle2'>".$row['title']."</div>";
		echo "<div class = 'content'>".$row['body']."</div>";
	}
	echo "</div>";


	echo "<div id = 'add_research' onclick = \"showResearchForm('research_form', 'add_research')\">Add a new post.</div>";
	echo "<div id = 'research_form' >";
		echo "<form method='post' enctype='multipart/form-data' >";
			echo "<div class = 'subtitle2'>Add new post</div>"; 
			echo "<div class = 'subtitle3'>Title:</div>";
			echo "<input type='text' name='title' size='60' required/><br><br>";
			echo "<div class = 'subtitle3'>Body:</div>";
			echo "<textarea name = 'body' cols='100' rows='15' required></textarea><br><br>";
			echo "<input type='submit' name = 'add_research' value='Add post'/>";
		echo "</form>";
	echo "</div>";


	
	if (isset($_POST['add_research'])) {
		
		$title = htmlentities($_POST["title"]);
		$body = htmlentities($_POST["body"]);
		$valid_check = true;

		if(!preg_match("/^[a-zA-Z .\-0-9!?:;]*$/",$title)) {
			echo "<br>Post titles can only include characters, numbers, and certain symbols.";
			$valid_check = false;
		}

		if(strlen($body) > 2000) {
			echo "<br>Research entries must be 2000 characters or less.";
			$valid_check = false;
		}

		else if ($valid_check === TRUE) {
			require_once "config.php";
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if (mysqli_connect_error($mysqli)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

				$insert_query = "INSERT INTO `albums` (`albumID`, `albumTitle`, `albumDesc`, `albumCreated`, `albumMod`) 
				VALUES (NULL, '".$albumTitle."', '".$albumDesc."', CURRENT_DATE(), CURRENT_DATE())";

			if ($mysqli->query($insert_query) === TRUE) {
				echo "<h3>New album created.</h3>";
			}
			else {
				echo "Error: ".$insert_query."<br>". $mysqli->error;
			}
		}
	}
					//}
					
?>