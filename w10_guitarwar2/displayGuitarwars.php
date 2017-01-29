<!DOCTYPE>
<html>
<head>
	<title>Display Guitar Wars Record</title>
	<style type="text/css">
	h1,h2, h3, h4, h5, h6 {text-align: center}
	p {font-family: Verdana; text-align: center}
	table {border-style: 1px solid blue; border-collapse: collapse;}
	td {border: 1px solid blue;}
	</style>
</head>
<body>
<a href="admin.php">Approve scores</a>
	<?php
		// set the variables for database access:
		require_once('connectvars.php');
		
		$dbc = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);
		
		$query = "select * from guitarwars";
		$result = mysqli_query ($dbc, $query);
		
		//create a table
		echo ("<h2>GUITARWARS TABLE</h2>");
		echo ("<hr>");
		echo ("<p><em>Guitarwars Table</em></p>");
		echo ("<table border=\"0\" width=\"75%\" cellspacing=\"2\" align=\"center\">");
		echo ("<tr align =\"center\" valign=\"top\">");
		echo ("<td align =\"center\" valign=\"top\"><b>ID</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>Date</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>NAME</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>Score</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>screenshot</b></td>");
		echo ("<td align =\"center\" valign=\"top\"><b>APPRvd</b></td>");
		
		echo ("</tr>");
		
		//Fetch the results from the database
		while ($row = mysqli_fetch_array ($result)) {
			echo ("<tr align =\"center\" valign=\"top\">");
			echo ("<td align =\"center\" valign=\"top\">$row[id]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[date]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[name]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[score]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[screenshot]</td>");
			echo ("<td align =\"center\" valign=\"top\">$row[approved]</td>");
			echo ("</tr>");
			}
		
			
			mysqli_close ($dbc);
			
			echo ("</table>");
			echo ("<hr>");
			echo ("<p>End of Tables</p>");
			echo ("<hr>");
			echo '<a href="mainIndex_F.php">To high scores</a>';
			$currentDate = date("l F j, Y");
			echo("<br/><p style=\"text-align: center\"><em>Oliver Rodriguez &nbsp; &nbsp;Date: $currentDate </em></p>");
	
	?>
</body>
</html>