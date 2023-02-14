<?php
session_start();
$base_url = require_once('base.php');
require_once($base_url . 'functions.php');

if (!isset($_SESSION["login"])) {
  redirect($base_url . 'index.php');
}

$query = mysqli_query($conn, "SELECT * FROM psikolog");

if (!isset($_POST['submit'])) {
  redirect('index.php');
}

var_dump($_POST);

$_SESSION['post_sos'] = $_POST;
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
        <h3 class="text-center m-0">Our Recommendation</h5>
      </div>
      <div class="col-2">
      </div>
    </div>
    <div class="row justify-content-center mx-auto">
      <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <a href="psikolog-preview.php?id=<?= $row['id']; ?>" class="col-12 my-2">
          <button class="btn btn-light rounded-2 w-100 p-3 text-start">
            <?= $row['nama']; ?>
          </button>
        </a>
      <?php endwhile; ?>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>