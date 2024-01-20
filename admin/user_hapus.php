<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$x = $_GET['x'];

// update data ke database
$sqldelete = "DELETE FROM tbuser WHERE x='$x'";
$result = mysqli_query($connection,$sqldelete);
if ($result){
	header("location:user.php");
} else {
	echo "Gagal Hapus Data";
}
?>