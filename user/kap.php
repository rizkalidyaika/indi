<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Teknik</title>
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
  <h1>Data Teknik</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Data Teknik</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
		<a href="kap_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
		<style>
	 .mytable{
		 margin-left:10px;
		 margin-top:30px;
		 width:900px;
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
			        	<th><a class="column_sort" id="id_datek" data-order="desc" href="#">ID Datek</a></th>
						<th><a class="column_sort" id="no_tel" data-order="desc" href="#">No Telepon</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th class="btns">Action</th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$query = mysqli_query($connection,"SELECT * FROM tbdatateknik WHERE id_datek LIKE '%".$cari."%' OR no_tel LIKE '%".$cari."%' OR stts LIKE '%".$cari."%'");										
					}else{
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_datek'];?></td>
						<td><?php echo $d['no_tel'];?></td>
						<td><?php echo $d['sttus'];?></td>
						<td class="btns">
							<a href="kap_edit.php?id_datek=<?php echo $d['id_datek'];?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<br>
							<a href="kap_hapus.php?id_datek=<?php echo $d['id_datek'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a><br>
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
