<!DOCTYPE html>
<html>
<head>
<title>Display Novel Records - Week 5 - by Oliver Rodriguez</title>
</head>
<body>
<?php

//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//DATA from MySQL
$query = "SELECT * from novelists";
$result = mysqli_query($dbc, $query);

//create a table
print("<h2 style=\"text-align: center\">Great Titles Records </h2>");
print("<table border=\"1\" width=\"75%\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
print("<tr align=\"center\" valign=\"top\">");
print("<td align=\"center\" valign=\"top\"><b>AUTHOR</b></td>");
print("<td align=\"center\" valign=\"top\"><b>NOVEL</b></td>");
print("<td align=\"center\" valign=\"top\"><b>YEAR</b></td>");
print("<td align=\"center\" valign=\"top\"><b>GENRE</b></td>");
print("</tr>");

//fetch the results from the  Database
while($Row = mysqli_fetch_array($result)){;
	print("<tr align=\"center\" valign=\"top\">");
	print("<td align=\"center\" valign=\"top\">$Row[name]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[novel]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[year]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[genre]</td>");
	print("</tr>");
}	
mysqli_close($dbc);
print("</table>");
$currentDate = date("l F j, Y");
print("<br /><p style=\"text-align: center\"><em>Oliver Rodriguez&nbsp;&nbsp;Date: $currentDate</em></p>");

?>
</body>
</html>