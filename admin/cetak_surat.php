<?php 
include 'koneksi.php';
?>

<?php 
	
	if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
    $bln = $_GET['bulan'];
    $thn = $_GET['tahun'];
    $query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbkaryawan WHERE month(tgl_ks)='$bln' AND year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");
  }
  else if(isset($_GET['tahun'])){
    $thn = $_GET['tahun'];
    $query = mysqli_query($connection,"SELECT * FROM tbsurat
                INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");			
  }
  else if(isset($_GET['no_tiket'])){
    $no = $_GET['no_tiket'];
    $query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbkaryawan WHERE no_tiket='$no' ORDER BY no_tiket DESC ");			
  }
  else if(isset($_GET['kota'])){
    $k = $_GET['kota'];
    $query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbkaryawan WHERE kota='$k' ORDER BY kota DESC ");			
  }
  else if(isset($_GET['nama'])){
    $n = $_GET['nama'];
    $query = mysqli_query($connection,"SELECT * FROM tbsurat
                INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE nama='$n' ORDER BY nama DESC ");			
  }
            else{
    $query = mysqli_query($connection,"SELECT * FROM tbsurat
                INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan ");
  }
  $no = 1;
  while($data = mysqli_fetch_array($query)){
    ?>	
 <html>
  <body onLoad="window.print()">
    <center>
    <center>
   
    <table width="670" border="0" align="center" cellpadding="2" cellspacing="2" id="tabel">

        <tr>
      <td colspan="7"><img src="ikon.png" width="800" height="100"></td>
        </tr>
		<td>
		<td>
        <tr>
          <td colspan="9" align="center"><strong>SURAT TUGAS</strong></td>
        </tr>
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
          <td valign="top">Nomor&nbsp;Tiket</td>
          <td valign="top">:</td>
          <td colspan="7" align="justify"><?php echo $data['no_tiket']; ?></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td colspan="7" align="justify">&nbsp;</td>
        </tr>
        <tr>
          
        </tr>
		<td>Yang&nbsp;bertanda&nbsp;tangan&nbsp;dibwah&nbsp;ini&nbsp;:</td>
		<tr>
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Nama </td>
          <td>: <?php echo $data['nama_k'];?> </td>
        <tr>
        <tr>
		<tr>
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Jabatan </td>
          <td>: <?php echo $data['jabatan'];?></td>
        <tr>
		<tr>
        <tr>
		 <tr>
          <td colspan="9" align="center"><strong>MENUGASKAN</strong></td>
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
          <td>Kepada</td>
          <td>:</td>
          <td colspan="2">Nama</td>
          <td>: <?php echo $data['nama']; ?></td>
         
        </tr>
        <tr>
		 
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Jabatan </td>
          <td>:&nbsp;Petugas&nbsp;Survei</td>
        <tr>
        
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
          <td valign="top">Untuk</td>
          <td valign="top">:</td>
          <td valign="top"></td>
          <td colspan="6">Melakukan Survei pemasangan</td>
        </tr>
        <tr>
		 <tr></tr>
     <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Nama Pelanggan </td>
        <td>: <?php echo $data['nama_pel'];?></td>
      <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Kota</td>
        <td>: <?php echo $data['kota'];?></td>
      <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Kelurahan</td>
        <td>: <?php echo $data['kelurahan'];?></td>
      <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Jalan</td>
        <td>: <?php echo $data['jalan'];?></td>
      <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td valign="top"></td>
          <td colspan="6">Setelah selesai melaksanakan tugas, melaporkan hasilnya kepada yang menugaskan.</td>
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
          <td align="right">&nbsp;</td>
          <td align="right">Ditetapkan di</td>
          <td align="right">:</td>
          <td>Banjarbaru</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">Pada Tanggal</td>
          <td align="right">:</td>
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
        <?php } ?>
      </table>
    </center>
  </body>
 </html>