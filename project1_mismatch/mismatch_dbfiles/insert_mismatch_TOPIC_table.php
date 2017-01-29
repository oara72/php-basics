<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>INSERT mismatch_topic TABLE</title>
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$query = "INSERT INTO mismatch_topic VALUES (1, 'Tattoos', 1)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (2, 'Gold chains', 1)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (3, 'Body piercings', 1)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (4, 'Cowboy boots', 1)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (5, 'Long hair', 1)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (6, 'Reality TV', 2)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (7, 'Professional wrestling', 2)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (8, 'Horror movies', 2)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (9, 'Easy listening music', 2)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (10, 'The opera', 2)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (11, 'Sushi', 3)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (12, 'Spam', 3)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (13, 'Spicy food', 3)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (14, 'Peanut butter & banana sandwiches', 3)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (15, 'Martinis', 3)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (16, 'Conan Obrien', 4)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (17, 'Lady Gaga', 4)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (18, 'Tiger Woods', 4)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (19, 'Britney Spears', 4)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (20, 'Johnny Depp', 4)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (21, 'Yoga', 5)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (22, 'Weightlifting', 5)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (23, 'Cube puzzles', 5)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (24, 'Karaoke', 5)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_topic VALUES (25, 'Hiking', 5)";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

mysqli_close($dbc);
?>
</body>
</html>