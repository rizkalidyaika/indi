<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_k = $_POST['id_k']; 
$nama_k = $_POST['nama_k']; 
$jabatan = $_POST['jabatan']; 



// update data ke database
$sqlinsert = "INSERT INTO tbkaryawan (id_k, nama_k, jabatan) VALUE ('$id_k', '$nama_k', '$jabatan')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:karyawan.php");
}else{
	echo "Gagal Input Data";
}

?>