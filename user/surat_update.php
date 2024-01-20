<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket = $_POST['no_tiket'];
$n = $_POST['n'];
$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$email_s = $_POST['email_s'];
$nama_pel = $_POST['nama_pel'];
$kota = $_POST['kota'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$tgl_ks = $_POST['tgl_ks'];
$wkt_ks = $_POST['wkt_ks'];

// update data ke database
$result = mysqli_query($connection,"UPDATE tbsurat SET no_tiket='$no_tiket', nama='$nama', kontak='$kontak',  email_s='$email_s', nama_pel='$nama_pel', kota='$kota', kelurahan='$kelurahan', jalan='$jalan', tgl_ks='$tgl_ks', wkt_ks='$wkt_ks' WHERE no_tiket='$n'");
if ($result){
	header("location:surat.php");
} else {
	echo "Gagal Update Data";
}

?>