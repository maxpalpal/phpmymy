<?php
require 'vendor/autoload.php';
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
 
$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key' => '900e849677118183375e843b9f679dff007c8523']);
 
$sparky->setOptions(['async' => false]);
$results = $sparky->transmissions->post([
  'content' => [
    'from' => 'postmaster@disbox.org',
    'subject' => 'Oh hey!',
    'html' => '<html><body><p>Testing SparkPost - the world\'s most awesomest email service!</p></body></html>'
  ],
  'recipients' => [
    ['address' => ['email'=>'maxpen652@gmail.com']]
  ]
]);
?>
