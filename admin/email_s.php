<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";
include 'koneksi.php';

	$mail = new PHPMailer;
	$mail->SMTPDebug = 2;                               
	$mail->isSMTP();            
	$mail->Host = "mail.bimbinganku.id"; 						//host mail server
	$mail->SMTPAuth = true;                          			
    $ggmail = "indihome@bimbinganku.id";     					
	$mail->Username = $ggmail;   								//nama-email smtp          
	$mail->Password = "Indihome2023"; 							//password email smtp
	$mail->SMTPSecure = "ssl";                           		
	$mail->Port = 465;                    						
	$mail->From = $ggmail; 										//email pengirim
	
	$mail->FromName = "ADMIN INDIHOME"; 	//nama pengirim
 	$emailpenerima = $email_s;
 	$namapenerima = $email_s;
	
	$mail->addAddress($emailpenerima, $namapenerima); 						//(Email Penerima, Nama Penerima)
	$mail->isHTML(true);
    
    
	$mail->Subject = "SURAT TUGAS - ".$emailpenerima; //Subject
    $mail->Body    = "
    <p>Halo ".$email_s.",</p>
    <p></p>
    <p>Nomor Tiket : ".$no_tiket." </p>
    <p>Yang bertanda tangan dibwah ini : </p>
                    <p>Nama       : ".$nama_k."  </p>
                    <p>Jabatan     : ".$jabatan."</p>
    <p>Kepada  : </p>
                    <p>Nama       : ".$nama."  </p>
                    <p>Kontak     : ".$kontak."</p>
<p>Untuk	:		Melakukan Survei pemasangan</p>
                    <p>Nama       : ".$nama_pel." </p>
                    <p>Kota       : ".$kota."     </p>
                    <p>Kelurahan  : ".$kelurahan."</p>
                    <p>Jalan      : ".$jalan."    </p>
  <p>	Setelah selesai melaksanakan tugas, melaporkan hasilnya kepada yang menugaskan.</p>
  <p>Ditetapkan di	:	Banjarbaru</p>
  <p>Pada Tanggal	:   ".$tanggal . ' ' . $bulan . ' ' . $tahun."</p>
                    <p> Supervisor</p>";
                    ; //isi email
        $mail->AltBody = "INDIHOME"; //body email (optional)
    
	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	    echo "Message has been sent successfully";
	}
  
?>
