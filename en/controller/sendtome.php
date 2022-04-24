<?php
setlocale(LC_ALL, 'es_MX.UTF-8');
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
require ("../phpmailer/PHPMailerAutoload.php");
require_once ("../phpmailer/class.phpmailer.php");
//require_once('../phpmailer/class.smtp.php');
		$nombre = $_POST['name'];
		$ciudad = $_POST['city'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];	
		$fechahr= date('d-m-Y  /  h:i');

$to = "ltorres@pweventscancun.com";
// $to = "gs.vera92@gmail.com";
$subject = "Solicitud de información";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Prospecto <ltorres@pweventscancun.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$mss = "
		<h3 style='color:#0b2100; border-bottom:1px solid #0b2100; padding-bottom:4px;'>¡Hola!.</h3>
		<p>".$message."</p><br>
		<h3 style='color:#000; border-bottom:1px solid #000'>Mis datos de contacto:</h3>
		<p><font color='#0b2100'><strong>Nombre: </strong></font>".$nombre."</p>
		<p><font color='#0b2100'><strong>Teléfono: </strong></font> ".$phone."</p>
		<p><font color='#0b2100'><strong>Email: </strong></font>".$email."</p>
		<p><font color='#8c0000'><strong>Enviado el : </strong></font>".$fechahr." hrs.</p>";
mail($to, $subject, $mss, $headers);

echo "enviado";



// $mail = new PHPMailer();	



// $area = "+52";

// $mail->CharSet = "UTF-8";

// 	$address1 = "gs.vera92@gmail.com";
// 	// $address2 = "kpdmaurel@gmail.com";
	
	
// 	try{

// 		// $mail->AddAddress($address2);
// 		$mail->AddAddress($address1);
	
// 		$nombre = $_POST['name'];
// 		$ciudad = $_POST['city'];
// 		$country = $_POST['country'];
// 		$phone = $_POST['phone'];
// 		$email = $_POST['email'];
// 		$message = $_POST['message'];	
// 		$mss = ucfirst($message);
// 		$mail->Subject = $nombre." | Artigas solicitud de información";
// 		$mail->From = $email;
// 		$mail->FromName = $nombre;
	
// 		$mail->IsHTML(true);
// 		$mail->MsgHTML("
// 			<h3 style='color:#0b2100; border-bottom:1px solid #0b2100; padding-bottom:4px;'>¡Hola!, Customestate.</h3>
// 			<p>".$mss."</p><br>
// 			<h3 style='color:#000; border-bottom:1px solid #000'>Mis datos de contacto:</h3>
// 			<p><font color='#0b2100'><strong>Nombre: </strong></font>".$nombre."</p>
// 			<p><font color='#0b2100'><strong>Teléfono: </strong></font> ".$phone."</p>
// 			<p><font color='#0b2100'><strong>Email: </strong></font>".$email."</p>
// 			<p><font color='#8c0000'><strong>Enviado el : </strong></font>".$fechahr." hrs.</p>");
	
// 		$exito = $mail->Send();
// 		if($exito){
// 			echo "1";
// 		}
// 		else{
// 			exit($mail);
// 		}
// 	}catch(Exception $e){
// 		echo $e->getMessage();
// 	}



?>