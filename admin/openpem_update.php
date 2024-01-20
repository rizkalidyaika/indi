<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan = $_POST['id_pembangunan'];
$id = $_POST['id'];
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
$result = mysqli_query($connection,"UPDATE tbpembangunan SET id_pembangunan='$id_pembangunan', vendor='$vendor', email_v='$email_v', tipe='$tipe', sto='$sto', odc='$odc', odp='$odp', kapasitas='$kapasitas', kota='$kota', kelurahan='$kelurahan', jalan='$jalan', tanggal_pem='$tanggal_pem' WHERE id_pembangunan='$id'");
if ($result){
	header("location:openpem.php");
} else {
	echo "Gagal Update Data";
}

?>