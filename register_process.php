<?php
session_start();
require "functions.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  $error = false;

  if ($nama == "") {
    $error = true;
  }

  if ($email == "") {
    $error = true;
  }

  if ($password == "") {
    $error = true;
  }

  if ($password2 == "") {
    $error = true;
  }

  if ($error == true) {
    $_SESSION['error']  = 'Please make sure all fields are filled in correctly.';
    redirect('register.php');
  }
} else {
  redirect('register.php');
}

$check = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

if (mysqli_fetch_assoc($check)) {
  $_SESSION['error'] = 'The email account already exists.';
  redirect('register.php');
}

if ($password != $password2) {
  $_SESSION['error'] = 'Please make sure your passwords match.';
  redirect('register.php');
}

$password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($conn, "INSERT INTO user (email, password, nama) VALUES ('$email', '$password', '$nama')");

$_SESSION['message']  = 'Registration was successful, please login.';
header("Location: login.php");

return mysqli_affected_rows($conn);
