<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Close Tiket Pembangunan</title>
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
  <h1>Data Close Pembangunan </h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Close Tiket</li>
	  <li class="breadcrumb-item active">Data Close Pembangunan</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<a href="closepem_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>	
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
			        	<th><a class="column_sort" id="id_pembangunan" data-order="desc" href="#">ID Pembangunan</a></th>
						<th><a class="column_sort" id="nama_t" data-order="desc" href="#">Petugas Vendor</a></th>
						<th><a class="column_sort" id="hasil" data-order="desc" href="#">Hasil</a></th>
						<th><a class="column_sort" id="keterangan" data-order="desc" href="#">Keterangan</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th><a class="column_sort" id="tanggal_close" data-order="desc" href="#">Tanggal Close</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem WHERE id_pembangunan LIKE '%".$cari."%' OR petugas_vendor LIKE '%".$cari."%' OR hasil LIKE '%".$cari."%' OR status LIKE '%".$cari."%' OR tanggal_close LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_pem");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_pembangunan'];?></td>
						<td><?php echo $d['nama_t'];?></td>
						<td><?php echo $d['hasil'];?></td>
						<td><?php echo $d['keterangan'];?></td>
					    <td><?php echo $d['sttus'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_close']));?></td>
						<td class="btns">
							<a href="closepem_hapus.php?id_pembangunan=<?php echo $d['id_pembangunan'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
