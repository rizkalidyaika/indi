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
else if(isset($_GET['kelurahan'])){
 $ke = $_GET['kelurahan'];
 $query = mysqli_query($connection,"SELECT * FROM tbsurat
             INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE kelurahan='$ke' ORDER BY kelurahan DESC ");			
}
else if(isset($_GET['jalan'])){
$j = $_GET['jalan'];
$query = mysqli_query($connection,"SELECT * FROM tbsurat
            INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE jalan='$j' ORDER BY jalan DESC ");			
}
else if(isset($_GET['kontak'])){
$kn = $_GET['kontak'];
$query = mysqli_query($connection,"SELECT * FROM tbsurat
            INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE kontak='$kn' ORDER BY kontak DESC ");			
}
else if(isset($_GET['tgl_ks'])){
$ts = $_GET['tgl_ks'];
$query = mysqli_query($connection,"SELECT * FROM tbsurat
            INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE tgl_ks='$ts' ORDER BY tgl_ks DESC ");			
}
else if(isset($_GET['wkt_ks'])){
$ws = $_GET['wkt_ks'];
$query = mysqli_query($connection,"SELECT * FROM tbsurat
            INNER JOIN tbpelanggan ON tbpelanggan.no_tiket = tbsurat.no_tiket INNER JOIN tbkaryawan WHERE wkt_ks='$ws' ORDER BY wkt_ks DESC ");			

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
          <td colspan="9" align="center"><strong>SURAT KUNJUNGAN</strong></td>
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
          <td valign="top">Perihal&nbsp;</td>
          <td valign="top">:&nbsp;</td>
          <td colspan="7" align="justify">Permohonan kunjungan Survei &nbsp;</td>
        </tr>
        <tr>
          
        </tr>
		<td>Kepada&nbsp;Pelanggan&nbsp;:</td>
		<tr>
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Nama </td>
          <td>: <?php echo $data['nama_pel'];?> </td>
        <tr>
        <tr>
		<tr>
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Kota </td>
          <td>: <?php echo $data['kota'];?></td>
        <tr>
		<tr>
        <tr>
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Kelurahan </td>
          <td>: <?php echo $data['kelurahan'];?></td>
        <tr>
		<tr>
        <tr> 
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Jalan</td>
          <td >: <?php echo $data['jalan'];?></td>
        <tr>
		<tr>
        <tr>   
		 <tr>
         <td valign="top"></td>
          <td colspan="6">Sehubungan&nbsp;dengan&nbsp;survei &nbsp;sebelum&nbsp; pemasangan&nbsp; jaringan,&nbsp; maka &nbsp;kami&nbsp; memohon &nbsp;izin &nbsp;agar&nbsp; petugas &nbsp;kami.</td>
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
          <td colspan="2">Nama</td>
          <td>: <?php echo $data['nama']; ?></td>
         
        </tr>
        <tr>
		   <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2">Kontak </td>
          <td>: <?php echo $data['kontak']; ?></td>
        <tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
        <td valign="top"></td>
          <td colspan="6">dapat melakukan kunjungan pada</td>
        </tr>
        <tr>
		 <tr></tr>
     <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Hari/Tanggal </td>
        <td>: <?php echo $data['tgl_ks'];?></td>
      <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Waktu</td>
        <td>: <?php echo $data['wkt_ks'];?></td>
      <tr>

          <td valign="top"></td>
          <td colspan="6">Besar harapan kami untuk dapat diterima. harap melakukan Konfirmasi apabila ada perubahan. Demikian surat permohonan ini kami sampaikan. Atas perhatian dan kerja sama Bapak/ Ibu, kami ucapkan terima kasih.</td>
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