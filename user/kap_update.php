<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_datek = $_POST['id_datek'];
$ik = $_POST['ik'];
$no_tel = $_POST['no_tel'];
$sttus = $_POST['sttus'];

// update data ke database
$result = mysqli_query($connection,"UPDATE tbdatek SET id_datek='$id_datek', no_tel='$no_tel', sttus='$sttus' WHERE id_datek='$ik'");
if ($result){
	header("location:kap.php");
} else {
	echo "Gagal Update Data";
}

?>