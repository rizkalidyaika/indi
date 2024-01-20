<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Performansi Petugas</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN PERFORMANSI PETUGAS</h1>
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
			<th>Nama Petugas Survei</th>
            <th>Hasil</th>
			<th>Bulan</th>
		</tr>
		<?php 
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
                        INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei WHERE month(tanggal_closesur)='$bln' AND year(tanggal_closesur)='$thn' ORDER BY tanggal_closesur DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
                        INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei WHERE year(tanggal_closesur)='$thn' ORDER BY tanggal_closesur DESC");			
					}
                
                else if(isset($_GET['tipe'])){
                    $tp = $_GET['tipe'];
                    $query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
                    INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE tipe='$tp' ORDER BY tipe DESC");			
                }
					else
					{
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
                        INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['vendor'];?></td>
						<td><?php echo $d['tipe'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_close']));?></td> 
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