<?php
require './koneksi.php';

$name = $_POST['nama'];
$price = $_POST['harga'];
$desc = $_POST['desc'];
$picture = $_FILES['gambar']['name'];
$target = "../img/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $picture)) {
     $mysql = "INSERT INTO produkgfuel (namaproduk, hargaproduk, deskripsi, gambarproduk) VALUES ('$name', '$price', '$desc', '$picture')";
     if (mysqli_query($koneksi, $mysql)) {
          header("location: ../pages/listproduct.php");
     } else {
          header("location: ../pages/listproduct.php");
     }
} else {
     header("location: ../pages/listproduct.php");
}
