<?php include "./includes/header.php"; ?>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Users App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link ab" href="allUsers.php">All Users</a>
        <a class="nav-item nav-link ab" href="main-login.php">Login<span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav>
  
<?php
    session_start();
    unset($_SESSION);
    session_destroy();
?>

<div class="container mt-3">Logged out successfully. <a href='main-login.php'>Click here to log back in.</a></div>


