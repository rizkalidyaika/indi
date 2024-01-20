<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Input Pelanggan Survei Baru</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<?php 
	include("head.php");
	include ("koneksi.php");

?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Input Data Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Open tiket</li>
	  <li class="breadcrumb-item active">Input Data Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Input Data di Kolom ini </h5>
              <form action="tiketsurvei_tambah.php" method="post">
			               <!-- Multi Columns Form -->
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
                  <label for="no_tiket" class="form-label">No Tiket</label>
                  <input type="text" class="form-control" name="no_tiket">
                </div>
                <div class="col-md-12">
                  <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                  <select name="tipe_identitas" class="js-example-placeholder-single js-states form-control">
                    <option selected>KTP</option>
                    <option>SIM</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="no_identitas" class="form-label">No Identitas</label>
                  <input type="number" class="form-control" name="no_identitas">
                </div>
                <div class="col-md-12">
                  <label for="nama_pel" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama_pel">
                </div>
                <div class="col-md-12">
                  <label for="kontak_pel" class="form-label">Kontak</label>
                  <input type="number" class="form-control" name="kontak_pel">
                </div>
                <div class="col-md-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="col-md-12">
                  <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Martapura">
                </div>
                <div class="col-md-12">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir"> 
                </div>
                <div class="col-md-12">
                  <label for="kota" class="form-label">Kota</label>
                  <select name="kota" class="js-example-placeholder-single js-states form-control">
                    <option selected>Banjarbaru</option>
                    <option>Kab Banjar</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="kelurahan" class="form-label">Kelurahan</label>
                  <input type="text" class="form-control" name="kelurahan"> 
                </div>
                <div class="col-md-12">
                  <label for="jalan" class="form-label">Jalan</label>
                  <input type="text" class="form-control" name="jalan">
                </div>
                <div class="col-md-12">                  
                  <label for="paket" class="form-label">Paket</label>
                  <input type="text" class="form-control" name="paket">
                </div>
                <div class="col-md-12">                  
                  <label for="sto" class="form-label">STO</label>
                  <input type="text" class="form-control" name="sto">
                </div>
                <div class="col-md-12">
                  <label for="nama_sales" class="form-label">Nama Sales</label>
                  <input type="text" class="form-control" name="nama_sales">
                </div>
                <div class="col-md-12">
                  <label for="tanggal_sur" class="form-label">Tanggal Survei</label>
                  <input type="date" class="form-control" name="tanggal_sur">
                </div>
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" >Submit</button> 
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
              </form>
            </div>
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
