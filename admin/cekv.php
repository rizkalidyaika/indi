<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email_v = $_POST['email_v'];

// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbpembangunan ON tbpembangunan.id_pembangunan = stek.id_pembangunan INNER JOIN tbkaryawan ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($query);


	$email_v 		= $data['email_v'];
	$nama_t		        = $data['nama_t'];
	$kontak_t 	= $data['kontak_t'];
	$id_pembangunan 	= $data['id_pembangunan'];
	$vendor 	= $data['vendor'];
    $tipe 	    = $data['tipe'];
	$kota 		= $data['kota'];
	$kelurahan 	= $data['kelurahan'];
	$jalan 		= $data['jalan'];
	$tgl_kp 	= $data['tgl_kp'];
	$wkt_kp 	= $data['wkt_kp'];
	$nama_k 	= $data['nama_k'];
	$jabatan 	= $data['jabatan'];


//Array Hari
$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
$hari = $array_hari[date('N')];
//Format Tanggal
$tanggal = date ('j');
//Array Bulan
$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
$bulan = $array_bulan[date('n')];
//Format Tahun
$tahun = date('Y');
//Menampilkan hari dan tanggal

	include 'email_v.php';

	$query = mysqli_query($connection,"INSERT INTO pel SET email_v='$email_v'");

	echo "<script>alert('Pesan Berhasil Dikirim Ke Email!')</script>";
}else{
	echo "<script>alert('Maaf, Email Belum Terdaftar!');window.location='email_v.php';</script>";
}
 
?>