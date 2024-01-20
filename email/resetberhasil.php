<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";
 
	$mail = new PHPMailer;
	$mail->SMTPDebug = 3;                               
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

	$mail->Subject = "Reset Password Akun ".$emailpenerima." Telah Berhasil"; //Subject
    $mail->Body    = "
    <p>Halo ".$email.",</p>
	<p></p>
	<p>Kami menerima permintaan reset kata sandi untuk akun Anda di [Nama Website/Layanan]. Berikut adalah Password dan Email Anda:</p>
	<p></p>
	<p>Email 	: ".$email."</p>
	<p>Password : ".$pass."</p>
	<p></p>
	<p>Terima kasih.</p>
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
