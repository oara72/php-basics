<DOCTYPE html>
<html>
<head>
	<title>Guitar Wars - High Scores</title>
	<link rel="stylesheet" type="text/css" href="style_2.css"/>
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
	
	//set the variables for the database access
	require_once('connectvars.php');
	
	//Defining constants to be used by the application
	require_once('appvars.php');
	

	//conect to the database 
	//$dbc= mysqli_connect('connectvars.php');
	$dbc= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	
	
	//Retrive the score data from MySQL
	$tableName = "guitarwars";
	$query="SELECT * FROM $tableName ORDER BY score DESC, date ASC";
	$data= mysqli_query($dbc, $query);
	
	//Loop through the array of score data, formatting is as HTML
	echo '<table>';
	$i = 0;
	while ($row=mysqli_fetch_array($data)){
		//Display the score data
		if($i==0){
			echo '<tr><td colspan="2" class="topscoreheader"> Top Score:' .$row['score'].'</td></tr>';
		}
		echo '<tr><td class="scoreinfo">';
		echo '<span class="score">';
		echo '<srong>Score: </strong>'. $row['score']. '</span><br/>';
		echo '<srong>Name: </strong>'. $row['name']. '</span><br/>';
		echo '<srong>Date: </strong>'. $row['date']. '</span><br/>';
		
		if (is_file(GW_UPLOADPATH.$row['screenshot'])&& filesize(GW_UPLOADPATH.$row['screenshot'])>0){
			echo '<td><img src="'.GW_DISPLAYPATH.$row['screenshot'].'" alt="Score image"/></td></tr>';
		}
		else{
			echo '<td><img src="'.GW_DISPLAYPATH.'unverified.gif'. '"alt="Unverified score"/></td></tr>';
		}
		$i++;
	}
	echo'</table>';
	
	mysqli_close($dbc);
?>
</body>
</html>