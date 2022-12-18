<?php
require './koneksi.php';

$id = $_GET['id'];

$name = $_POST['nama'];
$price = $_POST['harga'];
$desc = $_POST['desc'];
$picture = $_FILES['gambar']['name'];
$target = "../img/";

if ("SELECT picture FROM produkgfuel WHERE idproduk = $id" != 0) {
     if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $picture)) {
          $editquery = "UPDATE produkgfuel SET namaproduk = '$name', hargaproduk = '$price', deskripsi = '$desc', gambarproduk = '$picture' WHERE idproduk = $id";
          if (mysqli_query($koneksi, $editquery)) {
               header("location: ../pages/listproduct.php");
          } else {
               header("location: ../pages/listproduct.php");
          }
     } else {
          header("location: ../pages/listproduct.php");
     }
} else {
     $editquery = "UPDATE produkgfuel SET namaproduk = '$name', hargaproduk = '$price', deskripsi = '$desc', gambarproduk = '$picture' WHERE idproduk = $id";
     if (mysqli_query($koneksi, $editquery)) {
          header("location: ../pages/listproduct.php");
     } else {
          header("location: ../pages/listproduct.php");
     }
}
