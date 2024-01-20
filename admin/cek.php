<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email_s = $_POST['email_s'];

// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($connection,"SELECT * FROM tbsurat
                        INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan where email_s='$email_s'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($query);


	$email_s 		= $data['email_s'];
	$nama 		= $data['nama'];
	$kontak 	= $data['kontak'];
	$no_tiket 	= $data['no_tiket'];
	$nama_pel 	= $data['nama_pel'];
	$kota 		= $data['kota'];
	$kelurahan 	= $data['kelurahan'];
	$jalan 		= $data['jalan'];
	$tgl_ks 	= $data['tgl_ks'];
	$wkt_ks 	= $data['wkt_ks'];
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
	
	
	include 'email_s.php';

	$query = mysqli_query($connection,"INSERT INTO pel SET email_s='$email_s'");

	echo "<script>alert('Pesan Berhasil Dikirim Ke Email!')</script>";
}else{
	echo "<script>alert('Maaf, Email Belum Terdaftar!');window.location='email_s.php';</script>";
}
 
?>