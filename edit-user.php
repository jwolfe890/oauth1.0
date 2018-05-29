<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>
<?php include "./includes/db.php"; ?>

<?php
    session_start();
    if(isset($_SESSION['id'])) {
?>


<?php 

$query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}' ";
$select_all_users_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_users_query)) {
    $user_name = $row["name"]; 
    $user_email = $row["email"]; 
    $user_bio = $row["bio"];
    $user_id = $row["id"]; 
    $google = $row["google"]; 

?>

        <div class="container mt-3">
            <h1>Edit Profile</h1>
            <form method="post" id="registerEdit">
            <div class="form-group">
            <label for="exampleInputName">User Name</label>
            <textarea type="text" rows="1" class="form-control" name="name" id="name" placeholder="User Name"><?php echo $user_name; ?></textarea>
        </div>

        <?php if($google == null) { ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" value=<?php echo $user_email ?> name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <?php } else { ?>
            <div class="form-group">
            <input type="hidden" class="form-control" value=<?php echo $user_email ?> name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>      
        <?php } ?>

        <div class="form-group">
            <label for="exampleInputBio">Biography</label>
            <textarea type="text" rows="2" class="form-control" name="bio" id="bio" aria-describedby="emailHelp"><?php if($user_bio != Null) { echo $user_bio; } ?></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" name="id" value=<?php echo $user_id ?>
        </div>
        <button type="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
<?php } ?>

<?php } ?>




