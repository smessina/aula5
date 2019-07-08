<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = /*json_decode(*/file_get_contents("http://ipinfo.io/{$ip}")/*, true)*/;

//echo $details["country"]; // -> "US"

print_r($details);

?>