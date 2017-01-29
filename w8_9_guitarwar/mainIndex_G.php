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
	/*error_reporting function after the opening 
	ini_set ('display_errors', 1);
	error_reporting(E_ALL & ~ E_NOTICE); */
	
	//setthe variables for the database access
	require_once('connectvars.php');
	
	//
	$tableName = "guitarwars";
	
	//Defining constants to be used by the application
	require_once('appvars.php');
	
	if(isset($_POST['submit'])){
		//Grab the score data from the POST
	$name = $_POST['name'];
	$score = $_POST['score'];
	$screenshot = $_FILES['screenshot']['name'];
	$screenshot_type = $_FILES['screenshot']['type'];
	$screenshot_size = $_FILES['screenshot']['size'];
	
		if(!empty($name) && !empty($score) && !empty($screenshot)){
			if ((($screenshot_type == 'image/gif')|| ($screenshot_type == 'image/jpeg')||($screenshot_type == 'image/pjpeg')||($screenshot_type == 'image/png'))&& ($screenshot_size > 0) && ($screenshot_size <= GW_MAXFILESIZE)){
			if ($_FILES['screenshot']['error']==0){
			//move the file to the target upload folder 
			$target = GW_UPLOADPATH. $screenshot;
		if(move_uploaded_file($_FILES['screenshot']['tmp_name'],$target)){
		
		//conect to the database 
		$dbc= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		//write the data to the database
		$query="INSERT INTO $tableName VALUES (0, now(),'$name', '$score', '$screenshot')";
		mysqli_query($dbc, $query);
		
		//confirm success with the user
		echo '<p>Thanks for adding your new high score</p>';
		echo '<p><strong>Name: </strong>'.$name.'<br/>';
		echo '<strong>Score: </strong>' .$score. '<br/>';
		echo '<img src="'.GW_DISPLAYPATH. $screenshot . '" alt ="Score image"/></p>';
		
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
	else{
		echo '<p class="error"> The screen shot must be a GIF, JPEG, or PNG image file no greater than'. (GW_MAXFILESIZE/1024).'KB in size</p>';
	}
	@unlink($_FILES['screenshot']['tmp_name']);
	}
	else{
	echo '<p class="error"> Please enter all information to add your high score.</p>';
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
	
	

</body>
</html>