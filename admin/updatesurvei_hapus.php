<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket= $_GET['no_tiket'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbtiket_survei WHERE no_tiket='$no_tiket'");
if ($result){
	header("location:updatesurvei.php");
} else {
	echo "Gagal Hapus Data";
}

?>