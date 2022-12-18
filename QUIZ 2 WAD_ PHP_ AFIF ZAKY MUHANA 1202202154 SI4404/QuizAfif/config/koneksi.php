<?php
$koneksi = new mysqli("localhost", "root", "", "gfuel");

if (!$koneksi) {
     die("Koneksi Gagal: " . $koneksi->connect_error);
}