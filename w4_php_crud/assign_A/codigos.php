<?php
define('DB_HOST', "localhost");
define('DB_USER', 'w0668948');
define ('DB_PASSWORD','gr5egr5e');
define ('DB_NAME', 'w0668948db');
?>

<?php
$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "CREATE TABLE Movies (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 

Title The Godfather, 
ProductionCompany Paramount Pictures, 
YearReleased 1972, 
Director Francis Ford Coppola,)";


?>

<?php 
if (mysqli_query($dbc, $query)) {
echo "The query was successfully executed !<br/>";

} else {
	echo "the query could not be executed" . mysqli_error($dbc);
}
mysqli_close($dbc);
}

?>

<?php
$title = trim($_POST)['productionCompany'];

$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "INSERT into Movies values ('$title')";

if (mysqli_query($dbc, $query)) {
	print("The query was successfully executed!<br>");
} else {
	print("The query could not be executed!<br>")
}

mysqli_close($dbc);
?>

<?php
$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT * from MOVIES";
$result = mysqli_query($dbc, $query);
print "<h2 style=\"text-align:center\">Display Movies Record </h2>";

//Fetch the results from the database
while($Row= mysqli_fetch_array($result)) {
	print"<tr>";
	print"<td>$Row[Title]</td>>"
}
mysqli_close($dbc);
print("/table");
?>
