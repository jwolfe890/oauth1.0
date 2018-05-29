<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>
<?php include "./includes/db.php"; ?>

    <div class="container mt-3">
    <h1>All Users</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            </tr>
        </thead>
        <tbody>

<?php  

$query = "SELECT * FROM users ORDER BY id DESC";
$select_all_users_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_users_query)) {
    $user_id = $row["id"]; 
    $user_name = $row["name"]; 
    $user_email = $row["email"]; 
    $user_bio = $row["bio"]; 

?>

        <tr>
        <th scope="row"><?php echo $user_id; ?></th>
        <td><?php echo $user_name; ?></td>
        <td><?php echo $user_email; ?></td>
        <td><?php echo $user_bio; ?></td>
        </tr>
     
<?php } ?>

        </tbody>
    </table>