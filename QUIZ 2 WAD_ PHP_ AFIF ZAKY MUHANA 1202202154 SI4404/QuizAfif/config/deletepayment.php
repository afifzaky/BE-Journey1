<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM payment WHERE idpayment = $id";

mysqli_query($koneksi, $mysql);
header("location: ../pages/paymentadmin.php");
