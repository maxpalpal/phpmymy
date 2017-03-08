<?php

$subject = "sdsdsd";
$msg = "love";
$p = "222222";
mysql_connect("us-cdbr-iron-east-03.cleardb.net","bca0357f3e762d","7728ad55");
mysql_select_db("heroku_1b53b10aea6db1b") ;


$query = "insert into user (username,email,password) values ('$subject','$msg','$p')";
 mysql_query($query);

$subject = "sdsdsd";
$msg = "love";
$con = pg_connect("host=ec2-54-204-32-145.compute-1.amazonaws.com port=5432 dbname=dc0lv0spd5muji user=wulcydgyttdqij password=b4fc873362e82f6a785efaaf9439b5a6bb214ce33a4a71444058f4ce4f1ee92d sslmode=require options='--client_encoding=UTF8'") or die('Could not connect: ' . pg_last_error()); 
 
$query = "INSERT INTO public.man(
	username, password, msg)
	VALUES ('$subject','$msg','$p')"; 


pg_query($con, $query) or die("Cannot execute query: $query\n");

pg_close($con); 






?>
