<?php
require './koneksi.php';

$minuman = $_POST['namaminuman'];
$hargaminuman = $_POST['hargaminuman'];
$pembeli = $_POST['pembeli'];
$alamatpembeli = $_POST['alamatpembeli'];
$bayar = $_POST['pembayaran'];
$status = $_POST['pesanan'];


$mysql = "INSERT INTO payment (namaminuman, hargaminuman, pembeli, alamatpembeli, pembayaran, statuspayment) VALUES ('$minuman','$hargaminuman','$pembeli','$alamatpembeli','$bayar','$status')";
if (mysqli_query($koneksi, $mysql)) {
     header("location: ../pages/paymentuser.php");
} else {
     header("location: ../pages/paymentuser.php");
}
