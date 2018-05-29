<?php 

session_start();
unset($_SESSION);
session_destroy();

require_once('config.php');
$authUrl = $client->createAuthUrl();
header("location: ".$authUrl);

?>

