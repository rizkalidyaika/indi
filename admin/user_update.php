<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$x = $_POST['x'];
$level = $_POST['level'];
$user = $_POST['user'];
$pass = $_POST['pass'];

// update data ke database
$sqlupdate = "UPDATE tbuser SET level='$level', user='$user', pass='$pass' WHERE x='$x'";
$result = mysqli_query($connection,$sqlupdate);
if($result){
	header("location:user.php");
}else{
	echo "Gagal Update Data";	
}
?>