<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>
<?php include "./includes/db.php"; ?>

<?php
    session_start();
    if(!isset($_SESSION["id"])) {
        header("location: ./index.php");
    } 
?>

    <div class="container mt-3">
    <h1>User Profile</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <?php  

$query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}' ";
$select_all_users_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_users_query)) {
    $user_name = $row["name"]; 
    $user_email = $row["email"]; 
    $user_bio = $row["bio"]; 

?>
        <td><?php echo $user_name; ?></td>
        <td><?php echo $user_email; ?></td>
        <td><?php echo $user_bio; ?></td>

<?php } ?>

</tr>
</tbody>
</table>
<a href="edit-user.php">Edit User Profile</a>
</div>









 


