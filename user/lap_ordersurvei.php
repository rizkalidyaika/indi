<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan Order Survei</title>
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
  <h1>Laporan Order Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Laporan</li>
	  <li class="breadcrumb-item active"> Order Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

		<form id="div1"  action="lap_ordersurvei.php" method="get" class="form-inline">

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
			$query=mysqli_query($connection, "SELECT tanggal_sur FROM tbpelanggan GROUP BY year(tanggal_sur)");
			while($t=mysqli_fetch_array($query)){
			    $data = explode('-',$t['tanggal_sur']);
			    $tahun = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Tahun</option>
    		<option value="<?php echo $tahun?>" ><?php echo $tahun ?></option>
			<?php
			}
			?>
			</select>
			<select name="kota" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT kota FROM tbpelanggan GROUP BY kota");
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
			<select name="sto" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT sto FROM tbpelanggan GROUP BY sto");
			while($s=mysqli_fetch_array($query)){
			    $data = explode('-',$s['sto']);
			    $sto = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih STO</option>
			<option value="<?php echo $sto ?>"><?php echo $sto ?></option>
			<?php
			}
			?>
			</select>
			<select name="nama_sales" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT nama_sales FROM tbpelanggan GROUP BY nama_sales");
			while($sales=mysqli_fetch_array($query)){
			    $data = explode('-',$sales['nama_sales']);
			    $sales = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Sales</option>
			<option value="<?php echo $sales ?>"><?php echo $sales ?></option>
			<?php
			}
			?>
			</select>
			<br><br>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>
<!--		<a href="javascript:printDiv('print');" class="btn-get-started scrollto">Cetak</a> -->
      	
		<a href="cetak_lapordersurvei.php
		<?php 
			if(isset($_GET['bulan']) AND isset($_GET['tahun'])){	
				echo "?bulan=", $_GET['bulan'], "&tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['tahun'])){
				echo "?tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['kota'])){
				echo "?kota=", $_GET['kota'];
			}
			else if(isset($_GET['sto'])){
				echo "?sto=", $_GET['sto'];
			}
			else if(isset($_GET['nama_sales'])){
			echo "?nama_sales=", $_GET['nama_sales'];
			}
			else {
				echo "";
			}
			?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print</a>
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
						<th><a class="column_sort" id="kontak_pel" data-order="desc" href="#">Kontak</a></th>
						<th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
						<th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th><a class="column_sort" id="nama_sales" data-order="desc" href="#">Nama Sales</a></th>
                        <th><a class="column_sort" id="tanggal_sur" data-order="desc" href="#">Tanggal Survei</a></th>	
						<th><a class="column_sort" id="tanggal_closesur" data-order="desc" href="#">Tanggal Up Tiket</a></th>
						<th class="btns"></th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['bulan'])AND isset($_GET['tahun'])){
						$bln = $_GET['bulan'];
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE month(tanggal_sur)='$bln' AND year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");
					}
					else if(isset($_GET['tahun'])){
						$thn = $_GET['tahun'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE year(tanggal_sur)='$thn' ORDER BY tanggal_sur DESC");			
					}
					else if(isset($_GET['kota'])){
						$k = $_GET['kota'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE kota='$k' ORDER BY kota DESC ");			
					}
					else if(isset($_GET['sto'])){
						$st = $_GET['sto'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE sto='$st' ORDER BY sto DESC ");			
					}
					else if(isset($_GET['nama_sales'])){
						$sales = $_GET['nama_sales'];
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket WHERE nama_sales='$sales' ORDER BY nama_sales DESC ");			
					}
					else{
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei
						INNER JOIN tbpelanggan ON tbtiket_survei.no_tiket = tbpelanggan.no_tiket");
						}
						$no = 1;
						while($data = mysqli_fetch_array($query)){
						?>	
					<tr>
						<td><?php echo $no++;?></td>
                        <td><?php echo $data['no_tiket'];?></td>
						<td><?php echo $data['nama_pel'];?></td>
						<td><?php echo $data['kontak_pel'];?></td>
						<td><?php echo $data['kota'];?></td>
					    <td><?php echo $data['kelurahan'];?></td>
						<td><?php echo $data['jalan'];?></td>
						<td><?php echo $data['sto'];?></td>
						<td><?php echo $data['sttus'];?></td>
						<td><?php echo $data['nama_sales'];?></td>
                        <td><?php echo date('d M Y',strtotime($data['tanggal_sur']));?></td>  
                        <td><?php echo date('d M Y',strtotime($data['tanggal_closesur']));?></td>
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
