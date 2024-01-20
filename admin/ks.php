<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surat Kunjungan Survei</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<?php 
	include("head.php");
	include ("koneksi.php");
?>
<link href="bootstrap.min.css" rel="stylesheet">
 <link href="dataTables.bootstrap.css" rel="stylesheet">
 <link href="dataTables.responsive.css" rel="stylesheet">
<div id="layoutSidenav_content">
    <main>
	<main id="main" class="main">

<div class="pagetitle">
  <h1>Surat Kunjungan Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Laporan</li>
	  <li class="breadcrumb-item active"> Kunjungan Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<form id="div1"  action="ks.php" method="get" class="form-inline">
			<select name="bulan" class="btn btn-danger">
			<option value="" selected disabled hidden>Pilih Bulan</option>
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
			</select>
			<select name="tahun" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT tgl_ks FROM tbsurat GROUP BY year(tgl_ks)");
			while($ts=mysqli_fetch_array($query)){
			    $data = explode('-',$ts['tgl_ks']);
			    $tahun = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Tahun</option>
    		<option value="<?php echo $tahun?>" ><?php echo $tahun ?></option>
			<?php
			}
			?>
			</select>
			<select name="no_tiket" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT no_tiket FROM tbsurat GROUP BY no_tiket");
			while($no=mysqli_fetch_array($query)){
			    $data = explode('-',$no['no_tiket']);
			    $no_tiket = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih No Tiket</option>
			<option value="<?php echo $no_tiket ?>"><?php echo $no_tiket ?></option>
			<?php
			}
			?>
			</select>
			<select name="kota" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT kota FROM tbsurat GROUP BY kota");
			while($k=mysqli_fetch_array($query)){
			    $data = explode('-',$k['kota']);
			    $kota = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Kota</option>
			<option value="<?php echo $kota ?>"><?php echo $kota ?></option>
			<?php
			}
			?>
			</select>
			<select name="nama" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT nama FROM tbsurat GROUP BY nama");
			while($n=mysqli_fetch_array($query)){
			    $data = explode('-',$n['nama']);
			    $nama = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Petugas</option>
			<option value="<?php echo $nama ?>"><?php echo $nama ?></option>
			<?php
			}
			?>
			</select>
			<br><br>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>	
		<a href="cetak_ks.php
		<?php 
			if(isset($_GET['bulan']) AND isset($_GET['tahun'])){	
				echo "?bulan=", $_GET['bulan'], "&tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['tahun'])){
				echo "?tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['no_tiket'])){
				echo "?no_tiket=", $_GET['no_tiket'];
			}
			else if(isset($_GET['kota'])){
				echo "?kota=", $_GET['kota'];	
			}
			else if(isset($_GET['nama'])){
				echo "?nama=", $_GET['nama'];
			}
			else if(isset($_GET['kelurahan'])){
				echo "?kelurahan=", $_GET['kelurahan'];
			}
			else if(isset($_GET['jalan'])){
				echo "?jalan=", $_GET['jalan'];	
			}
			else if(isset($_GET['kontak'])){
				echo "?kontak=", $_GET['kontak'];
			}
			else {
				echo "";
			}
			?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print</a>	
			</form>
    <style>
	 .mytable{
		 margin-left:10px;
		 margin-top:30px;
		 width:1500px;
	 }
 </style>
 </head>
 <body>
	 <br>
	 <div class="mytable">
	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead class="table-dark">
                <tr> 
                		<th><a class="column_sort" id="" data-order="desc" href="#">No</a></th>
			        	<th><a class="column_sort" id="no_tiket" data-order="desc" href="#">No Tiket</a></th>
						<th><a class="column_sort" id="nama_pel" data-order="desc" href="#">Nama</a></th>
						<th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
						<th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="nama" data-order="desc" href="#">Nama Petugas Survei</a></th>
						<th><a class="column_sort" id="kontak" data-order="desc" href="#">kontak</a></th>
						<th><a class="column_sort" id="tgl_ks" data-order="desc" href="#">Tanggal Kunjungan</a></th>
						<th><a class="column_sort" id="wkt_ks" data-order="desc" href="#">Waktu Kunjungan</a></th>
						<th></th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat WHERE month(tgl_ks)='$bln' AND year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat WHERE year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");			
					}
					else if(isset($_GET['no_tiket'])){
						$s = $_GET['no_tiket'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat  WHERE no_tiket='$no' ORDER BY no_tiket DESC ");			
					}
					else if(isset($_GET['kota'])){
						$k = $_GET['kota'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat WHERE kota='$k' ORDER BY kota DESC ");			
					}
					else if(isset($_GET['nama'])){
						$n = $_GET['nama'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat WHERE nama='$n' ORDER BY nama DESC ");			
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
				   else
					{
						$query = mysqli_query($connection,"SELECT * FROM tbsurat  ");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
                        <td><?php echo $d['no_tiket'];?></td>
						<td><?php echo $d['nama_pel'];?></td>
						<td><?php echo $d['kota'];?></td>
					    <td><?php echo $d['kelurahan'];?></td>
						<td><?php echo $d['jalan'];?></td>
						<td><?php echo $d['nama'];?></td>
						<td><?php echo $d['kontak'];?></td>
						<td><?php echo date('d M Y',strtotime($d['tgl_ks']));?></td>
						<td><?php echo $d['wkt_ks'];?></td>
						<td class="btns">
						</td>
					</tr>
					<?php  } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
				
            </div>
			<script src="jquery.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.min.js"></script>
    <script src="dataTables.responsive.js"></script>
	<script src="bootstrap.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    </body>
</html>
