<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Tiket Pelanggan Cabut</title>
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
  <h1>Data Cabut Jaringan</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Open Tiket</li>
	  <li class="breadcrumb-item active">Data Cabut Jaringan</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

		<a href="openpelcabut_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
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
			        	<th><a class="column_sort" id="id_cabut" data-order="desc" href="#">ID Cabut</a></th>
						<th><a class="column_sort" id="nama_pel" data-order="desc" href="#">Nama</a></th>
						<th><a class="column_sort" id="no_tel" data-order="desc" href="#">No Telepon</a></th>
						<th><a class="column_sort" id="no_inet" data-order="desc" href="#">No Internet</a></th>
						<th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
						<th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
						<th><a class="column_sort" id="alasan_cabut" data-order="desc" href="#">Alasan Cabut</a></th>
						<th><a class="column_sort" id="paket" data-order="desc" href="#">Paket</a></th>
						<th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
						<th><a class="column_sort" id="odc" data-order="desc" href="#">ODC</a></th>
						<th><a class="column_sort" id="odp" data-order="desc" href="#">ODP</a></th>
						<th><a class="column_sort" id="port" data-order="desc" href="#">Port</a></th>
                        <th><a class="column_sort" id="tanggal_cabut" data-order="desc" href="#">Tanggal Tiket</a></th>
						<th class="btns">Action</th>
					</tr>	
			</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbtiket_cabut WHERE id_cabut LIKE '%".$cari."%' OR nama_pel LIKE '%".$cari."%' OR no_tel LIKE '%".$cari."%' OR no_inet LIKE '%".$cari."%' OR alasan_cabut LIKE '%".$cari."%' OR jalan LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbtiket_cabut");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_cabut'];?></td>
						<td><?php echo $d['nama_pel'];?></td>
						<td><?php echo $d['no_tel'];?></td>
						<td><?php echo $d['no_inet'];?></td>
						<td><?php echo $d['kota'];?></td>
						<td><?php echo $d['kelurahan'];?></td>
						<td><?php echo $d['jalan'];?></td>
						<td><?php echo $d['alasan_cabut'];?></td>
						<td><?php echo $d['paket'];?></td>
						<td><?php echo $d['sto'];?></td>
					    <td><?php echo $d['odc'];?></td>
						<td><?php echo $d['odp'];?></td>
						<td><?php echo $d['port'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_cabut']));?></td>
						<td class="btns">
							<a href="openpelcabut_edit.php?id_cabut=<?php echo $d['id_cabut'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="openpelcabut_hapus.php?id_cabut=<?php echo $d['id_cabut'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
