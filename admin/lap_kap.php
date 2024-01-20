<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan Kapasitas Jaringan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
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
  <h1>Laporan Kapasitas Jaringan</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item">Laporan</li>
	  <li class="breadcrumb-item active"> Kapasitas Jaringan</li>
	</ol>
  </nav>
</div><!-- End Page Title -->			
<br>

        <form id="div1"  action="lap_kap.php" method="get" class="form-inline">
			<select name="sto" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT sto FROM tbtiket_cabut GROUP BY sto");
			while($s=mysqli_fetch_array($query)){
			    $data = explode('-',$s['sto']);
			    $sto = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih STO</option>
			<option value="<?php echo $sto ?>"><?php echo $sto ?></option>
			<?php
			}
			?>
			</select>
			<select name="no_tel" class="btn btn-danger">
			<?php 
			$query=mysqli_query($connection, "SELECT no_tel FROM tbtiket_cabut GROUP BY no_tel");
			while($ntl=mysqli_fetch_array($query)){
			    $data = explode('-',$ntl['no_tel']);
			    $no_tel = $data[0];
			?>
			<option value="" selected disabled hidden>Pilih No Telepon</option>
			<option value="<?php echo $no_tel ?>"><?php echo $no_tel ?></option>
			<?php
			}
			?>
			</select>
           
			<br><br>
      		<button type="submit" class="btn btn-warning"><i class="fa fa-location-arrow"></i>Filter</button>

			<a href="cetak_kap.php
		<?php 
			if(isset($_GET['sto'])){
				echo "?sto=", $_GET['sto'];
			}
			else if(isset($_GET['no_tel'])){
				echo "?no_tel=", $_GET['no_tel'];
			}
			else {
				echo "";
			}
			?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>Print</a>
			</form>
		<style>
	 .mytable{
		 margin-left:10px;
		 margin-top:30px;
		 width:1500px;
	 }
 </style>
 </head>
 <body>
	 <br>
	 <div class="mytable">
	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead class="table-dark">
                <tr> 
                		<th><a class="column_sort" id="" data-order="desc" href="#">No</a></th>
			        	<th><a class="column_sort" id="id_datek" data-order="desc" href="#">ID Data Teknik</a></th>
						<th><a class="column_sort" id="no_tel" data-order="desc" href="#">No Telepon</a></th>
						<th><a class="column_sort" id="no_inet" data-order="desc" href="#">No Internet</a></th>
                        <th><a class="column_sort" id="sto" data-order="desc" href="#">STO</a></th>
                        <th><a class="column_sort" id="odc" data-order="desc" href="#">ODC</a></th>
                        <th><a class="column_sort" id="odp" data-order="desc" href="#">ODP</a></th>
                        <th><a class="column_sort" id="Port" data-order="desc" href="#">Port</a></th>
						<th><a class="column_sort" id="sttus" data-order="desc" href="#">Status</a></th>
						<th class="btns"></th>
					</tr>	
					</thead>
                    <?php 
					if(isset($_GET['sto'])){
						$s = $_GET['sto'];
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut on tbtiket_cabut.no_tel = tbdatateknik.no_tel WHERE sto='$s' ORDER BY sto DESC ");			
					}
					else if(isset($_GET['no_tel'])){
						$ntl = $_GET['no_tel'];
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut on tbtiket_cabut.no_tel = tbdatateknik.no_tel WHERE no_tel='$ntl' ORDER BY no_tel DESC ");			
                    }
                    
					else{
						$query = mysqli_query($connection,"SELECT * FROM tbdatateknik INNER JOIN tbtiket_cabut on tbtiket_cabut.no_tel = tbdatateknik.no_tel");
					}
					$no = 1;
					while($d = mysqli_fetch_array($query)){
					?>	
					<tr>
						<td><?php echo $no++;?></td>
                        <td><?php echo $d['id_datek'];?></td>
						<td><?php echo $d['no_tel'];?></td>
						<td><?php echo $d['no_inet'];?></td>
                        <td><?php echo $d['sto'];?></td>
                        <td><?php echo $d['odc'];?></td>
                        <td><?php echo $d['odp'];?></td>
                        <td><?php echo $d['port'];?></td>
						<td><?php echo $d['sttus'];?></td>
						<td class="btns">
						</td>
					</tr>
					<?php  } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
				
            </div>
			<script src="jquery.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.min.js"></script>
    <script src="dataTables.responsive.js"></script>
	<script src="bootstrap.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    </body>
</html>
