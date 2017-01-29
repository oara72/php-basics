<!DOCTYPE>
<!--
Student Name: Oliver Rodriguez.
Student Number: w0668944
Last Date Modified: March 21th, 2015
_________________________
Program name: 
Purpose:  
-->
<html>
<head>
	<title>Display ALIENs Records </title>
</head>
<Body>
	<?php
		// set the variables for database access:
		require_once('connectvars.php');
		
		$dbc = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);
		
		$query = "select * from guitarwars";
		$result = mysqli_query ($dbc, $query);
		
		//create a table
		echo ("<h2 style=\"text-align: center\">My GUITAR WARS Table Display</h2>");
		echo ("<table border=\"1\" width=\"75%\" cellspacing=\"2\" align=\"center\">");
		echo ("<tr align =\"center\" valign=\"top\">");
		echo ("<td align =\"center\" valign=\"top\"><b>ID</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>Date</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>NAME</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>Score</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>screenshot</b></td>");
		echo ("</tr>");
		
		//Fetch the results from the database
		while ($row = mysqli_fetch_array ($result)) {
			echo ("<tr align =\"center\" valign=\"top\">");
			echo ("<td align =\"center\" valign=\"top\">$row[id]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[date]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[name]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[score]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[screenshot]</td>");
			echo ("</tr>");
			}
		
			
			mysqli_close ($dbc);
			
			echo ("</table>");
			
			$currentDate = date("l F j, Y");
			echo("<br/><p style=\"text-align: center\"><em>Oliver Rodriguez &nbsp; &nbsp;Date: $currentDate </em></p>");
	
	?>
</body>
</html>