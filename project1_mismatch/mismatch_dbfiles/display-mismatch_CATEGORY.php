<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>DISPLAY mismatch_topic Table</title>
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT * from mismatch_category";
$result = mysqli_query ($dbc, $query);

// Create a table.
print ("<h2 style=\"text-align: center\">Mismatch CATEGORY Table Data</h2>");
print ("<table border=\"1\" width=\"75%\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
print ("<tr align=\"center\" valign=\"top\">");
print ("<td align=\"center\" valign=\"top\"><b>Category ID *</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Category Name</b></td>");
print ("</tr>");

// Fetch the results from the database.
while ($Row = mysqli_fetch_array($result)) {
 	print ("<tr align=\"center\" valign=\"top\">");
 	print ("<td align=\"center\" valign=\"top\">$Row[category_id]</td>");
	print ("<td align=\"center\" valign=\"top\">$Row[name]</td>");
 	print ("</tr>");
}
mysqli_close($dbc);

print ("</table>");
$currentDate = date("l F j,Y");
print ("<br /><p style=\"text-align: center\"><em>Oliver Rodriguez &nbsp;&nbsp;Date: $currentDate </em></p>");
?>
</body>
</html>
