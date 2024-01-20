<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_teknisi= $_GET['id_teknisi'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbteknisi WHERE id_teknisi='$id_teknisi'");
if ($result){
	header("location:teknisi.php");
} else {
	echo "Gagal Hapus Data";
}

?>