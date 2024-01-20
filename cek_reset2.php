<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id_reset 	= $_POST['id_reset'];
$otp 		= $_POST['otp'];
$pass 		= $_POST['pass'];
$verif 		= $_POST['verif'];

// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($connection,"SELECT * FROM reset WHERE id_reset='$id_reset' AND otp='$otp'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
 
	if ($pass == $verif) {
		$data = mysqli_fetch_assoc($query);

		$email 		= $data['email'];
		$x 			= $data['x'];

		include 'email/resetberhasil.php';

		$query = mysqli_query($connection,"UPDATE tbuser SET pass='$pass' WHERE x='$x'");
		$query = mysqli_query($connection,"DELETE FROM reset WHERE x='$x'");

		echo "<script>alert('Reset Password Berhasil!');window.location='index.php';</script>";
	} else {
		echo "<script>alert('Maaf, Password Baru dan Verifikasi Password Harus Sama!');window.location='reset2.php?code=".$id_reset."';</script>";
	}
	
}else{
	echo "<script>alert('Maaf, Code OTP Salah!');window.location='reset2.php?code=".$id_reset."';</script>";
}
 
?>