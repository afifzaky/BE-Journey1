<?php
require './koneksi.php';

$id = $_GET['id'];

$minuman = $_POST['namaminuman'];
$hargaminuman = $_POST['hargaminuman'];
$pembeli = $_POST['pembeli'];
$alamatpembeli = $_POST['alamatpembeli'];
$bayar = $_POST['pembayaran'];
$status = $_POST['pesanan'];

$mysql = "UPDATE payment SET namaminuman = '$minuman',  hargaminuman = '$hargaminuman', pembeli = '$pembeli', alamatpembeli = '$alamatpembeli', pembayaran = '$bayar', statuspayment = '$status' WHERE idpayment = $id";

mysqli_query($koneksi, $mysql);
header("location: ../pages/paymentadmin.php");
