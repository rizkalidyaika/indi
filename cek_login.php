<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($connection,"SELECT * FROM tbuser WHERE email='$username' AND pass='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($query);
 
	if($data['level']=="Admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		header("location:admin/index.php");
 
  }else if($data['level']=="User"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "User";
		header("location:user/index.php");

	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>