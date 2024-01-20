<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_teknisi = $_POST['id_teknisi']; 
$nama_t = $_POST['nama_t']; 
$alamat = $_POST['alamat']; 
$kontak_t = $_POST['kontak_t'];



// update data ke database
$sqlinsert = "INSERT INTO tbteknisi(id_teknisi, nama_t, alamat, kontak_t) VALUE ('$id_teknisi', '$nama_t', '$alamat', '$kontak_t')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:teknisi.php");
}else{
	echo "Gagal Input Data";
}

?>