<!doctype html>
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
  <h1>Kirim Surat Teknisi</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Kirim</li>
	  <li class="breadcrumb-item active"> Surat Teknisi</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>
<section id="hero" class="wow fadeIn">
	<div class="hero-container">
        <h2>Kirim Pesan</h2>
			<form method="post" action="cekt.php">
				<div class="card" style="background-color: rgba(0,0,0, 0.1);">
					 <div class="card-body">
			 			<center>
						 	<div class="row">
						 		<div class="col-md-12">
							 			<label style="color: white;">Masukkan Email  :</label>
							 			<input type="email" class="form-control" name="email_t" placeholder="Masukkan Email Anda..." required>
						 		</div>
						 	</div>
			 			</center>
					 </div>
					 <div class="card-footer" style="background-color: rgba(0,0,0, 0.1);">
					 	<div class="row">
					 		<div class="col-md-7">
					 			<button class="btn  btn-sm btn-primary">Kirim</button>
					 		</div>
					 	</div>
					 </div>
				</div>			
			</form>
	</div>
</section><!-- #hero -->
	