<?php 

    require_once('googleApi/vendor/autoload.php');
    session_start();
    $client = new Google_Client();
    $client->setAuthConfig('client_credentials.json');
    $client->addScope([Google_Service_Oauth2::PLUS_LOGIN, Google_Service_Oauth2::USERINFO_EMAIL]);
    $client->setRedirectUri("http://localhost:8888/oauth1.0/callback.php");

?>