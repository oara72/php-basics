<!DOCTYPE html>
<html>
<head>
<title>Insert Form - Week 4 - by Oliver Rodriguez</title>
</head>
<body><?php
//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//DATA from MySQL
$query = "CREATE TABLE aliens_abduction (
first_name varchar(30),
last_name varchar(30),
when_it_happened varchar(30),
how_long varchar(30),
how_many varchar(30),
alien_description varchar(100),
what_they_did varchar(100),
fang_spotted varchar(10),
other varchar(100),
email varchar(50)
)";


if (mysqli_query($dbc, $query)) {
	echo 'The query was successfully executed !<br/>';

} else {
	echo 'the query could not be executed' . mysqli_error($dbc);
}
mysqli_close($dbc);

?>
</body>
</html>