<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_datek= $_GET['id_datek'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbdatateknik WHERE id_datek='$id_datek'");
if ($result){
	header("location:kap.php");
} else {
	echo "Gagal Hapus Data";
}

?>