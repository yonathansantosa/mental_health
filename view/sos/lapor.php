<?php
session_start();
$base_url = require_once('base.php');
require_once($base_url . 'functions.php');

if (!isset($_SESSION["login"])) {
  redirect($base_url . "login.php");
  exit();
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
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/app.css">
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/decor.css">
  <link rel="manifest" href="<?= $base_url ?>manifest.json" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="<?= $base_url ?>assets/js/script.js"></script>
</head>

<body>
  <div class="container-fluid mt-3">
    <div class="row justify-content-center mx-auto">
      <div class="col-12">
        <h1 class="title">SOS</h1>
      </div>
      <div class="col-12 mt-3">
        <form action="lapor-tujuan.php" method="post">
          <div class="mb-3">
            <textarea class="form-control" id="cerita" name="cerita" rows="5" placeholder="Ceritakan yang kamu alami"></textarea>
          </div>
          <h2>Pertanyaan</h2>
          <div class="mb-3">
            <label for="waktu" class="form-label">Waktu Kejadian</label>
            <input class="form-control" id="waktu" name="waktu" type="datetime-local">
          </div>
          <div class="mb-3">
            <label for="tempat" class="form-label">Tempat Kejadian</label>
            <input class="form-control" id="tempat" name="tempat" type="text">
          </div>
          <div class="mb-3">
            <label for="pelaku" class="form-label">Pelaku</label>
            <input class="form-control" id="pelaku" name="pelaku" type="text">
          </div>
          <div class="mb-3">
            <label for="bukti" class="form-label">Bukti</label>
            <input class="form-control" id="bukti" name="bukti" type="file" accept="image/png, image/jpeg">
          </div>
          <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Kirim</button>
          <a href="index.php" class="btn btn-outline-secondary w-100 mt-3 mb-5">Kembali</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>