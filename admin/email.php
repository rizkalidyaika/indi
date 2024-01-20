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
 	$emailpenerima = $email;
 	$namapenerima = $email;
	
	$mail->addAddress($emailpenerima, $namapenerima); 						//(Email Penerima, Nama Penerima)
	$mail->isHTML(true);
    
    
	$mail->Subject = "Permintaan Kunjungan Survei".$emailpenerima; //Subject
    $mail->Body    = "
    <p>Halo ".$email.",</p>
    <p></p>
    <p>Nomor Tiket : ".$no_tiket." </p>
    <p>Perihal : Permohonan kunjungan Survei </p>
    <p>Kepada Pelanggan : </p>
                    <p>Nama       : ".$nama_pel." </p>
                    <p>Kota       : ".$kota."     </p>
                    <p>Kelurahan  : ".$kelurahan."</p>
                    <p>Jalan      : ".$jalan."    </p>
	<p>Sehubungan dengan survei  sebelum  pemasangan  jaringan,  maka  kami  memohon  izin  agar  petugas  kami.<p></p>
	                  <p>Nama       : ".$nama."  </p>
                    <p>Kontak     : ".$kontak."</p>
<p>dapat melakukan kunjungan pada</p>
                    <p>Hari/Tanggal : ".$tgl_ks."</p>
                    <p>Waktu        : ".$wkt_ks."</p>
  <p>Besar harapan kami untuk dapat diterima. harap melakukan Konfirmasi apabila ada perubahan. Demikian surat permohonan ini kami sampaikan. Atas perhatian dan kerja sama Bapak/ Ibu, kami ucapkan terima kasih.</p>
  <p>Ditetapkan di	:	Banjarbaru</p>
  <p>Pada Tanggal	:	".$tanggal . ' ' . $bulan . ' ' . $tahun."</p>
  <p>Supervisor</p>
	"; //isi email
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