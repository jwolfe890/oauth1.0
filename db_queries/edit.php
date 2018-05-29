<?php include "../includes/db.php"; ?>

<?php

    session_start();
        $USER_BIO = $_POST['bio'];
        $USER_ID = $_POST['id'];
        $USER_NAME = $_POST['name'];
        $USER_EMAIL = $_POST['email'];
        $_SESSION['name'] = $USER_NAME;
        $_SESSION['bio'] = $USER_BIO;
        $_SESSION['email'] = $USER_EMAIL;

        $query = "UPDATE users SET name = '{$USER_NAME}', bio = '{$USER_BIO}', email = '{$USER_EMAIL}' WHERE id = '{$USER_ID}' ";
        $update_query = mysqli_query($connection, $query);

?>