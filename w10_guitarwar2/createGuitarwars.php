<!DOCTYPE>

<html>
<head>
	<title>Create Guitar Wars TABLE</title>
</head>
<Body>
	<?php
	// Set the variables for the database access:
		require_once('connectvars.php');

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	//create table 
	$TableName="guitarwars";
	$query = "CREATE  TABLE $TableName(
	id INTEGER AUTO_INCREMENT,
	date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	name VARCHAR(32),
	score INT,
	screenshot VARCHAR(64),
	approved tinyint(1) DEFAULT 0,
	PRIMARY KEY(id),
	KEY name(name)
	)";

	//check if the database was created.
		if (mysqli_query ($dbc, $query)) {
		echo "The query was successfully executed. Table Created!<br />";
		} else {
		echo "The query could not be executed!" . mysqli_error($dbc);
		} 
	//closes the MySQL link.
		mysqli_close($dbc);

	?>
</body>
</html>