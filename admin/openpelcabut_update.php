<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_cabut = $_POST['id_cabut'];
$ic = $_POST['ic'];
$nama_pel = $_POST['nama_pel'];
$no_tel = $_POST['no_tel'];
$no_inet = $_POST['no_inet'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$alasan_cabut = $_POST['alasan_cabut'];
$paket = $_POST['paket'];
$sto = $_POST['sto'];
$odc = $_POST['odc'];
$odp = $_POST['odp'];
$port = $_POST['port'];
$tanggal_cabut = $_POST['tanggal_cabut'];

// update data ke database
$result = mysqli_query($connection,"UPDATE tbtiket_cabut SET id_cabut='$id_cabut', nama_pel='$nama_pel', no_tel='$no_tel', no_inet='$no_inet', kota='$kota', kelurahan='$kelurahan', jalan='$jalan', alasan_cabut='$alasan_cabut', paket='$paket', sto='$sto', odc='$odc', odp='$odp', port='$port', tanggal_cabut='$tanggal_cabut' WHERE id_cabut='$ic'");
if ($result){
	header("location:openpelcabut.php");
} else {
	echo "Gagal Update Data";
}

?>