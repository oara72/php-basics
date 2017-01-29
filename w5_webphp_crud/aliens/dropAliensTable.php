<!DOCTYPE html>
<html>
<head>
<title>Drop Alien Table - Week 5 - by Oliver Rodriguez</title>
</head>
<body><?php
//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Drop from MySQL
$query = "DROP TABLE aliens_abduction";


if (mysqli_query($dbc, $query)) {
	echo 'The query was successfully executed !<br/>';

} else {
	echo 'the query could not be executed' . mysqli_error($dbc);
}
mysqli_close($dbc);

?>
</body>
</html>