<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Status Survei</title>
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
  <h1>Data Close Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Close Tiket</li>
	  <li class="breadcrumb-item active">Data Close Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<a href="updatesurvei_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
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
						<th><a class="column_sort" id="id_petugas_survei" data-order="desc" href="#">ID Petugas Survei</a></th>
						<th><a class="column_sort" id="hasil" data-order="desc" href="#">Hasil</a></th>
						<th><a class="column_sort" id="keterangan" data-order="desc" href="#">Keterangan</a></th>
						<th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
						<th><a class="column_sort" id="odc" data-order="desc" href="#">ODC</a></th>
						<th><a class="column_sort" id="odp" data-order="desc" href="#">ODP</a></th>
						<th><a class="column_sort" id="port" data-order="desc" href="#">Port</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th><a class="column_sort" id="jam" data-order="desc" href="#">Jam</a></th>
						<th><a class="column_sort" id="tanggal_closesur" data-order="desc" href="#">Tanggal Up Tiket</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei WHERE no_tiket LIKE '%".$cari."%' OR id_petugas_survei LIKE '%".$cari."%' OR hasil LIKE '%".$cari."%' OR keterangan LIKE '%".$cari."%' OR sttus LIKE '%".$cari."%' OR tanggal_closesur LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_survei");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
                        <td><?php echo $no++;?></td>
						<td><?php echo $d['no_tiket'];?></td>
						<td><?php echo $d['id_petugas_survei'];?></td>
						<td><?php echo $d['hasil'];?></td>
						<td><?php echo $d['keterangan'];?></td>
					    <td><?php echo $d['sto'];?></td>
						<td><?php echo $d['odc'];?></td>
						<td><?php echo $d['odp'];?></td>
						<td><?php echo $d['port'];?></td>
						<td><?php echo $d['sttus'];?></td>
						<td><?php echo $d['jam'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_closesur']));?></td>
						<td class="btns">
							<a href="updatesurvei_hapus.php?no_tiket=<?php echo $d['no_tiket'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
