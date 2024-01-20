<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Tiket Pembangunan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php include 'head.php';
include 'koneksi.php';
$id_pembangunan = $_GET['id_pembangunan'];
$query = mysqli_query($connection,"SELECT * FROM tbpembangunan WHERE id_pembangunan ='$id_pembangunan'");
while($d = mysqli_fetch_array($query)){
?>
<main id="main" class="main">
	
	<div class="pagetitle">
  <h1>Edit Data Pembangunan</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">open tiket</li>
	  <li class="breadcrumb-item active">Edit Data Pembangunan</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
	<div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Edit Data di Kolom ini</h5>
             
              <link href="bootstrap.min.css" rel="stylesheet">
 <link href="dataTables.bootstrap.css" rel="stylesheet">
 <link href="dataTables.responsive.css" rel="stylesheet">
 <style>
	 .mytable{
		 margin-left:50px;
		 margin-top:30px;
		 width:1500px;
	 }
 </style>
	<form action="openpem_update.php" method="post">
		
	<form class="row g-3">
			<div class="col-md-12">
					<label for="id_pembangunan" class="form-label">ID Pembangunan</label>
					<input type="text" class="form-control" name="id_pembangunan" value="<?php echo $d['id_pembangunan'];?>">
					<input type="hidden" name="id" value="<?php echo $d['id_pembangunan'];?>">
			</div>
			<div class="col-md-12">
					<label for="vendor" class="form-label">Vendor</label>
					<input type="text" class="form-control" name="vendor" value="<?php echo $d['vendor'];?>">	
			</div>
			<div class="col-md-12">
					<label for="email_v" class="form-label">Email</label>
					<input type="text" class="form-control" name="email_v" value="<?php echo $d['email_v'];?>">	
			</div>
			<div class="col-md-6">
                  <label for="tipe" class="form-label">Tipe</label>
                  <select name="tipe" class="js-example-placeholder-single js-states form-control">
                    <option value="">--pilih--</option>
					<option value="Pembangunan Jaringan"<?php if ($d['tipe']=="Pembangunan Jaringan") echo 'selected'; ?> >Pembangunan Jaringan</option>
					<option value="Tambah Kapasitas"<?php if ($d['tipe']=="Tambah Kapasitas") echo 'selected'; ?> >Tambah Kapasitas</option>
				  </select>
                  </div>
			<div class="col-md-6">
                  <label for="sto" class="form-label">STO</label>
                  <input type="text" class="form-control" name="sto" value="<?php echo $d['sto'];?>">
            </div>
			<div class="col-md-6">
                  <label for="odc" class="form-label">ODC</label>
                  <input type="text" class="form-control" name="odc" value="<?php echo $d['odc'];?>">
            </div>
			<div class="col-md-6">
                  <label for="odp" class="form-label">ODP</label>
                  <input type="text" class="form-control" name="odp" value="<?php echo $d['odp'];?>">
            </div>
			<div class="col-md-6">
                  <label for="kapasitas" class="form-label">Kapasitas</label>
                  <input type="text" class="form-control" name="kapasitas" value="<?php echo $d['kapasitas'];?>">
            </div>
			<div class="col-md-6">
                  <label for="kota" class="form-label">Kota</label>
                  <select name="kota" class="js-example-placeholder-single js-states form-control">
                    <option value="">--pilih--</option>
					<option value="Banjarbaru"<?php if ($d['kota']=="KTP") echo 'selected'; ?> >Banjarbaru</option>
					<option value="Kab Banjar"<?php if ($d['kota']=="SIM") echo 'selected'; ?> >Kab Banjar</option>
				  </select>
                  </div>
				  <div class="col-md-6">
                  <label for="kelurahan" class="form-label">Kelurahan</label>
                  <input type="text" class="form-control" name="kelurahan" value="<?php echo $d['kelurahan'];?>">
            	</div>
				<div class="col-md-12">
                  <label for="jalan" class="form-label">Jalan</label>
                  <input type="text" class="form-control" name="jalan" value="<?php echo $d['jalan'];?>">
            	</div>
				<div class="col-md-12">
                  <label for="tanggal_pem" class="form-label">Tanggal Pembangunan</label>
                  <input type="date" class="form-control" name="tanggal_pem" value="<?php echo $d['tanggal_pem'];?>">
            	</div>
				<div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Simpan" >Submit</button> 
            	</div>
			</div>	
		</form>
		</form>
		</div>
		</div>
		</div>
	</section>
	</main>
	<script src="jquery.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.min.js"></script>
    <script src="dataTables.responsive.js"></script>
	<script src="bootstrap.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  
</body>
</html>

		<?php }
		?>
		

