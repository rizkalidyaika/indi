<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Kapasitas Jaringan</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN KAPASITAS JARINGAN</h1>
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
			<th>ID Data Teknik</th>
			<th>No Telepon</th>
            <th>No Internet</th>
			<th>STO</th>
			<th>ODC</th>
			<th>ODP</th>
			<th>Port</th>
            <th>Status</th>
		</tr>
		<?php 
		$no = 1;
					if(isset($_GET['sto'])){
						$s = $_GET['sto'];
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut  on tbdatateknik.no_tel = tbtiket_cabut.no_tel WHERE sto='$s' ORDER BY sto DESC ");			
					}
                    else if(isset($_GET['sttus'])){
						$sts = $_GET['sttus'];
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut  on tbdatateknik.no_tel = tbtiket_cabut.no_tel WHERE sttus='$sts' ORDER BY sttus DESC ");			
                    }
                    else{
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut  on tbdatateknik.no_tel = tbtiket_cabut.no_tel");
					}
					$no = 1;
					while($data = mysqli_fetch_array($query)){
					?>	
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_datek']; ?></td>
			<td><?php echo $data['no_tel']; ?></td>
			<td><?php echo $data['no_inet']; ?></td>
            <td><?php echo $data['sto']; ?></td>
            <td><?php echo $data['odc']; ?></td>
			<td><?php echo $data['odp']; ?></td>
			<td><?php echo $data['port']; ?></td>
			<td><?php echo $data['sttus']; ?></td>
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