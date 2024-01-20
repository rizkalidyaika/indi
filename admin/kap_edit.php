<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update kapasitas Jaringan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php include 'head.php';
include 'koneksi.php';
$id_datek = $_GET['id_datek'];
$query = mysqli_query($connection,"SELECT * FROM tbdatateknik WHERE id_datek ='$id_datek'");
while($d = mysqli_fetch_array($query)){
?>
 <main id="main" class="main">
	
	<div class="pagetitle">
  <h1>Edit Data Teknik</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Edit Data Teknik</li>
	</ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
	<div class="col-lg-6">
	<div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan Edit Data di Kolom ini</h5>
	<form action="kap.php" method="post">
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
					<label for="id_datek" class="form-label">ID Data Teknik</label>
					<input type="text" class="form-control" name="id_datek" value="<?php echo $d['id_datek'];?>">
					<input type="hidden" name="ik" value="<?php echo $d['id_datek'];?>">
			</div>
			<div class="col-md-6">
                  <label for="no_tel" class="form-label">No Telepon</label>
                  <input type="number" class="form-control" name="no_tel" value="<?php echo $d['no_tel'];?>">
            </div>	
			<div class="col-md-6">
                  <label for="sttus" class="form-label">Status</label>
                  	<select name="sttus" class="js-example-placeholder-single js-states form-control">
				  		<option value="">--pilih--</option>
						<option value="Ada"<?php if ($d['sttus']=="Ada") echo 'selected'; ?> >Ada</option>
						<option value="Kosong"<?php if ($d['sttus']=="Kosong") echo 'selected'; ?> >Kosong</option>
				   	</select>
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
		

