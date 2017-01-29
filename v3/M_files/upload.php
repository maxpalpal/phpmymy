<?php
session_start();
$pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
$allowed = array('png', 'jpg', 'gif');
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}
	if(move_uploaded_file($_FILES['upl']['tmp_name'], '../upload/'.date("dmY",time()).'_'.$_FILES['upl']['name'])){
		  $_SESSION['ech']['urlimgur'] = $pageURL.'/upload/'.date("dmY",time()).'_'.$_FILES['upl']['name'];
		  setcookie("pic", "OK !", time()+3600*24*7);
		  echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;