<?php include "./includes/db.php"; ?>

<?php

require_once('config.php');

    if(isset($_SESSION['accessToken'])) {
        $client->setAccessToken($_SESSION['accessToken']);
        $_SESSION['user'] = "user session";
    } else if(isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['accessToken'] = $token;
        $_SESSION['user'] = "user session";
    } else {
        header("location: index.php");
    }

    $Oauth = new Google_Service_Oauth2($client);
    $user = $Oauth->userinfo->get();

    $google = $user->id;
    $user_email = $user->email;
    $user_name = $user->givenName . " " . $user->familyName;

    echo "<pre>";
    print_r($user);

    $query = "SELECT * FROM users WHERE email = '{$user_email}' ";
    $select_all_users_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($select_all_users_query);

    if($count > 0) {
        while($row = mysqli_fetch_assoc($select_all_users_query)) {
            $_SESSION['name'] = $row["name"]; 
            $_SESSION['email'] = $row["email"]; 
            $_SESSION['bio'] = $row["bio"]; 
            $_SESSION['id'] = $row['id'];
            $_SESSION['google'] = $row['google'];
        }
    } else {
        $query = "INSERT INTO users(name, email, google) VALUES('{$user_name}', '{$user_email}', '{$google}') ";
        $insert_query = mysqli_query($connection, $query); 
        $_SESSION['name'] = $user_name;
        $_SESSION['email'] = $user_email;
        $_SESSION['google'] = $google;
        $_SESSION['id'] = mysqli_insert_id($connection);
        $_SESSION['bio'] = "";
    }

    header("location: ./user-profile.php")

?>


