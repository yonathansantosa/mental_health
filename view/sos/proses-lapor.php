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

$cerita = $_SESSION['post_sos']['cerita'];
$waktu = $_SESSION['post_sos']['waktu'];
$tempat = $_SESSION['post_sos']['tempat'];
$pelaku = $_SESSION['post_sos']['pelaku'];
$bukti = $_SESSION['post_sos']['bukti'];

unset($_SESSION['post_sos']);

echo $cerita;
echo $tempat;
