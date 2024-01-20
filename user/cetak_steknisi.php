<?php 
include 'koneksi.php';
?>

<?php 
	if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
    $bln = $_GET['bulan'];
    $thn = $_GET['tahun'];
    $query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbkaryawan WHERE month(tgl_kp)='$bln' AND year(tgl_kp)='$thn' ORDER BY tgl_kp DESC");
  }
  else if(isset($_GET['tahun'])){
    $thn = $_GET['tahun'];
    $query = mysqli_query($connection,"SELECT * FROM stek
                INNER JOIN tbpembangunan ON tbpelanggan.id_pembangunan = stek.id_pembangunan INNER JOIN tbkaryawan WHERE year(tgl_kp)='$thn' ORDER BY tgl_kp DESC");			
  }
  else if(isset($_GET['id_pembangunan'])){
    $ip = $_GET['id_pembangunan'];
    $query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbkaryawan WHERE id_pembangunan='$ip' ORDER BY id_pembangunan DESC ");			
  }
  else if(isset($_GET['kota'])){
    $k = $_GET['kota'];
    $query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbkaryawan WHERE kota='$k' ORDER BY kota DESC ");			
  }
  else if(isset($_GET['nama_t'])){
    $nt = $_GET['nama_t'];
    $query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbkaryawan WHERE nama_t='$nt' ORDER BY nama_t DESC ");			
  }
            else{
    $query = mysqli_query($connection,"SELECT * FROM stek
                INNER JOIN tbpembangunan ON tbpembangunan.id_pembangunan = stek.id_pembangunan INNER JOIN tbkaryawan ");
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
          <td valign="top">ID&nbsp;Pembangunan</td>
          <td valign="top">:</td>
          <td colspan="7" align="justify"><?php echo $data['id_pembangunan']; ?></td>
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
          <td>: <?php echo $data['nama_t']; ?></td>
         
        </tr>
        <tr>
		 
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Jabatan </td>
          <td>:&nbsp;Teknisi</td>
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
          <td colspan="6">Melakukan pemasangan</td>
        </tr>
        <tr>
		 <tr></tr>
     <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Vendor </td>
        <td>: <?php echo $data['vendor'];?></td>
      <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Tipe </td>
        <td>:&nbsp;<?php echo $data['tipe'];?></td>
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