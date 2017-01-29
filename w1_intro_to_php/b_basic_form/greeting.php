<!DOCTYPE html>
<html>
<head><title>greeting</title></head>
<body>

<?php
$name = $_POST['nameClient'];
$period = '.';
$comma = ',';
$apo = "'";
$author = 'Oliver Rodriguez';
$quote = '"';

echo '<h2>This page receives and handles the data from nameform.htm</h2>';
echo "<h2>Greetings $name$period</h2>";
echo "$name$comma we are truly delighted that you$apo ve decided to learn PHP!";
echo "<hr>";
echo "<p>";
echo 'Copyright &#169; 2014 <a href="www.php.net">The PHP Web Site</a>';
echo "</p>";
echo "<em> Programmed by: $author !</em>";
?>
</body>
</html>