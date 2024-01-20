<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Order Survei</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN ORDER SURVEI</h1>
		<br>
		<hr/>
		<br>
	</center>
	
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>No Tiket</th>
			<th>Nama</th>
            <th>Kontak</th>
			<th>Kota</th>
			<th>Kelurahan</th>
            <th>Jalan</th>
			<th>STO</th>
			<th>Status</th>
			<th>Nama Sales</th>
			<th>Tanggal Survei</th>
			<th>Tanggal Up Tiket</th>
		</tr>
		<?php 
		$no = 1;
		if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
			$bln = $_GET['bulan'];
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE month(tanggal_sur)='$bln' AND year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");
		}
		else if(isset($_GET['tahun'])){
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");			
		}
		else if(isset($_GET['kota'])){
			$k = $_GET['kota'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE kota='$k' ORDER BY kota DESC ");			
		}
		else if(isset($_GET['sto'])){
			$s = $_GET['sto'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE sto='$s' ORDER BY sto DESC ");			
		}
		else if(isset($_GET['nama_sales'])){
			$sales = $_GET['nama_sales'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE nama_sales='$sales' ORDER BY nama_sales DESC ");			
		}
		else{
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket");
			}
			$no = 1;
			while($data = mysqli_fetch_array($query)){
			?>	
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['no_tiket']; ?></td>
			<td><?php echo $data['nama_pel']; ?></td>
			<td><?php echo $data['kontak_pel']; ?></td>
            <td><?php echo $data['kota']; ?></td>
            <td><?php echo $data['kelurahan']; ?></td>
			<td><?php echo $data['jalan']; ?></td>
			<td><?php echo $data['sto']; ?></td>
			<td><?php echo $data['sttus']; ?></td>
			<td><?php echo $data['nama_sales']; ?></td>
            <td><?php echo date('d M Y',strtotime($data['tanggal_sur']));?></td>
			<td><?php echo date('d M Y',strtotime($data['tanggal_closesur']));?></td>
		</tr>
		<?php 
		}
		?>
	</table>
<script>
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
</script>
	<script>
		window.print();
	</script>
 
</body>
</html>