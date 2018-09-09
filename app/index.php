<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>
<h1>Demo</h1>
<?php
error_reporting(E_ALL);
 $mysqli = new mysqli("db", "demo", "demo", "demo");
 $query = "SELECT * FROM country";
 $result = $mysqli->query($query);

 while($row = $result->fetch_array())
 {
	echo $row['name'].' - '.$row['iso'].'<br />';
 }
?>
</body>
</html>