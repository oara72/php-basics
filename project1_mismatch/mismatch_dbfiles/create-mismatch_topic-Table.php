<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Create mismatch_topic TABLE</title>
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "CREATE TABLE mismatch_topic (
  topic_id INT AUTO_INCREMENT,
  name VARCHAR(48),
  category_id  INT,
  PRIMARY KEY (topic_id)
)";
 
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Table Created!<br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 
mysqli_close($dbc);
?>
</body>
</html>
