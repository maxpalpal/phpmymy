<?php

$subject = "sdsdsd";
$msg = "love";
$p = "222222";
mysql_connect("us-cdbr-iron-east-03.cleardb.net","bca0357f3e762d","7728ad55");
mysql_select_db("heroku_1b53b10aea6db1b") ;


$query = "insert into user (username,email,password) values ('$subject','$msg','$p')";
 mysql_query($query);








?>
