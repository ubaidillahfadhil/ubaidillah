<?php 
$koneksi = mysqli_connect("localhost","root","","basisdata_ubaidillah_fadhil");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>