<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>INSERT mismatch_user TABLE</title>
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$query = "INSERT INTO mismatch_user VALUES (1, 'sidneyk', SHA('sidneyk'), '2008-06-03 14:51:46', 'Sidney', 'Kelsow', 'F', '1984-07-19', 'Tempe', 'AZ', 'sidneypic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (2, 'nevilj', SHA('nevilj'), '2008-06-03 14:52:09', 'Nevil', 'Johansson', 'M', '1973-05-13', 'Reno', 'NV', 'nevilpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (3, 'alexc', SHA('alexc'), '2008-06-03 14:53:05', 'Alex', 'Cooper', 'M', '1974-09-13', 'Boise', 'ID', 'alexpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (4, 'sdaniels', SHA('sdaniels'), '2008-06-03 14:58:40', 'Susannah', 'Daniels', 'F', '1977-02-23', 'Pasadena', 'CA', 'susannahpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (5, 'ethelh', SHA('ethelh'), '2008-06-03 15:00:37', 'Ethel', 'Heckel', 'F', '1943-03-27', 'Wichita', 'KS', 'ethelpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (6, 'oklugman', SHA('oklugman'), '2008-06-03 15:00:48', 'Oscar', 'Klugman', 'M', '1968-06-04', 'Providence', 'RI', 'oscarpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (7, 'belitac', SHA('belitac'), '2008-06-03 15:01:08', 'Belita', 'Chevy', 'F', '1975-07-08', 'El Paso', 'TX', 'belitapic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (8, 'jasonf', SHA('jasonf'), '2008-06-03 15:01:19', 'Jason', 'Filmington', 'M', '1969-09-24', 'Hollywood', 'CA', 'jasonpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (9, 'dierdre', SHA('dierdre'), '2008-06-03 15:01:51', 'Dierdre', 'Pennington', 'F', '1970-04-26', 'Cambridge', 'MA', 'dierdrepic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (10, 'baldpaul', SHA('baldpaul'), '2008-06-03 15:02:02', 'Paul', 'Hillsman', 'M', '1964-12-18', 'Charleston', 'SC', 'paulpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (11, 'jnettles', SHA('jnettles'), '2008-06-03 15:02:13', 'Johan', 'Nettles', 'M', '1981-11-03', 'Athens', 'GA', 'johanpic.jpg')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO mismatch_user VALUES (12, 'rubyr', SHA('rubyr'), '2008-06-03 15:02:24', 'Ruby', 'Reasons', 'F', '1972-09-18', 'Conundrum', 'AZ', 'rubypic.jpg')";
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