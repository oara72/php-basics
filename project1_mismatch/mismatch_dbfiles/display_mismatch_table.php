<!DOCTYPE html>
<html>
<head>
  <title>mismatch_user Table DISPLAY with CSS</title>
  <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<div id="head">
<p><a href="mismatch_index.php">To Index</a></p>
</div>
<div id="content">

<h2>mismatch_user database table</h2>

<div id="mismatch">
	<?php
	require_once('connectvars.php');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "SELECT * from mismatch_user";
	$result = mysqli_query ($dbc, $query) or die("Error querying database ".mysqli_error($dbc));

// mismatch table - headings

echo "<table border='1'; align='center'; style='text-align:center;'>";
echo "<tr style='background-color:lightblue; text-align:center;'>";
echo "<th>ID</th>";
echo "<th>USER NAME</th>";
echo "<th>PASSWORD</th>";	
echo "<th>JOIN DATE</th>";
echo "<th>FIRST</th>";
echo "<th>LAST</th>";
echo "<th>GENDER</th>";
echo "<th>BIRTH DATE</th>";
echo "<th>CITY</th>";
echo "<th>STATE</th>";
echo "<th>PICTURE</th>";	
echo "</tr>";

// Fetch the results from the database.
while ($Row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
echo "<tr>";
echo "<td>$Row[user_id]</td>";
echo "<td>$Row[username]</td>";
echo "<td>$Row[password]</td>";
echo "<td>$Row[join_date]</td>";
echo "<td>$Row[first_name]</td>";
echo "<td>$Row[last_name]</td>";
echo "<td>$Row[gender]</td>";
echo "<td>$Row[birthdate]</td>";
echo "<td>$Row[city]</td>";
echo "<td>$Row[state]</td>";
echo "<td>$Row[picture]</td>";
echo "</tr>";
}
echo "</table>";

echo "</div>";

mysqli_close ($dbc);
?>
<br/>
<div id="footer">
  <address style="text-align:center;">Oliver Rodriguez  ---  DATE: <?php echo date('l F j, Y');?></address>
</div>

</div>
</body>
</html>
