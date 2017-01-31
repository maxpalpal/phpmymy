<?php 




require_once "Mail.php";

$from = '<maxpen652@gmail.com>'; //change this to your email address
$to = '<jihadralghoul@gmail.com>'; // change to address
$subject = 'Insert subject here'; // subject of mail
$body = "Hello world! this is the content of the email"; //content of mail

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.postmarkapp.com',
        'port' => '587',
        'auth' => true,
        'username' => 'maxpen652@gmail.com', //your gmail account
        'password' => '652zx652' // your password
    ));

// Send the mail
$mail = $smtp->send($to, $headers, $body);







?>