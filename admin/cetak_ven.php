<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Performansi Vendor</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN PERFORMANSI VENDOR</h1>
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
			<th>Nama Vendor</th>
            <th>Hasil</th>
			<th>Bulan</th>
		</tr>
		<?php 
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
						INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE month(tanggal_close)='$bln' AND year(tanggal_close)='$thn' ORDER BY tanggal_close DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
						INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE year(tanggal_close)='$thn' ORDER BY tanggal_close DESC");			
					}
					else if(isset($_GET['tipe'])){
						$tp = $_GET['tipe'];
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
						INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan WHERE tipe='$tp' ORDER BY tipe DESC");			
					}
					else{
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem 
							INNER JOIN tbpembangunan ON tbupdate_pem.id_pembangunan = tbpembangunan.id_pembangunan");
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

<script>
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
</script>
	<script>
		window.print();
	</script>
 <body onLoad="window.print()">
    <center>
    <center>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" id="tabel">

        <tr>
      
        </tr>
		<td>
		<td>
       
        <tr>
          <td colspan="7" align="justify"></td>
        </tr>
        <tr>
          <td width="53">&nbsp;</td>
          <td width="5">&nbsp;</td>
          <td width="15">&nbsp;</td>
          <td width="112">&nbsp;</td>
          <td width="5">&nbsp;</td>
          <td width="213">&nbsp;</td>
          <td width="92">&nbsp;</td>
          <td width="4">&nbsp;</td>
          <td width="123">&nbsp;</td>
        </tr>
 <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right"></td>
          <td align="right"></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">Banjarbaru,</td>
          <td align="right"></td>
          <td><?php
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
                        echo $tanggal . ' ' . $bulan . ' ' . $tahun;
                        ?></td>
        </tr>
        <tr>
          <tr></tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" align="center"><strong>Supervisor</strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" align="center"><strong></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" align="center"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" align="center"></td>
        </tr>
		</table>
</body>
</html>