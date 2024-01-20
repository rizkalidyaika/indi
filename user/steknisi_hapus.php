<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan= $_GET['id_pembangunan'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM stek WHERE id_pembangunan='$id_pembangunan'");
if ($result){
	header("location:surteknisi.php");
} else {
	echo "Gagal Hapus Data";
}

?>