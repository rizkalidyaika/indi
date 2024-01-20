<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<title>Input Akun</title> 
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="favicon.png" rel="icon">
</head>

<?php 
include 'head.php';
include 'koneksi.php';
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Input Akun</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Input Akun</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Input Data Akun di Kolom ini </h5>
		<form action="user_tambah.php" method="post">
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
                  <label for="level" class="form-label">Akses</label>
                  <select name="level" class="js-example-placeholder-single js-states form-control">
                    <option selected>User</option>
                    <option>Admin</option>
                  </select>
				</div>	
				<div class="col-md-12">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control" name="email" placeholder="maksimal 12 karakter">
                </div>	
				<div class="col-md-12">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pass" placeholder="maksimal 12 karakter">
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
  
</html>
<?php include("foot.php");
?>