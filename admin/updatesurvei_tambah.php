<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket = $_POST['no_tiket'];
$id_petugas_survei = $_POST['id_petugas_survei'];
$hasil = $_POST['hasil'];
$keterangan = $_POST['keterangan']; 
$sto = $_POST['sto'];
$odc = $_POST['odc'];
$odp = $_POST['odp'];
$port = $_POST['port'];
$sttus = $_POST['sttus'];
$jam = $_POST['jam'];
$tanggal_closesur = $_POST['tanggal_closesur'];




// update data ke database
$sqlinsert = "INSERT INTO tbtiket_survei (no_tiket, id_petugas_survei, hasil, keterangan, sto, odc, odp, port, sttus, jam, tanggal_closesur) VALUE ('$no_tiket', '$id_petugas_survei', '$hasil', '$keterangan', '$sto', '$odc', '$odp', '$port', '$sttus', '$jam', '$tanggal_closesur')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:updatesurvei.php");
}else{
	echo "Gagal Input Data";
}

?>