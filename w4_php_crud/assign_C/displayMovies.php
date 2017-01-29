<!DOCTYPE html>
<html>
<head>
<title>Display Movie Records - Week 4 - by Oliver Rodriguez</title>
</head>
<body>
<?php

//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//DATA from MySQL
$query = "SELECT * from Movies";
$result = mysqli_query($dbc, $query);

//create a table
print("<h2 style=\"text-align: center\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
print("<table border=\"1\" width=\"75%\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
print("<tr align=\"center\" valign=\"top\">");
print("<td align=\"center\" valign=\"top\"><b>TITLE</b></td>");
print("<td align=\"center\" valign=\"top\"><b>PRODUCTION COMPANY</b></td>");
print("<td align=\"center\" valign=\"top\"><b>YEAR RELEASED</b></td>");
print("<td align=\"center\" valign=\"top\"><b>DIRECTOR</b></td>");
print("</tr>");

//fetch the results from the  Database
while($Row = mysqli_fetch_array($result)){;
	print("<tr align=\"center\" valign=\"top\">");
	print("<td align=\"center\" valign=\"top\">$Row[Title]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[ProductionCompany]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[YearReleased]</td>");
	print("<td align=\"center\" valign=\"top\">$Row[Director]</td>");
	print("</tr>");
}	
mysqli_close($dbc);
print("</table>");
$currentDate = date("l F j, Y");
print("<br /><p style=\"text-align: center\"><em>Oliver Rodriguez&nbsp;&nbsp;Date: $currentDate</em></p>");

?>
</body>
</html>