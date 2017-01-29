<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>


</head>
<body>
<?php
$name = $_POST ['name'];
$address = $_POST ['address'];

echo "<h2>ABC Web Site Registration Reply Page</h2>";

if (empty($name)||empty($address))
	{
		print "<p><strong>Your information has not been processed</strong> -</p>
				You did not enter a user name.<br>Please return to the form and 
				re-enter your information";
	}
	else
		{
			print "<p><strong>Your information has been processed</strong> -</p>
			           Thank you $name<br>
					   from the lovely region of $address";
		}
?>
</body>
</html>