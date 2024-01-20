<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama']; 
$no_tiket = $_POST['no_tiket']; 
$nama_pel = $_POST['nama_pel']; 
$tgl_ks = $_POST['tgl_ks'];
$wkt_ks = $_POST['wkt_ks'];



// update data ke database
$sqlinsert = "INSERT INTO tbkun_sur (nama, no_tiket, nama_pel, tgl_ks, wkt_ks) VALUE ('$nama', '$no_tiket', '$nama_pel', '$tgl_ks', '$wkt_ks')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:ks.php");
}else{
	echo "Gagal Input Data";
}

?>