<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<title> Data Akun</title> 
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="favicon.png" rel="icon">
</head>
<?php 
include 'head.php';
include 'koneksi.php';
$query = mysqli_query($connection,"SELECT * FROM tbuser ORDER BY level DESC");
?>
<link href="bootstrap.min.css" rel="stylesheet">
 <link href="dataTables.bootstrap.css" rel="stylesheet">
 <link href="dataTables.responsive.css" rel="stylesheet">
<div id="layoutSidenav_content">
    <main>
	<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Akun</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Account Settings</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

		<a href="user_input.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
		<style>
	 .mytable{
		 margin-left:10px;
		 margin-top:10px;
		 width:1000px;
	 }
 </style>
 </head>
 <body>
	 <br>
	 <div class="mytable">
	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead class="table-dark">
					<thead>
					<tr>
						<th>ID</th> 
						<th>Akses</th> 
						<th>Email</th>
						<th>Password</th>
						<th class="btns">Action</th>
					</tr>
					</thead>
					<?php if(mysqli_num_rows($query)>0){ ?>
					<?php
						$no = 1;
						while($d = mysqli_fetch_array($query)){
					?>
					<tr class="align-middle">
						<td><?php echo $d['x'];?></td>
						<td><?php echo $d['level'];?></td>
						<td><?php echo $d['email'];?></td>
						<td><input type="password" value="<?php echo $d['pass'];?>"></td>
						<td class="btns">
							<a href="user_edit.php?x=<?php echo $d['x']; ?>"><div class="btn btn-success"><i class="fas fa-pencil"></i>Edit</div></a>
							<a href="user_hapus.php?x=<?php echo $d['x']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><div class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</div></a>
						</td>
					</tr>
					<?php $no++; } ?>
					<?php } ?>
				</table>
				</div>
</main>
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
</html>