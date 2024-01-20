<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan = $_POST['id_pembangunan'];
$vendor = $_POST['vendor'];
$email_v = $_POST['email_v'];
$tipe = $_POST['tipe'];
$sto = $_POST['sto'];
$odc = $_POST['odc'];
$odp = $_POST['odp'];
$kapasitas = $_POST['kapasitas'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$tanggal_pem = $_POST['tanggal_pem'];


// update data ke database
$sqlinsert = "INSERT INTO tbpembangunan (id_pembangunan, vendor, email_v, tipe, sto, odc, odp, kapasitas, kota, kelurahan, jalan, tanggal_pem ) VALUE ('$id_pembangunan', '$vendor', '$tipe', '$sto', '$odc', '$odp', '$kapasitas','$kota', '$kelurahan', '$jalan', '$tanggal_pem')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:openpem.php");
}else{
	echo "Gagal Input Data";
}

?>