<?php
	$bin = $_POST['bin'];
	$ip = get_client_ip();
    $userag         = $_SERVER['HTTP_USER_AGENT']; 
    $ch = curl_init("http://bins.pro/search?action=searchbins&bins=".$bin);  
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    $output = curl_exec($ch);

    echo $output;

?>
