<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_pembangunan = $_POST['id_pembangunan'];
$ip = $_POST['ip'];
$nama_t = $_POST['nama_t'];
$kontak_t = $_POST['kontak_t'];
$email_t = $_POST['email_t'];
$vendor = $_POST['vendor'];
$tipe = $_POST['tipe'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$tgl_kp = $_POST['tgl_kp'];
$wkt_kp = $_POST['wkt_kp'];

// update data ke database
$result = mysqli_query($connection,"UPDATE stek SET id_pembangunan='$id_pembangunan', nama_t='$nama_t', kontak_t='$kontak_t', email_t='$email_t', vendor='$vendor', tipe='$tipe', kota='$kota', kelurahan='$kelurahan', jalan='$jalan', tgl_kp='$tgl_kp', wkt_kp='$wkt_kp' WHERE id_pembangunan='$id_pembangunan'");
if ($result){
	header("location:surteknisi.php");
} else {
	echo "Gagal Update Data";
}

?>