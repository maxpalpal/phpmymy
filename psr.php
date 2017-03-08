<?php



$subject = "sdsdsd";
$msg = "love";
$con = pg_connect('host=us-cdbr-iron-east-03.cleardb.net user=bca0357f3e762d password=b4fc873362e82f6a785efaaf9439b5a6bb214ce33a4a71444058f4ce4f1ee92d dbname=heroku_1b53b10aea6db1b connect_timeout=5'); 
 
$query = " INSERT INTO man(
	username, password)
	VALUES (2,3)"; 


pg_query($con, $query) or die("Cannot execute query: $query\n");

pg_close($con); 






?>
