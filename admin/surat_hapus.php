<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket= $_GET['no_tiket'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbsurat WHERE no_tiket='$no_tiket'");
if ($result){
	header("location:surat.php");
} else {
	echo "Gagal Hapus Data";
}

?>