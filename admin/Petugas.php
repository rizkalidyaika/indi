<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Petugas Survei</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<?php 
	include("head.php");
	include ("koneksi.php");
?>
<div id="layoutSidenav_content">
    <main>
	<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Petugas Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Data Petugas Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<a href="petugas_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
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
			        	<th><a class="column_sort" id="id_petugas_survei" data-order="desc" href="#">ID Petugas</a></th>
						<th><a class="column_sort" id="nama" data-order="desc" href="#">Nama</a></th>
						<th><a class="column_sort" id="alamat" data-order="desc" href="#">Alamat</a></th>
						<th><a class="column_sort" id="kontak" data-order="desc" href="#">Kontak</a></th>
						<th><a class="column_sort" id="kota_ps" data-order="desc" href="#">Kota Tugas</a></th>
						<th class="btns">Action</th>
					</tr>	
			</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbpetugas_survei WHERE id_petugas_survei LIKE '%".$cari."%' OR nama LIKE '%".$cari."%' OR alamat LIKE '%".$cari."%' OR kontak LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbpetugas_survei");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_petugas_survei'];?></td>
						<td><?php echo $d['nama'];?></td>
						<td><?php echo $d['alamat'];?></td>
						<td><?php echo $d['kontak'];?></td>
						<td><?php echo $d['kota_ps'];?></td>
						<td class="btns">
							<a href="petugas_edit.php?id_petugas_survei=<?php echo $d['id_petugas_survei'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="petugas_hapus.php?id_petugas_survei=<?php echo $d['id_petugas_survei'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
