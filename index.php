<?php
session_start();
$base_url = require_once('base.php');
require_once($base_url . 'functions.php');

if (!isset($_SESSION["login"])) {
  redirect($base_url . "welcome.php");
  exit();
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
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
  <div class="container-fluid p-0 mt-3">
    <div class="row align-items-center mx-0 px-3">
      <div class="col-10">
        <div class="row px-2">
          <div class="col-12 fs-6 p-0">Welcome back</div>
          <div class="col-12 fs-3 fw-bold p-0"><?= ucfirst($_SESSION['nama']); ?></div>
          <div class="col-12 fs-6 p-0 status">Dalam pendampingan</div>
        </div>
      </div>
      <div class="col-2 dropdown">
        <button type="button" class="btn btn-light me-0 ms-auto border-0 rounded-circle text-end " data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person m-0 fs-3"></i></button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="view/profile">Profile</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="row align-items-center mx-0 justify-content-evenly g-2">
      <div class="col-3 p-2">
        <a href="view/sos">
          <button type="button" class="btn btn-light p-2 w-100 rounded-3 title">SOS</button>
        </a>
      </div>
      <div class="col-3 p-2">
        <button type="button" class="btn btn-light p-2 w-100 rounded-3 title">SC</button>
      </div>
      <div class="col-3 p-2">
        <button type="button" class="btn btn-light p-2 w-100 rounded-3 title">TD</button>
      </div>
      <div class="col-3 p-2">
        <button type="button" class="btn btn-light p-2 w-100 rounded-3 title">K</button>
      </div>
    </div>
    <div class="row mx-0 my-4">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded-3 border-0">
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/1/500/300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/2/500/300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/3/500/300" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-0 mt-4 gy-2" style="margin-bottom: 15vh;">
      <div class="col-12">
        <h5>Your Activities</h5>
      </div>
      <div class="col-6">
        <img src="https://picsum.photos/id/12/500/300" class="d-block w-100 rounded-3 border-0" alt="...">
      </div>
      <div class="col-6">
        <img src="https://picsum.photos/id/13/500/300" class="d-block w-100 rounded-3 border-0" alt="...">
      </div>
      <div class="col-6">
        <img src="https://picsum.photos/id/14/500/300" class="d-block w-100 rounded-3 border-0" alt="...">
      </div>
      <div class="col-6">
        <img src="https://picsum.photos/id/15/500/300" class="d-block w-100 rounded-3 border-0" alt="...">
      </div>
    </div>
  </div>


  <div class="fixed-bottom w-screen px-3" style="margin-bottom: 2vh">
    <nav class="navbar navbar-expand bg-dark h-screen-10 rounded-pill">
      <div class="container-fluid">
        <ul class="navbar-nav justify-content-evenly w-100">
          <li class="nav-item">
            <a class="nav-link fs-3" href="#"><i class="text-info bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="#"><i class="text-light bi bi-clipboard2-check-fill"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="#"><i class="text-light bi bi-chat-left-fill"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="view/profile/"><i class="text-light bi bi-person-fill"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>