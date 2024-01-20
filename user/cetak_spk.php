<!DOCTYPE html>
<html>
<head>
    <title>Cetak SPK</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> SURAT PERINTAH KERJA </h1>
		<br>
		<hr/>
		<br>
	</center>
	
	<?php 
	include 'koneksi.php';
	?>
 
 <a> Menugaskan Kepada Saudara</a>
 <br>
 <br>
	<table border="1" style="width: 100%">
    <thead>
		<tr>
			<th width="1%">No</th>
			<th>Nama Petugas</th>
			<th>No Tiket</th>
            <th>Nama Pelanggan</th>
			<th>Kota</th>
			<th>Kelurahan</th>
			<th>Jalan</th>
			<th>Tanggal Survei</th>
		</tr>
        </thead>
		<?php 
	
	if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
		$bln = $_GET['bulan'];
		$thn = $_GET['tahun'];
		$query = mysqli_query($connection,"SELECT * FROM tbpelanggan
		INNER JOIN tbsurat ON tbpelanggan.no_tiket = tbsurat.no_tiket WHERE month(tanggal_sur)='$bln' AND year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");
	}
	else if(isset($_GET['tahun'])){
		$thn = $_GET['tahun'];
		$query = mysqli_query($connection,"SELECT * FROM tbpelanggan
		INNER JOIN tbsurat ON tbpelanggan.no_tiket = tbsurat.no_tiket WHERE year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");			
	}
	else if(isset($_GET['kota'])){
		$k = $_GET['kota'];
		$query = mysqli_query($connection,"SELECT * FROM tbpelanggan
		INNER JOIN tbsurat ON tbpelanggan.no_tiket = tbsurat.no_tiket WHERE kota='$k' ORDER BY kota DESC ");			
	}
	else if(isset($_GET['nama'])){
		$n = $_GET['nama'];
		$query = mysqli_query($connection,"SELECT * FROM tbpelanggan
		INNER JOIN tbsurat ON tbpelanggan.no_tiket = tbsurat.no_tiket WHERE nama='$n' ORDER BY nama DESC ");			
	}
	else{
		$query = mysqli_query($connection,"SELECT * FROM tbpelanggan
		INNER JOIN tbsurat ON tbpelanggan.no_tiket = tbsurat.no_tiket ");
	}
	$no = 1;
	while($data = mysqli_fetch_array($query)){
	?>	
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['no_tiket']; ?></td>
			<td><?php echo $data['nama_pel']; ?></td>
			<td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['kelurahan']; ?></td>
			<td><?php echo $data['jalan']; ?></td>
            <td><?php echo date('d M Y',strtotime($data['tanggal_sur']));?></td>
		</tr>
		<?php 
		}
		?>
	</table>
    <br>
    <a> Untuk melakukan survei sesuai Lokasi yang tertera pada tabel diatas.</a>
    <br>
<a> Demikian Surat Perintah Kerja ini dibuat agar dapat dipergunakan sebagaimana mestinya. </a>
<script>
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
</script>
	<script>
		window.onload = window.print();
	</script>
 
</body>
</html>