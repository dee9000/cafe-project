<?php include 'navigation.php';?>

<div class="container-fluid pt-5">
<div class="jumbotron jumbotron-register mt-5">
  <div class="register-header text-center">
  <a href="index.php"><img src="img/logo2.png" height="120" width="120" alt="logo" class="animate__animated animate__rotateIn"></a>
  <h1>Register</h1>
  </div>
  <form action="process-signup.php" method="POST" novalidate >
<div class="form-group">
  <label for="name" class="control-label">Name</label>
  <input type="text" class="form-control" id="name" name="name">
</div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Repeat Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</div>





   </body>
   </html>
