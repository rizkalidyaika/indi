<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pembangunan</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN PEMBANGUNAN</h1>
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
			<th>ID Pembangunan</th>
			<th>Tipe</th>
            <th>STO</th>
			<th>ODC</th>
			<th>ODP</th>
			<th>Kapasitas</th>
            <th>Kota</th>
			<th>Kelurahan</th>
			<th>Jalan</th>
            <th>Status</th>
			<th>Vendor</th>
			<th>Hasil</th>
			<th>Tanggal Pembangunan</th>
			<th>Tanggal Close</th>
		</tr>
		<?php  
		$no = 1;
		if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
			$bln = $_GET['bulan'];
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
			INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE month(tanggal_pem)='$bln' AND year(tanggal_pem)='$thn' ORDER BY tanggal_pem DESC");
		}
		else if(isset($_GET['tahun'])){
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
			INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE year(tanggal_pem)='$thn' ORDER BY tanggal_pem DESC");			
		}
		else if(isset($_GET['kota'])){
			$k = $_GET['kota'];
			$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
			INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE kota='$k' ORDER BY kota DESC ");			
		}
		else if(isset($_GET['sto'])){
			$s = $_GET['sto'];
			$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
			INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE sto='$s' ORDER BY sto DESC ");			
		}
		else{
			$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
				INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan");
			}
			$no = 1;
			while($data = mysqli_fetch_array($query)){
		?>
		<tr>
		
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_pembangunan']; ?></td>
			<td><?php echo $data['tipe']; ?></td>
			<td><?php echo $data['sto']; ?></td>
            <td><?php echo $data['odc']; ?></td>
            <td><?php echo $data['odp']; ?></td>
			<td><?php echo $data['kapasitas']; ?></td>
			<td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['kelurahan']; ?></td>
			<td><?php echo $data['jalan']; ?></td>
			<td><?php echo $data['sttus']; ?></td>
			<td><?php echo $data['vendor']; ?></td>
			<td><?php echo $data['hasil']; ?></td>
            <td><?php echo date('d M Y',strtotime($data['tanggal_pem']));?></td>
			<td><?php echo date('d M Y',strtotime($data['tanggal_close']));?></td>
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