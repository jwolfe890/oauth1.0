<?php include "./includes/header.php"; ?>
<?php include "./includes/navbar.php"; ?>

  <div class="container mt-3">
    <h1>Login</h1>
    <form method="post" id="registerLogin">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <div id="result"></div>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p><a href="login.php">Login with google</a></p>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>



