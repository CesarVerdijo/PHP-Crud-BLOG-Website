<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
      <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Signup - My Blog</title>
    <link rel="stylesheet" href="assets/js/validation.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/sign-in.css" rel="stylesheet">
  </head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
<form action="signup-process.php" method="post" id="signup" class="text-center" novalidate>
    <img class="img-fluid mx-auto" src="assets/images/logo.png" alt="" width="75" height="60" style="object-fit:cover">
    <h1 class="h3 mb-3 fw-normal text-center">Create account</h1>

    <div class="form-floating my-2">
      <input name="username" type="text" class="form-control" id="username" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating my-2">
      <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating my-2">
      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating my-2">
      <input name="retype_password" type="password" class="form-control" id="password_confirmation" placeholder="Retype Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="text-center">Already have an account? 
    <a href="login.php">Login here</a>

    <div class="form-check text-center my-2">
      <label>
      <input name="terms" type="checkbox" value="remember-me"> Accept Terms and Conditions
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?= date("Y")?></p>
</form>
</main>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
