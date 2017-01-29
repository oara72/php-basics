<DOCTYPE html>
<html>
<head>
	<title>Guitar Wars - High Scores</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<h2>Guitar Wars - high Scores</h2>
	<p>Welcome, Guitar Warrior, do you have what it takes to crack the high 
	score list? If so, just <a href="addscore_v2.php">add your own sore</a>.</p>
	<hr />
	
<?php
	require_once('connectvars.php');
	//conect to the database 
	$dbc= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	//Retrive the score data from MySQL
	$query="SELECT * FROM guitarwars WHERE approved = 1 ORDER BY score DESC, date ASC";
	$data= mysqli_query($dbc, $query);
	
	//Loop through the array of score data, formatting is as HTML
	echo '<table>';
	while ($row=mysqli_fetch_array($data)){
		//Display the score data
		echo '<tr><td class="scoreinfo">';
		echo '<span class="score">';
		echo '<srong>Score: </strong>'. $row['score']. '</span><br/>';
		echo '<srong>Name: </strong>'. $row['name']. '</span><br/>';
		echo '<srong>Date: </strong>'. $row['date']. '</span><br/>';
	}
	echo'</table>';
	
	mysqli_close($dbc);
?>
</body>
</html>