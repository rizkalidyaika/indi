<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket = $_POST['no_tiket'];
$tipe_identitas = $_POST['tipe_identitas'];
$no_identitas = $_POST['no_identitas'];
$nama_pel = $_POST['nama_pel']; 
$kontak_pel = $_POST['kontak_pel'];
$email = $_POST['email'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$paket = $_POST['paket'];
$sto = $_POST['sto'];
$nama_sales = $_POST['nama_sales'];
$tanggal_sur = $_POST['tanggal_sur'];



// update data ke database
$sqlinsert = "INSERT INTO tbpelanggan (no_tiket, tipe_identitas, no_identitas, nama_pel, kontak_pel, email, tempat_lahir, tanggal_lahir, kota, kelurahan, jalan, paket, sto, nama_sales, tanggal_sur) VALUE ('$no_tiket', '$tipe_identitas', '$no_identitas', '$nama_pel', '$kontak_pel', '$email', '$tempat_lahir', '$tanggal_lahir', '$kota', '$kelurahan', '$jalan', '$paket', '$sto', '$nama_sales', '$tanggal_sur')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:tiketsurvei.php");
}else{
	echo "Gagal Input Data";
}

?>