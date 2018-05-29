<?php include "../includes/db.php"; ?> 

<?php  

    ob_start();
    
    $USER_NAME = $_POST['name'];
    $USER_EMAIL = $_POST['email'];

    if($USER_NAME == "" && $USER_EMAIL == "") {
        echo "Invalid email and/or password.";
    } else {
        $query = "SELECT * FROM users WHERE email = '{$USER_EMAIL}' ";
        $select_all_users_query = mysqli_query($connection, $query);
        $count = mysqli_num_rows($select_all_users_query);
    
            if($count > 0) {
                echo "Email and/or password taken."; 
            } else {
                $query = "INSERT INTO users(name, email) VALUES('{$USER_NAME}', '{$USER_EMAIL}') ";
                $insert_query = mysqli_query($connection, $query);
                    session_start();
                    $_SESSION['name'] = $USER_NAME;
                    $_SESSION['email'] = $USER_EMAIL;
                    $_SESSION['id'] = mysqli_insert_id($connection);
            }
    }

?>

