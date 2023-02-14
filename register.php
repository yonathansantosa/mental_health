<?php 
  session_start();  
  require 'functions.php';

  if ( isset($_SESSION["login"]) ) 
  {
    redirect('index.php');
  } 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/decor.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="manifest" href="manifest.json" />
  <script src="assets/js/script.js"></script>
</head>

<body>

  <div class="container-fluid">
  <div class="row">
      <div class="col-md-4 offset-md-4 mt-5">

          <?php
            if(isset($_SESSION['error'])) {
            ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $_SESSION['error']?>
            </div>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['message'])) {
            ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_SESSION['message']?>
            </div>
            <?php
            }
          ?>

        <div class="row h-screen-60 w-100 justify-content-center mx-auto">
          <div class="col-12 mt-5">
            <h1 class="text-center title">Register</h1>
          </div>
          <div class="col-12 mt-5">
            <form action="register_process.php" method="post">
              <div class="mb-3">
                <label for="nama" class="form-label">Full name</label>
                <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" require>
                <div id="namaHelp" class="form-text">Please type in your full name</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" require>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" require>
              </div>
              <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password2" name="password2" require>
              </div>
              <button type="submit" name="submit" id="submit" class="btn btn-dark w-100 mt-3">Register</button>
              <div class="mt-4 text-center ">
                Already registered? <bold> <a href="login.php">Login</a> </bold>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
  </div>


  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

<?php 
  session_unset();
  session_destroy();
?>
</html>