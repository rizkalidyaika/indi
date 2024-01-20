<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$level = $_POST['level'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// update data ke database
$sqlinsert = "INSERT INTO tbuser (level, email, pass) VALUE ('$level', '$email', '$pass')";
$result = mysqli_query($connection,$sqlinsert);
if($result){
	header("location:user.php");
}else{
	echo "Gagal Input Data";	
}
?>