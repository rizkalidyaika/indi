<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Cabut Sambungan</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN CABUT SAMBUNGAN</h1>
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
			<th>ID Cabut</th>
			<th>Nama</th>
            <th>No Telepon</th>
			<th>NO Internet</th>
			<th>Kota</th>
			<th>Kelurahan</th>
            <th>Jalan</th>
			<th>Alasan Cabut</th>
			<th>STO</th>
            <th>ODC</th>
			<th>ODP</th>
			<th>Port</th>
            <th>Status</th>
			<th>Tanggal Cabut</th>
			<th>Tanggal Close</th>
		</tr>
		<?php 
		$no = 1;
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut
                        INNER JOIN tbtiket_cabut ON tbupdate_cabut.id_cabut = tbtiket_cabut.id_cabut WHERE month(tanggal_cabut)='$bln' AND year(tanggal_cabut)='$thn' ORDER BY tanggal_cabut DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut
                        INNER JOIN tbtiket_cabut ON tbupdate_cabut.id_cabut = tbtiket_cabut.id_cabut WHERE year(tanggal_cabut)='$thn' ORDER BY tanggal_cabut DESC");			
					}
					else if(isset($_GET['kota'])){
						$k = $_GET['kota'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut
                        INNER JOIN tbtiket_cabut ON tbupdate_cabut.id_cabut = tbtiket_cabut.id_cabut WHERE kota='$k' ORDER BY kota DESC ");			
					}
					else if(isset($_GET['sto'])){
						$s = $_GET['sto'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut
                        INNER JOIN tbtiket_cabut ON tbupdate_cabut.id_cabut = tbtiket_cabut.id_cabut WHERE sto='$s' ORDER BY sto DESC ");			
					}
                    else
                    {
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut
                        INNER JOIN tbtiket_cabut ON tbupdate_cabut.id_cabut = tbtiket_cabut.id_cabut");
					}
					$no = 1;
					while($data = mysqli_fetch_array($query)){
					?>	 
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_cabut']; ?></td>
			<td><?php echo $data['nama_pel']; ?></td>
            <td><?php echo $data['no_tel']; ?></td>
            <td><?php echo $data['no_inet']; ?></td>
            <td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['kelurahan']; ?></td>
			<td><?php echo $data['jalan']; ?></td>
            <td><?php echo $data['alasan_cabut']; ?></td>
			<td><?php echo $data['sto']; ?></td>
            <td><?php echo $data['odc']; ?></td>
            <td><?php echo $data['odp']; ?></td>
			<td><?php echo $data['port']; ?></td>
			<td><?php echo $data['sttus']; ?></td>
            <td><?php echo date('d M Y',strtotime($data['tanggal_cabut']));?></td>
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