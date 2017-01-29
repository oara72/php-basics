<!DOCTYPE html>
<html>
<head>
<title>Drop Guitar Wars</title>
</head>
<body><?php
//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Drop from MySQL
$query = "DROP TABLE guitarwars";


if (mysqli_query($dbc, $query)) {
	echo 'The query was successfully executed !<br/>';

} else {
	echo 'the query could not be executed' . mysqli_error($dbc);
}
mysqli_close($dbc);

?>
</body>
</html>