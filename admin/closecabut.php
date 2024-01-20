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
  <h1>Data Close Cabut </h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Close Tiket</li>
	  <li class="breadcrumb-item active">Data Close Cabut</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<a href="closecabut_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>	
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
						<th><a class="column_sort" id="no_tel" data-order="desc" href="#">No Telepon</a></th>
						<th><a class="column_sort" id="no_inet" data-order="desc" href="#">No Internet</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th><a class="column_sort" id="tanggal_close" data-order="desc" href="#">Tanggal Close</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut WHERE id_cabut LIKE '%".$cari."%' OR no_tel LIKE '%".$cari."%' OR no_inet LIKE '%".$cari."%' OR sttus LIKE '%".$cari."%' OR tanggal_close LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbupdate_cabut");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_cabut'];?></td>
						<td><?php echo $d['no_tel'];?></td>
						<td><?php echo $d['no_inet'];?></td>
					    <td><?php echo $d['sttus'];?></td>
                        <td><?php echo date('d M Y',strtotime($d['tanggal_close']));?></td>
						<td class="btns">
							<a href="closecabut_hapus.php?id_cabut=<?php echo $d['id_cabut'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
