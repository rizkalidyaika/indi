<!doctype html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Tiket Survei Cabut Sambungan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php include 'head.php';
include 'koneksi.php';
$id_cabut = $_GET['id_cabut'];
$query = mysqli_query($connection,"SELECT * FROM tbtiket_cabut WHERE id_cabut ='$id_cabut'");
while($d = mysqli_fetch_array($query)){
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Data Tiket Cabut</h1>
        </div>
        <div class="card mb-4">                   
        <div class="card mb-4">
        <div class="card-body">	
	<form action="openpelcabut_update.php" method="post">
		<div class="block-blog text-left">
		<div class="table-responsive-sm">
			<table class="table-sm">
            <tr>			
					<td>ID Cabut</td>
					<td>
						<input type="text" name="id_cabut" value="<?php echo $d['id_cabut'];?>">
					</td>
				</tr>	
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama'];?>">
					</td>
				</tr>
				<tr>			
					<td>No Telepon</td>
					<td>
						<input type="number" name="no_telepon"  value="<?php echo $d['no_telepon'];?>">
					</td>
				</tr>
                <tr>			
					<td>No Internet</td>
					<td>
						<input type="number" name="no_internet"  value="<?php echo $d['no_internet'];?>">
					</td>
				</tr>
				<tr>			
					<td>Kota</td>
					<td>
						<select name="kota">
							<option value="">--pilih--</option>
							<option value="Banjarbaru"<?php if ($d['paket']=="Banjarbaru") echo 'selected'; ?> >Banjarbaru</option>
							<option value="Martapura"<?php if ($d['paket']=="Martapura") echo 'selected'; ?> >Martapura</option>
						</select>
					</td>
				</tr>
				<tr>			
					<td>Kelurahan</td>
					<td>
						<input type="text" name="kelurahan" value="<?php echo $d['kelurahan'];?>">
					</td>
				</tr>
				<tr>			
					<td>Jalan</td>
					<td>
						<input type="text" name="jalan" value="<?php echo $d['jalan'];?>">
					</td>
				</tr>
				<tr>			
					<td>Nomor</td>
					<td>
						<input type="number" name="nomor" value="<?php echo $d['nomor'];?>">
					</td>
				</tr>
                <tr>			
					<td>Alasan Cabut</td>
					<td>
						<input type="text" name="alasan_cabut" value="<?php echo $d['alasan_cabut'];?>">
					</td>
				</tr>
				<tr>			
					<td>Paket</td>
					<td>
						<select name="paket">
							<option value="">--pilih--</option>
							<option value="1P"<?php if ($d['paket']=="1P") echo 'selected'; ?> >1P Internet</option>
							<option value="2P"<?php if ($d['paket']=="2P") echo 'selected'; ?> >2P Internet dan Telepon</option>
							<option value="3P"<?php if ($d['paket']=="3P") echo 'selected'; ?> >3P Internet,Telepon dan IPTV</option>
						</select>
					</td>
				</tr>
				<tr>			
					<td>STO</td>
					<td>
						<input type="text" name="sto" value="<?php echo $d['sto'];?>">
					</td>
				</tr>	
				<tr>			
					<td>ODC</td>
					<td>
						<input type="text" name="odc" value="<?php echo $d['odc'];?>">
					</td>
				</tr>
                <tr>			
					<td>ODP</td>
					<td>
						<input type="text" name="odp" value="<?php echo $d['odp'];?>">
					</td>
				</tr>
                <tr>			
					<td>Port</td>
					<td>
						<input type="text" name="port" value="<?php echo $d['port'];?>">
					</td>
				</tr>				
				</table>
			</div>	
		<br>
		<input type="submit" class="btn-get-started scrollto" value="Simpan">
        </div>
		</form>
		</div>
		</div>
		</div>
	</main>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
	</div>
		<?php }
		?>
		

