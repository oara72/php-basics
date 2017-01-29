<!DOCTYPE html>
<html>
<head><title>UPDATE Movie Database</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h3>UPDATING DIRECTOR NAME in the Movies database</h3>
<h4>Programmed by Oliver Rodriguez</h4><br>

<?php
//set the variables for the Database acces;
require_once('connectvars.php');

//Trim the incoming data.
$nameIN = trim($_POST['nameIN']);
$novelIN = trim($_POST['novelIN']);

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "UPDATE novelists SET name = '$nameIN' WHERE novel = '$novelIN'";

print ("The query is: <b>$query</b> <br><br>");

if (mysqli_query($dbc, $query)) {
	echo 'The UPDATE query was successfully executed !<br/>';

} else {
	echo 'the UPDATE query FAILED ' . mysqli_error($dbc);
}
mysqli_close($dbc);

?>

</body>
</html>