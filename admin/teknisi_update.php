<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_teknisi = $_POST['id_teknisi'];
$is = $_POST['is'];
$nama_t = $_POST['nama_t'];
$alamat = $_POST['alamat'];
$kontak_t = $_POST['kontak_t'];
$email_t = $_POST['email_t'];


// update data ke database
$result = mysqli_query($connection,"UPDATE tbteknisi SET id_teknisi='$id_teknisi', nama_t='$nama_t', alamat='$alamat', kontak_t='$kontak_t', email_t='$email_t' WHERE id_teknisi='$is'");
if ($result){
	header("location:teknisi.php");
} else {
	echo "Gagal Update Data";
}

?>