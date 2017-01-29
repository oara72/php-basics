<!DOCTYPE html>
<html>
<head>
<title>Days to Christmas Form - Oliver Rodriguez</title>
</head>
<body>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$month = date("m");
$day = date("d");
$year = date("Y");
$now = time(0,0,0,$month,$day,$year);
$then = mktime(0,0,0,12,25,2015);
$gap = $then - $now;
$gap = round($gap/(60*60*24));
	
if (date("A") == "AM")
	{
	$greeting = "Good Morning";
	}
	elseif((date("H") >= 12) && (date("H") < 18)) 
		{
		$greeting = "Good Afternoon";
	   }	
	else
		{
		$greeting = "Good Evening";
	   }	

echo "<p><h2>Calculate days until Christmas - by Oliver Rodriguez</h2></p>";
echo "<img src=\"CandyCane.gif\" alt=\"candy\" >";
echo "<p>$greeting, $firstname $lastname</p>";
echo "The current date is ";
echo date("l F j, Y");
echo "<p>";
echo "The days until Christmas are $gap";
echo "</p>";

 
?>
</body>
</html>

