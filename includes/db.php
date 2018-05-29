<?php
ob_start();

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = "users-app";

    $connection = mysqli_connect($host, $user, $password, $db_name);

    if (!$connection) {
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }


?>