<?php
session_start();
$base_url = require_once('base.php');
require_once($base_url . 'functions.php');

if (!isset($_SESSION["login"])) {
  redirect($base_url . 'index.php');
}

if (!isset($_SESSION['post_sos'])) {
  redirect('index.php');
}

$query = mysqli_query($conn, "SELECT * FROM psikolog");
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

<body class="bg-dark">
  <div class="container-fluid mt-3">
    <div class="row mt-3 mb-3 px-3 align-items-center">
      <div class="col-2">
        <a href="<?= $base_url; ?>index.php" class="link-light float-start"><i class=" bi bi-arrow-left float-start fs-3"></i></a>
      </div>
      <div class="col-8"></div>
      <div class="col-2">
      </div>
    </div>
    <div class="row mb-5 px-4">
      <div class="col-4">
        <div class="border-0 rounded-circle bg-light d-flex justify-content-center align-items-center" style="width: 6em; height: 6em">
          <i class="bi bi-person m-0 fs-3"></i>
        </div>
      </div>
      <div class="col justify-content-center d-flex flex-column">
        <div class="fs-3 fw-bold p-0 text-light"><?= ucfirst($_SESSION['nama']); ?></div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-3 px-4 pt-2 bg-white rounded-top-5 mb-auto">
    <div class="row bg-light rounded-5 bg-secondary p-4 mb-3">
      <div class="col-12">
        <h1>Stats</h1>
      </div>
      <div class="col-12">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <div class="row bg-light rounded-5 bg-secondary p-4">
      <div class="col-12">
        <h1>About</h1>
      </div>
      <div class="col-12">
        About this psikolog
      </div>
    </div>
    <div class="row p-4">
      <div class="col-6 text-center">
        <button class="btn btn-secondary w-100 p-3">Cancel</button>
      </div>
      <div class="col-6 text-center">
        <form action="proses-lapor.php" method="post">
          <input type="hidden" name="id_psikolog" value="<?= $_GET['id']; ?>">
          <button type="submit" class="btn btn-primary w-100 p-3">Send</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: [
          'Solved',
          'In Progress',
          'Canceled'
        ],
        datasets: [{
          data: [300, 50, 100],
          backgroundColor: [
            'rgb(99, 200, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 90, 86)'
          ],
          hoverOffset: 4
        }]
      },
      options: {
        plugins: {
          legend: {
            position: 'right',
            align: 'start'
          },
        }
      }
    });
  </script>
</body>

</html>