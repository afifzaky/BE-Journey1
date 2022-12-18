<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM produkgfuel WHERE idproduk = $id";

if (mysqli_query($koneksi, $mysql)) {
     header("location: ../pages/listproduct.php");
} else {
     header("location: ../pages/listproduct.php");
}
