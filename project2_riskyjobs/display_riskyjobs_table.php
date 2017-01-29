<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>DISPLAY riskyjobs Table</title>
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT * from riskyjobs";
$result = mysqli_query ($dbc, $query);

// Create a table.
print ("<h2 style=\"text-align: center\">RISKY JOBS - Table Data</h2>");
print ("<table border=\"1\" width=\"75%\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
print ("<tr align=\"center\" valign=\"top\">");
print ("<td align=\"center\" valign=\"top\"><b>Job ID</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Title</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Descr - too large</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>City</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>State</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Zip</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Company</b></td>");
print ("<td align=\"center\" valign=\"top\"><b>Date Posted</b></td>");
print ("</tr>");

// Fetch the results from the database.
while ($Row = mysqli_fetch_array($result)) {
 	print ("<tr align=\"center\" valign=\"top\">");
 	print ("<td align=\"center\" valign=\"top\">$Row[job_id]</td>");
	print ("<td align=\"center\" valign=\"top\">$Row[title]</td>");
	print ("<td align=\"center\" valign=\"top\">Long Descr here!</td>");
 	print ("<td align=\"center\" valign=\"top\">$Row[city]</td>");
 	print ("<td align=\"center\" valign=\"top\">$Row[state]</td>");
	print ("<td align=\"center\" valign=\"top\">$Row[zip]</td>");
	print ("<td align=\"center\" valign=\"top\">$Row[company]</td>");
	print ("<td align=\"center\" valign=\"top\">$Row[date_posted]</td>");
 	print ("</tr>");
}
mysqli_close($dbc);

print ("</table>");
$currentDate = date("l F j,Y");
print ("<br /><p style=\"text-align: center\"><em>{your full name goes here} &nbsp;&nbsp;Date: $currentDate </em></p>");
?>
</body>
</html>
