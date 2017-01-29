<!DOCTYPE html>
<html>
<head>
<title>Insert Novel in Table - Week 5 - by Oliver Rodriguez</title>
</head>
<body>
<?php
//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Data from insertNovel.html to insert into table
$author = 'Oliver Rodriguez';
$name = trim($_POST['name']);
$novel = trim($_POST['novel']);
$year = trim($_POST['year']);
$genre = trim($_POST['genre']);

//DATA to MySQL
$query = "INSERT into novelists values ('0', '$name', '$novel', '$year', '$genre')";

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