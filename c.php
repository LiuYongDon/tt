<?php 
function get_client_ip()
{
if ($_SERVER['REMOTE_ADDR']) {
$cip = $_SERVER['REMOTE_ADDR'];
} elseif (getenv("REMOTE_ADDR")) {
$cip = getenv("REMOTE_ADDR");
} elseif (getenv("HTTP_CLIENT_IP")) {
$cip = getenv("HTTP_CLIENT_IP");
} else {
$cip = "unknown";
}
return $cip;
}
echo get_client_ip();

echo gethostbyname($_ENV['COMPUTERNAME']);


 ?>