<!doctype html>
<?php 
include("head2.php");
?>
<section id="hero" class="wow fadeIn">
	<div class="hero-container">
        <h2>Reset Password</h2>
			<form method="post" action="cek_reset2.php">
				<div class="card" style="background-color: rgba(0,0,0, 0.1);">
					 <div class="card-body">
			 			<center>
						 	<div class="row">
						 		<div class="col-md-12">
						 			<label style="color: white;">Code OTP Email:</label>
						 			<input type="text" class="form-control" name="otp" placeholder="Masukkan Code OTP..." required>
						 		</div>
						 		<div class="col-md-6">
						 			<label style="color: white;">Password Baru:</label>
						 			<input type="text" class="form-control" name="pass" placeholder="Masukkan Password Baru..." required>
						 		</div>
						 		<div class="col-md-6">
						 			<label style="color: white;">Verifikasi Password:</label>
						 			<input type="text" class="form-control" name="verif" placeholder="Masukkan Verifikasi Password Baru..." required>
						 		</div>
						 	</div>
			 			</center>
					 </div>
					 <div class="card-footer" style="background-color: rgba(0,0,0, 0.1);">
					 	<div class="row">
					 		<div class="col-md-12">
					 			<center>
					 				<input type="hidden" name="id_reset" value="<?=$_GET['code'];?>">
						 			<button class="btn btn-block btn-sm btn-warning">Reset Password</button>
					 			</center>
					 		</div>
					 	</div>
					 </div>
				</div>			
			</form>
	</div>
</section><!-- #hero -->
	