<?php include "../includes/db.php"; ?>

<?php  
    $USER_EMAIL = trim($_POST['email']);

    $query = "SELECT * FROM users WHERE email = '{$USER_EMAIL}' ";
    $select_all_users_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($select_all_users_query);

    if($count > 0) {
        while($row = mysqli_fetch_assoc($select_all_users_query)) {

            $user_name = $row["name"]; 
            $user_email = $row["email"]; 
            $user_bio = $row["bio"]; 
            $user_id = $row['id']; 
            $google = $row['google'];
    
            session_start();
            $_SESSION['name'] = $user_name;
            $_SESSION['email'] = $user_email;
            $_SESSION['bio'] = $user_bio;
            $_SESSION['id'] = $user_id;
            $_SESSION['google'] = $user_name;

        }
    } else {
        echo "Email not found. Sign up or try a different email.";
    }
?>


