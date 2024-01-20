<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_datek = $_POST['id_datek'];
$no_tel = $_POST['no_tel'];
$sttus = $_POST['sttus'];



// update data ke database
$sqlinsert = "INSERT INTO tbdatateknik (id_datek, no_tel, sttus) VALUE ('$id_datek', '$no_tel', '$sttus')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:kap.php");
}else{
	echo "Gagal Input Data";
}

?>