<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_tiket = $_POST['no_tiket'];
$petugas_survei = $_POST['petugas_survei']; 
$no_hp = $_POST['no_hp'];
$hasil_survei = $_POST['hasil_survei'];
$keterangan = $_POST['keterangan'];
$sto = $_POST['sto'];
$odc = $_POST['odc'];
$odp = $_POST['odp'];
$port = $_POST['port'];

// update data ke database
$sqlinsert = "INSERT INTO tbupdate_survei (no_tiket, petugas_survei, no_hp, hasil_survei, keterangan, sto, odc, odp, port) VALUE ('$no_tiket', '$petugas_survei', '$no_hp', '$hasil_survei', '$keterangan', '$sto', '$odc', '$odp', '$port')";
$result = mysqli_query($connection,$sqlinsert);
if($result==true){
	header("location:lap_hasilsurvei.php");
}else{
	echo "Gagal Input Data";
}

?>