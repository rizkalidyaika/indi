<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_cabut = $_POST['id_cabut'];
$no_tel = $_POST['no_tel'];
$no_inet = $_POST['no_inet'];
$sttus = $_POST['sttus'];
$tanggal_close= $_POST['tanggal_close'];


// update data ke database
$sqlinsert = "INSERT INTO tbupdate_cabut (id_cabut, no_tel, no_inet, sttus, tanggal_close ) VALUE ('$id_cabut', '$no_tel', '$no_inet', '$sttus','$tanggal_close')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:closecabut.php");
}else{
	echo "Gagal Input Data";
}

?>