<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>

<?php
    session_start();
    if(isset($_SESSION['name'])) {
      header("location: ./user-profile.php");
    }
?>

<div class="container mt-3">
<div id="result"></div>
    <h1>Sign Up</h1>
    <form method="post" id="registerSubmit">
    <div class="form-group">
        <label for="exampleInputName">User Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p><a href="login.php">Signup with Google</a></p>
</div>


 