<?php
$koneksi = new mysqli('localhost', 'root', '','mahasiswa');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>