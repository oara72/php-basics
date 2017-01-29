<!DOCTYPE html>
<html>
<head><title>Oliver Rodriguez</title></head>
<body>

<?php
$name = $_POST['nameClient'];
$ctype = $_POST['type'];
$ccolour = $_POST['colour'];
$author = 'Oliver Rodriguez';

echo "<h2>Success!</h2>";

echo "<b>$name</b>, your <b>$ccolour $ctype</b> is ready. Pick it up anytime.<br/>";
echo "Safe driving!</p>";
 
echo "programmed by: $author!";
?>
</body>
</html>