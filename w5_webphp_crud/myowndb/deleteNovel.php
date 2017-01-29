<!DOCTYPE html>
<html>
<head><title>Deleting Data from my Novelists Database</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h3>Deleting records using PHP</h3>
<h4>Programmed by Oliver Rodriguez</h4><br>

<?php
//set the variables for the Database acces;
require_once('connectvars.php');

//Trim the incoming data.
$novelIN = trim($_POST['novelIN']);

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$TableName = "novelists";
$query = "DELETE FROM $TableName WHERE NOVEL='$novelIN'";

echo ("The query is: <b>$query</b> <br><br>");

if (mysqli_query($dbc, $query)) {
	echo 'The DELETE query was successful!<br/>';

} else {
	echo 'the DELETE query FAILED ' . mysqli_error($dbc);
}
mysqli_close($dbc);

?>

</body>
</html>