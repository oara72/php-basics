<!DOCTYPE html>
<html>
<head>
<title>quiz</title>


</head>
<body>
<?php
$studentName = $_POST ['studentName'];
$q1 = $_POST ['q1'];
$q2 = $_POST ['q2'];
$q3 = $_POST ['q3'];
$q4 = $_POST ['q4'];
$q5 = $_POST ['q5'];
$score = 1;
$zero = 0;

echo "<p><strong>$studentName, here are your quiz results.</strong></p>";
if ($q1 == "c")
	{
		print "<p>Question#1: CORRECT Answer! the PHP Developer's Group Web site is www.php.net<br>";
		       $q1a = $score;
 	}
 	
	else
		{
			print "<p>Question#1 WRONG Answer!</p>";
			$q1a = $zero;
		}
		
if ($q2 == "d")
	{
		print "<p>Question#2: CORRECT Answer! PHP documents use the .php extension.<br>";
		       $q2a = $score;
	}
	else
		{
			print "<p>Question#2 WRONG Answer!</p>";
			$q2a = $zero;
		}

if ($q3 == "a")
	{
		print "<p>Question#3: CORRECT Answer! PHP stands for PHP: Hypertext Preprocessor.<br>";
		       $q3a = $score;
	}
	else
		{
			print "<p>Question#3 WRONG Answer!</p>";
			$q3a = $zero;
		}
		
if ($q4 == "b")
	{
		print "<p>Question#4: CORRECT Answer! PHP statements should be closed with a semicolon.<br>";
		       $q4a = $score;
	}
	else
		{
			print "<p>Question#4WRONG Answer!</p>";
			$q4a = $zero;
		}
		
if ($q5 == "a")
	{
		print "<p>Question#5: CORRECT Answer! The default HTTP method is GET<br>";
		       $q5a = $score;
	}
	else
		{
			print "<p>Question#5 WRONG Answer!</p>";
			$q5a = $zero;
		}
	
$total = $q1a + $q2a + $q3a + $q4a + $q5a;	
echo "<p><strong>You got $total points</strong></p>";
?>
</body>
</html>