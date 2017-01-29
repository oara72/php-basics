<!DOCTYPE html>
<html>
<head><title>Jacket Confirmation</title></head>
<body>

<?php
$gender = $_POST['gender'];
$size = $_POST['size'];
$colour = $_POST['colour'];

$period = '.';


echo "<p><h2>Company Spring Retreat</h2></p>";

echo "<p><strong>Jacket Order: Confirmation</strong></p>";

echo "<strong>For you, we will order a jacket in $colour and size $size for a $gender employee$period</strong>";


?>
</body>
</html>