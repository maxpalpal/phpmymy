
<?php
// If you are using Composer (recommended)
require 'vendor/autoload.php';


require("sendgrid-php.php");

// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "maxpen652@gmail.com");
$subject = "Hope with thout";
$to = new SendGrid\Email(null, "jihadralghoul@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('jbTaakLnSkaKmVzTtFpA5w');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


?>