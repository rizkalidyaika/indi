<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_k= $_GET['id_k'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbkaryawan WHERE id_k='$id_k'");
if ($result){
	header("location:karyawan.php");
} else {
	echo "Gagal Hapus Data";
}

?>