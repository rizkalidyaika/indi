<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Open Tiket - Pelanggan Cabut</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php 
	include("head.php");
	include ("koneksi.php");
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Pelanggan Cabut</h1>
                        <div class="card mb-4">
                            <div class="card-body">
<section id="hero" class="wow fadeIn">		
	<div id="div1" class="hero-container">
		<form action="openpelcabut_tambah.php" method="post">
		<div class="block-blog text-left">
		    <div class="table-responsive-sm">
				<table class="table-sm">
				<h3> silahkan isi form dibawah ini </h3>
                <br>
                <tr>			
					<td>ID Cabut</td>
					<td>
						<input type="text" name="id_cabut" value="">
					</td>
				</tr>
                <tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="">
					</td>
				</tr>
                <tr>			
					<td>No Telepon</td>
					<td>
						<input type="number" name="no_telepon" value="">
					</td>
				</tr>
                <tr>			
					<td>No Internet</td>
					<td>
						<input type="number" name="no_internet" value="">
					</td>
				</tr>
                <tr>
					<td>Kota</td>
					<td>
						<select name="kota">
							<option value="">--pilih--</option>
							<option value="Banjarbaru">Banjarbaru</option>
							<option value="Kab Banjar">Kab Banjar</option>
						</select>
					</td>
				</tr>
				<tr>			
					<td>Kelurahan</td>
					<td>
						<input type="text" name="kelurahan" value="">
					</td>
				</tr>
				<tr>			
					<td>Jalan</td>
					<td>
						<input type="text" name="jalan" value="">
					</td>
				</tr>
				<tr>			
					<td>Nomor</td>
					<td>
						<input type="number" name="nomor" value="">
					</td>
				</tr>
                <tr>			
					<td>Alasan Cabut</td>
					<td>
						<input type="text" name="alasan_cabut" value="">
					</td>
				</tr>
				<tr>			
					<td>Paket</td>
					<td>
						<select name="paket">
							<option value="">--pilih--</option>
							<option value="1P">1P Internet</option>
							<option value="2P">2P Internet dan Telepon</option>
							<option value="3P">3P Internet,Telepon dan IPTV</option>
						</select>
					</td>
				</tr>	
                <tr>			
					<td>STO</td>
					<td>
						<input type="text" name="sto" value="">
					</td>
				</tr>
                <tr>			
					<td>ODC</td>
					<td>
						<input type="text" name="odc" value="">
					</td>
				</tr>	
                <tr>			
					<td>ODP</td>
					<td>
						<input type="text" name="odp" value="">
					</td>
				</tr>	
                <tr>			
					<td>Port</td>
					<td>
						<input type="text" name="port" value="">
					</td>
				</tr>					
			</table>
			</div>
		</div>
		</div>
		<br>
		<input type="submit" class="btn-get-started scrollto" value="Tambah">
		</form>
		</section>
	</main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
