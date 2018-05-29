<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>

<?php
  if(isset($_SESSION["id"])) {
    header("location: allUsers.php");
  }
?>

  <div class="container mt-3">  
  <h1>Email Not Found </h1><p><a href="signup.php">Signup</a> OR <a href="main-login.php">Login</a></p>
  </div>

</html>

