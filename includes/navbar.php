<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Users App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link ab" href="allUsers.php">All Users</a>
      <?php
         if(!isset($_SESSION['id'])) { 
          echo "<a class='nav-item nav-link ab' href='main-login.php'>Login</a>"; }
      ?>
      <?php session_start(); 
      if(isset($_SESSION['id'])) {
        echo "<a class='nav-item nav-link ab' href='user-profile.php'>User Profile</a>"; 
        echo "<a class='nav-item nav-link ab' href='logout.php'>Logout</a>"; 
      }
      ?>
    </div>
  </div>
</nav>


