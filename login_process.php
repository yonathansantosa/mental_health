<?php
session_start();
require "functions.php";


    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $error = false;

        if ($email == "")
        {
            $error = true;
        }

        if ($password == "")
        {
            $error = true;
        }

        if ($error == true)
        {
            $_SESSION['error']  = 'Please make sure all fields are filled in correctly.';
            redirect('login.php');
        }
    }
    else
    {
        redirect('login.php');
    }

$check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

if( mysqli_num_rows($check) === 1)
{
    $row = mysqli_fetch_assoc($check);

    if( password_verify($password, $row['password']) )
    {
        $_SESSION["login"] = true;
        $_SESSION["userid"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["nama"] = $row['nama'];
        redirect('index.php');
    }
    else
    {
        $_SESSION['error'] = 'Authentication failed. Please check your username and password and try again.';
        redirect('login.php');
    }
}
else
{
    $_SESSION['error'] = 'Authentication failed. Please check your username and password and try again.';
    redirect('login.php');
}
