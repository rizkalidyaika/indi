
<h3>upload dokumen</h3>

<form action="" method="post" enctype="multipart/form-data">
                <b>File Upload</b><input type="file" name="NamaFile">
                <input type="submit" name="proses" value="upload">
                </form>
                  
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