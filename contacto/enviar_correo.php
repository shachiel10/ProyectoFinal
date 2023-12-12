<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

$mail=new PHPMailer(true);
$mail->CharSet = 'UTF-8';



$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'omartop21p@gmail.com';
$mail->Password   = 'tbzxgimhegzhshgw';


//$mail->send();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $mail->SetFrom('omartop21p@gmail.com', $nombre);
    $mail->AddReplyTo('no-reply@mycomp.com','no-reply');
    $mail->Subject    = $nombre;
    $body = $mensaje;
    $mail->MsgHTML($body);
    $mail->AddAddress($email, 'Destinario');
    if (!$mail->send()) {
        throw new Exception($mail->ErrorInfo);
    }

    
}
?>