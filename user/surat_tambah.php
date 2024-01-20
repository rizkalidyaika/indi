<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama']; 
$kontak = $_POST['kontak']; 
$email_s = $_POST['email_s']; 
$no_tiket = $_POST['no_tiket']; 
$nama_pel = $_POST['nama_pel'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$tgl_ks = $_POST['tgl_ks'];
$wkt_ks = $_POST['wkt_ks'];



// update data ke database
$sqlinsert = "INSERT INTO tbsurat (nama, kontak, email_s, no_tiket, nama_pel, kota, kelurahan, jalan, tgl_ks, wkt_ks) VALUE ('$nama', '$kontak', '$email_s', '$no_tiket', '$nama_pel', '$kota', '$kelurahan', '$jalan', '$tgl_ks', '$wkt_ks' )";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:surat.php");
}else{
	echo "Gagal Input Data";
}

?>