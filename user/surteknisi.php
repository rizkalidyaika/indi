<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Surat Teknisi</title>
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


<form id="div1"  action="surteknisi.php" method="get" class="form-inline">
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
			$query=mysqli_query($connection, "SELECT tgl_kp FROM stek GROUP BY year(tgl_kp)");
			while($ts=mysqli_fetch_array($query)){
			    $data = explode('-',$ts['tgl_kp']);
			    $tahun = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Tahun</option>
    		<option value="<?php echo $tahun?>" ><?php echo $tahun ?></option>
			<?php
			}
			?>
			</select>
			<select name="id_pembangunan" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT id_pembangunan FROM stek  GROUP BY id_pembangunan");
			while($no=mysqli_fetch_array($query)){
			    $data = explode('-',$no['id_pembangunan']);
			    $id_pembangunan = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih ID Pembangunan</option>
			<option value="<?php echo $id_pembangunan ?>"><?php echo $id_pembangunan ?></option>
			<?php
			}
			?>
			</select>
			<select name="tipe" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT tipe FROM stek GROUP BY tipe");
			while($tp=mysqli_fetch_array($query)){
			    $data = explode('-',$tp['tipe']);
			    $tipe = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Tipe</option>
			<option value="<?php echo $tipe ?>"><?php echo $tipe ?></option>
			<?php
			}
			?>
			</select>
			<select name="kota" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT kota FROM stek GROUP BY kota");
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
			<select name="nama_t" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT nama_t FROM stek GROUP BY nama_t");
			while($nt=mysqli_fetch_array($query)){
			    $data = explode('-',$nt['nama_t']);
			    $nama_t = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Petugas</option>
			<option value="<?php echo $nama_t ?>"><?php echo $nama_t ?></option>
			<?php
			}
			?>
			</select>
			<br><br>
			<a href="steknisi_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>
              <a href="cetak_steknisi.php  
		<?php 
			if(isset($_GET['bulan']) AND isset($_GET['tahun'])){	
				echo "?bulan=", $_GET['bulan'], "&tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['tahun'])){
				echo "?tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['id_pembangunan'])){
				echo "?id_pembangunan=", $_GET['id_pembangunan'];
			}
			else if(isset($_GET['tipe'])){
			echo "?tipe=", $_GET['tipe'];
			}
			else if(isset($_GET['kota'])){
				echo "?kota=", $_GET['kota'];
			}
			else if(isset($_GET['nama_t'])){
				echo "?nama_t=", $_GET['nama_t'];
			}
			else {
				echo "";
			}
			?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print Surat Tugas</a>
			<a href="cetak_kp.php
			  
			  <?php 
				  if(isset($_GET['bulan']) AND isset($_GET['tahun'])){	
					  echo "?bulan=", $_GET['bulan'], "&tahun=", $_GET['tahun'];
				  }
				  else if(isset($_GET['tahun'])){
					  echo "?tahun=", $_GET['tahun'];
				  }
				  else if(isset($_GET['id_pembangunan'])){
					  echo "?id_pembangunan=", $_GET['id_pembangunan'];
				  }
				  else if(isset($_GET['tipe'])){
					echo "?tipe=", $_GET['tipe'];
				  }
				  else if(isset($_GET['kota'])){
					  echo "?kota=", $_GET['kota'];
				  }
				  else if(isset($_GET['nama_t'])){
					  echo "?nama_t=", $_GET['nama_t'];
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
		 width:2000px;
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
                        <th><a class="column_sort" id="nama_t" data-order="desc" href="#">Nama Teknisi</a></th>
						<th><a class="column_sort" id="kontak_t" data-order="desc" href="#">Kontak</a></th>
						<th><a class="column_sort" id="email_t" data-order="desc" href="#">Email</a></th>
			        	<th><a class="column_sort" id="id_pembangunan" data-order="desc" href="#">ID Pembangunan</a></th>
						<th><a class="column_sort" id="vendor" data-order="desc" href="#">Vendor</a></th>
						<th><a class="column_sort" id="email_v" data-order="desc" href="#">Email</a></th>
						<th><a class="column_sort" id="tipe" data-order="desc" href="#">Tipe</a></th>
                        <th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
                        <th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="tgl_kp" data-order="desc" href="#">Tanggal Kunjungan</a></th>
                        <th><a class="column_sort" id="wkt_kp" data-order="desc" href="#">Waktu Kunjungan</a></th>
						<th><a class="column_sort" id="nama_k" data-order="desc" href="#">Nama Karyawan</a></th>
						<th><a class="column_sort" id="jabatan" data-order="desc" href="#">Jabatan</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
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
					else if(isset($_GET['tipe'])){
						$tp = $_GET['tipe'];
						$query = mysqli_query($connection,"SELECT * FROM stek INNER JOIN tbkaryawan WHERE tipe='$tp' ORDER BY tipe DESC ");			
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
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
                    <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama_t'];?></td>
						<td><?php echo $d['kontak_t'];?></td>
						<td class="btns"><a href="kirim_t.php?email_t="><?php echo $d['email_t'];?></a></td>
						<td><?php echo $d['id_pembangunan'];?></td>
						<td><?php echo $d['vendor'];?></td>
						<td class="btns"><a href="kirim_v.php?email_v="><?php echo $d['email_v'];?></a></td>
						<td><?php echo $d['tipe'];?></td>
                        <td><?php echo $d['kota'];?></td>
						<td><?php echo $d['kelurahan'];?></td>
                        <td><?php echo $d['jalan'];?></td>
						<td><?php echo $d['tgl_kp'];?> </td>
						<td><?php echo $d['wkt_kp'];?></td>
						<td><?php echo $d['nama_k'];?></td>
						<td><?php echo $d['jabatan'];?></td>
						<td class="btns">
							<a href="steknisi_edit.php?id_pembangunan=<?php echo $d['id_pembangunan'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="steknisi_hapus.php?id_pembangunan=<?php echo $d['id_pembangunan'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
