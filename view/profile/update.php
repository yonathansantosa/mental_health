<?php
session_start();
$base_url = require_once('base.php');
require_once($base_url . 'functions.php');

if (!isset($_SESSION["login"])) {
  redirect($base_url . 'index.php');
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
  <link rel="stylesheet" href="<?= $base_url; ?>assets/css/app.css">
  <link rel="stylesheet" href="<?= $base_url; ?>assets/css/decor.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="manifest" href="<?= $base_url; ?>manifest.json" />
  <script src="<?= $base_url; ?>assets/js/script.js"></script>
</head>

<body>
  <div class="container-fluid mt-3">
    <div class="row mt-3 mb-3 px-3 align-items-center">
      <div class="col-2 align-middle">
        <a href="index.php" class="link-dark float-start"><i class=" bi bi-arrow-left float-start fs-3"></i></a>
      </div>
      <div class="col-8 align-middle">
        <h3 class="text-center m-0">Edit Profile</h5>
      </div>
      <div class="col-2">
      </div>
    </div>
    <?php
    if (isset($_SESSION['error'])) {
    ?>
      <div class="row">
        <div class="col offset-md-4">
          <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['error'] ?>
          </div>
        </div>
      </div>
    <?php
      unset($_SESSION['error']);
    }
    ?>
    <div class="row mb-5 px-4 justify-content-center">
      <div class="col-12">
        <div class="border-0 rounded-circle bg-light d-flex justify-content-center align-items-center mx-auto" style="width: 8em; height: 8em">
          <i class="bi bi-person m-0 fs-3"></i>
        </div>
      </div>
      <div class="col-12">
        <div class="fs-3 fw-bold p-0 text-center"><?= ucfirst($_SESSION['nama']); ?></div>
      </div>
    </div>
    <div class="row h-screen-60 w-100 justify-content-center mx-auto">
      <div class="col-12">
        <form action="update_process.php" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Full name</label>
            <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" value="<?= $_SESSION['nama']; ?>" require>
            <div id="namaHelp" class="form-text">Please type in your full name</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $_SESSION['email']; ?>" require>
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
          <button type="submit" name="submit" id="submit" class="btn btn-dark w-100 mt-3">Update</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>