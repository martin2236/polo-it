<?php
if(isset($_POST['enviar'])){
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
$telefono=($_POST['tel']);
$name = ($_POST['name']);
$email = ($_POST['email']);
$m_subject = ($_POST['subject']);
$message = ($_POST['message']);

$to = "martoxxx100@gmail.com"; 
$subject = "$m_subject:  $name";
$body = "recibiste un nuevo email desde la pagina de Fácil Soft.\r\n"."detalles:\n\nName: $name\r\n\nEmail: $email\r\nSubject: $m_subject\r\nMessage: $message";





if(mail($to, $subject, $body)){

  $to = ($_POST['email']);
  $subject = 'Fácil soft';
  $body = "hola ".$name."te comunicaste con Fácil soft, en breve nos pondremos en contacto con vos. ";


}else{
   http_response_code(500);
   exit();
}


}
  

 
 ?>
