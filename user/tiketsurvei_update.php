<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$n = $_POST['n'];
$no_tiket = $_POST['no_tiket'];
$tipe_identitas = $_POST['tipe_identitas'];
$no_identitas = $_POST['no_identitas'];
$nama_pel = $_POST['nama_pel']; 
$kontak_pel= $_POST['kontak_pel'];
$email= $_POST['email'];
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
$result = mysqli_query($connection,"UPDATE tbpelanggan SET no_tiket='$no_tiket', tipe_identitas='$tipe_identitas', no_identitas='$no_identitas', nama_pel='$nama_pel', kontak_pel='$kontak_pel', email='$email', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kota='$kota', kelurahan='$kelurahan', jalan='$jalan', paket='$paket', sto='$sto', nama_sales='$nama_sales', tanggal_sur='$tanggal_sur' WHERE no_tiket='$n'");
if ($result){
	header("location:tiketsurvei.php");
} else {
	echo "Gagal Update Data";
}

?>