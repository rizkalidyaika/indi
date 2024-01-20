<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan= $_GET['id_pembangunan'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbupdate_pem WHERE id_pembangunan='$id_pembangunan'");
if ($result){
	header("location:closepem.php");
} else {
	echo "Gagal Hapus Data";
}

?>