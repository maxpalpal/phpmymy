
<?php
echo "sdsd";
$link = mysql_connect('y0nkiij6humroewt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'mz7y3tb1ahil8uyc', 'nk9hj09j0ywgzrac');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
