
<?php
// If you are using Composer (recommended)
require 'vendor/autoload.php';

require("SendGrid.php");
require("sendgrid-php.php");

// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "maxpen652@gmail.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "jihadralghoul@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


?>