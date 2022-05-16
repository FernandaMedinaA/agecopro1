<?php

require "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
 )
);
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'dojoryukyu117@gmail.com';
$mail->Password = 'contrasenea';  

$mail->setFrom('dojoryukyu117@gmail.com');
$mail->addAddress('AGECOPRO@gmail.com');     // Add a recipient
$mail->addReplyTo('dojoryukyu117@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Empres que contacta: '.$_POST['nombre_empresa'];
$mail->Body    = 'Este usuario quiere ser socio de AGECOPRO.<br><br>'.'<b>Nombre de la empresa: </b>'.$_POST['nombre_empresa'].'<br><b>Email: </b>'.$_POST['email_empresa'].'<br><b>Celular: </b>'.$_POST['celular_empresa'].'<br><b>Descripcion: </b>'.$_POST['comentarios_empresa'].'<br><b>Responde en breve a su solicitud. </b>';


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="contactanos.php";
    </script>
  ';
    echo 'Gracias por contactarnos, nosotros nos comumnicamos contigo a la brevedad.';
}

?>