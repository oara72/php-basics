<DOCTYPE html>
<html>
<head>
	<title>Guitar Wars - High Scores</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<h2>Guitar Wars - Add Your High Score</h2>
	
	
<?php
	require_once('connectvars.php');
	if(isset($_POST['submit'])){
		$TableName="guitarwars";
		//Grab the score data from the POST
		$name = $_POST['name'];
		$score = $_POST['score'];
		$screenshot ="";
	
	
	if (!empty($name) && !empty($score)){
		//connect to the database
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		//Write the data to the database
		$query ="INSERT INTO $TableName VALUES (0, NOW(), '$name', '$score', '$screenshot')"; 
		 mysqli_query($dbc, $query);
		 
		 //Confirm success with the user 
		 echo '<p>Thanks for adding your new high score!</p>';
		 echo '<p><strong>Name: </strong></p>'.$name. '<br/>';
		 echo '<p><strong>Score: </strong></p>'.$score. '</p>';
		 echo '<p><a href="guitarindex.php">&lt;&lt; Back to high scores</a></p>';
		 
		 //Clear the score data to clear the form 
		 $name = "";
		 $score ="";
		mysqli_close($dbc); 
	}
	else{
		echo '<p class= "error">Please enter all of the information to add '. 
		'your high score.</p>';
		}
	}	
?>

<hr />
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<label for="name">Name: </label>
		<input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name;?>" /><br />
		<label for="score">Score: </label>
		<input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score;?>" /><br />
		<hr/>
	
		<input type="submit" value="ADD" name="submit" />
	</form>
</body>
</html>