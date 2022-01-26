<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$no_pendaftar = $_POST['no_pendaftar'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($no_pendaftar) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into pendaftar values('','$nama','$no_pendaftar','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>