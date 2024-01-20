<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan Performansi Vendor</title>
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
  <h1>Laporan Performansi Vendor</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Laporan</li>
	  <li class="breadcrumb-item active"> Laporan Performansi Vendor</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

		<form id="div1"  action="ven.php" method="get" class="form-inline">
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
			$query=mysqli_query($connection, "SELECT tanggal_pem FROM tbpembangunan GROUP BY year(tanggal_pem)");
			while($t=mysqli_fetch_array($query)){
			    $data = explode('-',$t['tanggal_pem']);
			    $tahun = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih Tahun</option>
    		<option value="<?php echo $tahun?>" ><?php echo $tahun ?></option>
			<?php
			}
			?>
			</select>
			<select name="tipe" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT tipe FROM tbpembangunan GROUP BY tipe");
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
			<br><br>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>
<!--		<a href="javascript:printDiv('print');" class="btn-get-started scrollto">Cetak</a> -->
      	
		<a href="cetak_ven.php
		<?php 
			if(isset($_GET['bulan']) AND isset($_GET['tahun'])){	
				echo "?bulan=", $_GET['bulan'], "&tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['tahun'])){
				echo "?tahun=", $_GET['tahun'];
			}
			else if(isset($_GET['tipe'])){
				echo "?tipe=", $_GET['tipe'];
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
						<th><a class="column_sort" id="vendor" data-order="desc" href="#">Vendor</a></th>
                        <th><a class="column_sort" id="tipe" data-order="desc" href="#">Tipe</a></th>
						<th><a class="column_sort" id="tanggal_close" data-order="desc" href="#">Tanggal Close</a></th>
					</tr>	
					</thead>
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
