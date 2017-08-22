<?php
$chars = generate_name(rand(5,8));
$chars = explode(" ", $chars);
$http_name = "";
foreach ($chars as $char) {
	$http_name .= strtoupper($char[0]).substr($char, 1)." ";
}
$http_name = trim($http_name); 

header("HTTP/1.1 ".rand(200, 505)." ".$http_name);
header("Content-Type:text/".generate_name(rand(5,8)));
?>
