<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_petugas_survei = $_POST['id_petugas_survei'];
$ps = $_POST['ps'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];

$kota_ps = $_POST['kota_ps'];

// update data ke database
$result = mysqli_query($connection,"UPDATE tbpetugas_survei SET id_petugas_survei='$id_petugas_survei', nama='$nama', alamat='$alamat', kontak='$kontak', kota_ps='$kota_ps' WHERE id_petugas_survei='$ps'");
if ($result){
	header("location:petugas.php");
} else {
	echo "Gagal Update Data";
}

?>