<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan = $_POST['id_pembangunan'];
$nama_t = $_POST['nama_t'];
$hasil = $_POST['hasil'];
$keterangan = $_POST['keterangan'];
$sttus = $_POST['sttus'];
$tanggal_close= $_POST['tanggal_close'];


// update data ke database
$sqlinsert = "INSERT INTO tbupdate_pem (id_pembangunan, nama_t, hasil, keterangan, sttus, tanggal_close ) VALUE ('$id_pembangunan', '$nama_t', '$hasil', '$keterangan', '$sttus','$tanggal_close')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:closepem.php");
}else{
	echo "Gagal Input Data";
}

?>