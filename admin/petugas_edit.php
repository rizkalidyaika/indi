<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Data Petugas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php include 'head.php';
include 'koneksi.php';
$id_petugas_survei = $_GET['id_petugas_survei'];
$query = mysqli_query($connection,"SELECT * FROM tbpetugas_survei WHERE id_petugas_survei ='$id_petugas_survei'");
while($d = mysqli_fetch_array($query)){
?>
<main id="main" class="main">
	
	<div class="pagetitle">
  <h1>Edit Data Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">open tiket</li>
	  <li class="breadcrumb-item active">edit data survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
	<div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Edit Data di Kolom ini</h5>
	<form action="petugas_update.php" method="post">
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
			<form class="row g-3">
			<div class="col-md-12">
					<label for="id_petugas_survei" class="form-label">ID Petugas</label>
					<input type="text" class="form-control" name="id_petugas_survei" value="<?php echo $d['id_petugas_survei'];?>">
					<input type="hidden" name="ps" value="<?php echo $d['id_petugas_survei'];?>">
			</div>
			<div class="col-md-12">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'];?>">
            </div>	
			<div class="col-md-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'];?>">
            </div>	
			<div class="col-md-12">
                  <label for="kontak" class="form-label">Kontak</label>
                  <input type="text" class="form-control" name="kontak" value="<?php echo $d['kontak'];?>">
            </div>	
			<div class="col-md-12">
                  <label for="email_s" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email_s" value="<?php echo $d['email_s'];?>">
            </div>			
			<div class="col-md-12">
                  <label for="kota" class="form-label">Kota</label>
                  	<select name="kota_ps" class="js-example-placeholder-single js-states form-control">
				  		<option value="">--pilih--</option>
						<option value="Banjarbaru"<?php if ($d['kota_ps']=="Banjarbaru") echo 'selected'; ?> >Banjarbaru</option>
						<option value="Kab Banjar"<?php if ($d['kota_ps']=="Kab Banjar") echo 'selected'; ?> >Kab Banjar</option>
				   	</select>
            </div>		
			<div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Simpan" >Submit</button> 
            </div>
		</form>
		</div>
		</div>
		</div>
</div>
</section>
</form>
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
	</div>
		<?php }
		?>
		

