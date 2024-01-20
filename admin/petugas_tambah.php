<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_petugas_survei = $_POST['id_petugas_survei']; 
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$kontak = $_POST['kontak'];
$kota_ps = $_POST['kota_ps'];



// update data ke database
$sqlinsert = "INSERT INTO tbpetugas_survei (id_petugas_survei, nama, alamat, kontak, kota_ps) VALUE ('$id_petugas_survei', '$nama', '$alamat', '$kontak', '$kota_ps')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:petugas.php");
}else{
	echo "Gagal Input Data";
}

?>