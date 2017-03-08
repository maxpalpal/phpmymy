<?php



$subject = "sdsdsd";
$msg = "love";

 
$query = "INSERT INTO public.man(
	username, password)
	VALUES ('$subject','$msg')"; 


pg_query($con, $query) or die("Cannot execute query: $query\n");

pg_close($con); 






?>
