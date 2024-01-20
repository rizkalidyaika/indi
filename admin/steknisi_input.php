<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Input Perintah Kerja</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<?php 
	include("head.php");
	include ("koneksi.php");

?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Input Perintah Kerja</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Input Perintah Kerja</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Input Data di Kolom ini </h5>
		<form action="steknisi_tambah.php" method="post">
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
          		<label for="nama_t" class="form-label">Teknisi</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="nama_t"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbteknisi"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['nama_t']; ?>"> 
                    <?php echo $d['nama_t']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div> 
            <div class="col-md-12">
                  <label for="kontak_t" class="form-label"> Kontak</label>
                  <input type="text" class="form-control" name="kontak_t">
                </div>		
                <div class="col-md-12">
                  <label for="email_t" class="form-label"> Email</label>
                  <input type="text" class="form-control" name="email_t">
                </div>
              <form class="row g-3">
                <div class="col-md-12">
          		<label for="id_pembangunan" class="form-label">ID Pembangunan</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="id_pembangunan"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpembangunan"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['id_pembangunan']; ?>"> 
                    <?php echo $d['id_pembangunan']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div>  		
            <form class="row g-3">
                <div class="col-md-12">
          		<label for="vendor" class="form-label">Vendor</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="vendor"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpembangunan"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['vendor']; ?>"> 
                    <?php echo $d['vendor']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div>  
            <div class="col-md-12">
                  <label for="tipe" class="form-label">Tipe</label>
                  <select name="tipe" class="js-example-placeholder-single js-states form-control">
                    <option selected>TAMBAH KAPASITAS</option>
                    <option>PEMBANGUNAN JARINGAN</option>
                  </select>
			      </div>
            <div class="col-md-12">
                          <label for="kota" class="form-label">Kota</label>
                          <select name="kota" class="js-example-placeholder-single js-states form-control">
                            <option selected>Banjarbaru</option>
                            <option>Kab Banjar</option>
                          </select>
            </div>
      <form class="row g-3">
                <div class="col-md-12">
          		<label for="kelurahan" class="form-label">Kelurahan</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="kelurahan"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpembangunan"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['kelurahan']; ?>"> 
                    <?php echo $d['kelurahan']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div>  		
            <form class="row g-3">
                <div class="col-md-12">
          		<label for="jalan" class="form-label">Jalan</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="jalan"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpembangunan"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['jalan']; ?>"> 
                    <?php echo $d['jalan']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div>  		
                <div class="col-md-12">
                  <label for="tgl_ks" class="form-label">Tanggal Kunjungan</label>
                  <input type="date" class="form-control" name="tgl_kp">
                </div>	
                <div class="col-md-12">
                  <label for="wkt_ks" class="form-label">Waktu Kunjungan</label>
                  <input type="time" class="form-control" name="wkt_kp">
                </div>	
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
