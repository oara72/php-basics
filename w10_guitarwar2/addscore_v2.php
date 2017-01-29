<DOCTYPE html>
<html>
<head>
	<title>Guitar Wars - High Scores</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<h2>Guitar Wars - high Scores</h2>
	<p>Welcome, Guitar Warrior, do you have what it takes to crack the high 
	score list? If so, just <a href="addscore.php">add your own sore</a>.</p>
	<hr />
	
<?php
	//error_reporting function after the opening 
	ini_set ('display_errors', 1);
	error_reporting(E_ALL & ~ E_NOTICE); 
	
	//setthe variables for the database access
	require_once('connectvars.php');
	
	//
	$tableName = "guitarwars";
	
	//Defining constants to be used by the application
	define('GW_UPLOADPATH','/home/w0668948/public_html/web205/wk10/images/');
	define('GW_DISPLAYPATH','images/');
	define('GW_MAXFILESIZE',32768);
	
	if(isset($_POST['submit'])){
		//Grab the score data from the POST
	$name = $_POST['name'];
	$score = $_POST['score'];
	$screenshot = $_FILES['screenshot']['name'];
	$screenshot_type = $_FILES['screenshot']['type'];
	$screenshot_size = $_FILES['screenshot']['size'];
	
		if(!empty($name) && !empty($score) && !empty($screenshot)){
			//move the file to the target upload folder 
			$target = GW_UPLOADPATH. $screenshot;
		if(move_uploaded_file($_FILES['screenshot']['tmp_name'],$target)){
		
		//conect to the database 
		$dbc= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		//write the data to the database
		$query=" INSERT INTO $tableName VALUES (0, NOW(), '$name', '$score', '$screenshot', 0) ";

		mysqli_query($dbc, $query);
		
		//confirm success with the user
		echo '<p>Thanks for adding your new high score</p>';
		echo '<p><strong>Name: </strong>'.$name.'<br/>';
		echo '<strong>Score: </strong>' .$score. '<br/>';
		echo '<img src="'.GW_DISPLAYPATH. $screenshot . '" alt ="Score image"/></p>';
		echo '<p><a href="guitarindex.php">&lt;&lt; Back to high scores</a></p>';
		
		//clear the score data to clear the form
		$name ="";
		$score ="";
		$screenshot="";
		
		mysqli_close($dbc);
		}
		else{
		echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
		}
	}
	}
	?>
	<hr/>
	<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo GW_MAXFILESIZE?>"/>
		<label for="name">Name: </label>
		<input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name;?>" /><br />
		<label for="score">Score: </label>
		<input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score;?>" /><br />
		<hr/>
		<input type="file" id="screenshot" name="screenshot" />
		<hr/>
		<input type="submit" value="ADD" name="submit" />
	</form>
	
<footer>
<a href="guitarindex.php">High Scores</a>
<footer>
</body>
</html>