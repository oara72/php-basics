<!DOCTYPE html>
<html>
<head>
<title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>

<p><h2>Aliens Abducted Me - Report an Abduction.</h2></p>

<?php
//set the variables for the Database acces;
require_once('connectvars.php');

//connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Data from report.html to insert into table

$first_name = $_POST['firstname'];
$last_name = $_POST ['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
"how_many, alien_description, what_they_did, fang_spotted, other, email) " .
"VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
"'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

if (mysqli_query($dbc, $query)) {
	print ("<p>The query was successfully executed !</p>");

} else {
	print ("<p>the query could not be executed </p>");
}
mysqli_close($dbc);

echo 'Thanks for submitting the form.<br />';
echo 'You were abducted ' . $when_it_happened;
echo ' and were gone for ' . $how_long . '<br />';
echo 'Number of aliens: ' . $how_many . '<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'The aliens did this: ' . $what_they_did . '<br />';
echo 'Was Fang there?  ' . $fang_spotted . '<br />';
echo 'Other comments: ' . $other . '<br />';
echo 'Your email address is: ' . $email;

?>
</body>
</html>