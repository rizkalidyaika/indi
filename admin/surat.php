<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Pelanggan Survei Baru</title>
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
  <h1>Data Surat</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Data Surat</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
<form id="div1" action="surat.php" method="get" class="form-inline">
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
			$query=mysqli_query($connection, "SELECT tgl_ks FROM tbsurat Inner join tbpelanggan GROUP BY year(tgl_ks)");
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
			<a href="surat_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>
              <a href="cetak_surat.php
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
			else {
				echo "";
			}
			?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print Surat Tugas</a>
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
				  else {
					  echo "";
				  }
				  ?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print Surat Kunjungan</a>
<!--		<a href="javascript:printDiv('print');" class="btn-get-started scrollto">Cetak</a> -->
      		</form>
	 <br>
 <style>
	 .mytable{
		 margin-left:10px;
		 margin-top:30px;
		 width:1800px;
	 }
 </style>
 </head>
 <body>
	 <br>
	 <div class="mytable">
	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead class="table-dark">
                <tr>
                        <th ><a class="column_sort" id="" data-order="desc" href="#">No</a></th>
                        <th><a class="column_sort" id="nama" data-order="desc" href="#">Nama Petugas</a></th>
						<th><a class="column_sort" id="kontak" data-order="desc" href="#">Kontak</a></th>
						<th><a class="column_sort" id="email_s" data-order="desc" href="#">Email</a></th>
						<th><a class="column_sort" id="no_tiket" data-order="desc" href="#">No Tiket</a></th>
						<th><a class="column_sort" id="nama_pel" data-order="desc" href="#">Nama Pelanggan</a></th>
						<th><a class="column_sort" id="email" data-order="desc" href="#">Email</a></th>
                        <th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
                        <th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="tgl_ks" data-order="desc" href="#">Tanggal Kunjungan</a></th>
                        <th><a class="column_sort" id="wkt_ks" data-order="desc" href="#">Waktu Kunjungan</a></th>
						<th><a class="column_sort" id="nama_k" data-order="desc" href="#">Nama Karyawan</a></th>
						<th><a class="column_sort" id="jabatan" data-order="desc" href="#">Jabatan</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbkaryawan WHERE month(tgl_ks)='$bln' AND year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbsurat
                        INNER JOIN tbpelanggan ON tbsurat.no_tiket = tbpelanggan.no_tiket INNER JOIN tbkaryawan WHERE year(tgl_ks)='$thn' ORDER BY tgl_ks DESC");			
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
						$query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbpelanggan ON tbsurat.no_tiket = tbpelanggan.no_tiket INNER JOIN tbkaryawan WHERE nama='$n' ORDER BY nama DESC ");			
					}
                    else{
						$query = mysqli_query($connection,"SELECT * FROM tbsurat INNER JOIN tbpelanggan ON tbsurat.no_tiket = tbpelanggan.no_tiket INNER JOIN tbkaryawan ");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
                    <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama'];?></td>
						<td><?php echo $d['kontak'];?></td>
						<td class="btns"><a href="kirim_s.php?email_s="><?php echo $d['email_s'];?></a></td>
						<td><?php echo $d['no_tiket'];?></td>
						<td><?php echo $d['nama_pel'];?></td>
						<td class="btns"><a href="kirim_pel.php?email="><?php echo $d['email'];?></a></td>
                        <td><?php echo $d['kota'];?></td>
						<td><?php echo $d['kelurahan'];?></td>
                        <td><?php echo $d['jalan'];?></td>
						<td><?php echo $d['tgl_ks'];?> </td>
						<td><?php echo $d['wkt_ks'];?></td>
						<td><?php echo $d['nama_k'];?></td>
						<td><?php echo $d['jabatan'];?></td>
						<td class="btns">
							<a href="surat_edit.php?no_tiket=<?php echo $d['no_tiket'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="surat_hapus.php?no_tiket=<?php echo $d['no_tiket'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
							<br></td>
						
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
