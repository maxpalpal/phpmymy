<?

$subject = "sdsdsd";
$msg = "love";
mysql_connect("y0nkiij6humroewt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","mz7y3tb1ahil8uyc","nk9hj09j0ywgzrac");
mysql_select_db("fd54ymxjciorkgy4") ;
mysql_query("set names 'utf8'");

$query = " INSERT INTO fd54ymxjciorkgy4.hope(name)
VALUES
('$msg') ";
 mysql_query($query);








?>
