<?php
require './koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$registerQuery = "INSERT INTO user (namauser, email, password) VALUES ('$name', '$email', '$pass')";

$executeQuery = mysqli_query($koneksi, $registerQuery);

if ($executeQuery) {
     header("location: ../pages/loginuser.php");
} else {
     die(mysqli_error($koneksi));
}