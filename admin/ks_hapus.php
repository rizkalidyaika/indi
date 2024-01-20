<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama= $_GET['nama'];

// update data ke database
$result = mysqli_query($connection,"DELETE FROM tbkun_sur WHERE nama='$nama'");
if ($result){
	header("location:ks.php");
} else {
	echo "Gagal Hapus Data";
}

?>