<?php
	require_once('authorize.php');
?>

<!DOCTYPE html>
<html> 
<head>
<title> admin </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<a href="displayGuitarwars.php">Display table</a>
<?php
require_once('appvars.php');
require_once('connectvars.php');
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Retrieve the score data from MySQL
$query = "SELECT * FROM guitarwars ORDER BY score DESC, date ASC";
$data = mysqli_query($dbc, $query);
// Loop through the array of score data, formatting it as HTML
echo '<table>';
while ($row = mysqli_fetch_array($data)) {
// Display the score data
echo '<tr class="scorerow"><td><strong>' . $row['name'] . '</strong></td>';
echo '<td>' . $row['date'] . '</td>';
echo '<td>' . $row['score'] . '</td>';

echo '<td>';

echo '<a href="removescore.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
'&amp;name=' . $row['name'] . '&amp;score=' . $row['score'] . '&amp;screenshot=' .
$row['screenshot'] . '">Remove</a>';

if ($row['approved'] == '0') {
echo ' / <a href="approvescore.php?id=' . $row['id'] . '&amp;date=' . $row['date'] .
			'&amp;name=' . $row['name'] . '&amp;score=' . $row['score'] . '&amp;screenshot=' .
			 $row['screenshot'] . '">Approve</a> ';


}
echo '</td>';
echo '</tr>';
}

echo '</table>';


?>

<a href="guitarindex.php">Guitar index</a>

</body>
</html>