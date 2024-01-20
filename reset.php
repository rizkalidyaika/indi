<!doctype html>
<?php 
include("head2.php");
?>
<section id="hero" class="wow fadeIn">
	<div class="hero-container">
        <h2>Reset Password</h2>
			<form method="post" action="cek_reset.php">
				<div class="card" style="background-color: rgba(0,0,0, 0.1);">
					 <div class="card-body">
			 			<center>
						 	<div class="row">
						 		<div class="col-md-12">
							 			<label style="color: white;">Masukkan Email Anda :</label>
							 			<input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda..." required>
						 		</div>
						 	</div>
			 			</center>
					 </div>
					 <div class="card-footer" style="background-color: rgba(0,0,0, 0.1);">
					 	<div class="row">
					 		<div class="col-md-7">
					 			<button class="btn  btn-sm btn-warning">Reset Password</button>
					 		</div>
							<div class="col-md-5">
								<a href="index.php" class="btn  btn-sm btn-primary">Kembali ke Login</a>
							</div>
					 	</div>
					 </div>
				</div>			
			</form>
	</div>
</section><!-- #hero -->
	