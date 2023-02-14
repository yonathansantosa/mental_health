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
    <div class="row mt-3 mb-1 px-3 align-items-center">
      <div class="col-2">
        <a href="<?= $base_url; ?>index.php" class="link-dark float-start"><i class=" bi bi-arrow-left float-start fs-3"></i></a>
      </div>
      <div class="col-8"></div>
      <div class="col-2">
        <a href="update.php"><button type="button" class="btn btn-light me-0 ms-auto border-0 rounded-circle text-end" aria-expanded="false"><i class="bi bi-pencil-fill m-0 fs-3"></i></button></a>
      </div>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
    ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['message'] ?>
      </div>
    <?php
      unset($_SESSION['message']);
    }
    ?>
    <div class="row mb-5 px-4">
      <div class="col-4">
        <div class="border-0 rounded-circle bg-light d-flex justify-content-center align-items-center" style="width: 6em; height: 6em">
          <i class="bi bi-person m-0 fs-3"></i>
        </div>
      </div>
      <div class="col justify-content-center d-flex flex-column">
        <div class="fs-3 fw-bold p-0"><?= ucfirst($_SESSION['nama']); ?></div>
        <div class="fs-6 p-0 status">Dalam pendampingan</div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>