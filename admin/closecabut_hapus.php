<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_cabut= $_GET['id_cabut'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbupdate_cabut WHERE id_cabut='$id_cabut'");
if ($result){
	header("location:closecabut.php");
} else {
	echo "Gagal Hapus Data";
}

?>