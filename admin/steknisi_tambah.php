<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_t = $_POST['nama_t']; 
$kontak_t = $_POST['kontak_t']; 
$email_t = $_POST['email_t']; 
$id_pembangunan = $_POST['id_pembangunan']; 
$vendor = $_POST['vendor'];
$tipe = $_POST['tipe'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$tgl_kp = $_POST['tgl_kp'];
$wkt_kp = $_POST['wkt_kp'];



// update data ke database
$sqlinsert = "INSERT INTO stek (nama_t, kontak_t, email_t, id_pembangunan, vendor, tipe, kota, kelurahan, jalan, tgl_kp, wkt_kp) VALUE ('$nama_t', '$kontak_t', '$email_t', '$id_pembangunan', '$vendor', '$tipe', '$kota', '$kelurahan', '$jalan', '$tgl_kp', '$wkt_kp')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:surteknisi.php");
}else{
	echo "Gagal Input Data";
}

?>