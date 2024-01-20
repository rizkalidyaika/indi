<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Pembangunan</title>
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
  <h1>Data Pembangunan </h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Open Tiket</li>
	  <li class="breadcrumb-item active">Data Pembangunan</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
	
		<a href="openpem_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
		<link href="bootstrap.min.css" rel="stylesheet">
 <link href="dataTables.bootstrap.css" rel="stylesheet">
 <link href="dataTables.responsive.css" rel="stylesheet">
  
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
			<thead>
                <tr> 
						<th><a class="column_sort" id="" data-order="desc" href="#">No</a></th>
			        	<th><a class="column_sort" id="id_pembangunan" data-order="desc" href="#">ID Pembangunan</a></th>
						<th><a class="column_sort" id="vendor" data-order="desc" href="#">Vendor</a></th>
						<th><a class="column_sort" id="email_v" data-order="desc" href="#">Email</a></th>
						<th><a class="column_sort" id="tipe" data-order="desc" href="#">Tipe</a></th>
						<th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
						<th><a class="column_sort" id="odc" data-order="desc" href="#">ODC</a></th>
						<th><a class="column_sort" id="odp" data-order="desc" href="#">ODP</a></th>
						<th><a class="column_sort" id="kapasitas" data-order="desc" href="#">Kapasitas</a></th>
						<th><a class="column_sort" id="kota" data-order="desc" href="#">Kota</a></th>
						<th><a class="column_sort" id="kelurahan" data-order="desc" href="#">Kelurahan</a></th>
						<th><a class="column_sort" id="jalan" data-order="desc" href="#">Jalan</a></th>
                        <th><a class="column_sort" id="tanggal_pem" data-order="desc" href="#">Tanggal Tiket</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbpembangunan WHERE id_pembangunan LIKE '%".$cari."%' OR vendor LIKE '%".$cari."%' OR tipe LIKE '%".$cari."%' OR sto LIKE '%".$cari."%' OR odc LIKE '%".$cari."%' OR jalan LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbpembangunan");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_pembangunan'];?></td>
						<td><?php echo $d['vendor'];?></td>
						<td><?php echo $d['email_v'];?></td>
						<td><?php echo $d['tipe'];?></td>
						<td><?php echo $d['sto'];?></td>
					    <td><?php echo $d['odc'];?></td>
						<td><?php echo $d['odp'];?></td>
						<td><?php echo $d['kapasitas'];?></td>
						<td><?php echo $d['kota'];?></td>
						<td><?php echo $d['kelurahan'];?></td>
						<td><?php echo $d['jalan'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_pem']));?></td>
						<td class="btns">
							<a href="openpem_edit.php?id_pembangunan=<?php echo $d['id_pembangunan'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="openpem_hapus.php?id_pembangunan=<?php echo $d['id_pembangunan'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
