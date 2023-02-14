<?php
session_start();
require "../../functions.php";

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

  if ($password != "" & $password2 == "") {
    $error = true;
  }

  if ($error == true) {
    $_SESSION['error']  = 'Please make sure all fields are filled in correctly.';
    redirect('index.php');
    exit();
  }

  if ($password != "" || $password2 != "") {
    if ($password != $password2) {
      $_SESSION['error'] = 'Please make sure your passwords match.';
      redirect('update.php');
      exit();
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE user SET password = '$password' WHERE email = '$email'");
  }

  mysqli_query($conn, "UPDATE user SET email = '$email', nama = '$nama' WHERE email = '$email'");
  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  $_SESSION['message']  = 'Update profile successful';
  header("Location: index.php");
} else {
  redirect('index.php');
  exit();
}



return mysqli_affected_rows($conn);
