<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_cabut = $_POST['id_cabut'];
$nama_pel = $_POST['nama_pel'];
$no_tel= $_POST['no_tel'];
$no_inet= $_POST['no_inet'];
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
$sqlinsert = "INSERT INTO tbtiket_cabut (id_cabut, nama_pel, no_tel, no_inet, kota, kelurahan, jalan, alasan_cabut, paket, sto, odc, odp, port, tanggal_cabut) VALUE ('$id_cabut', '$nama_pel', '$no_tel', '$no_inet', '$kota', '$kelurahan', '$jalan', '$alasan_cabut', '$paket', '$sto', '$odc', '$odp', '$port', '$tanggal_cabut')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:openpelcabut.php");
}else{
	echo "Gagal Input Data";
}

?>