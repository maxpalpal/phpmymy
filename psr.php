<?php



$subject = "sdsdsd";
$msg = "love";
$con = pg_connect("host=ec2-54-204-32-145.compute-1.amazonaws.com dbname=dc0lv0spd5muji user=wulcydgyttdqij password=b4fc873362e82f6a785efaaf9439b5a6bb214ce33a4a71444058f4ce4f1ee92d");
$query = " INSERT INTO public.man (username, password)
	VALUES (2,3)"; 


pg_query($con, $query) or die("Cannot execute query: $query\n");

pg_close($con); 






?>
