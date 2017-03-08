<?

$subject = "sdsdsd";
$msg = "love";
mysql_connect("us-cdbr-iron-east-03.cleardb.net","bca0357f3e762d","7728ad55");
mysql_select_db("heroku_1b53b10aea6db1b") ;
mysql_query("set names 'utf8'");

$query = "insert into user (username,email) values ('$subject','$msg')";
 mysql_query($query);








?>
