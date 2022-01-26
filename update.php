<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_pendaftar = $_POST['no_pendaftar'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update pendaftar set nama='$nama', no_pendaftar='$no_pendaftar', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>