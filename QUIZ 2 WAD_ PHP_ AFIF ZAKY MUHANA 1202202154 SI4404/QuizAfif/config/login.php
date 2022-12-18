<?php

require './koneksi.php';

$email = $_POST['email'];
$sandi = $_POST['password'];

$cariQuery = "SELECT * FROM user WHERE email = '$email'";

$executeCari = mysqli_query($koneksi, $cariQuery);


$row = mysqli_fetch_assoc($executeCari);
$data = mysqli_fetch_array($executeCari);

if ($executeCari == true) {
     if ($check == 'checked') {
          setcookie('email', $email);
          setcookie('pass', $sandi);
     }

     session_start();
     $_SESSION['id'] = $data['id'];
     $_SESSION['name'] = $data['name'];
     header("location: ../pages/homeafifafter.php");
} else {
     header("location: ../pages/loginuser.php");
}