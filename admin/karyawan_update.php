<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_k = $_POST['id_k'];
$ik = $_POST['ik'];
$nama_k = $_POST['nama_k'];
$jabatan = $_POST['jabatan'];

// update data ke database
$result = mysqli_query($connection,"UPDATE tbkaryawan SET id_k='$id_k', nama_k='$nama_k', jabatan='$jabatan' WHERE id_k='$ik'");
if ($result){
	header("location:karyawan.php");
} else {
	echo "Gagal Update Data";
}

?>