<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>


</head>
<body>
<?php
$author = 'Oliver Rodriguez';

echo "<h2>Welcome to the ABC Web Site</h2>";
echo "<p><strong>Programmed by $author</strong> -</p>";

echo "<form action=\"reply.php\" method=\"POST\">";
echo "<label for=\"name\"> Enter your name: </label> <input type=\"text\" name=\"name\" size=\"25px\" placeholder=\"your name\" /><br>";
echo "<label for=\"address\"> You live in: </label><input type=\"text\" name=\"address\" size=\"25px\" placeholder=\"address\" /><br>";

echo "<input type=\"submit\" value=\"Submit\"/>";
echo "<input type=\"submit\" value=\"Clear\"/>";
echo "</form>";
echo date("l F j, Y");
?>
</body>
</html>

