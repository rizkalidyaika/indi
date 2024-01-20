<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];

// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($connection,"SELECT * FROM tbuser WHERE email='$email'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($query);

	$id_reset 	= rand(1,9999);
	$email 		= $data['email'];
	$x 			= $data['x'];
	$otp 	= rand(1000,9999);

	include 'email/reset.php';

	$query = mysqli_query($connection,"INSERT INTO reset SET id_reset='$id_reset', x='$x', email='$email', otp='$otp'");

	echo "<script>alert('OTP Reset Password Berhasil Dikirim Ke Email!');window.location='reset2.php?code=".$id_reset."';</script>";
}else{
	echo "<script>alert('Maaf, Email Belum Terdaftar!');window.location='reset.php';</script>";
}
 
?>