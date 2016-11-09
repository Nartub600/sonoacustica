<?php
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = nl2br($_POST['mensaje'], false);

if($nombre != '' && $email != ''){

  $CuerpoEmail = '
  <h1>Consulta web Sonoac&uacute;stica</h1><br><br>
  <div style="font-family: Arial;font-size: 14px;line-height:20px;">
  <b>Nombre</b>: '.$nombre.'<br>
  <b>Empresa</b>: '.$empresa.'<br>
  <b>e-mail</b>: '.$email.'<br>
  <b>Tel&eacute;fono fijo</b>: '.$telefono.'<br>
  <b>Mensaje</b>: <br>'.$mensaje.'<br>
  </div>
  <br>
  <img src="http://www.sonoacustica.com.ar/images/logo.png">';

  $ruta='PHPMailer/class.phpmailer.php';
  require($ruta);
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "spotty.pc@gmail.com";
  $mail->Password = "Kensentme2";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;

  $mail->setFrom = ($email, $nombre);
  $mail->AddAddress("info@sonoacustica.com.ar");
  $mail->AddAddress("maimar@gmail.com");
  $mail->AddReplyTo($email);

  // $mail->IsHTML(true);
  // $mail->CharSet = 'UTF-8';
  // $mail->WordWrap = 50;
  // $mail->Mailer = "smtp";

  $mail->Subject = 'Consulta web Sonoacústica';
  $mail->Body = $CuerpoEmail;
  $mail->Send();

}
header("Location: ./?e=1" );
?>
