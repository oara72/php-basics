<!DOCTYPE html>
<html>
<head>
<title>Insert Form - Week 4 - by Oliver Rodriguez</title>
</head>
<body>
<?php
$author = 'Oliver Rodriguez';
$Title = trim($_POST['Title']);
$ProductionCompany = trim($_POST['ProductionCompany']);
$YearReleased = trim($_POST['YearReleased']);
$Director = trim($_POST['Director']);

//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//DATA from MySQL
$query = "INSERT into Movies values ('0', '$Title', '$ProductionCompany', '$YearReleased', '$Director')";

print("The query is: <br>$query<br><br>");

if (mysqli_query($dbc, $query)) {
	print ("The query was successfully executed !<br/>");

} else {
	print ("the query could not be executed <br>");
}
mysqli_close($dbc);

?>
</body>
</html>