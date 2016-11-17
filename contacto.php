<?php
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = nl2br($_POST['mensaje'], false);

if($nombre != '' && $email != ''){

  $CuerpoEmail = '
  <h1>Consulta web sonoAcústica</h1><br><br>
  <div style="font-family: Arial;font-size: 14px;line-height:20px;">
  <b>Nombre</b>: '.$nombre.'<br>
  <b>Empresa</b>: '.$empresa.'<br>
  <b>E-mail</b>: '.$email.'<br>
  <b>Tel&eacute;fono</b>: '.$telefono.'<br>
  <b>Mensaje</b>: <br>'.$mensaje.'<br>
  </div>
  <br>
  <img src="http://www.sonoacustica.com.ar/images/logo.png">';

  $ruta='PHPMailer/class.phpmailer.php';
  require($ruta);
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = "100.100.17.33";
  $mail->SMTPAuth = false;
  $mail->Port = 25;
  // $mail->Username = "spotty.pc@gmail.com";
  // $mail->Password = "Kensentme2";
  // $mail->SMTPSecure = "tls";

  $mail->setFrom($email, $nombre);
  $mail->AddAddress("info@sonoacustica.com.ar");
  // $mail->AddAddress("maimar@gmail.com");
  $mail->AddReplyTo($email);

  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->WordWrap = 50;
  // $mail->Mailer = "smtp";

  $mail->Subject = 'Consulta web sonoAcústica';
  $mail->Body = $CuerpoEmail;
  $mail->Send();

}
header("Location: ./?e=1" );
?>
