<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Status Tiket Survei</title>
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
  <h1>Input Close Survei</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Close tiket</li>
	  <li class="breadcrumb-item active">Input Close Survei</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Input Data di Kolom ini </h5>
		<form action="updatesurvei_tambah.php" method="post">
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

            


                <?php
                $con = mysqli_connect("localhost","root", "", "dbindihome");
                
                if(isset($_POST['proses'])){

                $direktori = "berkas/";
                $file_name=$_FILES['NamaFile']['name'];
                move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

              mysqli_query($con, "insert into tbtiket_survei set file='$file_name'");
              echo "<b>File berhasil diupload";
              
                }
                ?>
                <div class="col-md-12">
          		<label for="no_tiket" class="form-label">No Tiket</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="no_tiket"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpelanggan"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['no_tiket']; ?>"> 
                    <?php echo $d['no_tiket']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div> 
				<div class="col-md-12">
          		<label for="id_petugas_survei" class="form-label">Petugas Survei</label> 
            	<select class="js-example-placeholder-single js-states form-control" name="id_petugas_survei"> 
                <option selected=>- pilih data -</option> 
                <?php 
                include "koneksi.php"; 
                $query =mysqli_query($connection, "SELECT * FROM tbpetugas_survei"); 
                while ($d = mysqli_fetch_array($query)) { 
                ?> 
                 <option value="<?php echo $d['id_petugas_survei']; ?>"> 
                    <?php echo $d['nama']; ?> 
                </option> 
                <?php 
                } 
				?>
            </select> 
          	</div>   
				<div class="col-md-12">
                  <label for="hasil" class="form-label">Hasil</label>
                  <select name="hasil" class="js-example-placeholder-single js-states form-control">
                    <option selected>Teknik Memungkinkan</option>
                    <option>Teknik Belum Memungkinkan</option>
                  </select>
                </div>
				<div class="col-md-12">
                  <label for="keterangan" class="form-label">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan">
                </div>	
				<div class="col-md-12">
                  <label for="sto" class="form-label">STO</label>
                  <input type="text" class="form-control" name="sto">
                </div>	
				<div class="col-md-12">
                  <label for="odc" class="form-label">ODC</label>
                  <input type="text" class="form-control" name="odc">
                </div>	
				<div class="col-md-12">
                  <label for="odp" class="form-label">ODP</label>
                  <input type="text" class="form-control" name="odp">
                </div>
				<div class="col-md-12">
                  <label for="port" class="form-label">Port</label>
                  <input type="text" class="form-control" name="port">
                </div>	
                <div class="col-md-12">
                  <label for="sttus" class="form-label">Status</label>
                  <input type="text" class="form-control" name="sttus">
                </div>	
				<div class="col-md-12">
                  <label for="jam" class="form-label">Jam</label>
                  <input type="time" class="form-control" name="jam">
                </div>	
        
				<div class="col-md-12">
                  <label for="tanggal_closesur" class="form-label">Tanggal Up Tiket</label>
                  <input type="date" class="form-control" name="tanggal_closesur">
                </div>	
                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" >Submit</button> 
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            
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
