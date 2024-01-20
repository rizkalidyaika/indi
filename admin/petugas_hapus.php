<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_petugas_survei= $_GET['id_petugas_survei'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbpetugas_survei WHERE id_petugas_survei='$id_petugas_survei'");
if ($result){
	header("location:petugas.php");
} else {
	echo "Gagal Hapus Data";
}

?>