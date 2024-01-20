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
  <h1>Data Order Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Open Tiket</li>
	  <li class="breadcrumb-item active">Data Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

<a href="tiketsurvei_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>

 <style>
	 .mytable{
		 margin-left:10px;
		 margin-top:30px;
		 width:1700px;
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
			        	<th><a class="column_sort" id="no_tiket" data-order="desc" href="#">No Tiket</a></th>
						<th><a class="column_sort" id="tipe_identitas" data-order="desc" href="#">Tipe Identitas</a></th>
						<th><a class="column_sort" id="no_identitas" data-order="desc" href="#">No Identitas</a></th>
						<th><a class="column_sort" id="nama_pel" data-order="desc" href="#">Nama</a></th>
						<th><a class="column_sort" id="kontak_pel" data-order="desc" href="#">Kontak</a></th>
						<th><a class="column_sort" id="email" data-order="desc" href="#">email</a></th>
						<th><a class="column_sort" id="tempat_lahir" data-order="desc" href="#">Tempat Lahir</a></th>
						<th><a class="column_sort" id="tanggal_lahir" data-order="desc" href="#">Tanggal Lahir</a></th>
						<th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
						<th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="paket" data-order="desc" href="#">Paket</a></th>
                        <th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
                        <th><a class="column_sort" id="nama_sales" data-order="desc" href="#">Nama Sales</a></th>
						<th><a class="column_sort" id="tanggal_sur" data-order="desc" href="#">Tanggal Survei</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbpelanggan WHERE no_tiket LIKE '%".$cari."%' OR no_identitas LIKE '%".$cari."%' OR nama_pel LIKE '%".$cari."%' OR kontak_pel LIKE '%".$cari."%' OR jalan LIKE '%".$cari."%' OR nama_sales LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbpelanggan");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
                    <td><?php echo $no++;?></td>
						<td><?php echo $d['no_tiket'];?></td>
						<td><?php echo $d['tipe_identitas'];?></td>
						<td><?php echo $d['no_identitas'];?></td>
						<td><?php echo $d['nama_pel'];?></td>
					    <td><?php echo $d['kontak_pel'];?></td>
						<td><?php echo $d['email'];?></td>
						<td><?php echo $d['tempat_lahir'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_lahir']));?></td>
						<td><?php echo $d['kota'];?></td>
						<td><?php echo $d['kelurahan'];?></td>
						<td><?php echo $d['jalan'];?></td>
						<td><?php echo $d['paket'];?></td>
                        <td><?php echo $d['sto'];?></td>
                        <td><?php echo $d['nama_sales'];?></td>
						<td><?php echo date('d M Y',strtotime($d['tanggal_sur']));?></td>
						<td class="btns">
							<a href="tiketsurvei_edit.php?no_tiket=<?php echo $d['no_tiket'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="tiketsurvei_hapus.php?no_tiket=<?php echo $d['no_tiket'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
