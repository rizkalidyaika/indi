<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Hasil Survei</title> 
</head>
<p>Dicetak Pada : <span id="tanggalwaktu"></span></p>
<body>
 	<center>
	<img src="logoindi.png" style="height: 40px; padding: 10px; display: inline; float: left;">
		<h1> LAPORAN HASIL SURVEI</h1>
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
            <th>Hasil</th>
			<th>Kota</th>
			<th>Kelurahan</th>
            <th>Jalan</th>
			<th>STO</th>
			<th>Keterangan</th>
			<th>Nama Petugas Survei</th>
			<th>Tanggal Survei</th>
		</tr>
		<?php 
		$no = 1;
		if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
			$bln = $_GET['bulan'];
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE month(tanggal_sur)='$bln' AND year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");
		}
		else if(isset($_GET['tahun'])){
			$thn = $_GET['tahun'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");			
		}
		else if(isset($_GET['kota'])){
			$k = $_GET['kota'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE kota='$k' ORDER BY kota DESC ");			
		}
		else if(isset($_GET['sto'])){
			$s = $_GET['sto'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE sto='$s' ORDER BY sto DESC ");			
		}
		else if(isset($_GET['nama'])){
			$n = $_GET['nama'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE nama='$n' ORDER BY nama DESC ");			
		}
		else if(isset($_GET['hasil'])){
			$h = $_GET['hasil'];
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE hasil='$h' ORDER BY hasil DESC ");			
		}
		else
		{
			$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
			INNER JOIN tbpetugas_survei ON tbtiket_survei.id_petugas_survei = tbpetugas_survei.id_petugas_survei 
			INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket");
		}
		$no = 1;
		while($data = mysqli_fetch_array($query)){
		?>	
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['no_tiket']; ?></td>
			<td><?php echo $data['nama_pel']; ?></td>
			<td><?php echo $data['hasil']; ?></td>
            <td><?php echo $data['kota']; ?></td>
            <td><?php echo $data['kelurahan']; ?></td>
			<td><?php echo $data['jalan']; ?></td>
			<td><?php echo $data['sto']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td><?php echo $data['nama']; ?></td>
            <td><?php echo date('d M Y',strtotime($data['tanggal_sur']));?></td>
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